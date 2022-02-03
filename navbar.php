<nav>
	<a href="evenements.php" title="Lien qui emmène vers la page des événements"><?= $lang['events_btn'];?></a>
    <a href="membres.php" title="Lien qui emmène vers la page des membres"><?= $lang['members_btn'];?></a>
	<a href="contact.php" title="Lien qui emmène vers le formulaire de contact">Contact</a>
	
	<select>
        <option onclick="fr()">Français</option>
		
		<option onclick="en()">English</option>
		
		<option onclick="de()">Deutsch</option>
	</select>
</nav>

<script src="http://localhost:8080/langues.js"></script>