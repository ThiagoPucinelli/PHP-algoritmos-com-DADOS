<?php
if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacao'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];
    $resultado = 0;

    switch ($operacao) {
        case 'soma':
            $resultado = $numero1 + $numero2;
            break;
        case 'subtracao':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacao':
            $resultado = $numero1 * $numero2;
            break;
        case 'divisao':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                echo "<center><h2>Erro: Divisão por zero não é permitida.</h2></center>";
                exit;
            }
            break;
        default:
            echo "<center><h2>Operação inválida.</h2></center>";
            exit;
    }

    echo "<center><h2>Resultado: $resultado</h2></center>";
} else {
    echo "<center><h2>Por favor, preencha todos os campos.</h2></center>";
}
?>
