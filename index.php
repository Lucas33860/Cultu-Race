<?php
include 'insert_data.php';
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section>
      <div
        class="background-start d-flex flex-justify-content-center flex-align-items-center flex-column"
      >
        <img class="logo dp" src="images/logo.png" alt="" />

        <div class="pseudo-entrer mbot-40 d-flex mtop-60">
          <div
            class="d-flex flex-justify-content-center flex-align-items-center"
          >
            <label class="pseudo">Your name:</label>
          </div>
          <div
            class="d-flex flex-justify-content-center flex-align-items-center"
          >
            <input
              type="text"
              id="pseudo"
              name="pseudo"
              placeholder="Enter your name"
            />
          </div>
        </div>

        <div
          class="d-flex flex-justify-content-center flex-align-items-center flex-column mtop-20 mbot-40"
        >
          <p class="objectif">You start with :</p>
          <p class="objectif">Your goal :</p>
        </div>

        <button class="btn" onclick="showPseudoAndRedirect()">Start</button>

        <script>
          function showPseudoAndRedirect() {
            showPseudo();
            var pseudo = document.getElementById("pseudo").value;
            if (pseudo) {
              window.location.href = "article.php?mot=" + "Karma";
            }
          }
        </script>

        <div id="pseudo-display" class="mtop-20" style="display: none">
          <p>Welcome : <span id="display-name"></span></p>
        </div>
      </div>
    </section>

    <script>
      function showPseudo() {
        var pseudo = document.getElementById("pseudo").value;

        if (pseudo) {
          document.getElementById("display-name").textContent = pseudo;

          document.getElementById("pseudo-display").style.display = "block";
        } else {
          alert("Please enter a pseudo");
        }
      }
    </script>
  </body>
</html>
