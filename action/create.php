<?php

// Conexão
require_once 'db_connect.php';

    if(isset($_POST ['btn_cadastrar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);

        $sql = "INSERT INTO clientes (nome,sobrenome,email,idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')"; /* aqui é onde os dados são inseridos no BD */

        if(mysqli_query($connect,$sql)):
            $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: ../index.php');
        endif;

    endif;