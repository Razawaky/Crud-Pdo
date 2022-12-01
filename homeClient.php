<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client.css">
</head>
<body>
    

<?php

include_once "conexao.php";
try{
    $consulta = $conectar -> query("SELECT * FROM cliente");
    echo "<a href='formClient.php'><button> Novo Cadastro </button></a><a href='index.html'><button>Voltar</button></a><br><br><h1>Listagem de Usuários</h1> ";
    echo "<table border='1'<tr><td>Nome</td><td>Endereço</td><td>Cidade</td><td>CEP</td><td>Ações</td></tr>";
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>$linha[nome]</td><td>$linha[endereco]</td><td>$linha[cidade]</td><td>$linha[cep]</td><td><a href='formEditarClient.php?cod_cliente=$linha[cod_cliente]'>Editar</a> - <a href='excluirClient.php?cod_cliente=$linha[cod_cliente]'>Excluir</a></td></tr>";
    }
    echo "</table>";
    echo $consulta->rowCount(). " Registros Exibidos";
} catch(PDOException $e){
    echo $e->getMessage();
    }
?>

</body>
</html>