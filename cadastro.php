<?php
require_once 'config/db.php'; 

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    // Salva no banco
    $sql = "INSERT INTO cadastros (nome, email, cpf, data_cadastro)
            VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $cpf);
    $stmt->execute();

    $mensagem = "Cadastro realizado com sucesso!";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro | TechFit</title>
    <link rel="stylesheet" href="css/cadastro/style.css">
</head>
<body>

    <a href="index.php" class="btn-voltar">⬅ Voltar ao Início</a>

    <div class="container">
        <h2>Cadastro de Participante</h2>

        <form method="POST">

            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>E-mail:</label>
            <input type="email" name="email" required>

            <label>CPF:</label>
            <input type="text" name="cpf" required maxlength="14" placeholder="000.000.000-00">

            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <?php if (!empty($mensagem)): ?>
        <div class="alerta" id="mensagemFinal">
            <div class="caixa-alerta">
                <h3>TechFit</h3>
                <p><?php echo $mensagem; ?></p>
                <button onclick="window.location.href='cadastro.php'">Voltar</button>
            </div>
        </div>
    <?php endif; ?>

</body>
</html>

<style>
.btn-voltar {
    display: inline-block;
    background: #111;
    color: #fff;
    text-decoration: none;
    padding: 6px 12px;
    font-size: 13px;
    border-radius: 6px;
    font-weight: 500;
    transition: 0.3s;
    margin: 15px;
}
.btn-voltar:hover {
    background: #333;
}
</style>
