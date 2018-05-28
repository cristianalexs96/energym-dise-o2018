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

<script>
    
$(document).ready(function($){
    var url = window.location.pathname;
    $('ul a[href="'+url+'"]').addClass('active');
});

$(document).ready(function() 
    { $('body').bootstrapMaterialDesign(); })
</script>



</head>
<body>

<!-- NAVBAR -->

<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar" style="background-color: #1976D2">
	<a class="navbar-brand mr-0 mr-md-2" href="/main" aria-label="ENERGYM">

	  <img class="ml-5" src="/img/icon.png" alt="" width="140" height="40">
	</a>

    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">

<h3 class="text-white my-2 my-sm-0 text-sm-right" style=""><small>Bienvenido <?php echo e($sesion->usuario); ?></small></h3>

</ul>

	<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">

        
		<div class="dropdown show">
		  <a class="mr-5" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #1976D2">
		    <img class="" src="/img/profile.png" alt="" width="40" height="40">
		    <img class="" src="/img/expand more.svg" alt="" width="40" height="40">
		  </a>

			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="#">Mi Perfil</a>
				<a class="dropdown-item" href="#">Ayuda</a>
				<a class="dropdown-item" href="<?php echo e(route('cerrarsesion_path')); ?>">Cerrar Sesion</a>
			</div>
		</div>
	</ul>
</header>

<!--SIDEBAR-->

<div class="container-fluid">
        <div class="row">
         <div class="col-sm-1"></div>
            <div class="col-2 bg-white" style="min-height: 700px">
                <ul class="list-unstyled text-left col-12 p-0 ">
 

                        <div class="nav flex-column" aria-orientation="vertical">
                        <?php if($sesion->rol == '1'): ?>
                            <li class="h6 mt-3 text-center">PANEL GERENTE</li>
                        <?php endif; ?>
                        <?php if($sesion->rol == '2'): ?>
                            <li class="h6 mt-3 text-center">PANEL DIRECTOR</li>
                        <?php endif; ?>
                        <?php if($sesion->rol == '3'): ?>
                            <li class="h6 mt-3 text-center">PANEL ADMINISTRACION</li>
                        <?php endif; ?>
                        <?php if($sesion->rol == '4'): ?>
                            <li class="h6 mt-3 text-center">PANEL SECRETARIA</li>
                        <?php endif; ?>
                        <?php if($sesion->rol == '5'): ?>
                            <li class="h6 mt-3 text-center">PANEL KIOSCO</li>
                        <?php endif; ?>
                        <?php if($sesion->rol == '6'): ?>
                            <li class="h6 mt-3 text-center">PANEL PROFESOR</li>
                        <?php endif; ?>
                        
                        <style type="text/css">
                          .list-group-item.active:hover,{
                            background-color: #1976D2; !important;
                            border-color: #1976D2;     !important;
                          }
                          .list-group-item.active, .list-group-item.active:hover {
                          background-color: #1976D2;  !important;
                          border-color: #1976D2;  !important;
                          }
                          a.list-group-item {
                              color: #1976D2;
                            }


                      </style>

                        <ul class="list-group">
                          <a href="/main" class="list-group-item"><i class="material-icons">home</i>INICIO</a>
                          <a href="/empleados" class="list-group-item"><i class="material-icons">supervisor_account</i>EMPLEADOS</a>
                          <a href="/clientes" class="list-group-item"><i class="material-icons">show_chart</i>INFORMES</a>
                        </ul>
                        

            </footer>
                      </div>

                        <!--
                        <li><small><a href="/clientes">
                         <img class="ml-5" src="/img/cliente.svg" alt="" width="25" height="25"> CLIENTES
                     	</a></small></li>
                     	<li><small><a href="/profesores">
                         <img class="ml-5" src="/img/profesor.svg" alt="" width="25" height="25"> EMPLEADOS
                     	</a></small></li>

                     -->
                      
            </div>
            <div class="col-8">
                <div class=" justify-content-center">
                    <main role="main">
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>


</body>
</html>