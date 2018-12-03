
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tratamientos
        <small>Lista de tratamientos > Agregar Tratamiento </small>
      </h1>
    </section>
    <section class="content">
	
	<div class="row">
		
		<div class="col-xs-1">
			
		</div>

		<div class="col-xs-10 ">
			<div class="well text-center">
				<h3><i class="fa fa-address-card  text-success"></i> Agregar Tratamiento</h3>
			</div>
			

		</div>

		<div class="col-xs-1">
			
		</div>

	</div>


		

	<div class="row">
    <div class="col-xs-1"></div>
    <div class="col-xs-10">
      <form class="form-horizontal" action="<?=base_url(); ?>/index.php/Ajustes/tratamientos" method="post">
        <label for="tratamiento"><h2><i class="fa fa-stethoscope " aria-hidden="true"></i>Tratamiento </h2> </label>
        <input class="form-control" type="text" name="tratamiento">
        <br>
        <button  type="submit" class="btn btn-success btn-lg"> <i class="fa fa-plus" aria-hidden="true"></i>Agregar </button>
      </form>
    </div>
  </div>



</section>

</div>










