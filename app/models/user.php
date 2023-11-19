<?php

namespace UTB\models;
use UTB\core\model;

class user extends model{

    public function GetAllUser(){
       $data= model::db()->rows("SELECT * FROM users");
       return $data;
    }

    public function GetUser($email,$password){
        $data= model::db()->row("SELECT * FROM users Where `email` = '$email' && `password` = '$password' ");
        return $data;
     }

   public function GetUserprofile($username){
      $data= model::db()->row("SELECT * FROM users Where `username` = '$username'");
      return $data;
   }

   public function GetUserprofilePosts($username){
      $data= model::db()->rows("SELECT * FROM userchat Where `username` = '$username'");
      return $data;
   }

     public function GetUserChats(){
      $data= model::db()->rows("SELECT * FROM userchat");
      return $data;
   }

     public function GetUserChat($email,$username){
      $data= model::db()->rows("SELECT * FROM userchat Where `emails` = '$email' && `username` = '$username' ");
      return $data;
   }


   public function GetEvents(){
      $data= model::db()->rows("SELECT * FROM events ORDER BY date");
      return $data;
   }

   public function GetJobs(){
      $data= model::db()->rows("SELECT * FROM jobs");
      return $data;
   }

   public function GetJob($id){
      $data= model::db()->rows("SELECT * FROM jobs WHERE `id`=$id");
      return $data;
   }



   public function addpost($body,$photo,$user_id){
      $data =  model::db()->insert('chat', ['user_id' => $user_id, 'body' => $body,'photo' => $photo]);
      return $data;
   }

   public function applyjob($data){
      $data =  model::db()->insert('jobapplication', $data);
      return $data;
   }




   


}