<?php
  ini_set('display_errors','On');
  $Title = "Ender's Story Corner";
  $PageName = "Ender's Story Corner";
  ini_set("log_errors", 1);
  ini_set("error_log", "./php-error.log");
  $DocDir = "docs";
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">

  <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/header.php"; ?>

  <body style="background-color:black;background-image:url('/_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    
    <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/navbar.php"; ?>
    <div class="row"><h1 style="color:white;font-family:'Rock Salt'"><center>Ender's Game</center></h1><hr></div>
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
      <?php
        echo "BLAHBLAH".$_GET["page"]."BLAHBLAH<br>";
        $files = array_diff(scandir($DocDir), array('..', '.'));
        if (!empty($_GET["page"]) ) {
          foreach ($files as $file) {
            $mfile = fopen($DocDir."/".$file, "r") or die("Unable to open file!");
            echo basename($DocDir."/".$file);
            if (basename($DocDir."/".$file) === $_GET["page"]) {
              echo fread($mfile, filesize($DocDir."/".$file));
            };
          };
        } else {
          $file = fopen($DocDir."/01.txt", "r") or die("Oh Shit!");
          echo fread($file, filesize($DocDir."/01.txt"));
          fclose($file);
        };
      ?>
    </div>

        <?php /*
          $dir = "docs";
          #print_r($files);
          foreach ($files as $file) {
            $myfile = 
            echo "<li>".fread($myfile,filesize($dir."/".$file))."</li>";
            fclose($myfile);
          };
        */
        ?>
    
    <script src="/_resources/js/vendor/jquery.js"></script>
    <script src="/_resources/js/vendor/fastclick.js"></script>
    <script src="/_resources/js/foundation.min.js"></script>
    <!--script> $(document).foundation(); </script-->
    
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
