<?php
$numeroBase = rand(0, 100);
$tentativas = 0;
$numerosGerados = [];

do {
    $tentativa = rand(0, 100);
    $numerosGerados[] = $tentativa;
    $tentativas++;
} while ($tentativa !== $numeroBase);

echo "<h2>Resultado:</h2>";
echo "Número base: $numeroBase<br>";
echo "Total de tentativas: $tentativas<br>";
echo "Números gerados: " . implode(", ", $numerosGerados);
echo '<br><br><a href="index.php">Voltar</a>';
?>
