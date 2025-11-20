<?php
require_once 'config/db.php';

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $query = "SELECT * FROM cadastros WHERE codigo_particular = '$codigo'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // ✅ Se o código for válido, redireciona para o index
        header("Location: index2.php");
        exit;
    } else {
        // ❌ Caso contrário, mostra mensagem de erro
        $mensagem = "<div class='msg-erro'>❌ Código inválido! Tente novamente.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login | TechFit</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <style>
      ...
    </style>
</head>
<body>
    <main class="container-cadastro">
        <h2>Login - Plano Particular</h2>
        <form method="POST">
            <label>Digite seu código:</label>
            <input type="text" name="codigo" required placeholder="Insira seu código de acesso">
            <button type="submit">Entrar</button>
            <?php echo $mensagem; ?>
        </form>
    </main>
</body>
</html>
