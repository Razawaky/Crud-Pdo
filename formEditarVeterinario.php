<?php

include_once "conexao.php";
$cod_vet = filter_var($_GET['cod_vet'], FILTER_SANITIZE_NUMBER_INT);
$consulta = $conectar -> query("SELECT * FROM vet where cod_vet = '$cod_vet' ");
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
    
<form action="editar.php" method="post">
Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"/><br>
Login: <input type="text" name="login" value="<?php echo $linha['login']?>" id="login"/><br>
<input type="hidden" name="id" value="<?php echo $linha['id']?>">
<input type="submit" value="Editar">
</form>

</body>
</html>