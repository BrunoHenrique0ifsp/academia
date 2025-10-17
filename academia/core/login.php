<?php
session_start();
require_once '../sql/conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "SELECT * FROM Usuario WHERE email = '$email' LIMIT 1";
$result = $conexao->query($sql);

if ($result && $result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    // Confere a senha
    if ($senha === $usuario['senha']) {
        $_SESSION['idUsuario'] = $usuario['idUsuario'];
        $_SESSION['nome']      = $usuario['nome'];

        header("Location: ../index.php");
        exit();
    } else {
        echo "<script>alert('Senha incorreta!');window.location='../login.php';</script>";
    }
} else {
    echo "<script>alert('Email não cadastrado!');window.location='../login.php';</script>";
}

$conexao->close();
?>
