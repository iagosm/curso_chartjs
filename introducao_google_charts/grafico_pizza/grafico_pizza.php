<html>
  <head>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População'],
          <?php include 'conexao.php';
          $sql = "SELECT * FROM primeiro_grafico";
          $sql = $conn->query($sql);
          
          while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $cidade = $row['cidade'];
            $populacao = $row['populacao'];
          ?>
          ['<?php echo $cidade ?>', <?php echo  $populacao?>],
        <?php } ?>
        ]);
      
        var options = {
          title: 'População',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafico_pizza'));
        chart.draw(data, options);
        
      }
    </script>
  </head>
  <body>
    <div id="grafico_pizza" style="height: 400px; width: 400px;"></div>
  </body>
</html>