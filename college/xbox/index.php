<?php
    $title = "Kris' Games";
    ini_set("log_errors", 1);
    ini_set("error_log", "./php-error.log");
?>
<!DOCTYPE HTML>
<html>

  <?php include "../resources/header.php"; ?>

  <body>
    <?php include "../resources/bannerAndNavbar.php"; ?>
    <div class="row">
        <div class="large-12 columns"> <h1><center> Recent additions </center></h1></div>
        <div class="large-6 columns panel">
            <a href="#360"><h2 style="color:blue"> Xbox 360 </h2></a>
            <hr>
            <img src="../img/noimg.png">
            <p>This is the start of a paragraph for teh PlayStation content</p>
        </div>
        <div class="large-6 columns panel">
            <a href="#one"><h2 style="color:green"> Xbox One </h2></a>
            <hr>
            <img src="../img/noimg.png">
            <p>This is the start of a paragraph for teh Xbox content</p>
        </div>
    </div>

  </body>
</html>
