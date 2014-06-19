<?php
    $title = "Kris' Games";
    ini_set("log_errors", 1);
    ini_set("error_log", "./php-error.log");
?>
<!DOCTYPE HTML>
<html>

  <?php include "resources/header.php"; ?>

  <body>
    <?php include "resources/bannerAndNavbar.php"; ?>
    <div class="row">
        <div class="large-12 columns"> <h1>Recent additions</h1> </div>
        <div class="large-4 columns panel">
            <h2 style="color:blue">Playstation</h2><hr>
            <h3>Grand Theft Auto 5</h3>
            <hr>
            <img src="playstation/img/gta5.jpg" width="150" height="183">
            <p>This is the best game in the world</p>
        </div>
        <div class="large-4 columns panel">
            <h2 style="color:green">Xbox</h2><hr>
            <h3>game title here</h3>
            <hr>
            <img src="img/noimg.png">
            <p>Game description here</p>
        </div>
        <div class="large-4 columns panel">
            <h2 style="color:red">PC</h2><hr>
            <h3>game title here</h3>
            <hr>
            <img src="img/noimg.png">
            <p>Game description here</p>
        </div>
    </div>

  </body>
</html>
