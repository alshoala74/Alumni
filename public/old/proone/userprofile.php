<?php
include('connection.php'); 

session_start();

$user = $_GET['user']; 
$sql1 = "SELECT * FROM `users` WHERE user_name = '$user'";
$sql2 = "SELECT * FROM `userchat` WHERE user_name = '$user'";
$result1 = mysqli_query($con, $sql1);
$result2 = mysqli_query($con, $sql2);
$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
$user = $row1['user_name'];
$pfp = $row1['pfp'];
$email = $row1['email'];


$body=[];
while($res=mysqli_fetch_assoc($result2)){
    $body[]=$res;
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <link href="css/stylefont.css"rel="stylesheet">
    <link href="css/particepent.css" rel="stylesheet">

    <style>

    
    body {
        background: rgb(150,1,1);
        background: linear-gradient(90deg, rgba(150,1,1,1) 0%, rgba(122,7,7,1) 35%, rgba(43,43,43,1) 100%);
        }
    .posts{
        border:3px solid #D12149;
        border-radius:20px ;
        padding : 10px;
        box-shadow: 7px 7px 5px #D12149;
        }
    .posts p{
        margin-left:20px;
    }

    h5{
        color: #D12149;
    }

    .posts i{
        color: #D12149;
    }

    .pfp{  
        margin-top:20px;
        border-radius: 50%;
        border: solid 5px #D12149 ;
        }
    .card{
         margin-top: -50px;
        }
    </style>

</head>
<body>

<section>
    <header class="navs">
        <img src="img/header-logo.svg" alt="img">
        <nav>
            <ul class="navlink">
              <li><a href="Home.php">Home</a></li>
              <li><a href="particepent.php">Almunis</a></li>
              <li><a href="jobbord.html">Job Bords</a></li>
            </ul>
        </nav>
        <img class="pfpimg hvr-grow"src="img/<?php echo $_SESSION['pfp'];?>" alt="pfp">
    </header>
</section>

<div class="row ">
    <div class=" col-md-9 col-sm-10 mx-auto ">

        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden card">
            <div class="px-4 pt-0 pb-4 bg-dark">
                <div class="media align-items-end profile-header">
                    <div class="profile  mt-2 mr-3"><img src="img/<?php echo $pfp ?>" alt="" width="130" class="rounded-circle mb-2 pfp"></div>
                    <div class="media-body text-white">
                        <h4 class="mt-0 mb-0"><?php echo $user ?></h4>
                        <p class="small mb-4"> <?php echo $email; ?></p>
                    </div>
                </div>
            </div>

          

            <div class="py-4 px-4">
            <div class="py-4">
                <h5 class="mb-3">Recent posts :</h5>
                <?php if (empty($body)): ?>
                    <h3>No posts found</h3>
                <?php else: ?>
                    <?php foreach(array_reverse($body) as $pa): ?>
                        <div class="posts bg-light shadow-bg mb-3">
                            <i class="lnr lnr-chevron-down"></i>
                            <?php if ($pa['photo']) { ?>
                                <div class="col-lg-6 mb-2 pr-lg-1"><img src="img/<?php echo $pa['photo']; ?>" alt="photo" class="img-fluid rounded shadow-sm"></div>
                            <?php } ?>  
                            <p class="font-italic mb-3"><?php echo $pa['body']; ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>