<?php



namespace UTB\models;
use UTB\core\model;

class jobs extends model{
     public function GetAllJobs(){
      $data= model::db()->rows("SELECT * FROM jobs");
      return $data;
   }

   public function GetAllJob($id){
      $data= model::db()->row("SELECT * FROM jobs Where `id` = $id");
      return $data;
   }

   public function DeleteJobs($id){
      $data= model::db()->delete('jobs', ['id' => $id]);
      return $data;
   }


   public function AddJob($data){
      $data= model::db()->insert('jobs', $data);
      return $data;
   }


   public function updateJobs($data,$id){
      $data= model::db()->update('jobs', $data,$id);
      return $data;
   }

   public function GetAllApply($companyname,$jobname){
      $data= model::db()->rows("SELECT * FROM jobapplication WHERE companyname = ? AND jobname = ?", [$companyname,$jobname]);
      return $data;
   }

   public function DeleteApplictions($id){
      $data= model::db()->delete('jobapplication', ['id' => $id]);
      return $data;
   }
   


}




