<?php
include 'conexao/conexao.php';
$sql = "SELECT * FROM lucros";
$sql = $conexao->query($sql);

# chart.js - Preparendo valores#
$mes = '';
$ano_2018 = '';
$ano_2019 = '';

while($dados = $sql->fetch()) {
  $mes = $mes . '"' . $dados['mes'] . '",';
  $ano_2018 = $ano_2018 . '"' . $dados['ano_2018'] . '",';
  $ano_2019 = $ano_2018 . '"' . $dados['ano_2019'] . '",';
  
  $mes = trim($mes); #tira os espaços da variavel
  echo $ano_2018 = trim($ano_2018);
  $ano_2019 = trim($ano_2019);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  <title>Grafico Linha</title>
</head>
<body>

<div class="container" style="background-color: #250352;border-radius:8px;margin-top:25px;">
<canvas id="bars" style="padding:30px;"></canvas>
</div>
  
 <script type="text/javascript">
  var ctx = document.getElementById('bars').getContext('2d')
  var myLineChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [<?php echo $mes;?>],
        datasets:
        [{
          label: '2018',
          data: [<?php echo $ano_2018;?>],
          backgroundColor: 'rgba(255,99,132, 0.5)',
          borderColor: 'rgba(255,99,132)',
          borderWidth: 3
        },
        {
          label: '2019',
          data: [<?php echo $ano_2019;?>],
          backgroundColor: 'rgba(0,255,255, 0.5)',
          borderColor: 'rgba(0,255,255)',
          borderWidth: 3
        }]
      },
      options: { // Responsavel pela estilização.
					legend: {
						labels: {
							fontColor: "white",
							fontSize: 18
						}
					},
					scales: {
						xAxes: [{  // Comentario para o nome na parte de baixo
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Meses',
								fontColor:'#ffffff',
								fontSize:16

							},
							ticks: {
								fontColor: "white",
								fontSize: 20
								
							}
						}],
						yAxes: [{ // Comentario para o nome na parte de cima
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Valores',
								fontColor: '#ffffff',
								fontSize:16
							},
							ticks: {
								fontColor: "white",
								fontSize: 20
							}
            }]
					}
        }
    });
  </script>
</body>
</html>