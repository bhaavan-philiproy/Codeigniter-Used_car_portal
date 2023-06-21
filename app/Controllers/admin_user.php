<?php

namespace App\Controllers;
use \App\Models\UserModel;

class admin_user extends BaseController
{
    public function index()
    {
        $usermodel=new UserModel();
        $data= $usermodel->where('Role','2')->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('admin_user',$data);
    }
}