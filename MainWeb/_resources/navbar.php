<?php 
  $AB = "meep";
  $docRoot = str_ireplace("index.php","", $_SERVER['PHP_SELF']);
  $hd = "has-dropdown ";
  $a = "active";
?>

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
            <?php if ($docRoot !== "/") {
                echo "<li><a href='..'><i class='fi-arrow-up'></i> Go up one Directory</a></li> ".
                    "<li><a href='/'><i class='fi-home'></i> Back Home</a></li>".
                    "<li class='divider'></li>";
                }
            ?>
            <li class="<?php if (stripos($docRoot,"/information/") === 0) {echo $hd.$a;} else {echo $hd;}; ?>">
                <a href="/information/"><i class='fi-info'></i> Informational Stuff</a>
                <ul class="dropdown">
                    <li><a href="/information/#about">Who the hell am I?</a></li>
                    <li><a href="/information/#contact">How can I contact you?</a></li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="has-dropdown">
                <a href="#"><i class='fi-web'></i> Other Sites</a>
                <ul class="dropdown">
                    <li class="active"><a href="http://www.theender.net">EnderNet (You're here)</a></li>
                    <li><a href="http://stargatetech.theender.net">StargateTech2 Wiki</a></li>
                    <li><a href="http://superminor2.net">SuPeRMiNoR2</a></li>
                    <li><a href="http://stats.theender.net">Ender's IRC Statistics</a></li>
                    <li><a href="http://www.theender.net/jenkins">Ender's Jenkins CI</a></li>
                </ul>
            </li>
        </ul>
    
    <!-- Left Nav Sesction -->
        <ul class="left">
            <li class="divider"></li>
            <li class="<?php if (stripos($docRoot,"/projects/") === 0) {echo $hd.$a;} else {echo $hd;}; ?>">
                <a href="/projects/"><i class='fi-page-multiple'></i> Projects</a>
                <ul class="dropdown">
                    <li><a href="/projects/#LaserCraft">Laser Craft</a></li>
                    <li><a href="/projects/#EnderBot">EnderBot</a></li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="<?php if(stripos($docRoot,"/story/") === 0){echo $a;};?>">
              <a href="/story/"><i class="fi-pencil"></i> Story Corner</a>
            </li>
            <li class="<?php if(stripos($docRoot,"/art/") === 0){echo $a;};?>">
              <a href="/art/"><i class="fi-photo"></i> Art Corner</a>
            </li>
            <li class="divider"></li>
            <li class="<?php if (stripos($docRoot,"/services/") === 0) {echo $hd.$a;} else {echo $hd;}; ?>">
                <a href="/services/"><i class="fi-wrench"></i> Services</a>
                <ul class="dropdown">
                    <li class="<?php if (stripos($docRoot,"/services/irc/") === 0) {echo $hd.$a;} else {echo $hd;}; ?>">
                        <a href="/services/irc/">IRC services</a>
                        <ul class="dropdown">
                            <li><a href="/services/irc/network/">IRC Networks</a></li>
                            <li><a href="/services/irc/znc/">IRC Bouncer</a></li>
                        </ul>
                    </li>
                    <li class="<?php if (stripos($docRoot,"/services/enderverse/") === 0) {echo $a;}; ?>">
                        <a href="/services/enderverse/">Minecraft</a>
                    </li>
                </ul>
            </li>
            <li class="divider"></li>
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
