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
          I run an IRC bouncer. If you would like to request an account please message me on 
          <a href="/services/irc/network/">my network</a> as <b>Lizzy</b> or fill out
          <a href="">this form</a>.<br><br>
          <a href="" data-reveal-id="modModal">Terms &amp; Conditions for bouncer use.</a>
        </h3>
      </div>
    </div>

    <div id="modModal" class="reveal-modal" data-reveal>
      <div class="row">
        <h2 style="text-align:center">Terms and Conditions for EnderBNC</h2><hr>
        <p>
          By using this BNC ( now refered to as "service") you hereby agree to adhere to the points lited below<br>
          <ol>
            <li>You may not use the service to:<br>
              <ul>
                <li>You may not use the service to evade bans.</li>
                <li>You may not use the service to promote or spread hate speach/racism</li>
              </ul>
            </li>
            <li>You may use the service to:<br>
              <ul>
                <li>Have fun</li>
                <li>Chat with your friends</li>
                <li>Other things that don't involve the stuff on the list above</li>
              </ul>
            </li>
            <li>Remember to use common sense! If you feel something may offend someone, keep it to yourself.</li>
          </ol>
        </p>
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
