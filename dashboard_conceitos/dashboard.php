<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.1/examples/dashboard/ -->
<html lang="en" data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Dashboard Conceitos</title>
  
  <body cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1115.0" data-gr-ext-installed="">
    <nav class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://getbootstrap.com/docs/4.1/examples/dashboard/#">Dashboard</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/dashboard/#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar pt-0">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="https://getbootstrap.com/docs/4.1/examples/dashboard/#">
                 Dashboard <span class="sr-only">(curret)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=pedidos">
                  Pedidos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=produtos">
                  Produtos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=clientes">
                  Clientes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=relatorios">
                  Relatórios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=integracoes">
                  Integrações
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
              case 'produtos':
                echo '<h2>Produtos</h2>';
                break;
              case 'clientes':
                echo '<h2>Clientes</h2>';
                break;
              default:
                echo 'Nenhuma opção escolhida';
                break;
            }
          }
          ?>

        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body></html>