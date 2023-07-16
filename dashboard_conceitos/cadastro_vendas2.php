<?php 
include 'conexao/conexao.php';
session_start();

$mes = $_POST['mes'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

$sql = "INSERT INTO vendas (mes_venda, quantidade_venda, valor_venda) VALUES (:mes_venda, :quantidade_venda, :valor_venda)";
$sql = $conn->prepare($sql);
$sql->bindValue(':mes_venda', $mes);
$sql->bindValue(':quantidade_venda', $quantidade);
$sql->bindValue(':valor_venda', $valor);
$sql->execute();

if($sql->rowCount() > 0) {
  $_SESSION['msg'] = 'Venda cadastrada com sucesso';
  $_SESSION['type'] = 'green';
  header('Location: dashboard.php?pagina=vendas');
}else {
  $_SESSION['msg'] = 'Erro ao realizar o cadastro da mensagem';
  $_SESSION['type'] = 'red';
  header('Location: dashboard.php?pagina=vendas');
}


