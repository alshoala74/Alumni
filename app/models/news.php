<?php



namespace UTB\models;
use UTB\core\model;

class news extends model{
     public function GetAllNews(){
      $data= model::db()->rows("SELECT * FROM news");
      return $data;

   }

   public function GetAllNew($id){
      $data= model::db()->row("SELECT * FROM news Where `id` = $id");
      return $data;
   }

   public function DeleteNew($id){
      $data= model::db()->delete('news', ['id' => $id]);
      return $data;
   }


   public function AddNews($data){
      $data= model::db()->insert('news', $data);
      return $data;
   }


   public function updateNews($data,$id){
      $data= model::db()->update('news', $data,$id);
      return $data;
   }

   


}




