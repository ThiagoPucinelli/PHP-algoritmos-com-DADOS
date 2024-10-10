<?php
if ($_POST['P']) {
    $P = $_POST['P'];
    if ($P % 2 == 0) {
        echo "<center><h2>$P é Par</h2></center>";
    } else {
        echo "<center><h2>$P é Ímpar</h2></center>";
    }
} else {
    echo "<center><h2>Por favor, insira um número.</h2></center>";
}
?>
