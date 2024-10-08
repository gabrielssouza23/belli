<?php 
    echo $this->layout("_theme");
?>

<!-- Banner com navegação -->
<div class="banner">
    <div class="navebar">
        <div class="logo">
            <h2>Meu Sistema</h2>
        </div>
        <ul>
            <li><a href="<?= url(); ?>">Home</a></li>
            <li><a href="<?= url('sobre'); ?>">Sobre</a></li>
            <li><a href="<?= url('contato'); ?>">Contato</a></li>
            <li><a href="<?= url('localizacao'); ?>">Localização</a></li>
            <li><a href="<?= url('faqs'); ?>">FAQs</a></li>
            <li><a href="<?= url('login'); ?>">Entrar</a></li>
        </ul>
    </div>
    
    <!-- Conteúdo do banner -->
    <div class="content">
        <h1>Bem-vindo ao Meu Sistema</h1>
        <p>Explore os links abaixo para saber mais.</p>
        <button><span></span>Saiba Mais</button>
    </div>
</div>
