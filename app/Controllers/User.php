<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function login()
    {
        return view('v_login');
    }
    public function register()
    {
        return view('v_register');
    }
}
