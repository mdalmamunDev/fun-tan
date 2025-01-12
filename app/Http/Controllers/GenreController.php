<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Supports\Helper;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    use Helper;

    public function __construct()
    {
        $this->model = new Genre();
    }


    public function index()
    {
        if (!$this->can($this->task(PERM_VIEW)))
            return $this->retNoPermRes(PERM_VIEW);

        try {
            $name = request()->input('name');
            $data = $this->model
                ->when($name, function ($query) use ($name) {
                    $query->where('name', 'Like', "%$name%");
                })->paginate(15);

            return retRes(2000, $data);
        } catch (Exception $e) {
            return retRes('Failed to fetch records', $e->getMessage(), 500);
        }
    }

    // Show a single record by ID
    public function show($id)
    {
        if (!$this->can($this->task(PERM_VIEW)))
            return $this->retNoPermRes(PERM_VIEW);

        try {
            $record = $this->model->findOrFail($id);
            return retRes('Successfully found record', $record);
        } catch (Exception $e) {
            return retRes('Something went wrong with fetching the record', null, 500);
        }
    }

    // Store a new record
    public function store(Request $request)
    {
        if (!$this->can($this->task(PERM_ADD)))
            return $this->retNoPermRes(PERM_ADD);

        try {
//            mergeAuth($request);
            $record = $this->model->create($request->all());
            return retRes('Successfully created record', $record);
        } catch (Exception $e) {
            return retRes('Failed to create record', null, 500);
        }
    }


    // Update an existing record
    public function update(Request $request, $id)
    {
        if (!$this->can($this->task(PERM_EDIT)))
            return $this->retNoPermRes(PERM_EDIT);

        try {
            $record = $this->model->findOrFail($id); // Find the record by ID
            $record->update($request->all()); // Update the record
            $newRecord = $this->model->find($id);
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
        if (!$this->can($this->task(PERM_DELETE)))
            return $this->retNoPermRes(PERM_DELETE);

        try {
            $record = $this->model->findOrFail($id); // Find the record by ID
            $record->delete(); // Delete the record
            return retRes('Successfully deleted record', $record, CODE_DANGER);
        } catch (ModelNotFoundException $e) {
            return retRes('Record not found', null, CODE_NOT_FOUND);
        } catch (Exception $e) {
            return retRes('Failed to delete record', null, 500);
        }
    }
}
