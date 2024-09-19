<?php $this->layout('_theme') ?>
<?php $this->start("specific-script"); ?>
<script type="module" src="<?= url("assets/js/admin/services.js"); ?>"></script>
<link rel="stylesheet" href="<?= url("assets/css/admin/services.css"); ?>">
<?php $this->end(); ?>

<section>
    <h2>Lista de Serviços</h2>
    <ul id="list-services">
<!--            <li>
                <span>ID: 1</span>
                <span>Nome: Engenharia</span>
                <button class="edit-btn" data-id="1"><i class="fas fa-edit"></i> Editar</button>
                <button class="delete-btn" data-id="1"><i class="fas fa-trash"></i> Excluir</button>
            </li>
            <li>
                <span>ID: 1</span>
                <span>Nome: Engenharia</span>
                <button class="edit-btn" data-id="1"><i class="fas fa-edit"></i> Editar</button>
                <button class="delete-btn" data-id="1"><i class="fas fa-trash"></i> Excluir</button>
            </li>-->
    </ul>
</section>

<section id="edit-modal" class="modal">
    <form id="edit-form">
        <h2>Editar Serviço</h2>
        <label for="service-id">ID</label>
        <input type="text" id="service-id" name="id" readonly>
        <label for="service-name">Nome</label>
        <input type="text" id="service-name" name="name">
        <label for="service-description">Descrição</label>
        <textarea id="service-description" name="description"></textarea>
        <label for="service-category">Categoria</label>
        <input type="text" id="service-category" name="category">
        <button type="submit">Salvar</button>
        <button type="button" id="close-modal">Cancelar</button>
    </form>
</section>
