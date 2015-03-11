<?php
  ini_set('display_errors','On');
  $Title = "Ender's Services";
  $PageName = "Ender's IRC Services";
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">
  
  <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/header.php"; ?>
  
  <body style="background-color:black;background-image:url('/_resources/img/bg.png');background-repeat:no-repeat;background-position:center top;">
    <?php include $_SERVER['DOCUMENT_ROOT']."/_resources/navbar.php"; ?>
    <div class="row">
      <div class="small-6-centered columns">
        <h1 style="text-shadow: 0 0 8px #0000FF;text-align:center">
          <b style="font-family:'Audiowide';color:white">The Enderverse</b>
        </h1>
      </div>
    </div>
    
    <div class="row">
      <div class="small-6-centered columns panel">
        <p>This page will have a lot more information on it by the end of the week :)</p>
      </div>
    </div>

    <div class="row">
      <div class="small-6 columns panel">
        <h1>Mods? Mods!</h1>
        <p>
          <a href="" data-reveal-id="modModal">Click here for a list of the mods we run on the server </a>
        </p>
      </div>
    </div>

    <div id="modModal" class="reveal-modal" data-reveal>
      <div class="row">
        <h2 style="text-align:center">Mods</h2>
      </div>
      <div class="row">
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Author</th>
              <th>Version</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>OpenComputers</td>
              <td>Sangar</td>
              <td>VERSION</td>
              <td>OpenComputers is a Minecraft mod that adds programmable computers and robots to the game.</td>
            </tr>
            <tr>
              <td>a Test1</td>
              <td>a test2</td>
              <td>a test3</td>
              <td>a test4</td>
            </tr>
          </tbody>
        </table>
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
