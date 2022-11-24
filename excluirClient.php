<?php
include_once "conexao.php";

try {

$cod_cliente = filter_var($_GET['cod_cliente'], FILTER_SANITIZE_NUMBER_INT);

$delete = $conectar -> prepare ("DELETE FROM cliente WHERE cod_cliente = :cod_cliente");
$delete ->bindParam(':cod_cliente',$cod_cliente);
$delete ->execute();

header("location: homeClient.php");

} catch(PDOException $e) {
echo 'Erro: '.$e->getMessage();
}

?>