<?php

namespace App\Controllers;
use \App\Models\CarModel;


class seller_view extends BaseController
{
    public function index()
    {
        $id = $_GET["id"];
        $carmodel=new CarModel();
        $condition=array(
            'Status'=>'Unsold',
            'Uid'=>$id
        );
        $data= $carmodel->where($condition)->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('seller_view',$data);
    }
}