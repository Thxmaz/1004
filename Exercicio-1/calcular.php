<?php
$valor = isset($_POST['valor']) ? (int) $_POST['valor'] : 0;

echo "<h2>Resultado:</h2>";

$cedulas = [100, 50, 20, 10, 5, 2, 1];

foreach ($cedulas as $cedula) {
    $quantidade = intdiv($valor, $cedula);
    if ($quantidade > 0) {
        echo "R$$cedula,00: $quantidade nota(s)<br>";
        $valor %= $cedula;
    }
}
echo '<br><a href="index.php">Voltar</a>';
?>
