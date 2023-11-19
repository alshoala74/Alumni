<?php



namespace UTB\models;
use UTB\core\model;

class servay extends model{
     public function GetAllServay(){
      $data= model::db()->rows("SELECT * FROM surveys");
      return $data;

   }

   public function InsertResponse($id,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10){
    $data =  model::db()->insert('responses', ['survey_id' => $id, 'q1' => $q1,
    'q2' => $q2,'q3' => $q3,'q4' => $q4,'q5' => $q5,'q6' => $q6,'q7' => $q7,
    'q8' => $q8,'q9' => $q9,'q10' => $q10]);
    return $data;
   }

   public function GetAllResponses($id){
      $data= model::db()->rows("SELECT * FROM responses WHERE survey_id = $id");
      return $data;
   }
   
   public function DeleteResponse($id){
      $data= model::db()->delete('responses', ['response_id ' => $id]);
      return $data;
   }


  

}