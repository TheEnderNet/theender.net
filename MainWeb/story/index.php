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
    <div class="row"><h1 style="color:white;font-family:'Indie Flower';text-align:center">Ender's Story Corner</h1></div>
    <div class="row">
      <h2 style="color:white;text-align:center"><i>Why hello there!</i></h2>
      <hr>
      <p style="color:white;text-align:center">
        You've found my story corner, feel free to stay and look around :)
      </p>
    </div>
    <br>
    <div class="row">
      <div class="large-6 medium-6 columns">
        <h2 style="color:white;font-family:'Rock Salt';text-align:center">Ender's Game</h2>
        <p style="color:white;text-align:center">
          Super human beings breaking the laws of the Space-Time Continuum one at a time.<br>
          <a href="/story/endersgame/" class="button large expanded radius">Shaddup and tell me a damn story</a>
        </p>
      </div>
      <div class="large-6 medium-6 columns">
        <h2 style="color:white;font-family:'Audiowide';text-align:center">Zero Hour</h2>
        <p style="color:white;text-align:center">
          Spoilers...<br>
          <a href="#" class="button large expanded radius">Enter the void</a>
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
