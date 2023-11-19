<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=PATH;?>front/css/hover-min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5fbbe9e138.js" crossorigin="anonymous"></script>
    <link href="<?=PATH;?>front/css/stylealmuni.css" rel="stylesheet">
    <link rel="icon" href="<?=PATH;?>front/img/icon.png" >
    
    
    <title><?= $title;?></title>
</head>
<body>

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

<section class="cont">
            <div class="search-wrapper"> 
                    <label for="search">Search Student</label>
                    <h3>Enter Name or Email</h3>
                    <div class="body2">
                <div class="box">
                    <input data-search type="search" class="input" name="txt" >
                    <i class="fas fa-search search-icon" ></i>
                </div>
                </div>
            </div>

           
                <div class="container">
                <?php foreach($users as $pa): ?>
                    <?php if ($pa['username'] === $data->username): ?>
                    <a style="text-decoration: none;" user-cards href="<?=PATH;?>user/userprofile" class="user-cards">
                <?php else: ?>
                    <a style="text-decoration: none;" user-cards href="<?=PATH;?>user/searchuserprofile/<?php echo $pa['username']; ?>" class="user-cards" >
                <?php endif; ?>
                <div class="card">
                    <img class="pfpimg hvr-grow" src="<?=PATH;?>front/img/<?php echo $pa['pfp']; ?>" alt="pfp">
                    <div data-header class="header"><?php echo $pa['username']; ?></div>
                    <div data-body class="body"><?php echo $pa['email']; ?></div>
                    <div data-body2 class="body"><?php echo $pa['id_num']; ?></div>
                    
                    
                </div>
                </a></a>
                <?php endforeach; ?>
                </div>
            
</section>


<script src="<?=PATH;?>front/js/Particpent.js"></script>


  
</body>
</html>