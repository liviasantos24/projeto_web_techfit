<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>TechFit</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiwP0DDxMmfNvRfArEKbO49OavRQ8vOMM3A6pQZhYWggkZXYWUqAvFjVH_dWR6WH6OtJesS3IDLDadsxS7y4CzNuCsdVFIPfO7j6yJ72udeP-J3cV08sBSMx0hQLXp5JxOYYgOoQN1AIqcgFgFxjirp3KBptBi2eaOa12AjS49oubdpwItgi92MnNyqK-KY=w200-h185"
                 style="width:100px;height:100px;border-radius:50%;object-fit:cover;"
                 alt="Logo TechFit">
        </div>

        <nav>
            <div class="atalhos-btns">
                <a href="treinadores.php" class="btn">Treinadores</a>
                <a href="horarios.php" class="btn">Horários</a>
                <a href="contato.php" class="btn">Contato</a>
                <a href="treinador.php" class="btn">Escolher treinador</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="boas-vindas">
            <h1>Bem-vindo(a) à sua área do aluno!</h1>
            <p>Continue sua jornada de evolução com suporte completo da TechFit 💪</p>
        </section>

        <section class="modalidades">
            <h2>Conheça nossos produtos e serviços adicionais para você</h2>
            <p>Só na Smart há serviços e produtos para potencializar seus resultados</p>
            <div class="cards">
                <div class="card">
                    <h3>Apoio completo para sua rotina fitness</h3>
                    <p>Consultoria de treino e nutricionista on-line + exame de bioimpedância + dose diária de bebidas esportivas e energéticas.<br><br><b class="maior">R$39,90</b><span class="menor">/mês<br>12 meses de permanência</span></p>
                    <p><span class="menor-menor">Obs: Consulte a recepção para cadastro<span></p>
                </div>
            
                <div class="cards">
                    <div class="card">
                        <h3>Acompanhamento personalizado de treino</h3>
                        <p>Treino on-line personalizado criado por um treinador.<br><br>
                        <b class="maior">R$39,90</b><span class="menor">/mês<br>12 meses de permanência</span></p>
                        <p><span class="menor-menor">Obs: Consulte a recepção para cadastro<span></p>
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                        <h3>Bebidas esportivas e energéticas em sabores</h3>
                        <p>Bebidas esportivas para te ajudar antes, durante e depois do treino!<br><br>
                        <b class="maior">R$24,90</b><span class="menor">/mês</span></p>
                        <p><span class="menor-menor">Obs: Consulte a recepção para cadastro<span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 TechFit - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
