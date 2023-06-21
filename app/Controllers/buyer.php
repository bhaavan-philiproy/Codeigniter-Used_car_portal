<?php

namespace App\Controllers;
use \App\Models\CarModel;

class buyer extends BaseController
{
    public function index()
    {
        $id = $_GET["id"];
        $carmodel=new CarModel();
        $data= $carmodel->where('Status','Unsold')->where('Uid!=',$id)->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('buyer',$data);
    }
    public function buy()
    {
        $id=$_GET['id'];
        $Id=$_GET['Id'];
        $carmodel=new CarModel();
        $s='Sold';
        $b=$id;
        $data=array(
            'Id'=>$Id,
            'Status'=>$s,
            'Buyerid'=>$b

        );
        $result=$carmodel->where('Id',$Id)->save($data);
        if($result){
            echo "<script>alert('Bought Successfully....!');window.location=('buyer?id=$id')</script>";
        }
    }
}