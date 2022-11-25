<?php

try {
$conectar = new PDO("mysql:host=localhost;port=3306;dbname=projeto;","root","");
} catch (PDOException $e) {
    echo "Error" .$e->getMessage();
}
?>
