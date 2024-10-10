<?php
if (isset($_POST['mess'])) {
    $mess = $_POST['mess'];

    switch ($mess) {
        case 1:
            $mes = "Janeiro";
            break;
        case 2:
            $mes = "Fevereiro";
            break;
        case 3:
            $mes = "Março";
            break;
        case 4:
            $mes = "Abril";
            break;
        case 5:
            $mes = "Maio";
            break;
        case 6:
            $mes = "Junho";
            break;
        case 7:
            $mes = "Julho";
            break;
        case 8:
            $mes = "Agosto";
            break;
        case 9:
            $mes = "Setembro";
            break;
        case 10:
            $mes = "Outubro";
            break;
        case 11:
            $mes = "Novembro";
            break;
        case 12:
            $mes = "Dezembro";
            break;
        default:
            $mes = "Não existe mês com este número.";
            break;
    }

    echo "<center><h2>$mes</h2></center>";
} else {
    echo "<center><h2>Nenhum valor foi enviado.</h2></center>";
}
?>