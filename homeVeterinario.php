<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vet.css">
</head>
<body>
    

<?php

include_once "conexao.php";
try{
    $consulta = $conectar -> query("SELECT * FROM vet");
    echo "<a href='formVeterinario.php'><button> Novo Cadastro</button></a><a href='index.html'><button>Voltar</button></a><br><br><h1>Listagem de Usuários</h1>";
    echo "<div class='tabela'><table border='1'<tr><td>Nome</td><td>CRM</td><td>CPF</td><td>Email</td><td>Ações</td></tr></div>";
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>$linha[nome]</td><td>$linha[crm]</td><td>$linha[cpf]</td><td>$linha[email]</td> <td><a href='formEditarVeterinario.php?cod_vet=$linha[cod_vet]'>Editar</a> - <a href='excluirVeterinario.php?cod_vet=$linha[cod_vet]'>Excluir</a></td></tr>";
    }
    echo "</table>";
    echo $consulta->rowCount(). " Registros Exibidos";
} catch(PDOException $e){
    echo $e->getMessage();
    }
?>



</body>
</html>