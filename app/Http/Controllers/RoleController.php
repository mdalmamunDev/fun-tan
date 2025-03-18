<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Supports\Helper;

class RoleController extends Controller
{
    use Helper;

    public function __construct()
    {
        $this->model = new Role();
    }
}
