<?php
  ini_set('display_errors','On');
  $PageName = "Ender's Information";
  $Title = $PageName;
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">

  <?php include"../_resources/header.php"; ?>

  <body style="background-color:black;background-image:url('../_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    
    <?php include "../_resources/navbar.php"; ?>
    <div class="row">
      <h1 style="color:white;font-family:'Rock Salt'">About</h1>
      <p style="color:white;font-family:'Arial'">
        Well, I'm roughly 924 earth years old. My home planet is called Thra-- Oh, you mean my real self?
        hmm, okay.<br><br>

        I'm an extremely sarcastic 18 year old female from England. I do random stuff on the internet like host this
        and other's sites ( see StargateTech2's wiki for example ). I also run an IRC bouncer for people ( though I
        generally prefer that I know before hand in various IRC channels on the EsperNet network ).<br><br>

        I also operate a server for the PC-Logix Network owned by Michiyo, you can get on to it by connecting to either
        irc.pc-logix.com using standard IRC ports or by directly connecting to this address, take your pick.<br><br>

        Might write some more info here later but for now, bye.

      </p>
    </div>

    <div class="row">
      <h1 style="color:white;font-family:'Rock Salt'">Ways to contact me</h1>
      <p style="color:white;font-family:'Arial'">
        Well, you can reach me by <a href="https://www.twitter.com/LizzyTheSiren">Twitter @LizzyTheSiren</a>,<br>
        via IRC on either EsperNet ( usually as "Lizzy" in #oc or #vifino ) or PC-Logix ( usually as "Lizzy" ),<br>
        via XMPP ( trickster@coderollers.com ) or via the ( Currently non-existent ) web form below.<br>

      </p>
    </div>

    <script src="../_resources/js/vendor/jquery.js"></script>
    <script src="../_resources/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
