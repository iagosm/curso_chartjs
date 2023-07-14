<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População', {role: 'style'}],
          <?php include 'conexao.php';
          $sql = "SELECT * FROM primeiro_grafico";
          $sql = $conn->query($sql);
          
          while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $cidade = $row['cidade'];
            $populacao = $row['populacao'];
          ?>
          ['<?php echo $cidade ?>', <?php echo  $populacao?>, '#000'],
        <?php } ?>
        ]);

        var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
      { calc: "stringify",
        sourceColumn: 1,
        type: "string",
        role: "annotation" },
      2]);

      var options = {
        title: "População das cidades",
        width: 900,
        height: 500,
        bar: {groupWidth: "65%"},
        legend: { position: "right" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("graficoColuna"));
      chart.draw(view, options);
  }

        
    </script>
  </head>
  <body>
    <div id="graficoColuna" style="width: 900px; height: 600px"></div>
  </body>
</html>