<?php

namespace UTB\controllers;

use UTB\core\controller;
use GUMP;
use UTB\core\session;
use UTB\core\helpers;
use UTB\models\admin;



class adminpostcontroller extends controller{

    public function __construct(){
        session::start();
    }


    public function login(){
        $this->view("admin/login",['title'=>'login']);
    }

    public function adminpost(){
        $v = GUMP::is_valid($_POST, [
            'name'=>'required',
            'password'=>'required'
         ]);
         if($v==1){
            $admin=new admin();
            $data=$admin->GetAdmin($_POST['name'],$_POST['password']);
            if(!empty($data)){
            session::set('admin',$data);
            helpers::redirect('admin/index');
            }else{
              $error_message = "Invalid email or password.";
            $this->view('admin/login', ['error_message' => $error_message]);
            
            }
            
            
         }

    }

}