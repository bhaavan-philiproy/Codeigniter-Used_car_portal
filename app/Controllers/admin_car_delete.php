<?php

namespace App\Controllers;
use \App\Models\UserModel;

class admin_car_delete extends BaseController
{
    public function index()
    {
        $id=$_GET['id'];
        $usermodel=new UserModel();
        $result= $usermodel->where('Id',$id)->delete();
        if($result){
            echo "<script>alert('Deleted Successfully....!');window.location=('admin_user')</script>";
        }
    }
}