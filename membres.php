<?php include '../back/langues.php'; ?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="Site de l'Association de Santé" content="Qui sommes-nous? Que faisons-nous?">
        <title>AssoSanté - Nos membres</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" href="agencement.css">
	</head>
	
	<body>
		<?php include 'header.php';
		include 'navbar.php';?>
		
		<section id="members">
			<h2><?= $lang['members_btn'];?></h2>
			<article>
				<img class="member1" src="./images/nurse-2019420_640.jpg" alt="Photo représentant Angélica Lefebre"/>
				<p><?= $lang['description_1'];?></p>
			</article>
			<article>
				<img class="member2" src="./images/anesthesia-4677401_640.jpg" alt="Photo représentant Bianca Lebel"/>
				<p><?= $lang['description_2'];?></p>
			</article>
			<article>
				<img class="member3" src="./images/dentist-1191671_640.jpg" alt="Photo représentant Maria Rita"/>
				<p><?= $lang['description_3'];?></p>
			</article>
		</section>

		<section id="infos">
			<h2><?= $lang['infos'];?></h2>
			<p><?= $lang['infos_description'];?></p>
		</section>

		<?php include 'footer.php';?>
	</body>

</html>
