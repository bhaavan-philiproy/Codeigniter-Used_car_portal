<?php

namespace App\Controllers;
use \App\Models\CarModel;

class seller extends BaseController
{
    public function index()
    {
        return view('seller');
    }
    public function sell(){
        $carmodel= new CarModel();
        $c=$this->request->getpost('Company');
        $m=$this->request->getpost('Model');
        $co=$this->request->getpost('Color');
        $y=$this->request->getpost('Year');
        $t=$this->request->getpost('Type');
        $p=$this->request->getpost('Price');
        $id=$this->request->getpost('Id');
        $target_dir="Upload/Images/";
        $target_file=$target_dir.basename($_FILES["Image"]["name"]);
        move_uploaded_file($_FILES["Image"]["tmp_name"],$target_file);
        $data=array(
            'Uid'=>$id,
            'Company'=>$c,
            'Model'=>$m,
            'Color'=>$co,
            'Year'=>$y,
            'Type'=>$t,
            'Img'=>$target_file,
            'Price'=>$p
        );
        $insert= $carmodel->insert($data);
        if($insert){
            return redirect()->to('seller_view?id='.$id);
        }
        else{
            echo "alert('Sign Up Failed')";
        }
    }
}