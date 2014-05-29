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
            <h2 style="color:blue">PlayStation 2</h2>
            <p>This is the start of a paragraph for the PlayStation content</p>
        </div>
        <div class="large-4 columns panel">
            <h2 style="color:green">PlayStation 3</h2>
            <p>This is the start of a paragraph for the Xbox content</p>
        </div>
        <div class="large-4 columns panel">
            <h2 style="color:red">Playstation 4</h2>
            <p>This is the start of a paragraph for the PC content</p>
        </div>
    </div>

  </body>
</html>
