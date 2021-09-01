<?php
$title = "page accueil";
$nav = "accueil";
?>

<?php require 'head.php'; ?>


<main>

  <!-- <h1> <em> tempo_ 1ere Instruction . Afficher la table de multiplication de 3. </em> </h1> -->
  <h1 class="style3">Bienvenus sur le site de révision des tables de multiplications</h1>
  <h1 class="style3">Entraine-toi à réviser !</h1>
  <div class="row">
    <div class="col liens_page_1">
      <a href="table_choisir.php" class="btn btn-primary">Table par table</a>
    </div>
    <div class="col liens_page_1">
      <a href="multi_tables.php" class="btn btn-primary">Plusieurs tables</a>
    </div>
    <div class="col liens_page_1">
      <a href="revision.php" class="btn btn-primary">Révision</a>
    </div>
  </div>


  <div class="row">
    <div class="col liens_page_1">
      <a href="super_revision.php" class="btn btn-primary">Mode Super Révision</a>
    </div>
  </div>

</main>



<p class="col-md-8 style_4">Tu vas aimer réviser, montre nous que tu connais déja la table de 3 !</p>
<div class="mb-5">
  <div class="col-md-6">
    <h2 class="style_4">la table de 3</h2>

    <table class="style_4">
      <thead>
        <tr>
          <th scope="col">la table de 3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">3 X 1 = 3</th>
        </tr>
        <tr>
          <th scope="row">3 X 2 = 6</th>
        </tr>
        <tr>
          <th scope="row">3 X 3 = 9</th>
        </tr>
        <tr>
          <th scope="row">3 X 3 = 12</th>
        </tr>
        <tr>
          <th scope="row">3 X 3 = 15</th>
        </tr>
        <tr>
          <th scope="row">3 X 6 = 18</th>
        </tr>
        <tr>
          <th scope="row">3 X 7 = 21</th>
        </tr>
        <tr>
          <th scope="row">3 X 8 = 24</th>
        </tr>
        <tr>
          <th scope="row">3 X 9 = 36</th>
        </tr>

      </tbody>
    </table>


    <p> La petite table de 3 est assez simple et je vais te donner une astuce ! Si tu additionnes les chiffres du resultat </p>
    <p> la somme est divisible par trois ! par exemple 18 c'est 1+8 ... soit 9 et c'est divisible par 3 ! </p>


  </div>
</div>






<?php require 'footer.php' ?>