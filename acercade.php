<?php
	$Usuarios = array();
	$usuario['paterno'] = 'GARCIA';
	$usuario['materno'] = 'PEREZ';
	$usuario['nombres'] = 'ALAN';
	$usuario['usuario'] = 'alan';
	$usuario['clave'] = 'garcia';
	$Usuarios[] = $usuario;
	$usuario['paterno'] = 'FLORES';
	$usuario['materno'] = 'LOPEZ';
	$usuario['nombres'] = 'LUIS';
	$usuario['usuario'] = 'luis';
	$usuario['clave'] = 'lopez';
	$Usuarios[] = $usuario;
?>

<div class="row">
	<div class="col-md-8">
		<?php

		echo json_encode($Usuarios);
		?>
	</div>
	<div class="col-md-4">

	</div>
</div>
