<?php
  ini_set('display_errors','On');
  $Title = "Lizzy's Home";
  $PageName = "Lizzy's Lair";
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
        I'm Lizzy, a 19 year-old Punk chick from England. This site is the home to my stories: <i>Ender's Game</i> (not to be confused with the novels/film of the same name)
        and <i>Zero Hour</i>, incomplete information pages for some of the services I provide, some art and some of my (incomplete) minecraft mods. Head over to the 
        <a href="/information/">info page</a> to see how you can contact me.
      </p>
    </div>
    <br>
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

    
    <script src="/_resources/js/vendor/jquery.js"></script>
    <script src="/_resources/js/vendor/fastclick.js"></script>
    <script src="/_resources/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
