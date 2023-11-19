<?php

function story(){
    include('connection.php'); 

    $sql="SELECT * FROM `sucess`";
    $q=mysqli_query($con,$sql);

    $story=[];

   while($res=mysqli_fetch_assoc($q)){
        $story[]=$res;
   } 
   return $story;
}


function news(){
     include('connection.php'); 
 
     $sql="SELECT * FROM `news`";
     $q=mysqli_query($con,$sql);
 
     $news=[];
 
    while($res=mysqli_fetch_assoc($q)){
         $news[]=$res;
    } 
    return $news;
 }