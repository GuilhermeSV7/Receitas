<?php
$host = 'localhost:8080'; 
$usuario = 'root';
$senha = 'catolica'; 
$banco = 'Livro_Receitas'; 

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
echo "Conexão bem-sucedida";
$conexao->close(); 
