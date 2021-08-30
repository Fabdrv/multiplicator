<?php
$title = "page revision";
$nav = "revision";
require 'head.php'; ?>
<!-- fin du fichier head.php  -->
<?php require 'header.php'; ?>

<main>
    <h1> <em> tempo 3 eme instruction 3. Le ou les choix des tables de multiplication se fait par checkbox et
            par un bouton “valider”. Le ou les tables de multiplication s’affichent en
            dessous.</em> </h1>
    <hr>

    <h2>Page présentation multi tables </h2>

    <p> cette page a pour fonction de te présenter plusieurs tables de multiplication en simultané</p>
    <p> Tu choisis plusieurs tables dans la liste et lorsque ton choix est fait tu valides </p>

    <div class="mb-5">
        <!-- saisie du prénom -->
        <form method="POST" action="target_2.php">
            <p class="fs-5 col-md-8"> sélections des tables </p>
            <div class="mb-5">
                <form method="POST" action="target_2.php">
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
                </p>
                <div class="form-group">
                    <pre>
                <input type="checkbox" name="validation" value="acknowledge"> Valider ?<br>
                <button type="submit" class="btn btn-primary"> Afficher les tables </button>
                </pre>
                </div>
        </form>

        <br><br>


</main>

<?php require 'footer.php'; ?>