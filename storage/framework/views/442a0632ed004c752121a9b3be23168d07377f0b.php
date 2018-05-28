<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<title>ENERGYM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="text-center">

	<div class="container">
		<div class="mx-auto" style="width: 500px;">
			<div class="jumbotron" style="margin-top: 150px">

				    <img class="mb-3" src="/img/login icon.png" alt="" width="230" height="100">
				    <h1 class="h3 mb-3 font-weight-normal">Ingresar al sistema</h1>


		    	<form class="form-signin" action="<?php echo e(route('login_sesion_path')); ?>" method="POST">

		    		<?php echo e(csrf_field()); ?>


					
				    <label for="usuario" class="sr-only">Usuario</label>
				    <input type="text"  name="usuario" class="form-control" placeholder="Usuario" required="" autofocus="">

				    <label for="contraseña" class="sr-only">Contraseña</label>
				    <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required="">

					<br>

				    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
				    <p class="mt-5 mb-3 text-muted">© Grupo Abacus - 2018</p>

		   		</form>
			</div>
		</div>
	</div>
  

</body>
</html>