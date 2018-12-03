
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pacientes
        <small>Historial > Nueva Consulta</small>
      </h1>
    </section>
    <section class="content">
	
	<div class="row">
		
		<div class="col-xs-1">
			
		</div>

		<div class="col-xs-10 ">
			<div class="well text-center">
				<h3><i class="fa fa-medkit text-success"></i> Agregar Consulta</h3>
			</div>
			

		</div>

		<div class="col-xs-1">
			
		</div>

	</div>

  <div class="row">
    <div class="col-xs-1"></div>

    <div class="col-xs-10">
      <form class="form-horizontal" action="<?=base_url(); ?>/index.php/Pacientes/historial" method="post">
        <label for="problema"><h2><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Problema </h2> </label>
        <textarea id="problema" class="form-control" rows="2"></textarea>
        <label for="tratamiento"><h2><i class="fa  fa-stethoscope " aria-hidden="true"></i>Tratamiento </h2> </label>
        <select id="tratamiento" class="form-control input-lg">
          <option>Seleccionar</option>
          <option>Endodoncias</option>
          <option>Extracción - Perdido</option>
        </select>
        <label for="diagnostico"><h2><i class="fa  fa-heartbeat " aria-hidden="true"></i>Diagnostico </h2> </label>
        <select id="diagnostico" class="form-control input-lg">
          <option>Seleccionar</option>
          <option>caries</option>
          <option>pulpitis / necrosis</option>
        </select>
        <br>
        <button  type="submit" class="btn btn-success btn-lg"> <i class="fa fa-plus" aria-hidden="true"></i>Agregar </button></div>


      </form>
    </div>
  </div>



	



</section>

</div>














