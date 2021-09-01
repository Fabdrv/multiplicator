<?php
$title = "page super revision";
$nav = "super_revision";
require 'head.php'; ?>

<!-- fin du fichier head.php  -->
<!-- fin du fichier header.php  -->

<main>
  <!-- <h1> <em> tempo 5eme instruction Mode super révision : Poser une série de 5 questions puis afficher le
      score.
    </em> </h1>
  <hr> -->
  <h2>Page super révision</h2>
  <p class="fs-5 col-md-8"> Prêts pour une super révision ? </p>
  <p class="fs-5 col-md-8"> le jeu va génerer 5 questions sur les tables de multiplication.
    Tu saisi les réponses dans les cases associées aux questions </p>
  <p> lorsque tu as saisi les 5 réponses tu valides les réponses avec le pavé "VALIDER"</p>
  <p> Le jeu t'affichera ton score ainsi que les bonnes réponses.</p>

  <p class="fs-5 col-md-8"> c'est parti </p>
  <div class="mb-5">
    <!-- saisie du prénom -->
    <form method="POST" action="target_4.php">
      <p class="fs-5 col-md-8"> super révision ?</p>
      <div class="mb-5">
        <form method="POST" action="target_4.php">
          <div class="form-group">
            <pre>
                <input type="checkbox" name="validation[]" value= 1> table 1 <br>
                <input type="checkbox" name="validation[]" value= 2> table 2 <br>
                <input type="checkbox" name="validation[]" value= 3> table 3 <br>
                <input type="checkbox" name="validation[]" value= 4> table 4 <br>
                <input type="checkbox" name="validation[]" value= 5> table 5 <br>
                <input type="checkbox" name="validation[]" value= 6> table 6 <br>
                <input type="checkbox" name="validation[]" value= 7> table 7 <br>
                <input type="checkbox" name="validation[]" value= 8> table 8 <br>
                <input type="checkbox" name="validation[]" value= 9> table 9 <br>
                <input type="checkbox" name="validation[]" value= 10> table 10 <br>
                </pre>
          </div>
        </form>

</main>



<?php require 'footer.php'; ?>