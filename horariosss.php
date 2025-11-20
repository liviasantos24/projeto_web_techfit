<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Horários | Centro Esportivo TechFit</title>
    <link rel="stylesheet" href="css/horarios/styke.css">
</head>
<body>

<main class="container-horarios">
     
    <!-- SEGUNDA-->
    <div class="esporte-card">
        <h2>SEGUNDA</h2>
        <div class="categorias">
            <div class="categoria">
                <h3>Spinning</h3>
                <p>08:00</p>
            </div>
            <div class="categoria">
                <h3>Gap</h3>
                <p>9:00</p>
            </div>
            <div class="categoria">
                <h3>Spinning</h3>
                <p>17:00</p>
            </div>
            <div class="categoria">
                <h3>Funcional</h3>
                <p>18:00</p>
            </div>
              <div class="categoria">
                <h3>Dança Ritmos</h3>
                <p>19:00</p>
            </div>
        </div>
    </div>

    <!-- TERÇA -->
    <div class="esporte-card">
        <h2>TERÇA</h2>
        <div class="categorias">
            <div class="categoria">
                <h3>Funcional</h3>
                <p>05:30</p>
            </div>
            <div class="categoria">
                <h3>Jump</h3>
                <p>8:00</p>
            </div>
            <div class="categoria">
                <h3>Core e Mobilidade</h3>
                <p>09:00</p>
            </div>
             <div class="categoria">
                <h3>Step</h3>
                <p>17:00</p>
            </div>
             <div class="categoria">
                <h3>Grupo de Corrida</h3>
                <p>18:00</p>
            </div>
            <div class="categoria">
                <h3>Core e Mobilidade</h3>
                <p>18:00</p>
            </div>
        </div>
    </div>

    <!-- QUARTA -->
    <div class="esporte-card">
          <h2>  Quarta</h2>
        <div class="categorias">
            <div class="categoria">
                <h3>Spinning</h3>
                <p>08:00</p>
            </div>
            <div class="categoria">
                <h3>Gap</h3>
                <p>9:00</p>
            </div>
            <div class="categoria">
                <h3>Jump</h3>
                <p>17:00</p>
            </div>
            <div class="categoria">
                <h3>Spinning</h3>
                <p>18:00</p>
            </div>
              <div class="categoria">
                <h3>Dança Ritmos</h3>
                <p>19:00</p>
            </div>
        </div>
    </div>

    <!-- QUINTA -->
    <div class="esporte-card">
        <h2>QUINTA</h2>
        <div class="categorias">
            <div class="categoria">
                <h3>Funcional</h3>
                <p>5:30</p>
            </div>
            <div class="categoria">
                <h3>Jump</h3>
                <p>8:00</p>
            </div>
            <div class="categoria">
                <h3>Funcional</h3>
                <p>9:00</p>
            </div>
            <div class="categoria">
                <h3>Step</h3>
                <p>17:00</p>
            </div>
            <div class="categoria">
                <h3>Funcional</h3>
                <p>18:00</p>
            </div>
        </div>
    </div>

    <!-- SEXTA -->
    <div class="esporte-card">
        <h2>SEXTA</h2>
        <div class="categorias">
            <div class="categoria">
                <h3>Gap</h3>
                <p>9:00</p>
            </div>
            <div class="categoria">
                <h3>Jump</h3>
                <p>17:00</p>
            </div>
        </div>
    </div>

    <a href="index2.php" class="btn-voltar">⬅ Voltar ao Início</a>
</main>
<style>
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
</style>
