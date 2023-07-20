<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Quantidade'],
          <?php 
          include 'conexao/conexao.php';
          $sql = "SELECT * FROM clientes";
          $sql = $conn->query($sql);
          
          while($dados = $sql->fetch()) {
            $mes = $dados['mes_cliente'];
            $quantidade = $dados['quantidade'];
            ?>
          ['<?php echo $mes?>',<?php echo $quantidade?>],
          <?php } ?>
        ]);

        var options = {
          title: '',
          // curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart2);
          function drawChart2() {
            var data = google.visualization.arrayToDataTable([
              ['Mês', 'Quantidade'],
              <?php 
                include 'conexao/conexao.php';
                $sql = "SELECT * FROM clientes";
                $sql = $conn->query($sql);
                
                while($dados = $sql->fetch()) {
                  $mes = $dados['mes_cliente'];
                  $quantidade = $dados['quantidade'];
                  ?>
                ['<?php echo $mes?>',<?php echo $quantidade?>],
              <?php } ?>
            ]);

            var options = {
              title: ''              
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
          }
        </script>
  </head>
  <body>
    <div class="container-fluid mt-5" style="background-color: #f3f3f3;">
      <div class="row">
        <div class="col-md-8 gc">
          <h4>Gráfico de Clientes</h4>
          <div id="curve_chart"></div>
        </div>
        <div class="col-md-4 gv">
          <h4>Gráfico de Vendas</h4>
          <div id="piechart" style="width:290px"></div>
        </div>
      </div>
    </div>
  </body>
</html>
