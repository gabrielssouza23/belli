<link rel="stylesheet" href="<?= url("assets/css/web/login.css"); ?>">
<?php 
    echo $this->layout("_theme");
?>

<?php $this->start("specific-script"); ?>
<script type="module" src="<?= url("assets/js/web/login.js"); ?>" async></script>
<?php $this->end(); ?>

<div class="login-register-container">
    <div class="forms-wrapper">
        <!-- Formulário de Cadastro de Usuário -->
        <div class="form-container">
            <h2>Registrar</h2>
            <form id="formRegister">
                <label>
                    <span>Nome:</span>
                    <input type="text" name="name" placeholder="Seu nome" value="Fábio Santos">
                </label>
                <label>
                    <span>Email:</span>
                    <input type="email" name="email" placeholder="Seu email" value="fabiosantos@ifsul.edu.br">
                </label>
                <label>
                    <span>Senha:</span>
                    <input type="password" name="password" placeholder="Sua senha" value="1234567">
                </label>
                <button><span></span>Cadastrar</button>
            </form>

        </div>

        <!-- Formulário de Login -->
        <div class="form-container">
            <h2>Entrar</h2>
            <form id="formLogin">
                <label>
                    <span>Email:</span>
                    <input type="email" name="email" placeholder="Seu email" value="fabiosantos@ifsul.edu.br">
                </label>
                <label>
                    <span>Senha:</span>
                    <input type="password" name="password" placeholder="Sua senha" value="12345678">
                </label>
                <button><span></span>Entrar</button>
            </form>
     
        </div>
    </div>
</div>

<!-- Contêiner para as mensagens toast -->
<div id="toast-container"></div>
