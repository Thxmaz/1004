<?php
$tentativa = isset($_POST['tentativa']) ? (int) $_POST['tentativa'] : 0;
$sorte = isset($_POST['sorte']) ? (int) $_POST['sorte'] : rand(0, 100);
$tentativas = isset($_POST['tentativas']) ? (int) $_POST['tentativas'] : 1;

$mensagem = '';
$acertou = false;

if ($tentativa === $sorte) {
    $acertou = true;
} elseif ($tentativa < $sorte) {
    $mensagem = "🔼 Tente um número MAIOR que $tentativa.";
} else {
    $mensagem = "🔽 Tente um número MENOR que $tentativa.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Número da Sorte</h1>

    <?php if ($acertou): ?>
        <h2>boa tu acerto</h2>
        <p>O número da sorte era <strong><?php echo $sorte; ?></strong>.</p>
        <p>Tentativas: <strong><?php echo $tentativas; ?></strong></p>
        <a href="index.php">Jogar Novamente</a>
    <?php else: ?>
        <p><?php echo $mensagem; ?></p>

        <form action="calcular.php" method="post">
            <label>Digite outro número:</label>
            <input type="number" name="tentativa" required>
            <input type="hidden" name="sorte" value="<?php echo $sorte; ?>">
            <input type="hidden" name="tentativas" value="<?php echo $tentativas + 1; ?>">
            <button type="submit">Tentar Novamente</button>
        </form>
    <?php endif; ?>
</body>
</html>
