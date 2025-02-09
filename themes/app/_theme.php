<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:: Área Privada ::..</title>
    <link rel="stylesheet" href="<?= url("assets/css/app/styles.css"); ?>"> <!-- Atualize com o caminho correto do seu arquivo CSS -->
    <script type="module" src="<?= url("assets/js/app/theme.js");  ?>"></script>
    <?php if ($this->section("specific-script")): ?>
        <?= $this->section("specific-script"); ?>
    <?php endif; ?>
</head>
<body class="private-area">
<nav id="private-navbar">
    <div id="user-greeting">
        <div id="user-photo"></div>
        <span>Olá, Fulano!</span>
    </div>
    
    <a href="<?= url("/app/home"); ?>">Home</a>
    <a href="<?= url("/app/perfil"); ?>">Perfil</a>
    <a href="<?= url("/app/medicamentos"); ?>">Meus Medicamentos</a>
    <a href="#">Sair</a>
</nav>
<!-- Contêiner para as mensagens toast -->
<div id="toast-container"></div>
<div class="content">
    <?php
    echo $this->section("content");
    ?>
</div>
<footer class="private-footer">
    © 2023 Nome da Empresa. Todos os direitos reservados.
</footer>
</body>
</html>