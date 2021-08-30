<?php require 'head.php'; ?>
<!-- fin du fichier head.php  -->
<?php require 'header.php'; ?>

<!-- fin du fichier header.php  -->
<p> Bonjour <strong> <?php echo $_POST['prenom'] . '<br/>';
                        ?> </strong> </p>
<p> Bienvenue sur les tables de multiplication</p>

<?php


/* securisation des données injectées */
$prenoms = "";

function securisation($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = strip_tags($donnees);
    return $donnees;
}
$prenom = securisation($_POST['prenom']);

echo 'Ton Prénom est enregistré sous : ' . $prenom . '<br/>';

/* affichage des variables */
?>

<p>
    <?php
    $table = (int)$_POST['mulpar'];
    echo 'Tu as demandé la table : ' . $table . '<br/>';
    ?>
</p>


<?php
//var_dump($_GET);
//echo $_SERVER['SERVER_NAME'];
$title = "jeu";
$nav = "jeu";
$limitebasse = 0;
$limitehaute = 10;

// fonction test //
$erreur = null;
$succes = null;
$value = null;
if (isset($_GET['chiffre'])) {
    if ($_GET['chiffre'] > $limitehaute) {
        $erreur = "Votre chiffre est trop grand";
    } elseif ($_GET['chiffre'] <= $limitebasse) {
        $erreur = "Votre chiffre est trop petit";
    } else {
        $succes = "Vous avez bien choisi ! ";
    }
    $value = (int)$_GET['chiffre'];
}
?>

<?php if ($erreur) : ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php elseif ($succes) : ?>
    <div class="alert alert-success">
        <?= $succes ?>
    </div>
<?php endif ?>


<main>
    <h1>Page jeu : devinez le nombre ?</h1>

    <form action="" method="POST">
        <div class="form-group">
            <input type="number" name="chiffre" placeholder=" Rentre un 1-9 ! " value="<?php echo ($value) ?>">
        </div>

        <button type="submit" class="btn btn-primary"> Lancer la table </button>
    </form>

    <hr>

    <label for="produit">choisissez le multipliant:</label>
    <select name="produit" id="produit">
        <option value="un"> 1 </option>
        <option value="deux"> 2</option>
        <option value="trois"> 3</option>
        <option value="quattre"> 4</option>
        <option value="cinq"> 5</option>
        <option value="sis"> 6</option>
        <option value="sept"> 7</option>
        <option value="huit"> 8</option>
        <option value="neuf"> 9</option>
        <option value="dix"> 10</option>
        vous avez saisi <?php echo $chiffre ?>
    </select>

    <h2>$_GET </h2>
    <pre>
    <?php var_dump($_GET) ?>
    </pre>

    <h2>$_POST </h2>
    <pre>
    <?php var_dump($_POST) ?>
    </pre>






</main>



<?php require 'footer.php'; ?>