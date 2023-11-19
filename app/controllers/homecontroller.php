<?php

namespace UTB\controllers;

use UTB\core\controller;
use UTB\models\user;
use GUMP;
use UTB\core\session;
use UTB\core\helpers;
use UTB\models\sucess;
use UTB\models\news;
use UTB\models\servay;
use UTB\models\events;



class homecontroller extends controller{
    
    public function __construct(){
        session::start();
    }
    
    
    public function index(){
        $this->view('home/index',['title'=>"Home"]);
    }

    public function events(){
        $events=new events();
        $data=$events->GetAllEvents();
        $this->view('home/events',['title'=>"Events",'data'=>$data]);
    }


    public function news(){
        $new= new news();
        $news=$new->GetAllNews();
        $this->view('home/news',['title'=>"News","news"=>$news]);
    }


    public function new($id){
       $new = new news();
       $new=$new->GetAllNew($id);
       if(!empty($new)){
        $this->view('home/new',['title'=>"New","new"=>$new]);
       }else
        {
            helpers::redirect('home/news');
        }
    }

    public function sucess(){
        $sucess= new sucess();
        $story=$sucess->GetAllSucess();
        
        $this->view('home/sucess',['title'=>"sucess","story"=>$story]);
    }

    public function more(){
        $servay= new servay();
        $servay=$servay->GetAllServay();
        $this->view('home/more',['title'=>"more","servay"=>$servay]);
        if (isset($_SESSION['alert_message'])) {
            $alertMessage = $_SESSION['alert_message'];
            echo '<script>alert("' . $alertMessage . '");</script>';
            // Clear the session variable
            unset($_SESSION['alert_message']);
        }
    }


    public function servay($id){
        if($id==1){
            $this->view('home/servay1',['title'=>"Survey","id"=>$id]);
        }else if($id==2){
            $this->view('home/servay2',['title'=>"Survey","id"=>$id]);
        }
    }

    public function postservay($id){
        $servay= new servay();
        $servay=$servay->InsertResponse($id,$_POST["q1"],$_POST["q2"]
        ,$_POST["q3"],$_POST["q4"],$_POST["q5"]
        ,$_POST["q6"],$_POST["q7"],$_POST["q8"]
        ,$_POST["q9"],$_POST["q10"]);
        $_SESSION['alert_message'] = "Survay submitted successfully.";
        helpers::redirect('home/more');
    }



    public function login(){
        $this->view("home/login",['title'=>'login']);
    }

    public function postlogin(){
        $v = GUMP::is_valid($_POST, [
            'email'=>'required',
            'password'=>'required'
         ]);
         if($v==1){
            $user=new user();
            $data=$user->GetUser($_POST['email'],$_POST['password']);
            if(!empty($data)){
            session::set('user',$data);
            helpers::redirect('user/index');
            }else{
                $error_message = "Invalid email or password.";
            $this->view('home/login', ['error_message' => $error_message]);
            }
            
            
         }

    }

   

    

}