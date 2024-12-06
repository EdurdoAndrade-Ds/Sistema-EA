<?php

include './config.php';

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    
    $sqlUp = "UPDATE users SET firstName = '$noma', email = '$email', passwords = '$senha', telefone = '$telefone', data_nasc = '$data_nas', cidade = '$cidade', estado = '$estado', endereco = '$endereco' WHERE id='$id'";
    
    $result = $conexao->query($sqlup);
}

header('Location: ./sistema.php');