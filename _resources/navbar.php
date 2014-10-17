<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="#"><?php echo $PageName; ?></a></h1>
    </li>
  </ul>
    
    <div class="show-for-large-up">
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <?php if ($_SERVER['PHP_SELF'] !== "/index.php") {
                    echo "<li><a href=\"/\" style=\"color:green\">Back Home</a></li>";
                    }
                ?>
                <li class="has-dropdown">
                    <a href="/information/">Informational Stuff</a>
                    <ul class="dropdown">
                        <li><a href="/information/#about">Who the hell am I?</a></li>
                        <li><a href="/information/#contact">How can I contact you?</a></li>
                    </ul>
                </li>
          
                <li class="has-dropdown">
                    <a href="#">Sites</a>
                    <ul class="dropdown">
                        <li class="active"><a href="http://www.theender.net">EnderNet</a></li>
                        <li><a href="http://stargatetech.theender.net/">StargateTech2 Wiki</a></li>
                        <li><a href="http://stats.theender.net">IRC Statistics</a></li>
                        <li><a href="http://www.theender.net/jenkins">Jenkins</a></li>
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
                <li><a href="/story/">Story Corner</a></li>
                <li class="has-dropdown">
                    <a href="#">Mods</a>
                    <ul class="dropdown">
                        <li><a href="/lasercraft/">LaserCraft</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>
</nav>


<div class="row">
  <center><img src="/_resources/img/bannerAlt.png"></center>
</div>
<br>
