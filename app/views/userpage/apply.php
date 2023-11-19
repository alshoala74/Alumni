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
    <link href="<?=PATH;?>front/css/styleapply.css" rel="stylesheet">
    <link rel="icon" href="<?=PATH;?>front/img/icon.png" >
  

</head>
<body>
<!-- <header> -->
<section>
        <header class="navs">
            <img class="logo"src="<?=PATH;?>front/img/header-logo.svg" alt="img">
            <nav>
                <ul class="navlink">
                <li><a href="<?=PATH;?>user/index">Home</a></li>
                <li><a href="<?=PATH;?>user/alumni">Almunis</a></li>
                <li><a href="<?=PATH;?>user/jobbord">Job Board</a></li>
                </ul>
            </nav>
            <a href="<?=PATH;?>user/userprofile" >
            <img class="pfpimgb pfpimg hvr-grow" src="<?=PATH;?>front/img/<?php echo $data->pfp;?>" alt="pfp" onclick="showLogoutPopup()">
            </a>        
        </header>
</section>
<!-- </header> -->

      

      <section class="applysection">
      <?php foreach($jobs as $jobs): ?>
        <form method="post" action="<?=PATH;?>user/postapply/<?php echo $jobs['id'];?>" enctype="multipart/form-data">
        <?php endforeach; ?>
            <h2>Apply</h2>
            <div class="input-container">
              <div class="input">
                  <h3>Name</h3>
                  <input name="name" id="name" type="text" required>
                  <h3>Email</h3>
                  <input name="email" id="email" type="email" required>
              </div>
              <div class="input-file">
              <h3>CV</h3>
              <input class="file-input"type="file" name="cv" id="cv" required>
              </div>
            </div>
            <div class="button-container">
              <button>Apply</button>
            </div>
        </form>
         
      </section>

     
</body>
</html>