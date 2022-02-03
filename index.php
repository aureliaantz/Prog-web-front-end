<?php include '../back/langues.php'; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="Site de l'Association de Santé" content="Qui sommes-nous? Que faisons-nous?">
        <title>AssoSanté</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" href="agencement.css">
    </head>

    <body>
		<?php include 'header.php';
		include 'navbar.php'?>


        <section id="pres_asso">
			<h2><?= $lang['presentation'];?></h2>
            <?= $lang['infos_description'];?>
        </section>
        <section id="pres_fondateurs">
			<h2 id="pres_title"><?= $lang['pres_title'];?></h2>

			<article id="pres1">
				<img class="pres" src="./images/nurse-2019420_640.jpg" alt="Co-fondateur Angélica Lefebre"/>
				<p><?= $lang['description_1'];?></p>
			</article>

			<article id="pres2">
				<img class="pres" src="./images/anesthesia-4677401_640.jpg" alt="Co-fondateur Bianca Lebel"/>
				<p><?= $lang['description_2'];?></p>
			</article>

			<article id="pres3">
				<img class="pres" src="./images/dentist-1191671_640.jpg" alt="Co-fondateur Maria Rita"/>
				<p><?= $lang['description_3'];?></p>
			</article>
        </section>

        <section id="events">
			<h2><?= $lang['passed_events'];?></h2>

			<article>
				<img class="event1" src="./images/corona-4912807_640.jpg" alt="Image représentant la Terre portant un masque" />
				<p><?= $lang['event1_nom'];?><br><?= $lang['event1_description'];?></p>
			</article>

			<article>
				<img class="event2" src="./images/dna-3539309_640.jpg" alt="Image représentant de l'ADN" />
				<p><?= $lang['event2_nom'];?><br><?= $lang['event2_description'];?></p>
			</article>

			<button type="button"><?= $lang['event_btn'];?></button>

        </section>

		<script src="http://localhost:8080/ajax.js"></script>

		<?php include 'footer.php'?>

    </body>

</html>