<?php
    
$notas = array(             // Solicita a entrada das três notas
    $_POST['nota1'],
    $_POST['nota2'],
    $_POST['nota3']
);

$media = array_sum($notas) / count($notas);   // Calculo da média


if ($media >= 6) {                       
    $resultado = "Aprovado"; 
} else {                                           //Verificação se está ou não aprovado
    $resultado = "Reprovado";
}


echo "<center><h2>A Média Final é: " . number_format($media, 2) . "Aluno [$resultado]!</h2></center>";
?>
