<?php

namespace App\Controllers;
use \App\Models\CarModel;

class admin_user_delete extends BaseController
{
    public function index()
    {
        $id=$_GET['id'];
        $carmodel=new CarModel();
        $result= $carmodel->where('Uid',$id)->delete();
        if($result){
            return redirect()->to('admin_car_delete?id='.$id);
        }
    }
}