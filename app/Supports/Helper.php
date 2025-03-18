<?php


namespace App\Supports;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait Helper
{
    protected $model;


    public function can($permissionName)
    {
//        return in_array($permissionName, $this->authPermissions());
        return true;
    }

    public function authPermissions()
    {
        $permissions = [];
        if (auth()->user() && auth()->user()->role_id)
            $permissions = DB::table('permissions')
                ->join('role_permissions', 'permissions.id', '=', 'role_permissions.permission_id')
                ->where('role_id', auth()->user()->role_id)
                ->get()->pluck('name')->toArray();

        return $permissions;
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