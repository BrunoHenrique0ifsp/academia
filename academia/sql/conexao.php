<?php
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "academia";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco: " . $conexao->connect_error);
}
?>
