<?php
session_start();

if (empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))) {
    print"<script>locatio.href = 'idex.php'; </script>";
}

include('config.php');

$usuario = $_POST ["usuario"];
$senha = $_POST ["senha"];

$sql = "SELECT * FROM usuarios 
WHERE usuario = '{$usuario}'
AND senha = '{$senha}'";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if ($qtd > 0) {
    $_SESSION["usuario"] = $usuario;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["tipo"] = $row->tipo;
    print "<script>location.hrenf = 'dacshboard.php';</scrpt>";
}else {
    print "<script>alert('usuario e/ou senha incorreto(s)');</scrpt>";
    print "<script>location.hrenf = 'index.php';</scrpt>";

}

