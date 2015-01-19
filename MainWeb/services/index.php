<?php
  ini_set('display_errors','On');
  $Title = "Ender's Services";
  $PageName = "Ender's Services";
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">
  
  <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/header.php"; ?>
  
  <!--<body style="background-color:black;background-image:url('/_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">-->
  <body>
    <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/navbar.php"; ?>
    <div class="row">
        <div class="large-6-centered columns">
            <h1 style="text-shadow: 0 0 8px #FFFFFF;text-align:center">
                This section is still a WIP
            </h1>
        </div>
    </div>
    <div class="row">
        <?php
            echo $_SERVER['SCRIPT_FILENAME'];
            echo $_SERVER['PHP_SELF'];
            echo $_SERVER['SCRIPT_UR'];
        ?>
    
    
    <?php
      $files = array_diff(scandir($dir), array('..', '.'));
      foreach ($files as $file) {
        $myfile = fopen($dir."/".$file, "r") or die("Unable to open file!");
        echo fread($myfile,filesize($dir."/".$file));
        fclose($myfile);
      };
    ?>
    
    </div>
    <script src="/_resources/js/vendor/jquery.js"></script>
    <script src="/_resources/js/vendor/fastclick.js"></script>
    <script src="/_resources/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
