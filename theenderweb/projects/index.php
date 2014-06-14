<?php 
  $Title = "Ender's Projects";
  $PageName = "Ender's Projects";
?>
<!doctype html>
<html class="no-js" lang="en">
  <?php include"../_resources/header.php"; ?>
  
  <body style="background-color:black;">
    <?php include "../_resources/navbar.php"; ?>

    <div class="row">
        <h1 style="color:white">Hello</h1>
        <hr>
        <p style="color:white">
          Hello and welcome to a page on the interwebs that will tell you about the projects that I, JoshTheEnder, am currently working on.<br>
          This page will serve as a place for me to put information related to stuff I work on. Though some projects may get a dedicated page if they become big enough. <?php echo getcwd(); ?>
        </p>
    </div>

    <div class="row">
      <a name="LaserCraft"></a>
      <h1 style="color:white">LaserCraft</h1>
      <hr>
      <p style="color:white">
        Ok, so. LaserCraft. Well, for starters it's going to be a mod for Minecraft.
        The main concept of it (Lasers) I got from an old mod called LaserMod (or The
        Laser Mod, can't remember what one it was) which hasnt been updated since MC 1.2.5. 
        I loved that mod, you could do so many cool thinks with it. So that's the basic idea for LaserCraft, that and the fact that lasers are awesome in general :). <br>
        I'm currently still putting thoughts and ideas together on what exactly I want to have in it so there's no actual version of the mod in some form at this current time.<br>
        The main things I definitly know i want it (the mod in gneral) to do are:
        <ul>
          <li style="color:white">Run on RF (Redstone Flux from Thermal Expansion 3)</li>
          <li style="color:white">Be able to be contolled by an upcomming feature in a later version of a mod called StargateTech (see <a href="#EnderBot">EnderBot's info</a> below)</li>
        </ul>
      </p>
    </div>

    <div class="row">
      <a name="EnderBot"></a>
      <h1 style="color:white">EnderBot</h1>
      <hr>
      <p style="color:white">
        EnderBot is the name I gave to my IRC bot as it ties in with the nickname I've adjusted to recently (JoshTheEnder). EnderBot usually resides in most of the same channel as me, though his commands are not set up to listen in all of them. The main channel he helps out with is #StargateTech, LordFokas (the owner of the channel and mod) said he wished he had a bot in the channel to help some people out if they couldnt get the information from the wiki (I can update a >5Kb JSON faster than LordFokas can update the main wiki) and since I was already coding EnderBot to be a helpfull bot of some sort it wasnt hard for me to fine-tune him.<br>
        As for future plans? who knows, I mean I'll continue to update and refine it but at the moment I can't think of much more to add to it.<br>
        EnderBot is written in Python, if you were wondering.
      </p>
    </div>

    <div class="row">
      <a name="GMod"></a>
      <h1 style="color:white">Garrys Mod</h1>
      <hr>
      <h2 style="color:white">Starfall</h2>
      <p style="color:white">
        For those of you who don't know what Starfall is, it's an addon for GMod/WireMod that adds in programable chips similar to those of Expression 2 (E2) however the code for these 'chips' is written in Lua.<br> 
        Not many servers run Starfall but the server I play on (<a href="http://teamscm.co.uk/">TSCM</a>) has it installed so \o/. <br>
        You can find my Starfall scripts on their own page (<a href="scripts.html#Starfall">LINK</a>)
      </p>
      <hr>
      <h2 style="color:white">Ships</h2>
      <p style="color:white">
        Nothing here yet, I did have some truly magnificent ships but they have since been lost due to computer resets or data loss. :(
      </p>
    </div>
    
    <script src="../_resources/js/vendor/jquery.js"></script>
    <script src="../_resources/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
