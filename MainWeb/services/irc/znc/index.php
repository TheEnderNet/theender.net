<?php ini_set('display_errors','On'); $Title = "Ender's Services"; $PageName = "Ender's Services"; ?>

<!DOCTYPE HTML>
<html class="no-js" lang="en">

  <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/header.php"; ?>

  <body style="background-color:black;background-image:url('/_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/navbar.php"; ?>
    <div class="row">
      <div class="large-6-centered columns">
        <h1 style="text-shadow: 0 0 8px #FF00FF;text-align:center">
          <b style="font-family:'Audiowide';<?php echo $Color; ?>">Ender's Services</b>
        </h1>
        <h3 style="<?php echo $Color; ?>">
          I run my fair share of public accessible services, the majority of them being IRC based.
          Click the links below to be taking to pages for the relevant area.
        </h3>
      </div>
    </div>
    
    <div class="row" data-equalizer>
      <div class="small-6 columns panel" data-equalizer-watch>
        <h2 style="text-align:center;font-family:'Audiowide'">Minecraft</h2><hr>
        <p style="text-align:center">
          I host a Minecraft server called <em><b>The Enderverse</b></em>
          on a Kimsufi Dedicated server named <em><b>Thor</b></em> hosted in Canada.
        </p>
        <p style="text-align:center"><a href="/services/enderverse/" class="button expand">More info through here <i class="fi-link"></i></a></p>
      </div>
      <div class="small-6 columns panel" data-equalizer-watch>
        <h2 style="text-align:center;font-family:'Audiowide'">IRC</h2><hr>
        <p style="text-align:center">
          I host an IRC bouncer (ZNC), a network and a node for another network (confusing? Yes, it is.).<br>
          <b>NOTE:</b> These don't go anywhere at the moment, there should be information on them by the end of the week!<br>
        </p>
        <p style="text-align:center">
          <ul class="button-group even-2">
            <li><a href="/services/irc/znc/" class="button">Bouncer <i class="fi-link"></i></a></li>
            <li><a href="/services/irc/network/" class="button">Network <i class="fi-link"></i></a></li>
          </ul>
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
