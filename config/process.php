<?php

    session_start();

    include_once('url.php');
    include_once('connection.php');

    $id = "";

    $data = $_POST;

    if (!empty($data)){

        if ($data["type"] === "create"){
            $nome = $data["nome"];
            $cpf = $data["cpf"];
            $rg = $data["rg"];
            $dataNascimento = $data["data_nascimento"];

            $query = "INSERT INTO usuarios_cadastrado (nome, cpf, rg, data_nascimento) VALUES (:nome, :cpf, :rg, :data_nascimento)";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":rg", $rg);
            $stmt->bindParam(":data_nascimento", $dataNascimento);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso.";
            }catch (PDOException $e){
                $error = $e->getMessage();
                echo "Erro $error";
            }
        }else if($data["type"] === "edit"){

            $nome = $data["nome"];
            $cpf = $data["cpf"];
            $rg = $data["rg"];
            $dataNascimento = $data["data_nascimento"];
            $id = $data["id"];

            $query = "UPDATE usuarios_cadastrado SET nome = :nome, cpf = :cpf, rg = :rg, data_nascimento = :data_nascimento WHERE id = :id";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":rg", $rg);
            $stmt->bindParam(":data_nascimento", $dataNascimento);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso.";
            }catch (PDOException $e){
                $error = $e->getMessage();
                echo "Erro $error";
            }
        }else if($data["type"] === "delete"){

            $id = $data["id"];

            $query = "DELETE FROM usuarios_cadastrado WHERE id = :id";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato removido com sucesso.";
            }catch (PDOException $e){
                $error = $e->getMessage();
                echo "Erro $error";
            }
        }

        //Redirect HOME
        header("Location:" . $BASE_URL . "../index.php");

    }else{
        //Retorna somente um contato
        if (!empty($_GET)){
            $id = $_GET['id'];
        }

        if (!empty($id)){
            $query = "SELECT * FROM usuarios_cadastrado WHERE id= :id";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $contact = $stmt->fetch();
        }


        //Retorna todos os contatos
        $query = "SELECT * FROM usuarios_cadastrado";

        $stmt = $pdo->prepare($query);
        $stmt->execute();

        $usuarios = $stmt->fetchAll();
    }

    $pdo = null;