<?php

include_once('templates/header.php');
include_once('config/url.php');

?>
<div class="container">
    <?php include_once('templates/backbtn.html')?>
    <h1 id="main-title">Criar usuario</h1>
    <form action="<?=$BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="nome">Nome do usuario:</label>
            <input type="text" class="form-control" id="name" name="nome" placeholder="Digite seu nome..." required>
        </div>
        <div class="form-group">
            <label for="nome">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu cpf..." required>
        </div>
        <div class="form-group">
            <label for="nome">RG:</label>
            <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite seu RG..." required>
        </div>
        <div class="form-group">
            <label for="nome">Data de nascimento:</label>
            <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Digite sua data de nascimento..." required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php

include_once('templates/footer.php');

?>