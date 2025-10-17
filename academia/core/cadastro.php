<?php

require_once '../sql/conexao.php';

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf   = $_POST['cpf'];

$sqlUsuario = "INSERT INTO Usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
if ($conexao->query($sqlUsuario) === TRUE) {

    $idUsuario = $conexao->insert_id;
    $cod_cliente = $idUsuario;

    $sqlCliente = "INSERT INTO Cliente (cod_cliente, cpf, idUsuario) 
                   VALUES ($cod_cliente, '$cpf', $idUsuario)";

    if ($conexao->query($sqlCliente) === TRUE) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro ao cadastrar Cliente: " . $conexao->error;
    }

} else {
    echo "Erro ao cadastrar Usuario: " . $conexao->error;
}

$conexao->close();
?>
