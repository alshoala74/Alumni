<?php



namespace UTB\models;
use UTB\core\model;

class users extends model{
     public function GetAllusers(){
      $data= model::db()->rows("SELECT * FROM users");
      return $data;

   }

   public function Getuser($id){
      $data= model::db()->row("SELECT * FROM users Where `user_id` = $id");
      return $data;
   }

   

   public function deleteusers($id){
      $data= model::db()->delete('users', ['user_id' => $id]);
      return $data;
   }


   public function Addusers($data){
      $data= model::db()->insert('users', $data);
      return $data;
   }

   public function updateusers($data,$id){
      $data= model::db()->update('users', $data,$id);
      return $data;
   }

   
   public function GetUserbyidstud($stuid){
      $data= model::db()->row("SELECT * FROM users WHERE `id_num` = ?", [$stuid]);
      return $data;
   }
}