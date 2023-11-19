<?php



namespace UTB\models;
use UTB\core\model;

class sucess extends model{
     public function GetAllSucess(){
      $data= model::db()->rows("SELECT * FROM sucess");
      return $data;

   }

   public function GetAllsucesses($id){
      $data= model::db()->row("SELECT * FROM sucess Where `id` = $id");
      return $data;
   }

   public function deletesucess($id){
      $data= model::db()->delete('sucess', ['id' => $id]);
      return $data;
   }


   public function Addsucess($data){
      $data= model::db()->insert('sucess', $data);
      return $data;
   }

   public function updatesucess($data,$id){
      $data= model::db()->update('sucess', $data,$id);
      return $data;
   }
}