<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeReceita = $_POST['nomeReceita'];
    $nomeCozinheiro = $_POST['nomeCozinheiro'];
    $datareceita = $_POST ['dataReceita'];
    $ingredientes = $_POST['ingredientes'];
    $MedidaIngredientes = $_POST ['medidaIngredientes'];
    $ModoPreparo = $_POST['modoPreparo'];
    $categoria = $_POST['categoria'];


   // Query para inserir dados na tabela de receitas
   $sql = "INSERT INTO receitas (nome_receita, nome_cozinheiro, data_receita, ingredientes, medida_ingredientes, modo_preparo, categoria) 
   VALUES ('$nomeReceita', '$nomeCozinheiro', '$dataReceita', '$ingredientes', '$medidaIngredientes', '$modoPreparo', '$categoria')";

   if ($conexao->query($sql) === TRUE) {
       echo "Receita cadastrada com sucesso!";
   } else {
       echo "Erro ao cadastrar receita: " . $conexao->error;
   }
}
?>
