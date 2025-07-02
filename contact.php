<?php
	include 'scripts/menu.php';
	include 'scripts/footer.php';
?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<title data-en="Contact" data-fr="Contact"></title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<head>
	<link rel="stylesheet" href="styles/genericStyle.css">
	<link rel="stylesheet" href="styles/contactStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php generateMenu('contact'); ?>
	<div class="content">
		<div class="intro-text">
			<h1 data-en="Contact Me." data-fr="Me Contacter."></h1>
		    <p data-en="Interested in working together, or want any information ? I'm always open to new opportunities and collaborations." data-fr="Intéressé(e) pour collaborer ou besoin d’informations ? Je suis toujours ouvert à de nouvelles opportunités et collaborations."></p>
		  
		  	<div class="links">
		  		<div>
				    <h3 data-en="My contacts" data-fr="Mes contacts"></h3>
				    <div class="logo-link">
				  		<img id="email-img" src="images/emailLogo.png" alt="email logo">
				  		<a href="mailto:olivierr.cochard@gmail.com"><p>olivierr.cochard@gmail.com</p></a>
				  	</div>
				  	<div class="logo-link">
				  		<img id="phone-img" src="images/phoneLogo.png" alt="phone logo">
				  		<a href="tel:+33646716011"><p>+33 6 46 71 60 11</p></a>
				  	</div>
				</div>
				<div class="right">
				    <h3 data-en="Explore my work" data-fr="Regarder mon travail"></h3>
				  	<div class="logo-link">
				  		<a href="https://github.com/oliviercochard" target="_blank"><p>GitHub</p></a>
				  		<img id="github-img" src="images/gitHubLogo.png" alt="github logo">
				  	</div>
				  	<div class="logo-link">
				  		<a href="https://holyvier-studio.itch.io/" target="_blank"><p>Itch.io</p></a>
				  		<img id="itch-img" src="images/itchLogo.png" alt="itch logo">
				  	</div>
				</div>
			</div>

			<h1 data-en="Send Message." data-fr="Envoyer Un Message."></h1>
			<form action="mailto:olivierr.cochard@gmail.com" method="post" enctype="text/plain">
			  <label for="name" data-en="Name" data-fr="Nom"></label>
			  <input type="text" id="name" name="name" required>
			  <br>
			  <label for="email" data-en="Email" data-fr="Email"></label>
			  <input type="email" id="email" name="email" required>
			  <br>
			  <label for="message" data-en="Message" data-fr="Message"></label>
			  <textarea id="message" name="message" rows="5" required></textarea>
			  <br>
			  <button class="btn" type="submit" data-en="Send" data-fr="Envoyer"></button>
			</form>
		</div>
	</div>
	<?php generateFooter(); ?>
	<script src="scripts/lang.js"></script>
	<script src="scripts/themeToggle.js"></script>
</body>
</html> 
