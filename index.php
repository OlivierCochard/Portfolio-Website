<?php
	include 'scripts/menu.php';
	include 'scripts/footer.php';
?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<title data-en="Home" data-fr="Accueil"></title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<head>
	<link rel="stylesheet" href="styles/genericStyle.css">
	<link rel="stylesheet" href="styles/homeStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php generateMenu('home'); ?>
	<div class="content">
		<h1 data-en="Hi. I'm Olivier." data-fr="Bonjour. Je Suis Olivier."></h1>
		<h1 data-en="A Full-Stack Developer." data-fr="Un Développeur Full-Stack."></h1>

		<img id="profile-img" src="images/meRemake.png" alt="me">
		<div class="intro-text">
		  	<p data-en="My twin and I have been passionate about computers since childhood. 
			During my Computer Science degree, I explored many fields: from web development to game design." data-fr="Mon jumeau et moi sommes passionnés par l'informatique depuis notre enfance. Durant ma licence en informatique, j’ai exploré de nombreux domaines : du développement web à la conception de jeux vidéo."></p>

			<p data-en="For several years, I've been creating 2D pixel art and Unity games, blending creativity with code." data-fr="Depuis quelques années, je crée des jeux 2D sur Unity et réalise du pixel arts, alliant créativité et programmation."></p>
		</div>

		<button class="btn" id="lang-toggle-btn"></button>
		<button class="btn" id="theme-toggle-btn"></button>
  	</div>
  	<?php generateFooter(); ?>
  	<script src="scripts/lang.js"></script>
  	<script src="scripts/themeToggle.js"></script>
</body>
</html>