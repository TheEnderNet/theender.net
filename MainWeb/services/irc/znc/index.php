<?php ini_set('display_errors','On'); $Title = "Ender's Services"; $PageName = "Ender's Services"; ?>

<!DOCTYPE HTML>
<html class="no-js" lang="en">

  <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/header.php"; ?>

  <body style="background-color:black;background-image:url('/_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/navbar.php"; ?>
    <div class="row">
      <div class="large-6-centered columns">
        <h1 style="text-shadow: 0 0 1px #000000, 0 0 10px #FFFFFF;text-align:center">
          <b style="font-family:'Audiowide';color:white">Ender/Lizzy's Bouncer</b>
        </h1>
        <h3 style="<?php echo $Color; ?>">
          I run an IRC bouncer on my 3 servers, Heyo, Anquietas and Thor. Most of the current users are
          primararilly on the EsperNet network but there are no limitations on what network you can join
          using my bouncer. If you would like to request an account please message me on 
          <a href="/services/irc/network/">my network</a> as <b>Lizzy</b>.
        </h3>
      </div>
    </div>

    <script src="/_resources/js/vendor/jquery.js"></script>
    <script src="/_resources/js/vendor/fastclick.js"></script>
    <script src="/_resources/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
