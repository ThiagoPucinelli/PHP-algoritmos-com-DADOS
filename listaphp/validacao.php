<?php



if ($_POST['valor']) {
    
    $valor = $_POST['valor'];                    //recebendo o valor digitado e a tornando uma variável

    if ($valor > 0) {
        echo "<center><h2>Valor Positivo: $valor</h2></center>";   //verificação
    } elseif ($valor < 0) {
        echo "<center><h2>Valor Negativo: $valor</h2></center>";
    } else {
        echo "<center><h2>Valor igual a Zero: $valor</h2></center>";
    }
} 


else {
    echo "<center><h2>Nenhum valor foi enviado.</h2></center>";
}
?>
