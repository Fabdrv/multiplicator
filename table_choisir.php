<?php
$title = "page revision";
$nav = "revision";
require 'head.php'; ?>
<!-- fin du fichier head.php  -->


<main>
    <!-- <h1> <em>Tempo_ 2 eme instruction Sélectionner une table de multiplication entre 1 et 10 dans une liste
            déroulante select. Après validation de la table de multiplication
            sélectionnée, celle-ci s’affiche en dessous. </em>
    </h1> -->

    <h2>Table par table</h2>

    <p class="fs-5 col-md-8"> à toi de choisir une table dans la liste</p>
    <div class="mb-5">
        <form method="POST" action="target_1.php">
            <!-- saisie de la table à afficher -->
            <p>
                <label for="mulpar"> Menu </label>
                <select name="mulpar" id="mulpar">
                    <option value="1"> Table de 1 </option>
                    <option value="2"> Table de 2 </option>
                    <option value="3"> Table de 3 </option>
                    <option value="4"> Table de 4 </option>
                    <option value="5"> Table de 5 </option>
                    <option value="6"> Table de 6 </option>
                    <option value="7"> Table de 7 </option>
                    <option value="8"> Table de 8 </option>
                    <option value="9"> Table de 9 </option>
                    <option value="10"> Table de 10 </option>
                </select>
            </p>

            <div class="form-group">
                <pre>
                <button type="submit" class="btn btn-primary"> Lancer la table </button>
                </pre>
            </div>

        </form>



</main>

<?php require 'footer.php'; ?>