
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tratamientos
        <small>Lista de Diagnosticos</small>
      </h1>
    </section>
    <section class="content">
	
	<div class="row">
		
		<div class="col-xs-1">
			
		</div>

		<div class="col-xs-10 ">
			<div class="well text-center">
				<h3><i class="fa fa-address-card  text-success"></i> Lista de Diagnosticos</h3>
			</div>
			

		</div>

		<div class="col-xs-1">
			
		</div>

	</div>


		<div class="row">
		<div class="col-xs-1"></div>
		<div class="col-xs-4">
			<a href="<?=base_url(); ?>/index.php/Ajustes/agregarD"><button type="button" class="btn btn-success"> <i class="fa fa-plus"></i> Nuevo Diagnostico</button></a>
		</div>

		<div class="col-xs-6 ">
			<div class="input-group">
      			<input type="text" class="form-control" placeholder="Search for...">
      			<span class="input-group-btn">
        			<button class="btn btn-default" type="button">Go!</button>
      			</span>
    		</div><!-- /input-group -->
		</div>

		<div class="col-xs-1"></div>
		
	</div>




	<div class="row">
		
		<div class="col-xs-1">
			
		</div>

		<div class="col-xs-10 ">



			<div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Opciones</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                  <td>carie</td>
                  <td>
                  	<a href="<?=base_url(); ?>/index.php/Ajustes/agregarD"><button type="button" class="btn btn-warning"> <i class="fa fa-pencil"></i> Editar</button></a>
                  	<a href=""><button type="button" class="btn btn-danger"> <i class="fa fa-trash"></i> Borrar</button></a>
                  	
                  </td>
                </tr>

                </tbody>

                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Opciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

			

		</div>

		<div class="col-xs-1">
			
		</div>

	</div>



</section>

</div>














