<?php

if(isset($_POST['asunto']) && !empty($_POST['asunto']) && (isset($_POST['mensaje']) && !empty($_POST['mensaje']){
	
	$destino = "jose.saavedra.pinto@gmail.com";
	$desde = "From:"."jose.nightmare";
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	
	mail($destino, $asunto, $mensaje, $desde);
	echo "correo enviado";
}else{
	echo "correo no enviado";
	
}
	
	?>