<?php
require_once('../php/db/Database.php');

Database::create();
Database::fill();

$products = Database::gainProducts();
?>
<table class="products">
    <?php
    foreach ($products as $p)
    {
        echo '<tr>';
        echo "<td class='name' id='name$p[0]'>$p[1]</td><td><span class='price' id='price$p[0]'>$p[2]</span>$</td><td 
id='$p[0]'>
<input type='button' value='Add' onclick='cclick($p[0])'></td>";
        echo '</tr>';
    }
    echo '<tr><td><input type="submit" value="Make Order" id="goToCart" onclick="goToCart()"></td></tr>';
    ?>
</table>