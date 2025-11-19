<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área Particular - Centro Esportivo TechFit</title>
    <style>
        

/* ====== GERAL ====== */
body {
    margin: 0;
    font-family: "Poppins", sans-serif;
    background-color: #0d0d0d;
    color: #fff;
}

/* ====== HEADER ====== */
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

/* ====== BOAS-VINDAS ====== */
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

/* ====== PAINEL ====== */
.painel {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
    padding: 20px 10%;
}

.info-box {
    background-color: #1a1a1a;
    border-radius: 15px;
    padding: 25px;
    width: 320px;
    box-shadow: 0 0 15px rgba(0, 230, 230, 0.2);
    transition: 0.3s;
}

.info-box:hover {
    transform: scale(1.03);
    box-shadow: 0 0 20px rgba(0, 230, 230, 0.4);
}

.info-box h2 {
    color: #00e6e6;
    margin-bottom: 10px;
}

/* ====== PROGRESSO ====== */
.progress-bar {
    background: #333;
    border-radius: 20px;
    height: 12px;
    overflow: hidden;
    margin-top: 10px;
}

.progress {
    background: #00e6e6;
    height: 100%;
    border-radius: 20px;
}

/* ====== ATALHOS ====== */
.atalhos {
    text-align: center;
    padding: 60px 10%;
}

.atalhos h2 {
    color: #00e6e6;
    margin-bottom: 25px;
}

.atalhos-btns {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
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

.maior{
    
    font-size: 20px;
}

.menor{
    font-size: 14px;
    opacity: 0.8;
}
.menor-menor{
    font-size: 12px;
    opacity: 0.8;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 20px #00e6e6;
    
}
.card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
}
.card img:hover {
    box-shadow: 0 0 15px #00e6e6;
    transform: scale(1.03);
   
}

.card h3 {
    color: #00e6e6;
    font-size: 22px;
    margin-bottom: 10px;
}

.card p {
    color: #ccc;
    font-size: 16px;
}
.btn {
    background-color: #00e6e6;
    color: #0d0d0d;
    padding: 12px 25px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.btn:hover {
    background-color: #00b3b3;
    transform: translateY(-2px);
}

/* ====== FOOTER ====== */
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
