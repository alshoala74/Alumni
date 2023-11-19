<?php
include('connection.php'); 

session_start();

$id = $_GET['id']; 

$sql = "SELECT * FROM `news` WHERE id = '$id'";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);

$title = $row['title'];
$date = $row['date'];
$pic = $row['pic'];
$content = $row['disc'];
$disc=nl2br($content);

$body=[];
while($res=mysqli_fetch_assoc($result)){
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
    <link href="css/stylenew.css" rel="stylesheet">
</head>
<body>
    <header class="navs">
        <img src="img/header-logo.svg" alt="img">
        <nav>
          <ul class="navlink">
            <li><a href="index.html">Home</a></li>
            <li><a href="News.php">News</a></li>
            <li><a href="sucess.php">Sucess Story</a></li>
            <li><a href="index.html#contact">Contact Us</a></li>
          </ul>
        </nav>
        <a href="login.html" class="hvr-grow"><button>Sign-In</button></a>
  
      </header>

      

      <section>
        <h2><?php echo $title ?></h2>
        <p><?php echo $disc ?></p>
       
        <a href="news.php" class="hvr-grow"><button>More News</button></a>
        <div class="container">
            <img src="img/<?php echo $pic ?>">
          </div>
          
      </section>

     
</body>
</html>