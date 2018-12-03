<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
      <h1>
        Pacientes
        <small>Nuevo Paciente</small>
      </h1>
    </section>

    
    <section class="content">
   		<div class="row">
    		<div class="col-xs-1"></div>
    		<div class="col-xs-10">
    			<div class="well text-center">
					<h3><i class="fa fa-user  text-success"></i> Nuevo Paciente</h3>
				</div>
    		</div>
    		<div class="col-xs-1"></div>
    	</div>

      
       

      
        
    	<form class="form-horizontal" action="<?=base_url(); ?>/index.php/Pacientes/historia" method="post">
      
  			<div class="form-group">
    			<label for="nombre" class="col-sm-2 control-label">Nombre</label>
    			<div class="col-sm-4">
      				<input type="nombre" class="form-control" id="nombre" placeholder="Nombre">
    			</div>
     			<label for="fecha" class="col-sm-1 control-label">Fecha de Nacimiento</label>
    			<div class="col-sm-4">
      				<input type="date" class="form-control" id="fecha" placeholder="Fecha de Nacimiento">
    			</div>
  			</div>

  			<div class="form-group">
    			<label for="email" class="col-sm-2 control-label">Email</label>
    			<div class="col-sm-4">
      				<input type="email" class="form-control" id="email" placeholder="E-mail">
    			</div>
     			<label for="lugar" class="col-sm-1 control-label">Lugar de nacimiento</label>
    			<div class="col-sm-4">
      				<input type="text" class="form-control" id="lugar" placeholder="Lugar de Nacimiento">
    			</div>
  			</div>

  			<div class="form-group">
    			<label for="ocupacion" class="col-sm-2 control-label">Ocupacion</label>
    			<div class="col-sm-4">
      				<input type="text" class="form-control" id="ocupacion" placeholder="Ocupacion">
    			</div>
     			<label for="domicilio" class="col-sm-1 control-label">Domicilio</label>
    			<div class="col-sm-4">
      				<input type="text" class="form-control" id="domicilio" placeholder="Domicilio">
    			</div>
  			</div>

  			<div class="form-group">
    			<label for="telefono" class="col-sm-2 control-label">Telefono</label>
    			<div class="col-sm-3">
      				<input type="text" class="form-control" id="telefono" placeholder="Telefono">
    			</div>
     			<label for="celular" class="col-sm-1 control-label">Celular</label>
    			<div class="col-sm-2">
      				<input type="text" class="form-control" id="celular" placeholder="Celular">
    			</div>
    			<label for="lugar" class="col-sm-1 control-label">Seleccionar:</label>
    			<div class="col-sm-2">
    				<select class="form-control">
  						<option>Sexo</option>
  						<option>Masculino</option>
  						<option>Femenino</option>
					</select>
    			</div>
  			</div>

  			<div class="col-xs-10"></div>
        
  			<div class="col-xs-1"><button  type="submit" class="btn btn-success">Siguiente <i class="fa  fa-arrow-right   " aria-hidden="true"></i></button></div>
        
  		</form>	
	</section>
</div>