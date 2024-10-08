<?php
    echo $this->layout("_theme");
?>

<div class="content-private">
    <h2>Medicamentos Disponíveis</h2>
    <div class="content">
        <!-- O conteúdo dos medicamentos será preenchido pelo JavaScript -->
    </div>
</div>

<!-- Inclua o código JavaScript para carregar os medicamentos -->
<script type="module" src="<?= url("assets/js/app/medicamentoHome.js"); ?>"></script>

<div class="content-private">
    <!-- Conteúdo principal da área privada aqui -->
    <h2>Medicamentos Disponíveis</h2>
    <div class="content">
        <div class="medicine-card">
            <h3>Medicamento A</h3>
            <p>Descrição breve do Medicamento A. Indicado para tratamento de...</p>
            <span class="tag tarja-vermelha">Tarja Vermelha</span>
        </div>
        <div class="medicine-card">
            <h3>Medicamento B</h3>
            <p>Descrição breve do Medicamento B. Indicado para tratamento de...</p>
            <span class="tag tarja-preta">Tarja Preta</span>
        </div>
        <div class="medicine-card">
            <h3>Medicamento C</h3>
            <p>Descrição breve do Medicamento C. Indicado para tratamento de...</p>
            <span class="tag tarja-amarela">Tarja Amarela</span>
        </div>
        <div class="medicine-card">
            <h3>Medicamento D</h3>
            <p>Descrição breve do Medicamento D. Indicado para tratamento de...</p>
            <span class="tag tarja-verde">Tarja Verde</span>
        </div>
    </div>
</div>
