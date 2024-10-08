<?php
echo $this->layout("_theme");
?>

<style>
    /* Estilo do contêiner principal */
.content {
    padding: 20px;
    max-width: 800px;
    margin: 0 auto;
}

/* Estilo da lista de medicamentos */
.medicine-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Espaço entre os cartões */
}

/* Estilo do cartão de medicamento */
.medicine-card {
    background-color: #f9f9f9; /* Fundo claro */
    border: 1px solid #ddd; /* Borda sutil */
    border-radius: 8px; /* Cantos arredondados */
    padding: 15px;
    flex: 1 1 calc(30% - 20px); /* Três cartões por linha */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra leve */
    transition: transform 0.2s; /* Transição suave */
}

.medicine-card:hover {
    transform: scale(1.05); /* Efeito de aumento ao passar o mouse */
}

/* Estilo da tarja */
.tag {
    display: inline-block;
    padding: 5px 10px;
    border-radius: 15px;
    color: #fff; /* Texto branco */
    font-weight: bold;
}

/* Estilos para diferentes tarjas */
.tarja-verde {
    background-color: #28a745; /* Verde */
}

.tarja-amarela {
    background-color: #ffc107; /* Amarelo */
}

.tarja-vermelha {
    background-color: #dc3545; /* Vermelho */
}

/* Estilo para mensagens de erro */
.error-message {
    color: #dc3545; /* Vermelho */
    font-weight: bold;
    margin-top: 20px;
}

/* Estilo para mensagem de sucesso */
.success-message {
    color: #28a745; /* Verde */
    font-weight: bold;
    margin-top: 20px;
}

</style>

<div class="content-private">
    <h2>Meus Medicamentos</h2>
    <div class="content">
        <!-- O conteúdo dos medicamentos será preenchido pelo JavaScript -->
    </div>
</div>

<!-- Inclua o código JavaScript para carregar os medicamentos -->
<script type="module" src="<?= url("assets/js/app/medicamentoUsuario.js"); ?>"></script>
