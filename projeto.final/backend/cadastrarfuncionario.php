<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os dados do formulário HTML
    $nomefuncionario = $_POST['nomeFuncionario'];
    $rg = $_POST['rg'];
    $funcao = $_POST ['funcao'];
    $data_ingresso = $_POST['data_ingresso'];
    $categoria = $_POST['categoria'];
 
   

    // Query para inserir dados na tabela de funcionários
    $sql = "INSERT INTO funcionarios (nome, rg, data_ingresso, salario, cargo) VALUES ('$nome', '$rg', '$data_ingresso', '$salario', '$cargo')";
    // Adicione outras colunas e dados conforme necessário na sua tabela de funcionários

    if ($conexao->query($sql) === TRUE) {
        echo "Funcionário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar funcionário: " . $conexao->error;


    }
}
?>