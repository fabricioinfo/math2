<?php
	include 'include/header.php';
?>
<body class="bg-blue-light">
	<nav class="navbar navbar-light navbar-wrapper navbar-expand-lg bg-light">
		<div class="container-fluid">
			<div class="row">
				<div class="col-2">
					<img src="img/logo.png" style="max-height: 40px; max-width: auto;">
				</div>
				<div class="col-8">
					<span class="navbar-brand h3">Aprenda Matemática de um Jeito Fácil</span>
				</div>
			</div>
		</div>
	</nav>
<div class="container-fluid">
	<div class="row">
		<div class="offset-1">
			<button id="color" class="btn-round"></button>
			<button id="noturno" class="btn-round"></button>
			<button id="claro" class="btn-round"></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2 col-sm-12 col-12">
			<form id="escolhas" style="margin-top: 40px;">
			  <div class="form-group">
			    <label for="tipo">Escolha a Equação</label>
			    <select class="form-control" id="tipo">
			      <option value="1">Teorema de Pitágoras</option>
			      <option value="2">Área de um Círculo</option>
			      <option value="3">Área de um Triângulo</option>
			      <option value="4">Área de um quadrado</option>
			      <option value="5">Bháskara</option>
			      <option value="6">Média Aritmética</option>
			      <option value="7">Progressão Aritmética</option>
			      <option value="8">Série de Fibonacci</option>
			    </select>
			  </div>
			  <div id="valores">
			  	
			  </div>
			  	<div class="row justify-content-center">
			  		<div class="col-12 col-lg-12 col-xl-12 col-md-12 col-sm-12 text-center">
			  			<div class="btn-group  d-none d-md-block" role="group" >
			  				<button  type="submit" class="btn btn-outline-primary variaveis">Calcular</button>
			  				<button  type="button" class="btn btn-outline-info equa">Mostrar Equação</button>
			  				<button type="button" class="btn btn-outline-info info">Mostrar Info</button>
			  				<button type="reset" class="btn btn-outline-danger limpar">Limpar</button>
			  			</div>
			  			<div class="btn-group btn-group-sm  d-block d-md-none" role="group" aria-label="...">
			  				<button  type="submit" class="btn btn-outline-primary variaveis">Calcular</button>
			  				<button  type="button" class="btn btn-outline-info equa">Mostrar Equação</button>
			  				<button type="button" class="btn btn-outline-info info">Mostrar Info</button>
			  				<button type="reset" class="btn btn-outline-danger limpar">Limpar</button>
			  			</div>
			  			
			  		</div>
			  	</div>
			  	
			</form>
		</div>
		
	</div>
	<div class="row" style="margin-top: 30px;">
		<div class="text-center col-lg-6 col-xl-6 col-md-6 col-12 col-sm-12">
			<h4 style="display: none" id="equacao" style="text-align: center;"></h4>
			<img style="display: none" src="" class="img-fluid" id="img_equacao">
		</div>
		<div class="col-lg-6 col-xl-6 col-md-6 col-12 col-sm-12 text-justify">

			<div style="display: none" id="informacao">
				
			</div>
		</div>
	</div>
	<div class="row" style="margin-top: 30px;">
		<div class="text-center col-lg-6 col-xl-6 col-md-6 col-12 col-sm-12">
			<div style="display: none" id="passos">
				
			</div>
		</div>
		<div class="col-lg-6 col-xl-6 col-md-6 col-12 col-sm-12 text-justify">

			<div style="display: none" id="texto">
				
			</div>
		</div>
	</div>
</div>
</body>
</html>