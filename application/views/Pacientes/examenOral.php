
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pacientes
        <small>Paciente: nombrepaciente > Historia Odontologica > Examen Oral</small>
      </h1>
    </section>


    <section class="content">
   		<div class="row">
    		<div class="col-xs-1"></div>
    		<div class="col-xs-10">
    			<div class="well text-center">
					<h3><i class="fa fa-user-md  text-success"></i> Examen Oral</h3>
				</div>
    		</div>
    		<div class="col-xs-1"></div>
    	</div>

  
    	<form class="form-horizontal" action="<?=base_url(); ?>/index.php/Pacientes/index" method="post">

        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-5">          
            <label for="oral1"> <h3><i class="fa  fa-heartbeat "></i> Cara</h3></label>
            <input id="oral1" name="oral1" class="validate form-control" type="text"> 
          </div>
          <div class="col-xs-5">
            <label for="oral2"><h3><i class="fa  fa-heartbeat "></i>Mejilla</h3> </label>
            <input id="oral2" name="oral2" class="validate form-control" type="text"> 
          </div>
          <div class="col-xs-1"></div>
        </div>

        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-5">
            <label for="oral3"><h3><i class="fa  fa-heartbeat "></i>Labios</h3></label>
            <input id="oral3" name="oral3" class="validate form-control" type="text"> 
          </div>
          <div class="col-xs-5">
            
            <label for="oral4"><H3><i class="fa  fa-heartbeat "></i>Carrillos</H3></label>
            <input id="oral4" name="oral4" class="validate form-control" type="text"> 
          </div>
          <div class="col-xs-1"></div>
        </div>

        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-5">
            <label for="oral5"><h3><i class="fa  fa-heartbeat "></i>Ganglios</h3></label>
            <input id="oral5" name="oral5" class="validate form-control" type="text"> 
          </div>
          <div class="col-xs-5">
            <label for="oralLengua"><h3><i class="fa  fa-heartbeat "></i>Mejilla</h3></label>
            <input id="oralLengua" name="oralLengua" class="validate form-control" type="text"> 
          </div>
          <div class="col-xs-1"></div>
        </div>

        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-5">
            <label for="oral7"><h3><i class="fa  fa-heartbeat "></i>Paladar</h3></label>
            <input id="oral7" name="oral7" class="validate form-control" type="text"> 
          </div>
          <div class="col-xs-5">
            <label for="oralCuello"><h3><i class="fa  fa-heartbeat "></i>Mejilla </h3></label>
            <input id="oralCuello" name="oralCuello" class="validate form-control" type="text"> 
          </div>
          <div class="col-xs-1"></div>
        </div>

        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-5">
            
            <label for="oral9"><h3><i class="fa  fa-heartbeat "></i>Frenillos </h3></label>
            <input id="oral9" name="oral9" class="validate form-control" type="text"> 
          </div>
          <div class="col-xs-5">
            
            <label for="oral10"><h3> <i class="fa  fa-heartbeat "></i>Otro </h3></label>
            <input id="oral10" name="oral10" class="validate form-control" type="text"> 
          </div>
          <div class="col-xs-1"></div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-10"></div>
        <div class="col-xs-1"><button  type="submit" class="btn btn-success">Finalizar <i class="fa   fa-paper-plane    " aria-hidden="true"></i></button></div>
        </div>
      </form>	
	</section>
</div>