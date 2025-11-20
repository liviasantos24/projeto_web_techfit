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

            <button class="btn-contratar">Contratar</button>
        </div>

        <!-- Plano Fit -->
        <div class="card-plano">
            <h3>Plano Fit</h3>

            <p class="preco">
                <span class="valor">R$ 9,90*</span><br>
                no 1º mês, depois R$ 99,90/mês
            </p>

            <ul class="lista">
                <li>✔ Fidelidade</li>
                <li>✖ Acesso ilimitado</li>
                <li>✖ Levar amigos</li>
                <li>✖ Cadeira de massagem</li>
                <li>✔ Área de musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>

            <button class="btn-contratar">Contratar</button>
        </div>

        <!-- Plano Smart -->
        <div class="card-plano">
            <h3>Plano Smart</h3>

            <p class="preco">
                <span class="valor">R$ 9,90*</span><br>
                no 1º mês, depois R$ 119,90/mês
            </p>

            <ul class="lista">
                <li>✖ Fidelidade</li>
                <li>✖ Acesso ilimitado</li>
                <li>✖ Levar amigos</li>
                <li>✖ Cadeira de massagem</li>
                <li>✔ Área de musculação e aeróbicos</li>
                <li>✔ App TechFit</li>
            </ul>

            <button class="btn-contratar">Contratar</button>
        </div>

    </div>
</section>
<style>
.planos {
    text-align: center;
    padding: 80px 20px;
    background-color: #060A12;
}

.planos h2 {
    color: #00EAFF;
    font-size: 36px;
    margin-bottom: 40px;
    text-shadow: 0 0 12px #00EAFF;
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
    border-radius: 12px;
    padding: 40px 30px;
    width: 320px;
    box-shadow: 0 0 25px rgba(0, 234, 255, 0.4);
    transition: 0.3s;
}

.card-plano:hover {
    transform: scale(1.03);
    box-shadow: 0 0 25px #ff29f4;
}

.card-plano h3 {
    color: #00EAFF;
    font-size: 26px;
    margin-bottom: 15px;
}

.card-plano .preco {
    color: #c6d6e3;
    font-size: 16px;
    margin-bottom: 25px;
    line-height: 1.5;
}

.card-plano .valor {
    font-size: 32px;
    font-weight: bold;
    color: #00EAFF;
}

.lista {
    color: #c6d6e3;
    text-align: left;
    list-style: none;
    padding: 0;
    min-height: 180px;
    margin-bottom: 30px;
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
    padding: 12px 25px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: 0.3s;
    text-transform: uppercase;
    width: 100%;
}

.btn-contratar:hover {
    background: #ff29f4;
    box-shadow: 0 0 15px #ff29f4;
    color: white;
}
</style>
