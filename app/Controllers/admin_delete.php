<?php

namespace App\Controllers;
use \App\Models\CarModel;

class admin_delete extends BaseController
{
    public function index()
    {
        $id=$_GET['id'];
        $carmodel=new CarModel();
        $result= $carmodel->delete($id);
        if($result){
            echo "<script>alert('Deleted Successfully....!');window.location=('admin_car')</script>";
        }
    }
}