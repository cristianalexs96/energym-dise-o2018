

<?php $__env->startSection( 'content' ); ?>

<div class="text-center">

	<div class="container">
		<div class="mx-auto" style="width: 500px;">
			<div class="jumbotron" style="margin-top: 150px">

				<h1 class=""><small>FUNCION 1</small></h1>

			</div>
		</div>
	</div>

		<div class="container">
		<div class="mx-auto" style="width: 500px;">
			<div class="jumbotron" style="margin-top: 150px">

				<h1 class=""><small>FUNCION 2</small></h1>

			</div>
		</div>
	</div>
  
  

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'layouts.app' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>