<?php
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn_editar'])):
    $nome = mysqli_real_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $idade = mysqli_real_escape_string($connect, $_POST['idade']);
    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso!";
        header('Location: ../index.php');
        exit;
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../index.php');
        exit;
    endif;
endif;


