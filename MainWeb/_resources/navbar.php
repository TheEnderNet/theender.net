<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="#"><?php echo $PageName; ?></a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <?php if ($_SERVER['PHP_SELF'] !== "/index.php") {
                echo "<li><a href='/'><i class='fi-home' style='font-size: 18px'></i> Back Home</a></li>".
                    "<li class='divider'></li>";
                }
            ?>
            <li class="has-dropdown">
                <a href="/information/">Informational Stuff</a>
                <ul class="dropdown">
                    <li><a href="/information/#about">Who the hell am I?</a></li>
                    <li><a href="/information/#contact">How can I contact you?</a></li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="has-dropdown">
                <a href="#">Other Sites</a>
                <ul class="dropdown">
                    <li class="active"><a href="http://www.theender.net">EnderNet (You're here)</a></li>
                    <li><a href="http://stargatetech.theender.net/">StargateTech2 Wiki</a></li>
                    <li><a href="http://superminor2.net/">SuPeRMiNoR2</a></li>
                    <li><a href="http://stats.theender.net">Ender's IRC Statistics</a></li>
                    <li><a href="http://www.theender.net/jenkins">Ender's Jenkins CI</a></li>
                </ul>
            </li>
        </ul>
    
    <!-- Left Nav Sesction -->
        <ul class="left">
            <li class="divider"></li>
            <li class="has-dropdown">
                <a href="/projects/">Projects</a>
                <ul class="dropdown">
                    <li><a href="/projects/#LaserCraft">Laser Craft</a></li>
                    <li><a href="/projects/#EnderBot">EnderBot</a></li>
                </ul>
            </li>
            <li class="divider"></li>
            <li><a href="/story/">Story Corner</a></li>
            <li class="divider"></li>
            <li class="has-dropdown">
                <a href="#">Services</a>
                <ul class="dropdown">
                    <li class="has-dropdown">
                        <a href="/services/irc/">IRC services</a>
                        <ul class="dropdown">
                            <li><a href="/services/irc/networks/">IRC Networks</a></li>
                            <li><a href="/services/irc/bnc/">IRC Bouncer</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Mods</a>
                <ul class="dropdown">
                    <li><a href="/lasercraft/">LaserCraft</a></li>
                </ul>
            </li>
        </ul>
    </section>
</nav>


<div class="row">
  <center><img src="/_resources/img/banner2015.png"></center>
</div>
<br>
