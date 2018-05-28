@extends( 'layouts.app' )

@section( 'content' )

<br>

<div class="row">
    <div class="col-6">
      <h3> GESTION DE EMPLEADOS </h3>
    </div>
    <div class="col-md-auto">
	  	<button type="button" class="btn btn-success bmd-btn-fab-sm">
  			<i class="material-icons">person_add</i>
		</button>
    </div>
    <div class="col col-lg-4">
		<form class="form-inline">
		    <input class="form-control mr-sm-2" type="search" placeholder="Buscar Empleado" aria-label="Search">
		    <button class="btn btn-info" type="submit">
		    	<i class="material-icons">search</i>

		    </button>
		  </form>
    </div>
  </div>
</div>

<hr>

<div class="text-center">

<div class="container bg-white">
	<div class="col w-50">
		<div class="list-group bmd-label-floating">
		  <a href="#" class="list-group-item list-group-item-action">Fulano Uno</a>
		  <a href="#" class="list-group-item list-group-item-action">Fulano Dos</a>
		  <a href="#" class="list-group-item list-group-item-action">Fulano Tres</a>
		  <a href="#" class="list-group-item list-group-item-action disabled">Fulano Tres</a>
		  		  <a href="#" class="list-group-item list-group-item-action">Fulano Uno</a>
		  <a href="#" class="list-group-item list-group-item-action">Fulano Dos</a>
		  <a href="#" class="list-group-item list-group-item-action">Fulano Tres</a>
		  <a href="#" class="list-group-item list-group-item-action disabled">Fulano Tres</a>
		  		  <a href="#" class="list-group-item list-group-item-action">Fulano Uno</a>
		  <a href="#" class="list-group-item list-group-item-action">Fulano Dos</a>
		  <a href="#" class="list-group-item list-group-item-action">Fulano Tres</a>
		  <a href="#" class="list-group-item list-group-item-action disabled">Fulano Tres</a>

		</div>
	</div>
	<div class="col">
		<hr>
		<nav aria-label="...">
		  <ul class="pagination justify-content-center">
		    <li class="page-item disabled">
		      <span class="page-link">Previous</span>
		    </li>
		    <li class="page-item"><a class="page-link" href="#">1</a></li>
		    <li class="page-item active">
		      <span class="page-link">
		        2
		        <span class="sr-only">(current)</span>
		      </span>
		    </li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item">
		      <a class="page-link" href="#">Next</a>
		    </li>
		  </ul>
		</nav>
	</div>
</div>

</div>

@endsection