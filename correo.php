<?php

if(isset($_POST['enviar'])){
	if(!empty($_POST['name'])&&(!empty($_POST['asunto'])&&(!empty($_POST['msg'])&&(!empty($_POST['email']){
		$name = $POST['name'];
		$asunto = $POST['asunto'];
		$msg = $POST['msg'];
		$email = $POST['email'];
		$header = "From: jose.saavedra.pinto@gmail.com" . "\r\n";
		$header = "Reply to: jose.saavedra.pinto@gmail.com" . "\r\n";
		$header = "X-Mailer: PHP/". phpversion();
		mail($email,$asunto,$msg,$header);
		if(mail){
			echo "<h4> enviado exitosamente</h4>";
	}
}
	
?>