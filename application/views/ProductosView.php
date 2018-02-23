<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div id="container">
<h1 class="text-center">Tienda</h1> <!--Titulo-->
	
	<!--Foreach base de datos-->
	<?php 
		foreach ($query as $row) {
	?>			
	

		<!--Fila-->
		<div class="row">
			<!--Comuna izquierda, iuncluye Nombre, Form, e Id oculto-->
			<div class="col-sm-12 col-md-6 text-center">
				<?php echo form_open('ProductosController/actualizarCantidad'); ?><!--Inicciar formulario-->
				<h4><button type="button" class="btn btn-primary btn-lg btn-block" style='visibility:hidden;'>.</button></h4>
				<h4  style='display:none;'><?php echo form_input('id',$row->Id); ?></h4><!--Id Oculto-->
				<h4><?php echo $row->Nombre; ?></h4><!--Nombre-->
				<h4><button type="button" class="btn btn-primary btn-lg btn-block" style='visibility:hidden;'>.</button></h4>
			</div><!--Fin columna izquierda-->

			<!--Columna derecha, incluye cantidad y botones aumentar disminuir-->
			<div class="text-center col-12 col-md-6">
				<?php echo form_submit('botonmasomenos','Más','class="btn btn-primary btn-lg btn-block"') ?>
				<h4><?php echo $row->Cantidad ?></h4><!--Cantidad-->
				<?php echo form_submit('botonmasomenos','Menos','class="btn btn-secondary btn-lg btn-block"') ?>
			</div><!--Fin columna derecha-->
			
			<?php echo form_close() ?><!--Fin formulario-->
		</div><!--Fin Fila-->
	<?php } ?>
</div>


<script> 
function a(){
	alert(<?php $_POST["id"] ?>)
}
</script>

<script> alert(<?php $_POST["id"] ?>)</script>



</body>
</html>