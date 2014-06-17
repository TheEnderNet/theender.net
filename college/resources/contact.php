<?php
    $title = "Kris' Games";
    ini_set("log_errors", 1);
    ini_set("error_log", "./php-error.log");
?>
<!DOCTYPE HTML>
<html>

  <?php include "header.php"; ?>

  <body>
    <?php include "bannerAndNavbar.php"; ?>

    <div class="row">
      <div class="large-12 columns"> <h1><center>Contact</center></h1> </div><hr></div>
    </div>



    <form>
      <div class="row">
        <div class="large-2 columns"><hr></div>
        <div class="large-8 columns panel">
          <div class="large-3 columns">
            <label>Name
              <input type="text" />
            </label>
          </div>
          <div class="large-3 columns">
            <label>Section
              <select>
                <option value="Home">Home</option>
                <option value="Playstation">Playstation</option>
                <option value="Xbox">Xbox</option>
                <option value="Pc">Pc</option>
                <option value="Contact">Contact</option>
              </select>
            </label>
          </div>
          <div class="large-5 columns">
            <label>Contact back Email
              <input type="text" placeholder="Someone@something.co.uk" />
            </label>
          </div>
        </div>
        <div class="large-2 columns"><hr></div>
      </div>

      <div class="row">
        <div class="large-8 columns">
          <label>Feedback area
            <textarea placeholder="Feedback"></textarea>
          </label>
        </div>
      </div>



    </form>
  </body>
</html>
