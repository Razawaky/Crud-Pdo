<?php

include_once "conexao.php";
$cod_cliente = filter_var($_GET['cod_cliente'], FILTER_SANITIZE_NUMBER_INT);
$consulta = $conectar -> query("SELECT * FROM cliente where cod_cliente = '$cod_cliente' ");
$linha = $consulta -> fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="editarClient.php" method="post">
Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"/><br>
endereco: <input type="text" name="endereco" value="<?php echo $linha['endereco']?>" id="endereco"/><br>
cidade: <input type="text" name="cidade" value="<?php echo $linha['cidade']?>" id="cidade"/><br>
cep: <input type="text" name="cep" value="<?php echo $linha['cep']?>" id="cep"/><br>
<input type="hidden" name="cod_cliente" value="<?php echo $linha['cod_cliente']?>">
<input type="submit" value="Editar">
</form>

</body>
</html>