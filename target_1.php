<?php
require "head.php"
?>

<p>
    <?php
    $table = (int)$_POST['mulpar'];
    echo 'Tu as demandé la table X ' . $table . '<br/>';
    ?>
</p>

<!-- calcul d'une colonne -->
<?php
$length = 10;
$i = 1;
echo "Multiplication table: $table <br>"; ?>
<div class="table_std">


    <?php
    for ($i = 1; $i <= $length; $i++)
        echo "$i * $table = " . $i * $table . "<br>";
    ?>

</div>
<hr>