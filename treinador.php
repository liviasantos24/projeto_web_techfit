<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>TechFit</title>
    <link rel="stylesheet" href="styletreinador.css">
</head>
<body>

<div class="container">
    <h2>Escolha seu Personal</h2>

    <form method="POST">
        <select name="treinador" required>
            <option value="">Selecione um personal</option>
            <option value="Caua Oliveira">Caua Oliveira</option>
            <option value="Patrícia Rocha">Patrícia Rocha</option>
            <option value="Rafael Silva">Rafael Silva</option>
            <option value="Camila Mendes">Camila Mendes</option>
            <option value="Ricardo Guedes">Ricardo Guedes</option>
            <option value="Fernanda Diniz">Fernanda Diniz</option>
            <option value="Felipe Castro">Felipe Casto</option>
            <option value="Clara Lacerda">Clara Lacerda</option>
            <option value="Gabriel Almeida">Gabriel Almeida</option>
            <option value="Aline Ferreira">Aline Ferreira</option>
            <option value="Rodrigo Sales">Rodrigo Sales</option>
            <option value="Clara Castro">Clara Castro</option>
            <option value="Johnny Lawrence">Johnny Lawrence</option>
            <option value="Lívia Medeiros">Lívia Medeiros</option>
            <option value="Caio Nogueira">Caio Nogueira</option>
            <option value="Bianca Silva">Bianca Silva</option>
            <option value="Rafael Costa">Rafael Costa</option>
            <option value="Camila Brros">Camila Barros</option>
            <option value="Bruno Sales">Bruno Sales</option>
            <option value="Sofia Mendes">Sofia Mendes</option>
            <option value="Lucas Pereira">Lucas Pereira</option>
            <option value="Fernanda Garcia">Fernanda Garcia</option>
        </select>

        <button type="submit" name="escolher">Confirmar Personal</button>
    </form>

    <?php
    if (isset($_POST['escolher'])) {
        $treinador = $_POST['treinador'];
        echo "<div class='mensagem'>Personal <strong>$treinador</strong> escolhido com sucesso! Em breve ele entrará em contato com você para definir melhor o seu objetivo.</div>";
    }
    ?>

    <a href="index2.php" class="voltar">← Voltar para a página principal</a>
</div>

</body>
</html>
