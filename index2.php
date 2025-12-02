<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área Particular - Centro Esportivo TechFit</title>

    <style>


body {
    margin: 0;
    font-family: "Poppins", sans-serif;
    background-color: #0d0d0d;
    color: #fff;
}


header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 10%;
    background-color: #0b0b0b;
    box-shadow: 0 0 15px #00e6e6;
}

nav a {
    color: #bfbfbf;
    margin: 0 15px;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
}

nav a:hover,
nav a.active {
    color: #00e6e6;
    text-shadow: 0 0 10px #00e6e6;
}


.boas-vindas {
    text-align: center;
    padding: 80px 10%;
}

.boas-vindas h1 {
    font-size: 42px;
}

.destaque {
    color: #00e6e6;
    text-shadow: 0 0 10px #00e6e6;
}


.modalidades {
    padding: 80px 20px;
    text-align: center;
}

.modalidades h2 {
    color: #00e6e6;
    font-size: 32px;
    margin-bottom: 40px;
}

.cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.card {
    background: #111;
    border: 2px solid #00e6e6;
    text-align: left;
    border-radius: 10px;
    padding: 25px;
    width: 260px;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 20px #00e6e6;
}

.maior {
    font-size: 20px;
}

.menor {
    font-size: 14px;
    opacity: 0.8;
}

.menor-menor {
    font-size: 12px;
    opacity: 0.8;
}


.estrutura {
    text-align: center;
    padding: 80px 20px;
    background-color: #060A12;
}

.estrutura h2 {
    color: #00EAFF;
    font-size: 32px;
    margin-bottom: 40px;
}

.estrutura .galeria {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.estrutura .galeria img {
    width: 300px;
    border-radius: 10px;
    transition: 0.3s;
}

.estrutura .galeria img:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px #FF29F4;
}


.btn-voltar {
    display: inline-block;
    background: #111;
    color: #fff;
    text-decoration: none;
    padding: 10px 18px;
    border-radius: 8px;
    font-weight: 600;
    transition: background 0.3s;
    margin-bottom: 20px;
}
.btn-voltar:hover {
    background: #333;
}


footer {
    background-color: #0b0b0b;
    text-align: center;
    padding: 15px 0;
    color: #bfbfbf;
    font-size: 14px;
    box-shadow: 0 -2px 10px rgba(0, 230, 230, 0.1);
}

    </style>

</head>
<body>

<header>
    <div class="logo">
        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEg3xbKPWUZ9OJfhNpM3vlqZkjV7JvguHGiSWKumgauhf94ioe89D3cYsCXXdefkCcXVbeyHBX-3iIPY8Ukwc3j7tQGtFitVcB6iwMvzSp6TmK1GMDMlaVBGG3ZYSeLrdV2iKyi_QfuzO3q353dvYXi0pIosrN8SexBRKfI_L66ZXA0aYJFuASOZJXGUobkm"
             style="width:100px;height:100px;border-radius:50%;object-fit:cover;"
             alt="Logo TechFit">
    </div>

    <nav>
        <div class="atalhos-btns">
            <a href="treinadoress.php" class="btn">Personais</a>
            <a href="mudarplanos.php" class="btn">Mudar Planos</a>
            <a href="contato.php" class="btn">Contato</a>
            <a href="treinador.php" class="btn">Escolher Personais</a>
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
        <p>Só na Techfit há serviços e produtos para potencializar seus resultados</p>

        <div class="cards">
            <div class="card">
                <h3>Apoio completo para sua rotina fitness</h3>
                <p>Consultoria de treino + nutricionista online + exame de bioimpedância + bebidas esportivas.<br><br>
                <b class="maior">R$39,90</b><span class="menor">/mês<br>12 meses</span></p>
            </div>

            <div class="card">
                <h3>Acompanhamento personalizado de treino</h3>
                <p>Treino online criado por treinador profissional.<br><br>
                <b class="maior">R$39,90</b><span class="menor">/mês<br>12 meses</span></p>
            </div>

            <div class="card">
                <h3>Bebidas esportivas</h3>
                <p>Bebidas para te ajudar antes, durante e depois do treino!<br><br>
                <b class="maior">R$24,90</b><span class="menor">/mês</span></p>
            </div>
        </div>

    </section>


    <section class="estrutura">
        <h2>Nossa Estrutura</h2>

        <div class="galeria">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiCPVXf0L2est7uqltW5GIZ26mBTQRRJTG7MvYXYjXLf2CQC8CPovKtgCOnhBSZOAhRZRmA1Er5YwL30T8v01L_o5SEAdxGShbuYACbA9_9OkJFbICLB39tYQHIfMlEZ791dey7wHbC2io7HOwRVhiBEWj_fmcd3UQouAdzxRBq08jvEsCeJqsvS_9L80nL">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiOfkupgzm5VpYQNagUyLouGY3Je6ooHj189rX_i96nL-IPvo2jEDFsjVIeRYjl73C8-dqKqwP8NB3YwmMzS_5EH_8A8gSAMqeaPeL-0-ZheuhUf3G2ykXnEmxqoVbDaM6XgbAAnHvYLKRXZOts3wHx2zlEZvBO4aWprguE6jsiIJ8sHUIcXh5lq77yjE8w">
    
    </section>

    <br><br>
    <a href="index.php" class="btn-voltar">⬅ Voltar à Página Principal</a>

</main>

<footer>
    <p>&copy; 2025 TechFit - Todos os direitos reservados.</p>
</footer>

</body>
</html>

