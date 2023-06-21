<?php

namespace App\Controllers;
use \App\Models\CarModel;


class sold_view extends BaseController
{
    public function index()
    {
        $id = $_GET["id"];
        $carmodel=new CarModel();
        $condition=array(
            'Status'=>'Sold',
            'Uid'=>$id
        );
        $data= $carmodel->where($condition)->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('sold_view',$data);
    }
}