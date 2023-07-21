<?php 
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Cadastro de Vendas</title>
</head>
<body>
  <div class="container">
        <?php if(isset($_SESSION['msg']) && isset($_SESSION['type'])): ?>
          <div>
              <p style="font-size: 22px; font-weight:bold; border: 1px solid <?php echo $_SESSION['type']?>; color: <?php echo $_SESSION['type']?>; padding: 5px; width: 440px; border-radius:8px"><?php echo $_SESSION['msg']; ?></p>
          </div>
          <?php unset($_SESSION['msg'], $_SESSION['type']); ?>
      <?php endif; ?>
   
    
    <div style="text-align: right;">
      <a href="#" role="button" class="btn btn-primary btn-sm">Relatórios</a>
      <a href="dashboard.php" role="button" class="btn btn-danger btn-sm">Voltar</a>
    </div>
    <h2>Cadastro de Clientes</h2>
    <form action="cadastro_cliente2.php" method="POST">
      <div class="form-group">
        <label for="">Selecione o Mês</label>
        <select class="form-control" name="mes" id="">
          <option value="" disabled selected>Selecione algo</option>
          <option value="Janeiro">Janeiro</option>
          <option value="Fevereiro">Fevereiro</option>
          <option value="Março">Março</option>
          <option value="Abril">Abril</option>
          <option value="Maio">Maio</option>
          <option value="Junho">Junho</option>
          <option value="Julho">Julho</option>
          <option value="Agosto">Agosto</option>
          <option value="Setembro">Setembro</option>
          <option value="Outubro">Outubro</option>
          <option value="Novembro">Novembro</option>
          <option value="Dezembro">Dezembro</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Digite a Quantidade</label>
        <input type="number" class="form-control" name="quantidade" autocomplete="off">
      </div>
      <div style="text-align:right;">
        <button type="submit" class="btn btn-primary">Cadastrar Venda</button>
      </div>
    </form> 
  </div>

  <script script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>