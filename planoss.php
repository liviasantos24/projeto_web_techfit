<section class="planos">
    <h2>Nossos Planos</h2>

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
                <li>✔ Área de musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>
            <button class="btn-contratar" onclick="confirmarPlano('black')">Assinar plano</button>
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
                <li>✔ Área de musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>
             <button class="btn-contratar" onclick="confirmarPlano('Fit')">Assinar plano</button>

        </div>

        <!-- Plano Tech-->
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
                <li>✔ Área de musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>

            <button class="btn-contratar" onclick="confirmarPlano('Tech')">Assinar plano</button>
        </div>
    
        <a href="index.php" class="btn-voltar">⬅ Voltar ao Início</a>
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
