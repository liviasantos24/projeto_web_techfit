<?php
require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TechFit - Nossos Funcionários</title> 
<style>
:root {
  --cor-primaria: #00e6e6;
  --cor-secundaria: #098DAC;
  --cor-destaque: #04C260;
  --cor-fundo: #000000ff;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background: var(--cor-fundo);
  color: #000000ff;
}

main {
  padding: 40px 20px;
}


#aulas {
  max-width: 1200px;
  margin: 60px auto;
  padding: 40px;
  background: #000000ff;
  border-radius: 30px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

#aulas h2 {
  text-align: center;
  font-size: 3em;
  margin-bottom: 60px;
  color: black;
  background-color: var(--cor-primaria);
  padding: 20px;
  border-radius: 20px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.97);
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

footer {
  background: #000000ff;
  text-align: center;
  padding: 20px;
  font-size: 16px;
  color: #333;
  margin-top: 40px;
}
</style>
</head>

<body>
<main>
    <section id="aulas">
        <h2>Nossas Aulas e Treinos Exclusivos</h2>
    </section>
    <section class="modalidades">
            <div class="cards">
                <div class="card">
                    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgsCnJBnBELW2rRhmGQ5ukUiRwki8Vt41d49DpGkyUWaR727S0d5NMWmsl2cWYFhPFBxepZ9nia5zkWzDoyAHJCs1uQ711dlo7iiWhEs0DqG62jL7IeI8w97F2wEw1L6cpVRlGMT0io_kXBSQ6ytrhznoUfRFsmEn4BKOH_29NGq3CfS6riyi1pipMtZXU" alt="fitdance">
                    <h3>FITDANCE</h3>
                    <p>Pra você manjar de todos os passinhos, as aulas de dança da Smart Fit sao ministradas por professores licenciados pela FitDance.<br><br><b>Duração: </b>45/60 min <b>intensidade: </b>Alta</p>
                </div>
                <div class="card">
                    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhZ8k-frEZZHjLPEff2LnoWevA-oP2uNqecb6r6fJPw9dpM9n48ALa02lhgGccaLnoYvJ_20cTtsEv1YFnqtfs38u5cMr_Y9X_XHFUitG7zweDEYb3dnStznk_HsVy0K0f_YGF6R3gdhHNwrb4MqE8ZFH90UeQ-UkH_DwdZfbgWbNACdUTzgmot5k03US8">
                    <h3>CROSSFIT</h3>
                    <p>Emagrecimento com ganho de condicionamento físico em apenas 30 minutos? Esse e o Smart Cross, nosso treino de funcional coletivo de alta intensidade.<br><br><b>Duração: </b>30 min <b>intensidade: </b>Alta</p>
                </div>
                <div class="card">
                    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEixeplePD1013429n5CN4J4DUYuPokQ76GAqsoqwQp_dMCtzTtnFApdtNGZMERj8GBqjLr-OteUQ4XazKIexIRF4K0y9WrpOQxF01ep1VKnS_umyvKy004nwR9O2ksunTBpIjlHcdsJ0CJbTSROsCUYQjturTgHigslzmURwvWtnwVfGVcpkNfKt9PrLyY" alt="fitdance">
                    <h3>BODY COMBAT</h3>
                    <p>Karate, Jiu-jitsu, Capoeira, Kung Fu e Taekwondo sao algumas das inspirações para a aula de BodyCombat. Esse treino ainda trabalha todo o corpo.<br><br><b>Duração: </b>30/45 min <b>intensidade: </b>Alta</p>
                </div>

<a href="index.php" class="btn-voltar">⬅ Voltar ao Início</a>
<style>
.btn-voltar {
 .voltar {
    background: #111;
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 6px;
}

}
.btn-voltar:hover {
    background: #333;
}
</style>



<footer>Centro Esportivo TechFit © 2025</footer>
</body>
</html>
