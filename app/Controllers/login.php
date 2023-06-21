<?php

namespace App\Controllers;
use \App\Models\UserModel;

class login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function login_form(){
        $session = session();
        $usermodel =new UserModel();
        $e=$this->request->getpost('Email');
        $p=$this->request->getVar('Password');
        $result = $usermodel->where('Email',$e)->first();
        if(!$result){
            echo "<script>alert('Email not Found....!');window.location=('login')</script>";
        }
        if($p != $result['Password']){
            return redirect('login');
        }

        if($result['Role']==2){
            $ses_data=[
                'Id'=>$result['Id'],
                'Email'=>$result['Email'],
                'isLoggedIn'=>TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('userpg')->with('data',$ses_data);
        }
        else{
            $ses_data=[
                'Id'=>$result['Id'],
                'Email'=>$result['Email'],
                'isLoggedIn'=>TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('adminpg')->with('data',$ses_data);
        }
    }
}
