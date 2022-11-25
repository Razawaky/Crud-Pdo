<?php
include_once "conexao.php";

try {
$cod_vet = filter_var($_POST['cod_vet'], FILTER_SANITIZE_NUMBER_INT);
$nome = filter_var($_POST['nome']);
$crm = filter_var($_POST['crm']);
$cpf = filter_var($_POST['cpf']);
$email = filter_var($_POST['email']);

$update = $conectar -> prepare ("UPDATE vet SET nome = :nome, crm = :crm, cpf = :cpf, email = :email WHERE cod_vet = :cod_vet");
$update ->bindParam(':cod_vet',$cod_vet);
$update ->bindParam(':nome',$nome);
$update ->bindParam(':crm',$crm);
$update ->bindParam(':cpf',$cpf);
$update ->bindParam(':email',$email);
$update ->execute();

header("location: homeVeterinario.php");

} catch(PDOException $e) {
echo 'Erro: '.$e->getMessage();
}
?>