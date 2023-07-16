<html>
  <head>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População', {role: 'annotation'}],
          <?php include 'conexao.php';
          $sql = "SELECT * FROM primeiro_grafico";
          $sql = $conn->query($sql);
          
          while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $cidade = $row['cidade'];
            $populacao = $row['populacao'];
          ?>
          ['<?php echo $cidade ?>', <?php echo  $populacao?>, <?php echo  $populacao?>],
        <?php } ?>
        ]);

        var options = {
          title: 'População das Cidades',
          // curveType: 'function',
          legend: { position: 'top' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('grafico_linha'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="grafico_linha" style="height: 400px; width: 1300px"></div>
  </body>
</html>