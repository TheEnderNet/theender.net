<?php
    $title = "Kris' Games";
    ini_set("log_errors", 1);
    ini_set("error_log", "./php-error.log");
?>
<!DOCTYPE HTML>
<html>

  <?php include "header.php"; ?>

  <body>
    <?php include "bannerAndNavbar.php"; ?>

    <div class="row">
      <div class="large-12 columns"> <h1><center>Contact</center></h1> </div><hr></div>
    </div>



    <form>
      <div class="row">
        <div class="large-2 columns panel"></div>
        <div class="large-8 columns panel">
          <div class="large-2 columns">
            <label>Name
              <input type="text" />
            </label>
          </div>
          <div class="large-2 columns">
            <label>Section
              <input type="text" placeholder="Home" />
            </label>
          </div>
          <div class="large-4 columns">
            <label>Contact back Email
              <input type="text" placeholder="Someone@something.co.uk" />
            </label>
          </div>
        </div>
        <div class="large-2 columns panel"></div>
      </div>
    </form>
  </body>
</html>
