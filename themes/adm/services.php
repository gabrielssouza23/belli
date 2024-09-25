<?php $this->layout('_theme') ?>
<?php $this->start("specific-script"); ?>
<script type="module" src="<?= url("assets/js/admin/services.js"); ?>"></script>
<link rel="stylesheet" href="<?= url("assets/css/admin/services.css"); ?>">
<?php $this->end(); ?>

<section>
    <h2>Lista de Serviços</h2>
    <ul id="list-services">
<!--            <li service-id=1>
                <span>ID: 1</span>
                <span>Nome: Engenharia</span>
                <button class="edit-btn" data-id="1"><i class="fas fa-edit"></i> Editar</button>
                <button class="delete-btn" data-id="1"><i class="fas fa-trash"></i> Excluir</button>
            </li>
            <li service-id=2>
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
        <!--<label for="id">ID</label>
        <input type="text" id="id" name="id" readonly>-->
        <label for="name">Nome</label>
        <input type="text" id="name" name="name">
        <label for="description">Descrição</label>
        <textarea id="description" name="description"></textarea>
        <!--<label for="service-category">Categoria</label>
        <select name="service-category" id="">
            <option value=""></option>
        </select>-->
        <button type="submit">Salvar</button>
        <button type="button" id="close-modal">Cancelar</button>
    </form>
</section>
