<?php
  ini_set('display_errors','On');
  $Title = "Ender's Home";
  $PageName = "Ender's Lare"
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">
  
  <?php include"_resources/header.php"; ?>
  
  <body style="background-color:black;background-image:url('../_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    <?php include "_resources/navbar.php"; ?>

    <div class="row">
      <h1 style="color:white;font-family:'Rock Salt'"><center><b>Hello</b></center></h1>
      <hr>
      <p style="color:white">
        Well hello there, welcome to my site.<br>
        This site is home to my random projects and may include stuff from other people :) <br>
        Use the links up the top or at the side or wherever I decide to throw them, to get to the other areas of my site. <br>
        As you can probably tell at the moment theres not much on here, I know about it and I am adding more content when I have the time :) <br>
      </p>
    </div>
    
    <div class="row"><center><b><h1 style="color:white;font-family:'Rock Salt'">News Be Below</h1><b></center><hr style="color:green"></div>

    <?php
      $dir = "docs";
      $files = array_diff(scandir($dir), array('..', '.'));
      foreach ($files as $file) {
        $myfile = fopen($dir."/".$file, "r") or die("Unable to open file!");
        echo fread($myfile,filesize($dir."/".$file));
        fclose($myfile);
      };
    ?>

    
    <script src="_resources/js/vendor/jquery.js"></script>
    <script src="_resources/js/vendor/fastclick.js"></script>
    <script src="_resources/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
