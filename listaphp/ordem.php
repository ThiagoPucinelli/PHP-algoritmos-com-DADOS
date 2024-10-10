<?php
if (isset($_POST['A1']) && isset($_POST['B1'])) {
    $A1 = $_POST['A1'];
    $B1 = $_POST['B1'];

    if ($A1 < $B1) {
        echo "<center><h2>A ordem dos dados A e B foi de: $A1 $B1</h2></center>";
    } else {
        echo "<center><h2>A ordem dos dados A e B foi de: $B1 $A1</h2></center>";
    }
} else {
    echo "<center><h2>Por favor, insira os valores de A e B.</h2></center>";
}
?>
