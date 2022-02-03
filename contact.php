<?php include '../back/contact_form.php'; 
include '../back/langues.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>AssoSanté - Contact</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="agencement.css">
</head>

<body>

	<?php include 'header.php';
	include 'navbar.php';?>

	<section id="contact_form">

		<form method="post">
			<h1><?= $lang['contact_form'];?></h1>

			<div>
				<label for="firstName"><?= $lang['prenom'];?>*</label>
				<input id="firstName" type="text" name="firstName" required aria-required="true" aria-labelledby="firstName"/>
			</div>

			<div>
				<label for="lastName"><?= $lang['nom'];?>*</label>
				<input id="lastName" type="text" name="lastName" required aria-required="true" aria-labelledby="lastName"/>
			</div>

			<div>
				<label for="mail"><?= $lang['mail'];?>*</label>
				<input id="mail" type="email" name="mail" aria-required="true" aria-labelledby="mail"/>
			</div>

			<div>
				<label for="url">URL</label>
				<input id="url" type="url" name="url" aria-labelledby="url"/>
			</div>

			<div>
				<label for="message"><?= $lang['message'];?>*</label>
				<textarea id="message" name="message" cols="30" rows="10" required aria-required="true" aria-labelledby="message"></textarea>
			</div>


			<button type="submit"><?= $lang['envoyer'];?></button>
		</form>


	</section>

	<?php include 'footer.php';?>

	<script src="../back/contact.js"></script>

</body>

</html>