<?php
  ini_set('display_errors','On');
  $Title = "Lizzy's Art Corner";
  $PageName = "Lizzy's Art Corner";
  $ArtDir = "img";
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">

  <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/header.php"; ?>

  <body style="background-color:black;background-image:url('/_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    
    <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/navbar.php"; ?>
    <div class="row">
      <ul class="clearing-thumbs small-block-grid-4" data-clearing>
        <?php 
          $arts = array_diff(scandir($ArtDir), array('..', '.'));
          foreach ($arts as $art) {
            $det = explode(".", $art);
            echo "<li><a href=".$ArtDir."/".$art."><img data-caption=".$det[0]." src=".$ArtDir."/".$art."></a></li>";
          }

        ?>
      </ul>
    </div>

    <script src="/_resources/js/vendor/jquery.js"></script>
    <script src="/_resources/js/vendor/fastclick.js"></script>
    <script src="/_resources/js/foundation.min.js"></script>
    <script> $(document).foundation(); </script>
  </body>
</html>
