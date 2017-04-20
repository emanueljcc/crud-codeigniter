<!DOCTYPE html>
<html lang="es">
<head>
	<title>CRUD CODEIGNITER 3</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.css')?>">
	<script src="<?php echo base_url('public/js/jquery-3.2.1.min.js')?>"></script>
	<script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
	<style>
		hr { 
		    display: block;
		    margin-top: 0.5em;
		    margin-bottom: 0.5em;
		    margin-left: auto;
		    margin-right: auto;
		    border-style: inset;
		    border-width: 1px;
		    color: #f2f2f2;
		} 
	</style>
</head>
<body>
	<div id="container">
	<div class="col-md-10 col-md-offset-1">
		<header>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">CRUD</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
			        <li><a href="#">Opcion 1</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lista <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li>
			      </ul>
			      <form class="navbar-form navbar-left">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Buscar...">
			        </div>
			        <button type="submit" class="btn btn-default">Buscar</button>
			      </form>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Opcion 3</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lista 2 <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</header>
		<div class="row">
			<div class="col-md-12">
				<?php 
					$this->load->view($contenido);
				?>
			</div>
			<hr>
			<footer>
					<center>&copy 2016 | Todo los derechos reservados</center>
			</footer>
		</div>
	</div>
	</div>
</body>
</html>