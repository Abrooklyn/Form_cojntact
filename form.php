<?php
	
if(isset($_POST['formMail']))
{
	if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header = "MIME-Version: 1.0\r\n";
		$header .= 'From:"test.com"<contact@test.com>' . "\n";
		$header .= 'Content-Type:text/html; charset="utf-8"' . "\n";
		$header .= 'Content-Transfer-Encoding: 8bit';
		$message = '
			<html>
				<body>
					<div align="center">
						<p> Nom de l\'expédiyeur :' . $_POST['name'] . '</p>
						<p> Mail de l\'expédiyeur :' . $_POST['mail'] . '</p>
						<p>' . nl2br($_POST['message']). '</p>
					</div>
				</body>
			</html>
		';
	mail("test@gmail.com", "Contact - test.com", $message, $header);
	$msg = "Votre message a bien été envoyé !";
	}
	else
	{
		$msg = "Tous les champs doivent être complétés !";
	}
}
?>
