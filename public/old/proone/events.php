<?php
function events(){
    include('connection.php'); 

    $sql="SELECT * FROM `events`";
    $q=mysqli_query($con,$sql);

    $events=[];

   while($res=mysqli_fetch_assoc($q)){
        $events[]=$res;
   } 
   return $events;
}
