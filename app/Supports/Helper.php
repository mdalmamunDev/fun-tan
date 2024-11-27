<?php


namespace App\Supports;

use Illuminate\Support\Facades\DB;

trait Helper
{
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
}