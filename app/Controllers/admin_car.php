<?php

namespace App\Controllers;
use \App\Models\CarModel;

class admin_car extends BaseController
{
    public function index()
    {
        $carmodel=new CarModel();
        $data= $carmodel->where('Status','Unsold')->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('admin_car',$data);
    }
}