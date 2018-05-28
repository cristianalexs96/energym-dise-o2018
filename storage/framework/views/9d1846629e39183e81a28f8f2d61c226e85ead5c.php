<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<title>ENERGYM</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
	

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script type="text/javascript">
    /*! Fades out the whole page when clicking links */
$('a').click(function(e) {
e.preventDefault();
newLocation = this.href;
$('body').fadeOut('slow', newpage);
});
function newpage() {
window.location = newLocation;
}

$(document).ready(function(){

/*! Fades in whole page on load */
$('body').css('display', 'none');
$('body').fadeIn(500);

}); 
</script>

</head>
<body class="text-center">

	<div class="container">
		<div class="mx-auto" style="width: 500px;">
			<div class="jumbotron" style="margin-top: 50px">

				    <img class="mb-3" src="/img/login icon.png" alt="" width="230" height="100">
				    <h1 class="h3 mb-3 font-weight-normal">Ingresar al sistema</h1>


		    	<form class="form-signin" action="<?php echo e(route('login_sesion_path')); ?>" method="POST">

		    		<?php echo e(csrf_field()); ?>


					
				    <label for="usuario" class="bmd-label-floating"></label>
				    <input type="text"  name="usuario" class="form-control" placeholder="Usuario" required="" autofocus="">
				    <span class="bmd-help">En caso de no recordar su nombre de usuario, contactarse con el admin.</span>

				    <label for="contraseña" class="bmd-label-floating"></label>
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