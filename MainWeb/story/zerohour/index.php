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
    <div class="row"><h1 style="color:white;font-family:'Audiowide';text-align:center">Zero Hour</h1></div>
    <div class="row">
      <hr>
      <p style="color:white;text-align:center">
        <img src="http://imgs.xkcd.com/comics/joshing.png">
      </p>
    </div>
    <div class="row">
      <div class="small-1-centered columns">
        <h6 style="color:gray;text-align:center"><a href="browser.php">What's This?</a></h6>
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
