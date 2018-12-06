<?php
	//echo "teste3";
	$inputNome = $_POST['inputNome'];
	$inputEmail = $_POST['inputEmail'];
	//$pedido = $_POST[''];
	$pedido1 = $_POST['txtarea'];
	$num = rand(0, 20000);
	$assunto = "Pedido Nrº NSNR$num";
	//echo $inputNome;
	//echo $pedido;
	echo $assunto;
	$data_envio = date("d-m-Y");
	$hora_envio = date("h:i:sa");
	echo $data_envio;
	// Corpo E-mail
	$arquivo = "
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
		<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
			<tr>
			  <td>
	<tr>
				 <td width='500'>Nome:$inputNome</td>
				</tr>
				<tr>
				  <td width='320'>E-mail:<b>$inputEmail</b></td>
	 </tr>
				<tr>
				  <td width='320'>Mensagem:Teste teste</td>
				</tr>
			</td>
		  </tr>  
		  <tr>
			<td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
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
	$email_site = "messias.etec2012@gmail.com";
	
	// É necessário indicar que o formato do e-mail é html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: $nome_site <$email_site>';
	//$headers .= "Bcc: $EmailPadrao\r\n";

	$enviaremail = mail($destino, $assunto, $arquivo, $headers);
	if($enviaremail){
	$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> A confirmação será enviada para o seu e-mail fornecido no formulário";
	echo " <meta http-equiv='refresh' content='10;URL=orderConfirmation.html'>";
	} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo "";
	}
?>