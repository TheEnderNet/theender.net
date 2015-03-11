<?php ini_set('display_errors','On'); $Title = "Ender's Services"; $PageName = "Ender's Services"; ?>

<!DOCTYPE HTML>
<html class="no-js" lang="en">

  <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/header.php"; ?>

  <body style="background-color:black;background-image:url('/_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/navbar.php"; ?>
    <div class="row">
      <div class="large-6-centered columns">
        <h1 style="text-shadow: 0 0 1px #000000, 0 0 10px #FFFFFF;text-align:center">
          <b style="font-family:'Audiowide';color:white">The Dark IRC Co.</b>
        </h1>
        <h3 style="<?php echo $Color; ?>">
          What is <i>The Dark IRC Co.</i>?<br>
          Well I'm glad you asked (if not, too bad I'm telling you anyway). <i>The Dark IRC Co.</i> is the name of
          the network I run. It's twinned with the PC Logix network.
          <br><br>
          To get onto the network, just point your IRC Client at <b>thedarkirc.co</b> and you should be connected
          to one of the servers listed below.
        </h3>
      </div>
    </div>

    <div class="row">
      <div class="small-6-centered columns">
        <h2 style="color:white;font-family:Inconsolata;text-align:center;text-shadow: 0 0 5px #00FFFF">Servers</h2>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns panel">
        <?php 
          $fp = @fsockopen("thedarkirc.co", 6667, $errno, $errmsg, 5);
          if($fp == false)
            { echo "OhNoes<br>"; echo "Error: {$errno}, {$errmsg}<br>";}
          else
            { echo "It Up";}

        ?>
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
