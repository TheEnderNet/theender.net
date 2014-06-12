<?php
    $title = "Kris' Games";
    ini_set("log_errors", 1);
    ini_set("error_log", "./php-error.log");
?>
<!DOCTYPE html>
<html>

    <?php include "../resources/header.php"; ?>

    <body>
        <?php include "../resources/bannerAndNavbar.php"; ?>

        <div class="row" data-equalizer><!-- Recent additions section -->
            <div class="large-12 columns"> <h1><center> Recent additions </center></h1> </div><hr>

            <div class="large-4 columns panel" data-equalizer-watch>
                <a href="#2"><h2 style="color:blue"> PlayStation 2 </h2></a>
                <hr>
                <img src="img/dah2.jpg" width="128" height="163" alt="Errm, crap">
                <p>This is the start of a paragraph for the PlayStation 2 content</p>
            </div>

            <div class="large-4 columns panel" data-equalizer-watch>
                <a href="#3"><h2 style="color:green"> PlayStation 3 </h2></a>
                <hr>
                <img src="img/gta5.jpg" width="128" height="163" alt="Errm, crap">
                <p>This is the start of a paragraph for the Playstation 3 content</p>
            </div>

            <div class="large-4 columns panel" data-equalizer-watch>
                <a href="#4"><h2 style="color:red">Playstation 4 </h2></a>
                <hr>
                <p>This is the start of a paragraph for the Playstation 4 content</p>
            </div>

        </div>
        <br>

        <div class="row" data-equalizer> <!-- 2 -->
            <a name="2">
            <div class="large-12-centered columns"> <h1><center> Playstation 2 </center></h1> </div><hr>
            </a>
            <div class="large-4 columns panel" data-equalizer-watch>
                <h2> Destroy All Humans 2 </h2>
                <hr>
                <img src="img/dah2.jpg" width="128" height="163">
                <p>Make war, not love!</p>
            </div>

            <div class="large-4 columns panel" data-equalizer-watch>
                <h2> RC Revenge Pro </h2>
                <hr>
                <img src="http://upload.wikimedia.org/wikipedia/en/b/b4/RC_Revenge_Pro.gif" width="128" height="163"><a href="#" class="button tiny">&#8356;10</a>
                <p>This is the best game in the world</p>
            </div>

            <div class="large-4 columns panel" data-equalizer-watch>
                <h2> Grand Theft Auto III </h2>
                <hr>
                <img src="http://upload.wikimedia.org/wikipedia/en/thumb/b/be/GTA3boxcover.jpg/250px-GTA3boxcover.jpg" width="128" height="163">
                <p>This is the best game in the world</p>
            </div>

        </div>
        <br>

        <div class="row" data-equalizer> <!-- 3 -->
            <a name="3">
            <div class="large-12-centered columns"> <h1><center> Playstation 3 </center></h1> </div><hr>
            </a>

            <div class="large-4 columns panel" data-equalizer-watch>
                <h2>Grand Theft Auto 5</h2>
                <hr>
                <img src="img/gta5.jpg" width="150" height="183">
                <p>
                This is the best game in the world
                </p>
            </div>

            <div class="large-4 columns panel" data-equalizer-watch>
                <h2>Little Big Planet 2</h2>
                <hr>
                <img src="http://upload.wikimedia.org/wikipedia/en/e/e7/Littlebigplanet2-boxart.jpg" width="150" height="183"><a href="#" class="button tiny">&#8356;25</a>
                <p>This is the best game in the world</p>
            </div>

            <div class="large-4 columns panel" data-equalizer-watch>
                <h2> Game title here</h2>
                <hr>
                <img src="../img/noimg.png">
                <p>This is the best game in the world</p>
            </div>
        </div>
        <br>

        <div class="row" data-equalizer> <!-- 4 -->
            <a name="4">
            <div class="large-12-centered columns"> <h1><center> Playstation 4 </center></h1> </div><hr>
            </a>

            <div class="large-4 columns panel" data-equalizer-watch>
                <h2>Assassin's Creed Unity</h2>
                <hr>
                <img src="img/ACUnity.png" width="128" height="163"><a href="#" class="button tiny">&#8356;40</a>
                <p>This is the best game in the world</p>
            </div>

            <div class="large-4 columns panel" data-equalizer-watch>
                <h2> Game title here</h2>
                <hr>
                <img src="../img/noimg.png">
                <p>This is the best game in the world</p>
            </div>

            <div class="large-4 columns panel" data-equalizer-watch>
                <h2> Game title here</h2>
                <hr>
                <img src="../img/noimg.png">
                <p>This is the best game in the world</p>
            </div>

        </div>

        <script src="../resources/js/vendor/jquery.js"></script>
        <script src="../resources/js/foundation/foundation.js"></script>
        <script src="../resources/js/foundation/foundation.equalizer.js"></script>
        <script>
          $(document).foundation();
        </script>
    </body>
</html>
