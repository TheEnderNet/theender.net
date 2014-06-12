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

        <div class="row"><!-- Recent additions section -->
            <div class="large-12 columns"> <h1><center> Recent additions </center></h1> </div><hr>

            <div class="large-4 columns panel">
                <a href="#2"><h2 style="color:blue"> PlayStation 2 </h2></a>
                <hr>
                <img src="img/dah2.jpg" width="128" height="163" alt="Errm, crap">
                <p>This is the start of a paragraph for the PlayStation 2 content</p>
            </div>

            <div class="large-4 columns panel">
                <a href="#3"><h2 style="color:green"> PlayStation 3 </h2></a>
                <hr>
                <img src="img/gta5.jpg" width="128" height="163" alt="Errm, crap">
                <p>This is the start of a paragraph for the Playstation 3 content</p>
            </div>

            <div class="large-4 columns panel">
                <a href="#4"><h2 style="color:red">Playstation 4 </h2></a>
                <hr>
                <p>This is the start of a paragraph for the Playstation 4 content</p>
            </div>

        </div>
        <br>

        <div class="row"> <!-- 2 -->
            <a name="2">
            <div class="large-12-centered columns"> <h1><center> Playstation 2 </center></h1> </div><hr>
            </a>
            <div class="large-4 columns panel">
                <h2> Destroy All Humans 2 </h2>
                <hr>
                <img src="img/dah2.jpg" width="128" height="163">
                <p>This is the best game in the world</p>
            </div>

            <div class="large-4 columns panel">
                <h2> Game title here</h2>
                <hr>
                <img src="../img/noimg.png">
                <p>This is the best game in the world</p>
            </div>

            <div class="large-4 columns panel">
                <h2> Game title here</h2>
                <hr>
                <img src="../img/noimg.png">
                <p>This is the best game in the world</p>
            </div>

        </div>
        <br>

        <div class="row"> <!-- 3 -->
            <a name="3">
            <div class="large-12-centered columns"> <h1><center> Playstation 3 </center></h1> </div><hr>
            </a>

            <div class="large-4 columns panel">
                <h2> Grand Theft Auto 5</h2>
                <hr>
                <img src="img/gta5.jpg" width="150" height="183">
                <p>
                This is the best game in the world
                </p>
            </div>

            <div class="large-4 columns panel">
                <h2> Game title here</h2>
                <hr>
                <img src="../img/noimg.png">
                <p>This is the best game in the world</p>
            </div>

            <div class="large-4 columns panel">
                <h2> Game title here</h2>
                <hr>
                <img src="../img/noimg.png">
                <p>This is the best game in the world</p>
            </div>
        </div>
        <br>

        <div class="row"> <!-- 4 -->
            <a name="4">
            <div class="large-12-centered columns"> <h1><center> Playstation 4 </center></h1> </div><hr>
            </a>

            <div class="large-4 columns panel">
                <h2>Assassin's Creed Unity</h2>
                <hr>
                <img src="img/ACUnity.png">
                <p>This is the best game in the world</p>
            </div>

            <div class="large-4 columns panel">
                <h2> Game title here</h2>
                <hr>
                <img src="../img/noimg.png">
                <p>This is the best game in the world</p>
            </div>

            <div class="large-4 columns panel">
                <h2> Game title here</h2>
                <hr>
                <img src="../img/noimg.png">
                <p>This is the best game in the world</p>
            </div>

        </div>

        <script>
          $(document).foundation();
        </script>
    </body>
</html>
