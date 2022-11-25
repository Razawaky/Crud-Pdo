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
    
<form action="editarVeterinario.php" method="post">
Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"/><br>
crm: <input type="text" name="crm" value="<?php echo $linha['crm']?>" id="crm"/><br>
cpf: <input type="text" name="cpf" value="<?php echo $linha['cpf']?>" id="cpf"/><br>
email: <input type="text" name="email" value="<?php echo $linha['email']?>" id="email"/><br>
<input type="hidden" name="cod_vet" value="<?php echo $linha['cod_vet']?>">
<input type="submit" value="Editar">
</form>

</body>
</html>