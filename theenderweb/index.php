<?php
  ini_set('display_errors','On');
  $Title = "Josh | Home PHP"
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $Title ?></title>
    <link rel="stylesheet" href="http://www.thatjoshgreen.me/css/foundation.css" />
    <script src="http://www.thatjoshgreen.me/js/modernizr.js"></script>
  </head>
  
  <body style="background-color:black;">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="#">Josh: Home</a></h1>
        </li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
          <li class="has-dropdown">
            <a href="#">Sites</a>
            <ul class="dropdown">
              <li class="active"><a href="http://www.thatjoshgreen.me">JoshTheEnder</a></li>
              <li><a href="http://www.thatjoshgreen.me/superminor2/">SuPeRMiNoR2</a></li>
            </ul>
          </li>
        </ul>

        <!-- Left Nav Sesction -->
        <ul class="left">
          <li class="has-dropdown">
            <a href="projects.html">Projects</a>
            <ul class="dropdown">
              <li><a href="projects.html#LaserCraft">Laser Craft</a></li>
              <li><a href="projects.html#EnderBot">EnderBot</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </nav>


    <div class="row">
      <center><img src="img/bannerAlt.png"></center>
    </div>

    <div class="row">
      <div class="panel" style="padding-top: 20">
        <h1>Hello</h1>
        <hr>
        <p>
          Well hello there, welcome to my site. <br>
          This site is home to my random projects and may include stuff from other people :) <br>
          Use the links up the top or at the side or wherever I decide to throw them, to get to the other areas of my site. <br>
          as you can probably tell at the moment theres not much on here, I know about it and I am adding more content when I have the time :) <br>
        </p>
      </div>
    </div>
    
    <script src="http://www.thatjoshgreen.me/js/vendor/jquery.js"></script>
    <script src="http://www.thatjoshgreen.me/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
