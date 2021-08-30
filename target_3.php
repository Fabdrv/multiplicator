<?php
$input = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$rand_keys = array_rand($input, 9);

echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
echo $input[$rand_keys[2]] . "\n";
echo $input[$rand_keys[3]] . "\n";
echo $input[$rand_keys[4]] . "\n";
echo $input[$rand_keys[5]] . "\n";
echo $input[$rand_keys[6]] . "\n";
echo $input[$rand_keys[7]] . "\n";
echo $input[$rand_keys[8]] . "\n";
echo $input[$rand_keys[8]] . "\n";

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