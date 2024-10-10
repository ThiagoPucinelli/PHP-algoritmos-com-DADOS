<?php
if (isset($_POST['A2']) && isset($_POST['B2'])) {    //isset é feito para verificar se uma variável está definida e não é nula
    $A2 = $_POST['A2'];
    $B2 = $_POST['B2'];

    if ($A2 < $B2) {
        echo "<center><h2>$A2 menor que $B2</h2></center>";
    } elseif ($A2 > $B2) {
        echo "<center><h2>$A2 maior que $B2</h2></center>";
    }
      elseif ($A2 ==0 and $B2==0)  {
        echo "<center><h2>Por favor, insira os valores de A e B.</h2></center>"; 
} 
}
?>
