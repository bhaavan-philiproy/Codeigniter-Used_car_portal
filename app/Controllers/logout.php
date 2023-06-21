<?php

namespace App\Controllers;
use \App\Models\UserModel;

class logout extends BaseController
{
    public function index()
    {
        $session = session();
        $session->set(array('user_name' => '', 'last_login' => ''));
        $session->destroy();
        return redirect()->to('login');
    }
}