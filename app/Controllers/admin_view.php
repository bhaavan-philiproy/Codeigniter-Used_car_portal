<?php

namespace App\Controllers;
use \App\Models\CarModel;

class admin_view extends BaseController
{
    public function index()
    {
        $id=$_GET['id'];
        $carmodel=new CarModel();
        $data= $carmodel->where('Status','Unsold')->where('Uid',$id)->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('admin_view',$data);
    }
}