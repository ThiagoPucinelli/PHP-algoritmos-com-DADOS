<?php
if ($_POST['N']) {
    $N = $_POST['N'];
    echo "<center> <h1>Fatorial de $N</h1> </center>";

    $fatorial = 1;
    for ($i = $N; $i >= 1; $i--) {
        $fatorial = $fatorial * $i;
        
    }
    echo "<center> $N! = $fatorial</center>";
} else {
    echo "<center> <h2>Nenhum número foi enviado.</h2> </center>";
}
?>
