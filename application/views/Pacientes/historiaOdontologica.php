<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pacientes
        <small>Paciente: nombrepaciente > Historia Odontologica </small>
      </h1>
    </section>


    <section class="content">
   		<div class="row">
    		<div class="col-xs-1"></div>
    		<div class="col-xs-10">
    			<div class="well text-center">
					<h3><i class="fa fa-history  text-success"></i> Historia Odontologica</h3>
				</div>
    		</div>
    		<div class="col-xs-1"></div>
    	</div>

  
    	<form class="form-horizontal" action="<?=base_url(); ?>/index.php/Pacientes/examen" method="post">
        <div class="row">
        <div class="col-xs-1"></div>

        <div class="col-xs-10">
          
        
        
  			<table class="table table-hover">
                <tbody>
                  <tr>
                    <td>¿Esta usted bajo tratamiento médico?</td>
                    <td>
                      <input class="with-gap" name="qestion1" id="qestion1-si" value="Si" type="radio">
                    <label for="qestion1-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion1" id="qestion1-no" value="No" type="radio">
                  <label for="qestion1-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext1">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion1-text" name="qestion1-text" class="validate" type="text">
                      <label for="qestion1-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Toma actualmente algún medicamento?</td>
                    <td>
                      <input class="with-gap" name="qestion2" id="qestion2-si" value="Si" type="radio">
                    <label for="qestion2-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion2" id="qestion2-no" value="No" type="radio">
                    <label for="qestion2-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext2">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion2-text" name="qestion2-text" class="validate" type="text">
                      <label for="qestion2-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Le han practicado alguna intervención quirúrgica?</td>
                    <td>
                      <input class="with-gap" name="qestion3" id="qestion3-si" value="Si" type="radio">
                    <label for="qestion3-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion3" id="qestion3-no" value="No" type="radio">
                    <label for="qestion3-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext3">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion3-text" name="qestion3-text" class="validate" type="text">
                      <label for="qestion3-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Ha recibido alguna transfución sanguinea?</td>
                    <td>
                      <input class="with-gap" name="qestion4" id="qestion4-si" value="Si" type="radio">
                    <label for="qestion4-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion4" id="qestion4-no" value="No" type="radio">
                    <label for="qestion4-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext4">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion4-text" name="qestion4-text" class="validate" type="text">
                      <label for="qestion4-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Ha consumido o consume drogas?</td>
                    <td>
                      <input class="with-gap" name="qestion5" id="qestion5-si" value="Si" type="radio">
                    <label for="qestion5-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion5" id="qestion5-no" value="No" type="radio">
                    <label for="qestion5-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext5">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion5-text" name="qestion5-text" class="validate" type="text">
                      <label for="qestion5-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Ha presentado reacción alérgica?</td>
                    <td>
                      <input class="with-gap" name="qestion6" id="qestion6-si" value="Si" type="radio">
                    <label for="qestion6-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion6" id="qestion6-no" value="No" type="radio">
                    <label for="qestion6-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext6">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion6-text" name="qestion6-text" class="validate" type="text">
                      <label for="qestion6-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>Sufre de tensión arterial</td>
                    <td>
                      <input class="with-gap" name="qestion7" id="qestion7-si" value="Si" type="radio">
                    <label for="qestion7-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion7" id="qestion7-no" value="No" type="radio">
                    <label for="qestion7-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext7">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion7-text" name="qestion7-text" class="validate" type="text">
                      <label for="qestion7-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Sangra excesivamente al cortarse?</td>
                    <td>
                      <input class="with-gap" name="qestion8" id="qestion8-si" value="Si" type="radio">
                    <label for="qestion8-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion8" id="qestion8-no" value="No" type="radio">
                    <label for="qestion8-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext8">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion8-text" name="qestion8-text" class="validate" type="text">
                      <label for="qestion8-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Padece o a padecido algún problema sanguíneo?</td>
                    <td>
                      <input class="with-gap" name="qestion9" id="qestion9-si" value="Si" type="radio">
                    <label for="qestion9-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion9" id="qestion9-no" value="No" type="radio">
                    <label for="qestion9-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext9">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion9-text" name="qestion9-text" class="validate" type="text">
                      <label for="qestion9-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Es usted V.I.H. +?</td>
                    <td>
                      <input class="with-gap" name="qestion10" id="qestion10-si" value="Si" type="radio">
                    <label for="qestion10-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion10" id="qestion10-no" value="No" type="radio">
                    <label for="qestion10-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext10">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion10-text" name="qestion10-text" class="validate" type="text">
                      <label for="qestion10-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Toma algun medicamento retroviral?</td>
                    <td>
                      <input class="with-gap" name="qestion11" id="qestion11-si" value="Si" type="radio">
                    <label for="qestion11-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion11" id="qestion11-no" value="No" type="radio">
                    <label for="qestion11-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext11">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion11-text" name="qestion11-text" class="validate" type="text">
                      <label for="qestion11-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Está tomando actualmente pastillas anticonceptivas?</td>
                    <td>
                      <input class="with-gap" name="qestion12" id="qestion12-si" value="Si" type="radio">
                    <label for="qestion12-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion12" id="qestion12-no" value="No" type="radio">
                    <label for="qestion12-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext12">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion12-text" name="qestion12-text" class="validate" type="text">
                      <label for="qestion12-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Sufre o ha sufrido de alguna enfermedad?</td>
                    <td>
                      <input class="with-gap" name="qestion13" id="qestion13-si" value="Si" type="radio">
                    <label for="qestion13-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion13" id="qestion13-no" value="No" type="radio">
                    <label for="qestion13-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext13">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion13-text" name="qestion13-text" class="validate" type="text">
                      <label for="qestion13-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Ha tenido limitaciones al abrir o cerrar la boca?</td>
                    <td>
                      <input class="with-gap" name="qestion14" id="qestion14-si" value="Si" type="radio">
                    <label for="qestion14-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion14" id="qestion14-no" value="No" type="radio">
                    <label for="qestion14-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext14">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion14-text" name="qestion14-text" class="validate" type="text">
                      <label for="qestion14-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Sufre de herpes o aftas recurrentes?</td>
                    <td>
                      <input class="with-gap" name="qestion15" id="qestion15-si" value="Si" type="radio">
                    <label for="qestion15-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion15" id="qestion15-no" value="No" type="radio">
                    <label for="qestion15-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext15">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion15-text" name="qestion15-text" class="validate" type="text">
                      <label for="qestion15-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Se muerde las uñas?</td>
                    <td>
                      <input class="with-gap" name="qestion16" id="qestion16-si" value="Si" type="radio">
                    <label for="qestion16-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion16" id="qestion16-no" value="No" type="radio">
                    <label for="qestion16-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext16">
                    <td colspan="3" <div="" class="input-field col s12">
                      <input id="qestion16-text" name="qestion16-text" class="validate" type="text">
                      <label for="qestion16-text">Observaciones:</label>
                    
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Fumas?</td>
                    <td>
                      <input class="with-gap" name="qestion17" id="qestion17-si" value="Si" type="radio">
                    <label for="qestion17-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion17" id="qestion17-no" value="No" type="radio">
                    <label for="qestion17-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext17">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion17-text" name="qestion17-text" class="validate" type="text">
                      <label for="qestion17-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Consume alimentos citricos?</td>
                    <td>
                      <input class="with-gap" name="qestion18" id="qestion18-si" value="Si" type="radio">
                    <label for="qestion18-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion18" id="qestion18-no" value="No" type="radio">
                    <label for="qestion18-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext18">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion18-text" name="qestion18-text" class="validate" type="text">
                      <label for="qestion18-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>Muerde objetos con los dientes</td>
                    <td>
                      <input class="with-gap" name="qestion19" id="qestion19-si" value="Si" type="radio">
                    <label for="qestion19-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion19" id="qestion19-no" value="No" type="radio">
                    <label for="qestion19-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext19">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion19-text" name="qestion19-text" class="validate" type="text">
                      <label for="qestion19-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                  <tr>
                    <td>¿Le sangran las encías?</td>
                    <td>
                      <input class="with-gap" name="qestion20" id="qestion20-si" value="Si" type="radio">
                    <label for="qestion20-si">Si</label>
                    </td>
                    <td>
                      <input class="with-gap" name="qestion20" id="qestion20-no" value="No" type="radio">
                    <label for="qestion20-no">No</label>
                    </td>
                  </tr>
                  <tr class="qtext20">
                    <td colspan="3">
                      <div class="input-field col s12">
                      <input id="qestion20-text" name="qestion20-text" class="validate" type="text">
                      <label for="qestion20-text">Observaciones:</label>
                    </div>
                    </td>                   
                  </tr>
                </tbody>
            </table>
            </div>
          </div>

  			<div class="col-xs-10"></div>
  			<div class="col-xs-1"><button  type="submit" class="btn btn-success">Siguiente <i class="fa  fa-arrow-right   " aria-hidden="true"></i></button></div>

  		</form>	
	</section>
</div>