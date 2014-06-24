<?php
  ini_set('display_errors','On');
  $Title = "LaserCraft | Ender";
  $PageName = "LaserCraft";
  ini_set("log_errors", 1);
  ini_set("error_log", "./php-error.log");
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">

  <?php include"../_resources/header.php"; ?>

  <body style="background-color:black;background-image:url('../_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    
    <?php include "../_resources/navbar.php"; ?>
    <div class="row">
      <h1 style="color:white"><center>Well, what <i>is</i> LaserCraft?</center></h1>
      <hr>
      <p style="color:white">
        LaserCraft is a modification for Minecraft made by me (JoshTheEnder).<br>
        It adds, as the name suggests, lasers to Minecraft. This page (and other pages along this path) will have information about the mod.<br>
        For now it'll be an empty shell until the first initial release :)<br>
        If you want to come chat with me and see the progress I make, come on the IRC channel 
        <a href="http://webchat.esper.net/?nick=SiteUser..&channels=LaserCraft&prompt=1" target="_blank">#LaserCraft @ irc.esper.net</a>
        (that is a link to the esper webchat, if you have a desktop client and are connected to esper just do /join #LaserCraft )
      </p>
    </div>
    <br>
       
    <script src="../_resources/js/vendor/jquery.js"></script>
    <script src="../_resources/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
