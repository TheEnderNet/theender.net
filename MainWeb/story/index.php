<?php
  ini_set('display_errors','On');
  $Title = "Ender's Story Corner";
  $PageName = "Ender's Story Corner";
  ini_set("log_errors", 1);
  ini_set("error_log", "./php-error.log");
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">

  <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/header.php"; ?>

  <body style="background-color:black;background-image:url('/_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    
    <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/navbar.php"; ?>
    <div class="row"><h1 style="color:white;font-family:'Rock Salt'"><center>Ender's Story Corner</center></h1></div>
    <div class="row">
      <h2 style="color:white"><i><center>Why hello there!</center></i></h2>
      <hr>
      <p style="color:white">
        <center>You've found my story corner, feel free to stay and look around :)</center>
      </p>
    </div>
    <br>
    <div class="row">
      <div class="large-6 medium-6 columns">
        <h2 style="color:white;font-family:'Rock Salt'"><center>Ender's Game</center></h2>
        <p style="color:white">
          Super human beings breaking the laws of Time & Space one at a time.
        </p>
      </div>
      <div class="large-6 medium-6 columns">
        <h2 style="color:white;font-family:'Audiowide'"><center>Zero Hour</center></h2>
        <p style="color:white">
          Spoilers...
        </p>
      </div>
    </div>

    <script src="/_resources/js/vendor/jquery.js"></script>
    <script src="/_resources/js/vendor/fastclick.js"></script>
    <script src="/_resources/js/foundation.min.js"></script>
    
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
