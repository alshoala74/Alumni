<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
    <link href="<?=PATH;?>front/css/servay.css" rel="stylesheet">
    <link rel="icon" href="<?=PATH;?>front/img/icon.png" >
</head>
<body>
    <!-- <header> -->
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

    <!-- </header> -->
    <div class="container">
        <form  method="post" action="<?=PATH;?>home/postservay/<?php echo $id;?>">
            <div class="q">
                <label>Full Name: *</label><br>
                <input type="text" name="q1" required><br>
                <label>Organisation: *</label><br>
                <input type="text" name="q2" required><br>
                <label>Email Address: *</label><br>
                <input type="email" name="q3" required><br>
                <label>Phone Number: *</label><br>
                <input type="number" name="q4" required><br>
            </div>

            <div class="q">
                <label> Your employee's programme at UTB: *</label><br>
                <select name="q5" required>
                <option value="BS in Accounting and Finance">BS in Accounting and Finance</option>
                <option value="BS in International Business">BS in International Business</option>
                <option value="BS in Business Informatics">BS in Business Informatics</option>
                <option value="MBA">MBA</option>
                <option value="BS in Information Technology">BS in Information Technology</option>
                <option value="BS in Computer Science">BS in Computer Science</option>
                <option value="BS in Informatics Engineering">BS in Informatics Engineering</option>
                <option value="BS in Mechatronics Engineering">BS in Mechatronics Engineering</option>
                <option value="BS in Environmental Engineering">BS in Environmental Engineering</option>
                </select><br>
            </div>

          
            
            <div class="q">
            <label class="qua" for="q6" > How many UTB graduates have you employed? *</label><br>
            <input type="radio" name="q6" value="Less than 5" required>
            <label> Less than 5</label><br>
            <input type="radio" name="q6" value="5-10" required>
            <label> 5-10</label><br>
            <input type="radio" name="q6" value="More than 10" required>
            <label> More than 10</label><br>
            </div>
        
            <div class="q">
            <label for="q7">Do they demonstrate depth of knowledge and mastery of specialization ? *</label><br>
            <input type="radio"  name="q7" value="Strongly Disagree" required>
            <label> Strongly Disagree</label><br>
            <input type="radio" name="q7" value="Disagree" required>
            <label> Disagree</label><br>
            <input type="radio"  name="q7" value="Neutral" required>
            <label> Neutral</label><br>
            <input type="radio" name="q7" value="Agree" required>
            <label> Agree</label><br>
            <input type="radio" name="q7" value="Strongly Agree" required>
            <label> Strongly Agree</label><br>
            </div>

            <div class="q">
            <label for="q8">Do they demonstrate effective Communication Skills ?*</label><br>
            <input type="radio"  name="q8" value="Strongly Disagree" required>
            <label> Strongly Disagree</label><br>
            <input type="radio" name="q8" value="Disagree" required>
            <label> Disagree</label><br>
            <input type="radio"  name="q8" value="Neutral" required>
            <label> Neutral</label><br>
            <input type="radio" name="q8" value="Agree" required>
            <label> Agree</label><br>
            <input type="radio" name="q8" value="Strongly Agree" required>
            <label> Strongly Agree</label><br>
            </div>

            <div class="q">
            <label for="q9">How effective are UTB Alumni at work ? *</label><br>
            <textarea name="q9"rows="4" cols="50" required></textarea>
            </div>

            <div class="q">
            <label for="q10">  Do you have suggestions for improving the academic programme? [Optional]</label><br>
            <textarea name="q10" rows="4" cols="50"></textarea>
            </div>

            <button>Submit</button>
        </form>
    </div>
</body>
</html>