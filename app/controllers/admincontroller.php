<?php

namespace UTB\controllers;

use UTB\core\controller;
use GUMP;
use UTB\core\session;
use UTB\core\helpers;

use UTB\models\news;
use UTB\models\sucess;
use UTB\models\users;
use UTB\models\events;
use UTB\models\jobs;
use UTB\models\chats;
use UTB\models\servay;

class admincontroller extends controller{

public function __construct(){
        session::start();
        $admin_data=session::Get('admin');
        //  print_r($user_data);die;

        if(empty($admin_data)){
            
            echo'class not access';
            die;
        }
    }

    public function index(){
        $this->view("admin/index",['title'=>'admin']);
    }

    //news Database Manager
    public function news(){
        $news=new news();
        $data=$news->GetAllNews();
        $this->view("admin/news",['title'=>'news','data'=>$data]);
    }
    public function addnews(){
        $this->view("admin/addnews",['title'=>'news']);
    }
    public function postaddnews(){
        $photo = $_FILES['pic'];
        $photo_name = $photo['name'];
        $photo_tmp = $photo['tmp_name'];
        $photo_destination = 'front/img/' . $photo_name;
        move_uploaded_file($photo_tmp, $photo_destination);
        $news=new news();
        $data=['title'=>$_POST['title'],'disc'=>$_POST['disc'],'date'=>$_POST["date"],'pic'=>$photo_name];
        $data=$news->AddNews($data);
        if($data){
            helpers::redirect('admin/news');
        }
    
    }
    public function deletenews($id){
        $news=new news();
        $data=$news->DeleteNew($id);
        if($data){
            helpers::redirect('admin/news');
        }
    }
    public function updatenews($id){
        $news=new news();
        $data=$news->GetAllNew($id);
        $this->view("admin/updatenews",['title'=>'admin','data'=>$data]);
    }
    public function postupdatenews(){
        if(!empty($_FILES['pic']['name'])){
            $photo = $_FILES['pic'];
            $photo_name = $photo['name'];
            $photo_tmp = $photo['tmp_name'];
            $photo_destination = 'front/img/' . $photo_name;
            // Move the uploaded photo to the destination folder
            move_uploaded_file($photo_tmp, $photo_destination);
            $data=['title'=>$_POST['title'],'disc'=>$_POST['disc'],'date'=>$_POST["date"],'pic'=>$photo_name];
        }else{
            $data=['title'=>$_POST['title'],'disc'=>$_POST['disc'],'date'=>$_POST["date"]];
        }
        $news=new news();
        $id=['id'=>$_POST['id']];
        $data=$news->updateNews($data,$id);
        if($data){
            helpers::redirect('admin/news');
        }else{
            helpers::redirect('admin/news');

        }
    }





   //sucess Database Manager
    public function sucess(){
        $sucess=new sucess();
        $data=$sucess->GetAllSucess();
        $this->view("admin/sucess",['title'=>'sucess','data'=>$data]);
    }
    public function deletesucess($id){
        $sucess=new sucess();
        $data=$sucess->deletesucess($id);
        if($data){
            helpers::redirect('admin/sucess');
        }
    }
    public function addsucess(){
        $this->view("admin/addsucess",['title'=>'sucess']);
    }
    public function postaddsucess(){
        $photo = $_FILES['pic'];
        $photo_name = $photo['name'];
        $photo_tmp = $photo['tmp_name'];
        $photo_destination = 'front/img/' . $photo_name;
        // Move the uploaded photo to the destination folder
        move_uploaded_file($photo_tmp, $photo_destination);
        $users=new users();
        $stuid=$_POST['id'];
        $data=$users->GetUserbyidstud($stuid);
        $id=$data->user_id;
        $sucess=new sucess();
        $data=['name'=>$_POST['name'],'story'=>$_POST['story'],'degree'=>$_POST['degree'],
        'workplace'=>$_POST['workplace'],'user_id'=>$id,'pic'=>$photo_name];
        $data=$sucess->Addsucess($data);
        if($data){
            helpers::redirect('admin/sucess');
        }
    
    }
    public function updatesucess($id){
        $sucess=new sucess();
        $data=$sucess->GetAllsucesses($id);
        $this->view("admin/updatesucess",['title'=>'admin','data'=>$data]);
    }
    public function postupdatesucess(){
        if(!empty($_FILES['pic']['name'])){
            $photo = $_FILES['pic'];
            $photo_name = $photo['name'];
            $photo_tmp = $photo['tmp_name'];
            $photo_destination = 'front/img/' . $photo_name;
            // Move the uploaded photo to the destination folder
            move_uploaded_file($photo_tmp, $photo_destination);
            $data=['name'=>$_POST['name'],'story'=>$_POST['story'],'degree'=>$_POST['degree'],'workplace'=>$_POST['workplace'],'pic'=>$photo_name];
        }else{
            $data=['name'=>$_POST['name'],'story'=>$_POST['story'],'degree'=>$_POST['degree'],'workplace'=>$_POST['workplace']];
        }
        $sucess=new sucess();
        $id=['id'=>$_POST['id']];
        $data=$sucess->updatesucess($data,$id);
        if($data){
            helpers::redirect('admin/sucess');
        }else{
            helpers::redirect('admin/sucess');
        }
    }



    
    //users Database Manager
    public function users(){
        $users=new users();
        $data=$users->GetAllusers();
        $this->view("admin/users",['title'=>'sucess','data'=>$data]);
    }
    
    public function deleteusers($id){
        $users=new users();
        $data=$users->deleteusers($id);
        if($data){
            helpers::redirect('admin/users');
        }
    }

    public function addusers(){
        $this->view("admin/addusers",['title'=>'sucess']);
    }

    public function postaddusers(){
        $photo = $_FILES['pfp'];
        $photo_name = $photo['name'];
        $photo_tmp = $photo['tmp_name'];
        $photo_destination = 'front/img/' . $photo_name;
        // Move the uploaded photo to the destination folder
        move_uploaded_file($photo_tmp, $photo_destination);
        $users=new users();
        $data=['username'=>$_POST['username'],'name'=>$_POST['name'],'email'=>$_POST['email'],'password'=>$_POST['password'],'pfp'=>$photo_name,'id_num'=>$_POST['id_num'],'major'=>$_POST['major']];
        $users=$users->Addusers($data);
        if($data){
            helpers::redirect('admin/users');
        }
    
    }


    public function updateusers($id){
        $users=new users();
        $data=$users->Getuser($id);
        $this->view("admin/updateusers",['title'=>'admin','data'=>$data]);
    }

    public function postupdateusers(){
        if(!empty($_FILES['pfp']['name'])){
            $photo = $_FILES['pfp'];
            $photo_name = $photo['name'];
            $photo_tmp = $photo['tmp_name'];
            $photo_destination = 'front/img/' . $photo_name;
            // Move the uploaded photo to the destination folder
            move_uploaded_file($photo_tmp, $photo_destination);
            $data=['username'=>$_POST['username'],'name'=>$_POST['name'],'email'=>$_POST['email'],'id_num'=>$_POST['id_num'],'major'=>$_POST['major'],'password'=>$_POST['password'],'pfp'=>$photo_name];
        }else{
            $data=['username'=>$_POST['username'],'name'=>$_POST['name'],'email'=>$_POST['email'],'id_num'=>$_POST['id_num'],'major'=>$_POST['major'],'password'=>$_POST['password']];
        }
        $users=new users();
        $id=['user_id'=>$_POST['user_id']];
        $data=$users->updateusers($data,$id);
        if($data){
            helpers::redirect('admin/users');
        } else{
            helpers::redirect('admin/users');
        }
    }

    
    //Events Database Manager
    public function events(){
        $events=new events();
        $data=$events->GetAllEvents();
        $this->view("admin/events",['title'=>'events','data'=>$data]);
    }
    
    public function addevents(){
        $this->view("admin/addevents",['title'=>'events']);
    }
    public function postaddevents(){   
        $events=new events();
        $data=['eventname'=>$_POST['eventname'],'place'=>$_POST['place'],'disc'=>$_POST["disc"],'date'=>$_POST["date"],'timestart'=>$_POST["timestart"],'timeend'=>$_POST["timeend"]];
        $data=$events->AddEvent($data);
        if($data){
            helpers::redirect('admin/events');
        }
    
    }
    public function deleteevents($id){
        $events=new events();
        $data=$events->DeleteEvent($id);
        if($data){
            helpers::redirect('admin/events');
        }
    }
    public function updateevents($id){
        $events=new events();
        $data=$events->GetAllEvent($id);
        $this->view("admin/updateevents",['title'=>'admin','data'=>$data]);
    }
    public function postupdateevents(){
        $data=['eventname'=>$_POST['eventname'],'place'=>$_POST["place"],'disc'=>$_POST['disc'],'date'=>$_POST["date"],'timestart'=>$_POST["timestart"],'timeend'=>$_POST["timeend"]];
        $events=new events();
        $id=['id'=>$_POST['id']];
        $data=$events->updateEvent($data,$id);
        if($data){
            helpers::redirect('admin/events');
        }else{
            helpers::redirect('admin/events');

        }
    }

    //Jobs Database Manager
    public function jobs(){
        $jobs=new jobs();
        $data=$jobs->GetAllJobs();
        $this->view("admin/jobs",['title'=>'jobs','data'=>$data]);
    }

    public function addjobs(){
        $this->view("admin/addjobs",['title'=>'jobs']);
    }
    public function postaddjobs(){   
        $jobs=new jobs();
        $data=['jobname'=>$_POST['jobname'],'companyname'=>$_POST['companyname'],'place'=>$_POST["place"],'degree'=>$_POST["degree"],'disc'=>$_POST["disc"]];
        $data=$jobs->AddJob($data);
        if($data){
            helpers::redirect('admin/jobs');
        }
    
    }

    public function deletejobs($id){
        $jobs=new jobs();
        $data=$jobs->DeleteJobs($id);
        if($data){
            helpers::redirect('admin/jobs');
        }
    }

    public function updatejobs($id){
        $jobs=new jobs();
        $data=$jobs->GetAllJob($id);
        $this->view("admin/updatejobs",['title'=>'jobs','data'=>$data]);
    }
    public function postupdatejobs(){
        $data=['jobname'=>$_POST['jobname'],'companyname'=>$_POST['companyname'],'place'=>$_POST["place"],'degree'=>$_POST["degree"],'disc'=>$_POST["disc"]];
        $jobs=new jobs();
        $id=['id'=>$_POST['id']];
        $data=$jobs->updateJobs($data,$id);
        if($data){
            helpers::redirect('admin/jobs');
        }else{
            helpers::redirect('admin/jobs');

        }
    }
    
    public function viewapplictions($id){
       
        $jobs=new jobs();
        $data=$jobs->GetAllJob($id);
        $jobname = $data->jobname;
        $companyname= $data->companyname;
        $datapply=$jobs->GetAllApply($companyname,$jobname);
            $this->view("admin/viewapplictions",['title'=>'jobs','data'=>$datapply]);
    }
    public function deleteapply($id){
        $jobs=new jobs();
        $data=$jobs->DeleteApplictions($id);
        if($data){
            helpers::redirect('admin/viewapplictions');
        }
    }
    


    //Chats Database Manager
    public function chats(){
        $chats=new chats();
        $data=$chats->GetAllChats();
        $this->view("admin/chats",['title'=>'chats','data'=>$data]);
    }

    public function deletechat($id){
        $chats=new chats();
        $data=$chats->DeleteChat($id);
        if($data){
            helpers::redirect('admin/chats');
        }
    }


    //Surevy Database Manager
    public function surevy(){
        $servay=new servay();
        $data=$servay->GetAllServay();
        $this->view("admin/servay",['title'=>'surevy','data'=>$data]);
    }

    public function viewresponses($id){
        $servay=new servay();
        $data=$servay->GetAllResponses($id);
        $this->view("admin/responses",['title'=>'surevy','data'=>$data]);
    }

    

    public function deleteresponses($id){
        $servay=new servay();
        $data=$servay->DeleteResponse($id);
        if($data){
            helpers::redirect('admin/surevy');
        }
    }
}