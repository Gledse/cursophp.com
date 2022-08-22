<?php

$servidor = "localhost"; // endereço do nosso servidor
$usuario = "root"; // nome do usuario
$senha = ""; // senha
$dbname = "cliente"; // nome do banco de dados

// conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


// php -S localhost:8000 >>> http://localhost:8000/sistemadelogin/db_connect.php
