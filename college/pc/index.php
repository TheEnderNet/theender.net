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
        <div class="large-12 columns"> <h1>Recent additions</h1> </div>
        <div class="large-4 columns panel">
            <h2 style="color:blue">Game title here</h2>
            <p>This is the start of a paragraph for the content</p>
        </div>
        <div class="large-4 columns panel">
            <h2 style="color:green">Game title here</h2>
            <p>This is the start of a paragraph for the Xbox content</p>
        </div>
        <div class="large-4 columns panel">
            <h2 style="color:red">Game title here</h2>
            <p>This is the start of a paragraph for the PC content</p>
        </div>
    </div>

    <div class="row">
        <a name="pc">
            <div class="large-12-centered">
                <h1><center>PC</center></h1>
                <hr>
            </div>
        </a>

        <div class="large-4 columns panel">
            <h2>game title here</h2>
            <hr>
            <img src="../img/noimg.png">
            <p>Game description here</p>
        </div>

        <div class="large-4 columns panel">
            <h2>game title here</h2>
            <hr>
            <img src="../img/noimg.png">
            <p>Game description here</p>
        </div>

        <div class="large-4 columns panel">
            <h2>game title here</h2>
            <hr>
            <img src="../img/noimg.png">
            <p>Game description here</p>
        </div>

        <div class="large-4 columns panel">
            <h2>game title here</h2>
            <hr>
            <img src="../img/noimg.png">
            <p>Game description here</p>
        </div>

        <div class="large-4 columns panel">
            <h2>game title here</h2>
            <hr>
            <img src="../img/noimg.png">
            <p>Game description here</p>
        </div>

        <div class="large-4 columns panel">
            <h2>game title here</h2>
            <hr>
            <img src="../img/noimg.png">
            <p>Game description here</p>
        </div>
    </div>

  </body>
</html>
