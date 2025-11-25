<?php
require_once 'config/db.php';

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $query = "SELECT * FROM cadastros WHERE codigo = '$codigo'";
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
        body {
            background-color: #0d0d0d;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
