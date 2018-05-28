<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<title>ENERGYM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- icon-->
    <link rel="icon" href="/img/icon - copia.png">

</head>
<body>

	<!-- NAVBAR -->

<nav class="navbar fixed-top" style="background-color: #1976D2">

  <img class="ml-5" src="/img/icon.png" alt="" width="140" height="40">

  	<h3 class="text-white my-2 my-sm-0" style=""><small>Bienvenido Usuario</small></h3>


<div class="dropdown show">
  <a class="mr-5" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #1976D2">
    <img class="" src="/img/profile.png" alt="" width="40" height="40">
    <img class="" src="/img/expand more.svg" alt="" width="40" height="40">
  </a>

	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		<a class="dropdown-item" href="#">Mi Perfil</a>
		<a class="dropdown-item" href="#">Ayuda</a>
		<a class="dropdown-item" href="#">Cerrar Sesion</a>
	</div>

</div>


</nav>



	<?php echo $__env->yieldContent('content'); ?>

</body>
</html>