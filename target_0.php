<?php
require "head.php"
?>

<!-- calcul d'une colonne -->
<?php
$length = 10;
$i = 1;
$table = 3;
echo "Multiplication table: $table <br>"; ?>
<div class="table_std">


    <?php
    for ($i = 1; $i <= $length; $i++)
        echo "$i * $table = " . $i * $table . "<br>";
    ?>

</div>