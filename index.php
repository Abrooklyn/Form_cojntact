
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Contact </title>
	</head>
	<body>
		<h2> Formulaire de contact ! </h2>
		<form method="POST" action="">
			<input type="text" name="name" placeholder="Votre nom" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" /> <br/> <br/>
			<input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>"/> <br/> <br/>
			<textarea name="message" placeholder="Votre Message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea> <br/> <br/>
			<input type="submit" value="Envoyer !" name="formMail" />
		</form>

		<?php 
			if(isset($msg))
				{
					echo $msg;
				}
		?>
	</body>
</html>