echo var_dump($_POST);
<?php

/* calcul d'une ligne grance échelle */

$x = 20;
$r = 20;
echo 'The input number is: ' . $x . '<br />';
echo 'The range number is : ' . $r . '<br />';


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