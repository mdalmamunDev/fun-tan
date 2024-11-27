<?php

namespace App\Supports;

use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

trait BaseCrudHelper
{
    use Helper;

    // Define these in the main controller
    protected $model, $with = [], $showWith = [], $orderBy, $checkAuth = true,
        $beforeFetch = false,
        $beforeStore = false, $afterStore = false,
        $beforeUpdate = false, $afterUpdate = false,
        $afterDelete = false;

    // Fetch all records
    public function index(Request $request)
    {
        if ($this->checkAuth && !$this->can($this->task(PERM_VIEW)))
            return $this->retNoPermRes(PERM_VIEW);

        try {
            $data = null;
            $perPage = $request->query('perPage');
            $query = $this->model->with($this->with);

            $role = $role = Role::where('name', 'Instructor')->first();
            if (Schema::hasColumn($query->getModel()->getTable(), 'user_id') && Auth::check() && Auth::user()->role_id == $role->id) {
                // check also is present user_id clmn in table
                $query->where('user_id', Auth::id());
            }
            call($this->beforeFetch, $query);
            if ($this->orderBy) $query->orderBy($this->orderBy);
            if ($perPage && is_numeric($perPage) && $perPage > 0) $data = $query->paginate($perPage);
            else $data = $query->get();

            return retRes('Successfully fetched all records', $data);
        } catch (Exception $e) {
            return retRes('Failed to fetch records', null, 500);
        }
    }

    // Show a single record by ID
    public function show($id)
    {
        if ($this->checkAuth && !$this->can($this->task(PERM_VIEW)))
            return $this->retNoPermRes(PERM_VIEW);

        try {
            $record = $this->model->with($this->showWith)->findOrFail($id); // Fetch the record with optional relationships
            return retRes('Successfully found record', $record, 2000);
        } catch (ModelNotFoundException $e) {
            return retRes('Record not found', null, 404);
        } catch (Exception $e) {
            return retRes('Something went wrong with fetching the record', null, 500);
        }
    }

    // Store a new record
    public function store(Request $request)
    {
        if ($this->checkAuth && !$this->can($this->task(PERM_ADD)))
            return $this->retNoPermRes(PERM_ADD);

        try {
            mergeAuth($request);
            call($this->beforeStore, $request);
            $record = $this->model->create($request->all()); // Create a new record
            call($this->afterStore, $record);
            return retRes('Successfully created record', $record);
        } catch (Exception $e) {
            return retRes('Failed to create record', null, 500);
        }
    }

    // Update an existing record
    public function update(Request $request, $id)
    {
        if ($this->checkAuth && !$this->can($this->task(PERM_EDIT)))
            return $this->retNoPermRes(PERM_EDIT);

        try {
            call($this->beforeUpdate, $request);
            $record = $this->model->findOrFail($id); // Find the record by ID
            $record->update($request->all()); // Update the record
            $newRecord = $this->model->find($id);
            call($this->afterUpdate, $record, $newRecord);
            return retRes('Successfully updated record', $newRecord);
        } catch (ModelNotFoundException $e) {
            return retRes('Record not found', null, CODE_NOT_FOUND);
        } catch (Exception $e) {
            return retRes('Failed to update record', null, 500);
        }
    }

    // Delete a record by ID
    public function destroy($id)
    {
        if ($this->checkAuth && !$this->can($this->task(PERM_DELETE)))
            return $this->retNoPermRes(PERM_DELETE);

        try {
            $record = $this->model->findOrFail($id); // Find the record by ID
            $record->delete(); // Delete the record
            call($this->afterDelete, $record);
            return retRes('Successfully deleted record', $record, CODE_DANGER);
        } catch (ModelNotFoundException $e) {
            return retRes('Record not found', null, 404);
        } catch (Exception $e) {
            return retRes('Failed to delete record', null, 500);
        }
    }


    public function checkTitle(Request $request)
    {
        try {
            $id = $request->input('id');
            $title = $request->input('title');
            $exists = $this->model->where('title', $title)->where('id', '!=', $id)->exists(); // Use instance method

            return response()->json(['isUnique' => !$exists]);
        } catch (Exception $e) {
            return retRes('Failed to check title', null, 500);
        }
    }



    /*
     * raw = show, model = User => user_show
     * raw = edit, model = Category => category_show
     * raw = edit, model = SubCategory => sub_category_show
     */
    private function task($rawTask)
    {
        $modelName = Str::snake(Str::singular(class_basename($this->model)));
        return $modelName.'_'.$rawTask;
    }


    /*
     * Get the model name in lowercase and space-separated.
     *
     * Example:
     * - model = Category => category
     * - model = SubCategory => sub category
     */
    private function getModelName()
    {
        $modelName = class_basename($this->model);
        $lowerCaseModel = Str::lower($modelName);
        $formattedModelName = preg_replace('/(?<!^)(?=[A-Z])/', ' ', $lowerCaseModel);

        return $formattedModelName;
    }

    private function retNoPermRes($rawTask)
    {
        return retRes('You have no permission to ' . $rawTask . ' ' . $this->getModelName(), [], CODE_DANGER);
    }
}