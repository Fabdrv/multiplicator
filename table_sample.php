<?php
$title = "page revision";
$nav = "revision";
require 'head.php'; ?>
<!-- fin du fichier head.php  -->
<?php require 'header.php'; ?>

<main>
    <h1> <em>Tempo_ 2 eme instruction Sélectionner une table de multiplication entre 1 et 10 dans une liste
            déroulante select. Après validation de la table de multiplication
            sélectionnée, celle-ci s’affiche en dessous. </em>
    </h1>
    <hr>
    <h2>Page révision</h2>

    <p class="fs-5 col-md-8"> Selectionner une table !</p>
    <div class="mb-5">
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
                <input type="checkbox" name="validation" value="acknowledge"> Valider <br>
                <button type="submit" class="btn btn-primary"> Lancer la table </button>
                </pre>
        </div>
        </form>

        <br><br>


</main>

<?php require 'footer.php'; ?>