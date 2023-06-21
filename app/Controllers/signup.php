<?php

namespace App\Controllers;
use \App\Models\UserModel;

class signup extends BaseController
{
    public function index()
    {
        return view('signup');
    }
    public function signup_form()
    {
        $usermodel= new UserModel();
        $n=$this->request->getpost('Name');
        $e=$this->request->getpost('Email');
        $p=$this->request->getpost('Password');
        $cp=$this->request->getpost('Cpassword');
        $r=$this->request->getpost('Role');
        $data=array(
            'Name'=>$n,
            'Email'=>$e,
            'Password'=>$p,
            'Role'=>$r,
        );
        $insert= $usermodel->insert($data);
        if($insert){
            return redirect()->to('login');
        }
        else{
            echo "alert('Sign Up Failed')";
        }
    }

    public function emailCheck()
    {
        $email = $_GET['mail'];
        $usermodel = new UserModel();
        $data = $usermodel->where('Email',$email)->findAll();
        if(!empty($data)) {
            print "Failed";
        } else {
            print "Success";
        }
    }
}