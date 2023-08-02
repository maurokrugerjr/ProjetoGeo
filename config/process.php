<?php

    session_start();

    include_once('url.php');
    include_once('connection.php');

    $query = "SELECT * FROM usuarios_cadastrado";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $usuarios = $stmt->fetchAll();