<?php
  ini_set('display_errors','On');
  $Title = "Ender's Story Corner";
  $PageName = "Ender's Story Corner";
  ini_set("log_errors", 1);
  ini_set("error_log", "./php-error.log");
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">

  <?php include"../_resources/header.php"; ?>

  <body style="background-color:black;background-image:url('../_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    
    <?php include "../_resources/navbar.php"; ?>
    <div class="row"><h1 style="color:white;font-family:'Rock Salt'"><center>The Ender's Game</center></h1><hr></div>
    <div class="row">
      <h1 style="color:white"><i>Foreword</i></h1>
      <hr>
      <p style="color:white">
        This story is semi-based around ShadowKatStudios' story (<a href="http://shadowkatstudios.gweb.io/story/index.htm">LINK</a>) so I may link
        parts for you ( the reader ) to go read before hand. When I write the
        story and post it up here, <b>it <del>will</del> <i>may</i> not be in chronological order</b>.
        If you have ever played <i>Beyond: Two Souls</i> on the PS3 then my
        uploading style may be similar to that. I will post a 'timeline' picture
        to indicate where abouts that chapter happens :)<br>
        Also some of the characters may be based on people I know in real life; If your character does
        something unlike real life, just remember that it's fiction :)<br>
        Anyway, Ender out o/
      </p>
    </div>
    <br>

    <div class="row">
      <ul class="orbit" data-orbit>
        <?php
          $dir = "docs";
          $files = array_diff(scandir($dir), array('..', '.'));
          #print_r($files);
          foreach ($files as $file) {
            $myfile = fopen($dir."/".$file, "r") or die("Unable to open file!");
            echo "<li>".fread($myfile,filesize($dir."/".$file))."</li>";
            fclose($myfile);
          };
        ?>
      </ul>
    </div>
    
    <script src="../_resources/js/vendor/jquery.js"></script>
    <script src="_resources/js/foundation/foundation.js"></script>
    <script src="_resources/js/foundation/foundation.topbar.js"></script>
    <script>
      $(document).foundation({
          orbit: {
              animation: 'slide',
              next_on_click: true, 
              animation_speed: 1500, 
              stack_on_small: false,
              navigation_arrows: true,
              slide_number: false,
              timer: false, 
              variable_height: false, 
              circular: false,
              bullets: false
          }
      });
    </script>
  </body>
</html>
