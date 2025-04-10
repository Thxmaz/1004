<?php
$valor = isset($_POST['valor']) ? (int) $_POST['valor'] : 0;
$contador = 0;

echo "<h2>Resultado:</h2>";

do {
    $aleatorio = rand(1, 10);
    echo "Número gerado: $aleatorio<br>";
    $valor -= $aleatorio;
    $contador++;
} while ($valor > 0);

echo "<br>Total de subtrações: $contador";
echo '<br><a href="index.php">Voltar</a>';
?>
