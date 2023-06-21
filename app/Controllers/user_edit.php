<?php

namespace App\Controllers;
use \App\Models\CarModel;

class user_edit extends BaseController
{
    public function index()
    {
        $id=$_GET['id'];
        $carmodel=new CarModel();
        $data= $carmodel->where('Id',$id)->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('user_edit',$data);
    }
    public function edit()
    {
        $carmodel=new CarModel();
        $c=$this->request->getpost('Company');
        $m=$this->request->getpost('Model');
        $co=$this->request->getpost('Color');
        $y=$this->request->getpost('Year');
        $t=$this->request->getpost('Type');
        $p=$this->request->getpost('Price');
        $id=$this->request->getpost('Id');
        $d= $carmodel->where('Id',$id)->first();
        $data=array(
            'Id'=>$id,
            'Company'=>$c,
            'Model'=>$m,
            'Color'=>$co,
            'Year'=>$y,
            'Type'=>$t,
            'Price'=>$p
        );
        $result=$carmodel->save($data);
        if($result){
            return redirect()->to('seller_view?id='.$d['Uid']);
        }
    }
}