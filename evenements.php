<?php include '../back/langues.php'; ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="AssoSante" content="Qui sommes-nous? Que faisons-nous?">
        <title>AssoSanté - Evénements</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" href="agencement.css">
	</head>
	
	<body>
		<?php include 'header.php';
		include 'navbar.php';?>

		<section id="events">
			<article>
				<img class="event1" src="./images/corona-4912807_640.jpg" alt="Evénement 1" />
				<p><?= $lang['event1_nom'];?><br><?= $lang['event1_description'];?></p>
			</article>

			<article>
				<img class="event2" src="./images/dna-3539309_640.jpg" alt="Evénement 2" />
				<p><?= $lang['event2_nom'];?><br><?= $lang['event2_description'];?></p>
			</article>

			<article>
				<img class="event3" src="./images/capsule-1079838_640.jpg" alt="Evénement 3" />
				<p><?= $lang['event3_nom'];?><br><?= $lang['event3_description'];?></p>
			</article>

			<article>
				<img class="event4" src="./images/laboratory-2815641_640.jpg" alt="Evénement 4" />
				<p><?= $lang['event4_nom'];?><br><?= $lang['event4_description'];?></p>
			</article>
		</section>


		<?php include 'footer.php'?>
	</body>

</html>