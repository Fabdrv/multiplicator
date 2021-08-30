<!-- affichage du prénom -->


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

<!-- calcul d'une colonne -->
<?php
$length = 10;
$i = 1;
echo "Multiplication table: $table <br>";
for ($i = 1; $i <= $length; $i++)
    echo "$i * $table = " . $i * $table . "<br>";
?>

<hr>

<?php

/* calcul d'une ligne grance échelle */

$x = 20;
$r = 20;
echo 'The input number is:  ' . $x . '<br/>';
echo 'The range number is : ' . $r . '<br/>';


// $x - denotes input number
// $r - denotes multiplication range

echo " The above multiplication table: " . "<br>";

for ($i = 1; $i <= $r; $i++) {
    echo "\t", $x, " * ", $i, " = ", $x * $i, "<br>";
}

?>
<hr>
<!-- calcule d'un tableau autre méthode -->
<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr> \n";
    for ($col = 1; $col <= 10; $col++) {
        $p = $col * $row;
        echo "<td>$p</td> \n";
    }
    echo "</tr>";
}
echo "</table>";

?>