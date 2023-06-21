<?php

namespace App\Controllers;
use \App\Models\CarModel;

class user_remove extends BaseController
{
    public function index()
    {
        $id=$_GET['id'];
        $carmodel=new CarModel();
        $data= $carmodel->where('Id',$id)->first();
        $uid=$data['Uid'];
        $result= $carmodel->delete($id);
        if($result){
            echo "<script>alert('Deleted Successfully....!');window.location=('seller_view?id=$uid')</script>";
        }
    }
}