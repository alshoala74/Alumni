<?php      
   
    $db_name = "fs8_proone";  
      
    $con = mysqli_connect("localhost","root","",$db_name); 
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  