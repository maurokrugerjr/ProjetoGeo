<?php

include_once('templates/header.php');
include_once('config/url.php');

?>
    <div class="container">
        <?php include_once('templates/backbtn.html')?>
        <h1 id="main-title">Editar usuario</h1>
        <form action="<?=$BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label for="nome">Nome do usuario:</label>
                <input type="text" class="form-control" id="name" name="nome" placeholder="Digite seu nome..." value="<?= $contact['nome'] ?>" required>
            </div>
            <div class="form-group">
                <label for="nome">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu cpf..." value="<?= $contact['cpf'] ?>" required>
            </div>
            <div class="form-group">
                <label for="nome">RG:</label>
                <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite seu RG..." value="<?= $contact['rg'] ?>" required>
            </div>
            <div class="form-group">
                <label for="nome">Data de nascimento:</label>
                <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Digite sua data de nascimento..." value="<?= $contact['data_nascimento'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar usuario</button>
        </form>
    </div>

<?php

include_once('templates/footer.php');

?>