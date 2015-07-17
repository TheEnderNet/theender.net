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
    <div class="row"><h1 style="color:white;font-family:'Audiowide'"><center>Zero Hour</center></h1><hr></div>
    <div class="row">
      <h1 style="color:white"><i>Foreword</i></h1>
      <p style="color:white">
        This story is intending to be a sort of continuation from <i>Ender's Game</i>.
        It <i>should</i> have less consistancy errors because when I write chapters for this
        story I do them generally in one sitting instead of on the bus on a small mobile.

        Anyway, enough of my ramblings. Enjoy the story.
        Lizzy out <i>* Lizzy warps out</i>
      </p>
    </div>
    <br>
    <div class="row">
      <div class="panel">
        <?php
          $files = array_diff(scandir($DocDir), array('..', '.'));
          if (!empty($_GET["page"]) ) {
            foreach ($files as $file) {
              $mfile = fopen($DocDir."/".$file, "r") or die("Unable to open file!");
              if (basename($DocDir."/".$file, ".html") === $_GET["page"]) {
                echo fread($mfile, filesize($DocDir."/".$file));
              };
            };
          } else {
            $file = fopen($DocDir."/01.html", "r") or die("Oh Shit!");
            echo fread($file, filesize($DocDir."/01.html"));
            fclose($file);
          };
        ?>
      </div>
    </div>

    <script src="/_resources/js/vendor/jquery.js"></script>
    <script src="/_resources/js/vendor/fastclick.js"></script>
    <script src="/_resources/js/foundation.min.js"></script>
    <script> $(document).foundation(); </script>
  </body>
</html>
