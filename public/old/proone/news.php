<?php
include('connection.php');  
require_once ('lib/sucess.php');
session_start();
$news=news();

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
    <link href="css/news.css" rel="stylesheet">

</head>
<body>  

  <header class="navs">
      <img src="img/header-logo.svg" alt="img">
      <nav>
        <ul class="navlink">
          <li><a href="index.html">Home</a></li>
          <li><a href="news.php">News</a></li>
          <li><a href="sucess.php">Sucess Story</a></li>
          <li><a href="index.html#contact">Contact Us</a></li>
        </ul>
      </nav>
      <a href="login.php" class="hvr-grow"><button>Sign-In</button></a>

    </header>

    <div class="container">
    <?php foreach ($news as $new): ?>
        <div class="item hvr-round-corners" onclick="openDetailsPage(<?php echo $new['id']; ?>)">
            <img class="hvr-round-corners" src="img/<?php echo $new['pic']; ?>" alt="img1">
            <p><?php echo $new['title']; ?></p>
        </div>
    <?php endforeach; ?>
    </div>

<script>
    function openDetailsPage(itemId) {
        // Redirect to the details page with the item ID as a parameter
        window.location.href = "new.php?id=" + itemId;
    }
</script>

</body>
</html>