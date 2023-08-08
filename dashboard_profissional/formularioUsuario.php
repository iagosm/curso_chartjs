<?php include 'menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container-fluid mt--7">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header border-1">
						<h3 class="mb-0">Cadastro de Usuário</h3>
					</div>
          <div class="container" style="margin-top: 10px">
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nome</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Nome Completo" name="nome" autofocus="" autocomplete="off">
									</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
                  <label for="exampleFormControlSelect1">Nível do usuário</label>
                  <select class="form-control form-control-alternative" name="nivel">
                    <option>Gerente</option>
                    <option>Vendendor</option>
                    <option>Administrador</option>
                    <option>Recepcionista</option>
                  </select>
									</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
										<label>Usuário</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Digite seu usuário sem espaços" name="usuario" required="" autocomplete="off">
									</div>
								</div>
                <div class="col-md-6">
									<div class="form-group">
										<label>Senha</label>
										<input type="password" class="form-control form-control-alternative"  placeholder="Digite sua senha" name="senha" required="" autocomplete="off">
									</div>
								</div>
							</div>
                <div class="col-md-6">
									<div class="form-group">
										<label>E-mail</label>
										<input type="email" class="form-control form-control-alternative"  placeholder="Digite um E-mail válido" name="senha" required="" autocomplete="off">
									</div>
								</div>
							</div>
						</form>
					</div>
          <div class="card-footer py-4">
						<div style="text-align: right">
							<a href="#" role="button" class="btn btn-primary">Cadastrar</a>
						</div>
					</div>
        </div>
			</div>
		</div>
	</div>    
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <?php 
    include 'footer.php';
    ?>
</body>
</html>