<?php

namespace App\Controllers;
use \App\Models\MessageModel;
use \App\Models\UserModel;

class message extends BaseController
{
    public function index()
    {
        $messagemodel= new MessageModel();
        $usermodel= new UserModel();
        $s=$this->request->getpost('Sid');
        $result= $usermodel->where('Id',$s)->first();
        $se=$result['Name'];
        $r=$this->request->getpost('Rid');
        $v=$this->request->getpost('Model');
        $m=$this->request->getVar('Chat');
        $data=array(
            'Sid'=>$se,
            'Ids'=>$s,
            'Rid'=>$r,
            'Vid'=>$v,
            'Message'=>$m,
        );
        $insert= $messagemodel->insert($data);
        if($insert){
            return redirect()->to('buyer?id='.$s);
        }
        else{
            echo "alert('Sign Up Failed')";
        }
    }
    public function reply()
    {
        $messagemodel= new MessageModel();
        $re=$this->request->getpost('reply');
        $m=$this->request->getpost('message');
        $r=$this->request->getpost('rid');
        $id=$this->request->getpost('id');
        $data=array(
            'Id'=>$id,
            'Reply'=>$re
        );
        $result=$messagemodel->save($data);
        if($result){
            return redirect()->to('seller_message?id='.$r);
        }


    }
}