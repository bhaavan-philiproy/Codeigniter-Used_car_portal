<?php

namespace App\Controllers;
use \App\Models\MessageModel;
use \App\Models\CarModel;
use \App\Models\UserModel;


class buyer_message extends BaseController
{
    public function index()
    {
        $id = $_GET["id"];
        $messagemodel=new MessageModel();
        $data= $messagemodel->where('Ids',$id)->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('buyer_message',$data);
    }
}
