<?php
    include_once('templates/header.php');
    include_once('config/url.php');
?>

<div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title"> Meus Usuários</h1>
    <?php if(count($usuarios) > 0): ?>
    <table class="table" id="contacts-table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cpf</th>
                <th scope="col">RG</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td scope="row" class="bold-id"><?= $usuario['id'] ?></td>
                <td scope="row"><?= $usuario['nome'] ?></td>
                <td scope="row"><?= $usuario['cpf'] ?></td>
                <td scope="row"><?= $usuario['rg'] ?></td>
                <td scope="row"><?= $usuario['data_nascimento'] ?></td>
                <td class="actions">
                    <a href="#"><i class="fas fa-eye check-icon"></i></a>
                    <a href="#"><i class="far fa-edit edit-icon"></i></a>
                    <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <p id="empty-list-text">Ainda não tem nenhum contatos na sua agenda, <a href="<?=$BASE_URL?>create.php">clique aqui pra adicionar.</a>.</p>
    <?php endif; ?>
</div>

<?php
include_once('templates/footer.php');
?>