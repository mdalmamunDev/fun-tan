<?php

use Illuminate\Http\Request;

// Defining global constants
if (!defined('CODE_SUCCESS')) {
    define('CODE_SUCCESS', 2000);
}

if (!defined('CODE_WARNING')) {
    define('CODE_WARNING', 2020);
}

if (!defined('CODE_DANGER')) {
    define('CODE_DANGER', 3000);
}

if (!defined('CODE_EXIST')) {
    define('CODE_EXIST', 2500);
}

if (!defined('CODE_NOT_FOUND')) {
    define('CODE_NOT_FOUND', 4040);
}

if (!defined('PERM_VIEW')) {
    define('PERM_VIEW', 'view');
}

if (!defined('PERM_ADD')) {
    define('PERM_ADD', 'add');
}

if (!defined('PERM_EDIT')) {
    define('PERM_EDIT', 'edit');
}

if (!defined('PERM_DELETE')) {
    define('PERM_DELETE', 'delete');
}

if (!defined('PERM_MANAGE')) {
    define('PERM_MANAGE', 'manage');
}

// Helper method for consistent response formatting
if (!function_exists('retRes')) {
    function retRes($message, $result = null, $status = CODE_SUCCESS)
    {
        return response()->json([
            'message' => $message,
            'result' => $result,
            'status' => $status
        ]);
    }
}

// Function to get the setting value
if (!function_exists('getSetting')) {
    function getSetting($key)
    {
        $setting = \App\Models\Setting::where('key', $key)->first();
        return $setting ? $setting->value : null;
    }
}

// Function to merge authenticated user ID into the request data
if (!function_exists('mergeAuth')) {
    function mergeAuth(Request $request)
    {
        $request->merge(['user_id' => auth()->id()]);
    }
}

// Function to merge any key-value pairs into the request data
if (!function_exists('mergeAll')) {
    function mergeAll(Request $request, $valuePairs)
    {
        foreach ($valuePairs as $key => $value) {
            $request->merge([$key => $value]);
        }
    }
}

// Call a function if is it a function
if (!function_exists('call')) {
    function call($function, $param_1 = false, $param_2 = false)
    {
        if (is_callable($function)) call_user_func($function, $param_1, $param_2);
    }
}