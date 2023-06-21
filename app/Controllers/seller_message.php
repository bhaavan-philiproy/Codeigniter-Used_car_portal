<?php

namespace App\Controllers;
use \App\Models\MessageModel;
use \App\Models\CarModel;
use \App\Models\UserModel;


class seller_message extends BaseController
{
    public function index()
    {
        $id = $_GET["id"];
        $messagemodel=new MessageModel();
        $data= $messagemodel->where('Rid',$id)->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('seller_message',$data);
    }
}
