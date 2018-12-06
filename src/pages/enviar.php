<?php
	//echo "teste3";
	$inputNome = $_POST['inputNome'];
	$inputEmail = $_POST['inputEmail'];
	//$pedido = $_POST[''];
	$pedido1 = $_POST['txtarea'];
	$num = rand(0, 20000);
	$num_pedido = "Pedido Nrº NSNR$num";
	$data_envio = date("d-m-Y");
	$hour = date("h") - 3;
	$hora_envio = $hour . ":" . date("i:s");
	//echo $hora_envio;
	echo "Redirecionando...";
	
	// Corpo E-mail
	$arquivo = "
	<meta charset='utf-8'/>
	<style type='text/css'>
	body {
	margin:0px;
	font-family:Verdane;
	font-size:12px;
	color: #666666;
	}
	a{
	color: #666666;
	text-decoration: none;
	}
	a:hover {
	color: #FF0000;
	text-decoration: none;
	}
	</style>
	<html>
		
		<table width='510' border='0' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
			<tr>
			  <td>
	<tr>
				 <td width='500' style='padding-left:15px;'><h3><br>Olá, $inputNome. O seu pedido é $num_pedido</h3></td>
				</tr>
				<tr>
				  <td width='320' style='padding-left:30px;'><h3>Segue às informações do seu pedido:</h3></td>
	 </tr>
				<tr>
				  <td width='320'><h3><center>$pedido1</center></h3></td>
				</tr>
			</td>
		  </tr>  
		  <tr>
			<td style='text-align:center'><h5>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></h5></td>
		  </tr>
		</table>
	</html>
	";
	
	//enviar

	// emails para quem será enviado o formulário
	//$emailenviar = "seuemail@seudominio.com.br";
	//$destino = $emailenviar;
	$destino = $inputEmail;
	
	$nome_site = "FoodMack";
	//$email_site = "teste@gmail.com";
	
	// É necessário indicar que o formato do e-mail é html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: FoodMack <pedido@foodmack.000webhostapp.com>';
	//$headers .= "Bcc: $EmailPadrao\r\n";

	$enviaremail = mail($destino, $num_pedido, $arquivo, $headers);
	if($enviaremail){
		$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> A confirmação será enviada para o seu e-mail fornecido no formulário";
		echo " <meta http-equiv='refresh' content='5;URL=orderConfirmation.html'>";
	} else {
		$mgm = "ERRO AO ENVIAR E-MAIL!";
		echo "";
	}
?>