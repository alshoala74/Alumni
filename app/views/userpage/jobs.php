<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
    <link href="<?=PATH;?>front/css/hover-min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5fbbe9e138.js" crossorigin="anonymous"></script>
    <link href="<?=PATH;?>front/css/stylejob.css" rel="stylesheet">
    <script src="<?=PATH;?>front/js/jobs.js" defer></script>
    <link rel="icon" href="<?=PATH;?>front/img/icon.png" >
    
</head>
<body>
<!-- <header> -->


<section>
 <header class="navs">
      <img class="logo"src="<?=PATH;?>front/img/header-logo.svg" alt="img">
      <nav>
        <ul class="navlink">
            <li><a href="<?=PATH;?>user/index">Alumni Community</a></li>
            <li><a href="<?=PATH;?>user/alumni">Alumni Directory</a></li>
            <li><a href="<?=PATH;?>user/jobbord">Job Board</a></li>
        </ul>
      </nav>
      <a href="<?=PATH;?>user/userprofile" >
      <img class="pfpimgb pfpimg hvr-grow" src="<?=PATH;?>front/img/<?php echo $data->pfp;?>" alt="pfp" onclick="showLogoutPopup()">
      </a>        
</header>
</section>
<!-- </header> -->
<div class="cont">
        <div class="search-wrapper"> 
                    <label for="search">Search Job Board</label>
                    <h3>Enter Degree</h3>
               <div class="body2">
               <div class="box">
                    <input data-search type="search" class="input" name="txt" >
                    <i class="fas fa-search search-icon" ></i>
               </div>
               </div>
        </div>
</div>

<!-- <jobs> -->
    <div class="container">
        <?php foreach($jobs as $jobs): ?>
            <div class="item item1">
                <h2><?php echo $jobs['jobname'];?></h2>
                <h4><?php echo $jobs['companyname'];?><br><?php echo $jobs['place'];?>
                <br><span degree><?php echo $jobs['degree'];?></span></h4>
                <p> <?php echo nl2br($jobs['disc']);?></p>
                <button ><a style="color:white;"href="<?=PATH;?>user/apply/<?php echo $jobs['id'];?>">Apply</a></button>
            </div>
        <?php endforeach; ?>
        
    </div>
<!-- </jobs> -->

</body>
</html>