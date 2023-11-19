<?php      
    include('connection.php');  
    
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        
        // session_start();
        // $_SESSION['password']=$row['password'];
        // $_SESSION['pfp']=$row['pfp'];
        // $_SESSION['user_name']=$row['user_name'];
        // $_SESSION['email']=$row['email'];
        // $_SESSION['id']=$row['id'];

          
        if($count == 1){  
            session_start();
            $_SESSION['password']=$row['password'];
            $_SESSION['pfp']=$row['pfp'];
            $_SESSION['user_name']=$row['user_name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['id']=$row['id'];
           header('Location:Home.php');
        }  
        else{  
            session_start();
            $_SESSION['errorMessage'] = "Login failed. Invalid Email or password.";
            header('Location: login.php');
        }
?>  