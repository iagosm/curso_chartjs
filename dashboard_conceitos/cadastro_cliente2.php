<?php 
include 'conexao/conexao.php';
session_start();

$mes = $_POST['mes'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO clientes (mes_cliente, quantidade) VALUES (:mes_cliente, :quantidade)";
$sql = $conn->prepare($sql);
$sql->bindValue(':mes_cliente', $mes);
$sql->bindValue(':quantidade', $quantidade);
$sql->execute();

if($sql->rowCount() > 0) {
  $_SESSION['msg'] = 'Cadastro realizado com sucesso';
  $_SESSION['type'] = 'green';
  header('Location: dashboard.php?pagina=cliente');
}else {
  $_SESSION['msg'] = 'Erro ao realizar o cadastro do Cliente';
  $_SESSION['type'] = 'red';
  header('Location: dashboard.php?pagina=cliente');
}


