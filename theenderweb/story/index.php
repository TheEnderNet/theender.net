<?php
  ini_set('display_errors','On');
  $Title = "Josh | Story Corner"
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $Title ?></title>
    <link rel="stylesheet" href="/css/foundation.css" />
    <script src="/js/modernizr.js"></script>
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
              <li class="active"><a href="http://www.theender.net">JoshTheEnder</a></li>
              <li><a href="http://superminor2.no-ip.org/">SuPeRMiNoR2</a></li>
            </ul>
          </li>
        </ul>

        <!-- Left Nav Sesction -->
        <ul class="left">
          <li class="has-dropdown">
            <a href="/projects/">Projects</a>
            <ul class="dropdown">
              <li><a href="/projects/#LaserCraft">Laser Craft</a></li>
              <li><a href="/projects/#EnderBot">EnderBot</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </nav>


    <div class="row">
      <center><img src="/img/bannerAlt.png"></center>
    </div>

    <div class="row">
      <div class="panel" style="padding-top: 20">
        <h1>Teaser</h1>
        <hr>
        <p>
          <b>*loud gasp*</b><br>
          I awake suddenly, body aching, in what appears to be a circular road. Completely disoriented I get myself to my feet and begin to wander to the sidewalk. <br>
          I look around; all I can see is dimly lit bits of what looks like a small residential district. I look up to see the sky; it's a full moon tonight. <br>
          “Urghh, that wasn’t the experience I had expected” I say to myself. <br>
          As I rest myself against a light post, I check my heartbeat locator and see a blip. "There he is...” I say to myself as I walk off in the direction of the blip. <br>
        </p>
      </div>
    </div>
    
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
