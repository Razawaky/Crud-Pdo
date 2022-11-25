<?php
include_once "conexao.php";

try {
$cod_cliente = filter_var($_POST['cod_cliente'], FILTER_SANITIZE_NUMBER_INT);
$nome = filter_var($_POST['nome']);
$endereco = filter_var($_POST['endereco']);
$cidade = filter_var($_POST['cidade']);
$cep = filter_var($_POST['cep']);

$update = $conectar -> prepare ("UPDATE cliente SET nome = :nome, endereco = :endereco, cidade = :cidade, cep = :cep WHERE cod_cliente = :cod_cliente");
$update ->bindParam(':cod_cliente',$cod_cliente);
$update ->bindParam(':nome',$nome);
$update ->bindParam(':endereco',$endereco);
$update ->bindParam(':cidade',$cidade);
$update ->bindParam(':cep',$cep);
$update ->execute();

header("location: homeClient.php");

} catch(PDOException $e) {
echo 'Erro: '.$e->getMessage();
}
?>