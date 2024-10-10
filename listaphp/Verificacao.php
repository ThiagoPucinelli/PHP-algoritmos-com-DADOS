<?php
if (isset($_POST['idade']) && isset($_POST['nome'])) {
    $idade = $_POST['idade']; 
    $nome = $_POST['nome']; 

    if ($idade >= 18) {
        echo "<center><h2>$nome é maior de 18 e tem $idade anos</h2></center>"; // verificação
    } else {
        echo "<center><h2>$nome não é maior de 18 e tem $idade anos</h2></center>";
    }
} else {
    echo "<center><h2>Nenhum valor foi enviado.</h2></center>";
}
?>
