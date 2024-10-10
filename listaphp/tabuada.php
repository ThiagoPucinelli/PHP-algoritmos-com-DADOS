<?php
if (($_POST['numero'])) {
    $numero = $_POST['numero'];
    echo "<center> <h1>Tabuada do $numero</h1> </center>";

    for ($i = 0; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<center> $numero x $i = $resultado<br> </center>";
    }
} else {
    echo "<center> <h2>Nenhum número foi enviado.</h2> </center>";
}
?>
