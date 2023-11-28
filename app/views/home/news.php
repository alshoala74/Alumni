


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
    <link href="<?=PATH;?>front/css/all.min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/hover-min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/stylefont.css"rel="stylesheet">
    <link href="<?=PATH;?>front/css/news.css" rel="stylesheet">
    <link rel="icon" href="<?=PATH;?>front/img/icon.png" >
</head>
<body>  

 <section>
 <header class="navs">
      <img class="logo"src="<?=PATH;?>front/img/header-logo.svg" alt="img">
      <nav>
        <ul class="navlink">
          <li><a href="<?=PATH;?>home">Home</a></li>
          <li><a href="<?=PATH;?>home/news">News</a></li>
          <li><a href="<?=PATH;?>home/sucess">Success Stories</a></li>
          <li><a href="<?=PATH;?>home/events">Events</a></li>
          <li><a href="<?=PATH;?>home/more">More</a></li>
        </ul>
      </nav>
      <a href="<?=PATH;?>home/login" class="hvr-grow"><button>Sign-In</button></a>
</header>
</section>

    <div class="container">
    <?php foreach ($news as $new): ?>
        <div class="item hvr-round-corners" onclick="openDetailsPage(<?php echo $new['id']; ?>)">
        <img class="hvr-round-corners" src="<?= PATH; ?>front/img/<?= $new['pic']; ?>" alt="img1">
        <p><?= $new['title']; ?> </br> <span><?= $new['date']; ?></span> </p> 
        
        </div>
    <?php endforeach; ?>
    </div>

    <script>
    function openDetailsPage(itemId) {
        // Redirect to the details page with the item ID as a parameter
        window.location.href = "<?= PATH; ?>home/new/" + itemId;
    }
    </script>

</body>
</html>