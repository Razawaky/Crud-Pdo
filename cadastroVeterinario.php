<?php
include_once "conexao.php";
try{
    $cod_vet = filter_var($_POST['cod_vet']);
    $nome = filter_var($_POST['nome']);
    $crm = filter_var($_POST['crm']);
    $cpf = filter_var($_POST['cpf']);
    $email = filter_var($_POST['email']);
    $insert = $conectar -> prepare ("INSERT INTO vet (cod_vet, nome, crm, cpf, email) VALUES(:cod_vet, :nome, :crm, :cpf, :email)");
    $insert ->bindParam(':cod_vet',$cod_vet);
    $insert ->bindParam(':nome',$nome);
    $insert ->bindParam(':crm',$crm);
    $insert ->bindParam(':cpf',$cpf);
    $insert ->bindParam(':email',$email);
    $insert ->execute();

    header("location: homeVeterinario.php");
} catch(PDOException $e){
echo 'Erro: '.$e->getMessage();
} 
?>