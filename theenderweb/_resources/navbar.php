<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="#"><?php echo $PageName; ?></a></h1>
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
      <?php 
        if (getcwd() !== "/home/znc/www/theenderweb") {
          echo "<li><a href=\"/\">Back Home</a></li>";
        }

      ?>
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
      <li><a href="/story/">Story Corner</a></li>
    </ul>
  </section>
</nav>


<div class="row">
  <center><img src="/_resources/img/bannerAlt.png"></center>
</div>
<br>