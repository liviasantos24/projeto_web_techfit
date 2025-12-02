<?php
require_once 'config/db.php';
?>
<section class="mudar-planos">
    <h2>Mudar de Plano ou Excluir</h2>
    <p class="sub">Escolha o novo plano que deseja migrar:</p>

    <div class="container-planos">

        <!-- Plano Black -->
        <div class="card-plano destaque">
            <h3>Plano Black</h3>

            <p class="preco">
                <span class="valor">R$ 9,90*</span><br>
                no 1º mês, depois R$ 149,90/mês
            </p>

            <ul class="lista">
                <li>✔ Fidelidade</li>
                <li>✔ Acesso ilimitado a todas as unidades</li>
                <li>✔ Leve 5 amigos por mês</li>
                <li>✔ Cadeira de massagem</li>
                <li>✔ Musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>

           <p><button class="btn-contratar" onclick="confirmarPlano('Black')">Mudar para este plano</button></p>
            <button class="btn-contratar" onclick="excluirplano('Black')">excluir plano</button>
        </div>

        <!-- Plano Fit -->
        <div class="card-plano">
            <h3>Plano Fit</h3>

            <p class="preco">
                <span class="valor">R$ 9,90*</span><br>
                no 1º mês, depois R$ 119,90/mês
            </p>

            <ul class="lista">
                <li>✔ Fidelidade</li>
                <li>✖ Acesso ilimitado</li>
                <li>✖ Levar amigos</li>
                <li>✖ Cadeira de massagem</li>
                <li>✔ Musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>

           <p> <button class="btn-contratar" onclick="confirmarPlano('Fit')">Mudar para este plano</button></p>
            <button class="btn-contratar" onclick="excluirplano('fit')">excluir plano</button>
        </div>

        <!-- Plano Tech -->
        <div class="card-plano">
            <h3>Plano Tech</h3>

            <p class="preco">
                <span class="valor">R$ 9,90*</span><br>
                no 1º mês, depois R$ 99,90/mês
            </p>

            <ul class="lista">
                <li>✖ Fidelidade</li>
                <li>✖ Acesso ilimitado</li>
                <li>✖ Levar amigos</li>
                <li>✖ Cadeira de massagem</li>
                <li>✔ Musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>

            <p><button class="btn-contratar" onclick="confirmarPlano('Tech')">Mudar para este plano</button></p>
             <button class="btn-contratar" onclick="excluirplano('Tech')">excluir plano</button>
        </div>
              <a href="index2.php" class="btn-voltar">⬅ Voltar ao Início</a>
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


    </div>
</section>

<script>
function confirmarPlano(plano) {
    alert("Plano " + plano + " confirmado com sucesso!");
}
</script>
<script>
function excluirplano(plano) {
    alert("Plano " + plano + " excluido com sucesso!");
}
</script>
 
<style>
.mudar-planos {
    text-align: center;
    padding: 80px 20px;
    background-color: #060A12;
}

.mudar-planos h2 {
    color: #00EAFF;
    font-size: 38px;
    margin-bottom: 10px;
    text-shadow: 0 0 12px #00EAFF;
}

.mudar-planos .sub {
    color: #c6d6e3;
    margin-bottom: 40px;
    font-size: 18px;
}

.container-planos {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

.card-plano {
    background: #08101c;
    border: 2px solid #00EAFF;
    border-radius: 14px;
    padding: 40px 30px;
    width: 330px;
    box-shadow: 0 0 25px rgba(0, 234, 255, 0.4);
    transition: 0.3s;
}

.card-plano:hover {
    transform: scale(1.04);
    box-shadow: 0 0 25px #ff29f4;
}

.card-plano h3 {
    color: #00EAFF;
    font-size: 28px;
    margin-bottom: 20px;
}

.valor {
    font-size: 34px;
    font-weight: bold;
    color: #00EAFF;
}

.preco {
    color: #c6d6e3;
    margin-bottom: 25px;
    line-height: 1.6;
}

.lista {
    text-align: left;
    padding: 0;
    list-style: none;
    color: #c6d6e3;
    min-height: 170px;
    margin-bottom: 25px;
}

.lista li {
    margin-bottom: 10px;
    font-size: 15px;
}

.destaque {
    border: 2px solid #ff29f4;
    box-shadow: 0 0 25px #ff29f4;
}

.btn-contratar {
    background: #00EAFF;
    color: #060A12;
    font-size: 18px;
    font-weight: bold;
    padding: 12px 20px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: 0.3s;
    width: 100%;
    text-transform: uppercase;
}

.btn-contratar:hover {
    background: #ff29f4;
    color: #fff;
    box-shadow: 0 0 15px #ff29f4;
}

@media (max-width: 900px) {
    .card-plano {
        width: 90%;
    }
}
</style>


