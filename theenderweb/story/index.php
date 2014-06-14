<?php
  ini_set('display_errors','On');
  $Title = "Ender's Story Corner";
  $PageName = "Ender's Story Corner";
  ini_set("log_errors", 1);
  ini_set("error_log", "./php-error.log");
?>
<!doctype html>
<html class="no-js" lang="en">

  <?php include"../_resources/header.php"; ?>

  <body style="background-color:black">
    
    <?php include "../_resources/navbar.php"; ?>
    <div class="row">
      <h1 style="color:white"><i>Foreword</i></h1>
      <hr>
      <p style="color:white">
        This story is semi-based around ShadowKatStudios' story so I may link
        parts for you ( the reader ) to go read before hand. When I write the
        story and post it up here, <b>it will not be in chronological order</b>.
        If you have ever played <i>Beyond: Two Souls</i> on the PS3 then my
        uploading style may be similar to that. I will post a 'timeline' picture
        to indicate where abouts that chapter happens :)<br>Anyway, Ender out o/
      </p>
    </div>
    <br>


    <?php
      $dir = "docs";
      $files = array_diff(scandir($dir), array('..', '.'));
      #print_r($files);
      foreach ($files as $file) {
        $myfile = fopen($dir."/".$file, "r") or die("Unable to open file!");
        echo fread($myfile,filesize($dir."/".$file));
        fclose($myfile);
      };
    ?>
    
    <script src="../_resources/js/vendor/jquery.js"></script>
    <script src="../_resources/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
