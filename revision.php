<?php
$title = "page revision";
$nav = "revision";
require 'head.php'; ?>
<!-- fin du fichier head.php  -->

<main>
    <!-- <h1><em> tempo_4eme Instruction Intégrer un mode révision : l’utilisateur choisit une table de de
            multiplication et doit répondre à une multiplication tirée au hasard dans
            la table sélectionnée.
        </em> </h1>
    <hr> -->
    <h2>Page révision des tables</h2>

    <div class="mb-5">
        <!-- saisie du prénom -->
        <form method="POST" action="target_4.php">
            <p>
                <label for="prenom"> Entrez votre prénom : </label>
                <input class="form-control" type="text" name="prenom" id="prenom">
            </p>
            <!-- saisie du nombre à multiplier -->
            <p>
                <label for="mulpar"> Choisissez votre multiplication : </label>
                <select name="mulpar" id="mulpar">
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                    <option value="6"> 6 </option>
                    <option value="7"> 7 </option>
                    <option value="8"> 8 </option>
                    <option value="9"> 9 </option>
                    <option value="10">10 </option>
                </select>
            </p>
            <p>


            </p>
            <div class="form-group">
                <pre>
                <button type="submit" class="btn btn-primary"> Lancer la table </button>
                </pre>
            </div>
        </form>



        <br><br>


</main>

<?php require 'footer.php'; ?>