<?php
// Gerar número aleatório na primeira vez
$numeroSorte = rand(0, 100);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Número da Sorte</title>
</head>
<body>
    <h1>Número da Sorte</h1>
    <p>Digite um número entre 0 e 100 e tente adivinhar o número da sorte!</p>

    <form action="calcular.php" method="post">
        <input type="number" name="tentativa" required>
        <input type="hidden" name="sorte" value="<?php echo $numeroSorte; ?>">
        <input type="hidden" name="tentativas" value="1">
        <button type="submit">Tentar</button>
    </form>
</body>
</html>
