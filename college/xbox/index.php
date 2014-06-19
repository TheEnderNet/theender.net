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
        <div class="large-12 columns"> <h1><center> Recent additions </center></h1></div><hr>
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
    <br>

    <div class="row">
        <a name="360">
            <div class="large-12-centered"> <h1><center> Xbox 360 </center></h1></div><hr>
        </a>

        <div class="large-4 columns panel">
            <h2> Game title here </h2>
            <hr>
            <img src="../img/noimg.png"><a href="" class="button tiny">&#8356;0</a>
            <p>Game description here</p>
        </div>

        <div class="large-4 columns panel">
            <h2> Game title here </h2>
            <hr>
            <img src="../img/noimg.png"><a href="" class="button tiny">&#8356;0</a>
            <p>Game description here</p>
        </div>

        <div class="large-4 columns panel">
            <h2> Game title here </h2>
            <hr>
            <img src="../img/noimg.png"><a href="" class="button tiny">&#8356;0</a>
            <p>Game description here</p>
        </div>
    </div>
    <br>

    <div class="row">
        <a name="One">
            <div class="large-12-centered"> <h1><center> Xbox One </center></h1></div><hr>
        </a>

        <div class="large-4 columns panel">
            <h2> Game title here </h2>
            <hr>
            <img src="../img/noimg.png"><a href="" class="button tiny">&#8356;0</a>
            <p>Game description here</p>
        </div>

        <div class="large-4 columns panel">
            <h2> Game title here </h2>
            <hr>
            <img src="../img/noimg.png"><a href="" class="button tiny">&#8356;0</a>
            <p>Game description here</p>
        </div>

        <div class="large-4 columns panel">
            <h2> Game title here </h2>
            <hr>
            <img src="../img/noimg.png"><a href="" class="button tiny">&#8356;0</a>
            <p>Game description here</p>
        </div>
    </div>

  </body>
</html>
