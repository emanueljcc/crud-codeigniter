
<form method="POST" action="<?php echo base_url('usuario/update'); ?>">
<?php foreach($actualizarUsuario as $o) {?>
<input type="hidden" name="textusuid" value="<?php echo $o->usu_id ?>">
  <div class="form-group">
    <label for="perfil">Perfil</label>
    	
    	<?php 
    	$lista = array();
    	foreach($selPerfil as $perfilp) {
    		$lista[$perfilp->per_id] = $perfilp->per_nombre;
   			echo form_dropdown('perfil',$lista,$o->per_id,'class="form-control"');
    	 }; ?>


  </div>

  <div class="form-group">
    <label for="nombres">Nombres</label>
    <input name="nombre" type="text" class="form-control" id="nombre" value="<?php echo $o->usu_nombres; ?>">
  </div>

  <div class="form-group">
    <label for="apellidos">Apellidos</label>
    <input name="apellido" type="text" class="form-control" id="apellido" value="<?php echo $o->usu_apellidos; ?>">
  </div>

  <div class="form-group">
    <label for="correo">Correo Electronico</label>
    <input name="correo" type="text" class="form-control" id="correo" value="<?php echo $o->usu_correo; ?>">
  </div>

  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input name="telefono" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $o->usu_telefono; ?>">
  </div>
 <?php } ?>
  <button type="submit" class="btn btn-default">Guardar</button>
</form>