<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <title>Gráficos</title>
</head>
<body>
  
<div class="container">
  <div class="row">
    <div class="col-md-6">
       <?php include 'grafico_pizza/grafico_pizza.php' ?>
    </div>
    <div class="col-md-6">
    <?php include 'grafico_coluna/grafico_coluna.php' ?>
    </div>
  </div>
</div>
<div class="container">
  <div class="col-md-12">
    <div style="margin-top:-150px">
      <?php include 'grafico_linha/grafico_linha.php' ?>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>