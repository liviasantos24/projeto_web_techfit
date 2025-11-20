<?php
require_once 'config/db.php';
?>
<section class="mudar-planos">
    <h2>Mudar de Plano</h2>
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
                <li>✔ Acesso ilimitado a todas as unidades</li>
                <li>✔ Leve 5 amigos por mês</li>
                <li>✔ Cadeira de massagem</li>
                <li>✔ Musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>

            <button class="btn-contratar" onclick="confirmarPlano('Black')">Mudar para este plano</button>
        </div>

        <!-- Plano Fit -->
        <div class="card-plano">
            <h3>Plano Fit</h3>

            <p class="preco">
                <span class="valor">R$ 9,90*</span><br>
                no 1º mês, depois R$ 99,90/mês
            </p>

            <ul class="lista">
                <li>✖ Acesso ilimitado</li>
                <li>✖ Levar amigos</li>
                <li>✖ Cadeira de massagem</li>
                <li>✔ Musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>

            <button class="btn-contratar" onclick="confirmarPlano('Fit')">Mudar para este plano</button>
        </div>

        <!-- Plano Smart -->
        <div class="card-plano">
            <h3>Plano Smart</h3>

            <p class="preco">
                <span class="valor">R$ 9,90*</span><br>
                no 1º mês, depois R$ 119,90/mês
            </p>

            <ul class="lista">
                <li>✖ Acesso ilimitado</li>
                <li>✖ Levar amigos</li>
                <li>✖ Cadeira de massagem</li>
                <li>✔ Musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>

            <button class="btn-contratar" onclick="confirmarPlano('Smart')">Mudar para este plano</button>
        </div>

    </div>
</section>

<script>
function confirmarPlano(plano) {
    alert("Plano " + plano + " confirmado com sucesso!");
}
</script>
