<?php



namespace UTB\models;
use UTB\core\model;

class events extends model{
     public function GetAllEvents(){
      $data= model::db()->rows("SELECT * FROM events ORDER BY date");
      return $data;

   }

   public function GetAllEvent($id){
      $data= model::db()->row("SELECT * FROM events Where `id` = $id");
      return $data;
   }

   public function DeleteEvent($id){
      $data= model::db()->delete('events', ['id' => $id]);
      return $data;
   }


   public function AddEvent($data){
      $data= model::db()->insert('events', $data);
      return $data;
   }


   public function updateEvent($data,$id){
      $data= model::db()->update('events', $data,$id);
      return $data;
   }

   


}




