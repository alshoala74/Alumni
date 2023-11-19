<?php

function chats(){
    include('connection.php'); 

    $sql="SELECT * FROM `userchat`";
    $q=mysqli_query($con,$sql);

    $chat=[];

   while($res=mysqli_fetch_assoc($q)){
        $chat[]=$res;
   } 
   return $chat;
}



function particpent(){
     include('connection.php'); 
 
     $sql="SELECT * FROM `users`";
     $q=mysqli_query($con,$sql);
 
     $chat=[];
 
    while($res=mysqli_fetch_assoc($q)){
         $chat[]=$res;
    } 
    return $chat;
 }



