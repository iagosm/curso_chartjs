<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.1/examples/dashboard/ -->
<html lang="en" data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard Conceitos</title>
  
    <style>

      nav .links {
        text-decoration: none;
        color: #fff !important;
      }

      @media only screen and (max-width: 600px) {
        body {
          width:350px;
          text-align:center;
        }
        .gc {
          margin-bottom: 20px;
        }
        .gv {
        margin-bottom:100px;
        }
      }
    </style>

  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #EC5E63;">
      <a class="nav-link" href="#" style="text-decoration: none; color: #fff;"><img src="assets/icon.png" alt="" style="height:40px; width:40px;"> Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link links" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link links" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link links" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link links" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar pt-0">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=pedidos">
                  Pedidos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=cliente">
                <i class="fa fa-user" aria-hidden="true"></i> Cadastrar Clientes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=vendas">
                  Cadastrar Vendas
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Conteudo -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 pt-0">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            </div>
          </div>
          <?php 
          
          if(isset($_GET['pagina'])) {

            switch ($_GET['pagina']) {
              case 'pedidos':
                include 'graficos/grafico_area.php';
                break;
              case 'cliente':
                include 'cadastro_cliente.php';
                break;
              case 'vendas':
                include 'cadastro_vendas.php';
                break;
              default:
                include 'painel.php';
                include 'painel2.php';
                break;
            }
          }
          ?>

        </main>
      </div>
    </div>
    <div class="d-block d-sm-none">
      <nav class="navbar fixed-bottom navbar-light bg-light">
          <a class="" href="#">Dashboard Charts</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="?pagina=pedidos" style="text-decoration: none">Pedidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=clientes">Cadastrar Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=vendas">Cadastrar Vendas</a>
              </li>
            </ul>
        </div>
      </nav>
    </div> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $(window).resize(function(){
          drawChart();
          drawChart2();
        });

      </script>
</body></html>