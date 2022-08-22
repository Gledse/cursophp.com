<?php
include_once('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$resultado = "INSERT INTO usuarios (nome, senha) VALUES ('$nome', '$senha')"; 

$resultado = mysqli_query($conn, $resultado);
/*
echo "Nome: $nome <br>";
echo "Senha: $senha <br>";
*/