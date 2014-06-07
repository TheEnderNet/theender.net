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
        <h1>Teaser</h1>
        <hr>
        <pre>
          *loud gasp*
          I awake suddenly, body aching, in what appears to be a circular road. Completely disoriented I get myself to my feet and begin to wander to the sidewalk.
          I look around; all I can see is dimly lit bits of what looks like a small residential district. I look up to see the sky; it's a full moon tonight.
          "That's the last time I use that blasted vortex manipulator!" I say to myself. "I can't keep dying when it's not necessary...."
          As I rest myself against a light post, I check my heartbeat locator and see a blip. "There he is...” I say to myself as I walk off in the direction of the blip.
        </pre>
      </div>
    </div>
    
    <script src="http://www.thatjoshgreen.me/js/vendor/jquery.js"></script>
    <script src="http://www.thatjoshgreen.me/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
