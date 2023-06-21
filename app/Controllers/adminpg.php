<?php

namespace App\Controllers;
use \App\Models\UserModel;

class adminpg extends BaseController
{
    public function index()
    {
        return view('adminpg');
    }
}