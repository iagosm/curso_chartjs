<?php 
include 'conexao/conexao.php';
  
 function totalClientes($conn) {
  $sql = "SELECT SUM(quantidade) as total FROM clientes";
  $sql = $conn->query($sql);
  return $sql->fetch()['total'];
}

  function totalArrecadado($conn) {
    $sql = "SELECT sum(valor_venda) as total FROM vendas";
    $sql = $conn->query($sql);
    $total  = $sql->fetch()['total'];
    $total = 'R$ ' . number_format($total, 2, '.','');
    return $total;
  }

  function totalVendas($conn) {
    $sql = "SELECT sum(quantidade_venda) as total FROM vendas";
    $sql = $conn->query($sql);
    return $sql->fetch()['total'];
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body style="background-color: #f3f3f3;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card text-bg-primary mb-3 sombra" style="max-width: 18rem;">
          <div class="card-header">Total Clientes / Ano</div>
          <div class="card-body">
            <h5 class="card-title text-center" style="font-size:35px;"><?php echo totalClientes($conn)?></h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-bg-primary mb-3 sombra" style="max-width: 18rem;">
          <div class="card-header">Total Arrecadado</div>
          <div class="card-body">
            <h5 class="card-title text-center" style="font-size:35px;"><?php echo totalArrecadado($conn)?></h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-bg-primary mb-3 sombra" style="max-width: 18rem;">
          <div class="card-header">Total Vendas</div>
          <div class="card-body">
            <h5 class="card-title text-center" style="font-size:35px;"><?php echo totalVendas($conn)?></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>