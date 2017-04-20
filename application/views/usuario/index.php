<h1>Formulario de registro</h1>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

    	<table class="table table-hover">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Nombre</th>
		      <th>Apellido</th>
		      <th>Correo</th>
		      <th>Telefono</th>
		      <th>Accion</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php foreach ($selUsuario as $value) { ?>
		    <tr>
		      <th scope="row"><?php echo $value->usu_id ?></th>
		      <td><?php echo $value->usu_nombres ?></td>
		      <td><?php echo $value->usu_apellidos ?></td>
		      <td><?php echo $value->usu_correo ?></td>
		      <td><?php echo $value->usu_telefono ?></td>
		      <td>
		      	<a href="<?php echo base_url('usuario/actualizar/').$value->usu_id ?>" class="btn btn-primary btn-xs">Actualizar</a>
		      	<a href="<?php echo base_url('usuario/eliminar/').$value->usu_id ?>" class="btn btn-danger btn-xs">Eliminar</a>
		      </td>
		    </tr>
		  <?php } ?>
		  </tbody>
		</table>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
    
	    <div class="row">
	    	<div class="col-md-12">
	    	<div class="col-md-7 col-md-offset-3">
	    	
	    		<form method="POST" action="<?php echo base_url('usuario/insert'); ?>">
				  <div class="form-group">
				    <label for="perfil">Perfil</label>
				    <select name="perfil" class="form-control">
				    	<?php foreach($selPerfil as $perfil) {?>
				    		<option value="<?php echo $perfil->per_id; ?>"><?php echo $perfil->per_nombre; ?></option>
				    	<?php } ?>
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="nombres">Nombres</label>
				    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="nombres">
				  </div>

				  <div class="form-group">
				    <label for="apellidos">Apellidos</label>
				    <input name="apellido" type="text" class="form-control" id="apellido" placeholder="apellidos">
				  </div>

				  <div class="form-group">
				    <label for="correo">Correo Electronico</label>
				    <input name="correo" type="text" class="form-control" id="correo" placeholder="Correo">
				  </div>

				  <div class="form-group">
				    <label for="telefono">Telefono</label>
				    <input name="telefono" type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
				  </div>
				  <button type="submit" class="btn btn-default">Guardar</button>
				</form>

	    	</div>

	    </div>

    </div>
  </div>

</div>