<?php

namespace UTB\controllers;

use UTB\core\controller;
use UTB\models\user;
use GUMP;
use UTB\core\session;
use UTB\core\helpers;

class usercontroller extends controller{

    public function __construct(){
        session::start();
        $user_data=session::Get('user');
        //  print_r($user_data);die;

        if(empty($user_data)){
            
            echo'class not acces';
            die;
        }
    }

    public function index(){
        
        $user_data=session::Get('user');
        $user=new user();
        $chats=$user->GetUserChats();
        $events=$user->GetEvents();
       
        if(!empty($user_data)){
        $this->view("userpage/index",['title'=>'userhome','data'=>$user_data,'chats'=>$chats,'events'=>$events]);
        }else{
            echo'class not acces';
        }
        // echo '<pre>';
        // print_r($user_data);die;
    }

    public function userprofile(){
        $user_data=session::Get('user');
        $user=new user();
        $chat=$user->GetUserChat($user_data->email,$user_data->username);
        // print_r($chat);die;
        $this->view("userpage/userprofile",['title'=>'userprofile','data'=>$user_data,'chat'=>$chat]);
    }

    public function postlogout(){
        session::stop();
        helpers::redirect('home/index');
    }

    public function alumni(){
        $user_data=session::Get('user');
        $user=new user();
        $users=$user->GetAllUser();
        $this->view("userpage/shearchalmuni",['title'=>'almuni','data'=>$user_data,'users'=>$users]);
    }

    public function searchuserprofile($username){
        $user_data=session::Get('user');
        $user=new user();
        $userprofile=$user->GetUserprofile($username);
        $userprofilepost=$user->GetUserprofilePosts($username);
        $this->view("userpage/almuni",['title'=>'almuni','user'=>$userprofile,'posts'=>$userprofilepost,'data'=>$user_data]); 
    }

    public function jobbord(){
        $user_data=session::Get('user');
        $user=new user();
        $jobs=$user->GetJobs();
        $this->view("userpage/jobs",['title'=>'jobBords','data'=>$user_data,'jobs'=>$jobs]);
        if (isset($_SESSION['alert_message'])) {
            $alertMessage = $_SESSION['alert_message'];
            echo '<script>alert("' . $alertMessage . '");</script>';
            // Clear the session variable
            unset($_SESSION['alert_message']);
        }
    }

    public function addpost() {
        $user_data = session::Get('user');
        $user = new user();
        if (isset($_POST['body']) && isset($_FILES['photo'])) {
          $photo = $_FILES['photo'];
          $photo_name = $photo['name'];
          $photo_tmp = $photo['tmp_name'];
          $photo_destination = 'front/img/' . $photo_name;
          // Move the uploaded photo to the destination folder
          move_uploaded_file($photo_tmp, $photo_destination);
          $user->addpost($_POST['body'], $photo_name, $user_data->user_id);
          helpers::redirect('user/index');
        } 
      }

    public function apply($id){
      
         $user_data=session::Get('user');
         $user=new user();
         $jobs=$user->GetJob($id);
         $this->view("userpage/apply",['title'=>'apply','data'=>$user_data,'jobs'=>$jobs]);
    }
    
    public function postapply($id) {
        $user = new user();
        $jobs = $user->GetJob($id);
        
        $filteredJobs = array_filter($jobs, function ($job) use ($id) {
            return $job['id'] == $id;
        });
        foreach ($filteredJobs as $job) {

            $companyname= $job['companyname'];
            $jobname= $job['jobname'];
            $jobid=$job['id'];
    
        }
        if (isset($_POST['name']) && isset($_FILES['cv'])) {
            $cv = $_FILES['cv'];
            $cv_name = $cv['name'];
            $cv_tmp = $cv['tmp_name'];
            $cv_destination = 'front/cv/' . $cv_name;
            // Move the uploaded photo to the destination folder
            move_uploaded_file($cv_tmp, $cv_destination);
            $user_data=session::Get('user');
            $data=['name'=>$_POST['name'],'email'=>$_POST['email'],
            'cv'=>$cv_name = $cv['name'],'companyname'=>$companyname,
            'jobname'=>$jobname,'job_id'=>$jobid,
            'user_id'=>$user_data->user_id,'major'=>$user_data->major];
            print_r($data);
            $user->applyjob($data);
            $_SESSION['alert_message'] = "Application submitted successfully.";
            helpers::redirect('user/jobbord');
            }
    }
}