<?php
include_once('templates/header.php');
?>

    <div class="container" id="view-contact-container">
        <?php include_once('templates/backbtn.html'); ?>
        <h1 id="main-title"><?= $contact["nome"]?></h1>

    <p class="bold">Cpf:</p>
    <p><?= $contact['cpf']?></p>
    <p class="bold">RG:</p>
    <p><?= $contact['rg']?></p>
    <p class="bold">Data de nascimento:</p>
    <p><?= $contact['data_nascimento']?></p>
    </div>
<?php
include_once('templates/footer.php');
?>
