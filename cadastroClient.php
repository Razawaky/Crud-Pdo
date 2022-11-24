<?php
include_once "conexao.php";
try{
    $cod_cliente = filter_var($_POST['cod_cliente']);
    $nome = filter_var($_POST['nome']);
    $endereco = filter_var($_POST['endereco']);
    $cidade = filter_var($_POST['cidade']);
    $cep = filter_var($_POST['cep']);
    $insert = $conectar -> prepare ("INSERT INTO cliente (cod_cliente, nome, endereco, cidade, cep) VALUES(:cod_cliente, :nome, :endereco, :cidade, :cep)");
    $insert ->bindParam(':cod_cliente',$cod_cliente);
    $insert ->bindParam(':nome',$nome);
    $insert ->bindParam(':endereco',$endereco);
    $insert ->bindParam(':cidade',$cidade);
    $insert ->bindParam(':cep',$cep);
    $insert ->execute();

    header("location: homeClient.php");
} catch(PDOException $e){
echo 'Erro: '.$e->getMessage();
} 
?>