<?php



namespace UTB\models;
use UTB\core\model;

class chats extends model{
     public function GetAllChats(){
      $data= model::db()->rows("SELECT * FROM chat");
      return $data;

   }

   public function DeleteChat($id){
      $data= model::db()->delete('chat', ['chat_id' => $id]);
      return $data;
   }

}
