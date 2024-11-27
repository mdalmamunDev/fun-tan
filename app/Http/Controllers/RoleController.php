<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Supports\BaseCrudHelper;

class RoleController extends Controller
{
    use BaseCrudHelper;

    public function __construct()
    {
        $this->model = new Role();
    }
}
