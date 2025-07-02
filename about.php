<?php
	include 'scripts/menu.php';
	include 'scripts/footer.php';
?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<title data-en="About" data-fr="À propos"></title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<head>
	<link rel="stylesheet" href="styles/genericStyle.css">
	<link rel="stylesheet" href="styles/aboutStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php generateMenu('about'); ?>
	<div class="content">
		<div class="intro-text">
			<h1 data-en="About Me." data-fr="À Propos De Moi."></h1>

		  	<p data-en="I'm Olivier Cochard, a french full-stack developer driven by both technical precision and creative freedom when working on a project." data-fr="Je suis Olivier Cochard, développeur full-stack français animé à la fois par la rigueur technique et la liberté créative dans la réalisation de mes projets."></p>

			<p data-en="I recently earned my degree in Computer Science, during which I worked on a wide range of projects including websites, database systems, software applications, and artificial intelligence. Throughout my studies, I regularly used technologies such as Python, Java, PHP, HTML, CSS, and JavaScript." data-fr="J’ai récemment obtenu mon diplôme en informatique, au cours duquel j’ai travaillé sur une grande variété de projets, incluant des sites web, des systèmes de bases de données, des applications logicielles, ainsi que de l’intelligence artificielle. Tout au long de mes études, j’ai régulièrement utilisé des technologies telles que Python, Java, PHP, HTML, CSS et JavaScript."></p>

			<p data-en="Alongside my academic projects, I’ve designed and developed numerous games using Unity 3D (C#). I’m passionate about building everything myself, from the core concept and game mechanics to art, level design, and user interfaces." data-fr="En parallèle de mes projets académiques, j’ai conçu et développé de nombreux jeux avec Unity 3D (C#). Je suis passionné par la création complète, depuis le concept de base et les mécaniques de jeu jusqu’à l’art, la conception des niveaux et les interfaces utilisateur."></p>

			<p data-en="I'm highly autonomous and self-taught, with a strong attention to detail and a relentless drive when it comes to solving problems. Whether it's crafting immersive digital experiences or debugging a tricky issue, I always give my best." data-fr="Je suis très autonome et autodidacte, avec une grande attention aux détails et une détermination sans faille pour résoudre les problèmes. Qu’il s’agisse de créer des expériences digitales immersives ou de déboguer un problème complexe, je donne toujours le meilleur de moi-même."></p>
		</div>

		<h1 data-en="My CV." data-fr="Mon CV."></h1>
		<div class="cv">
			<iframe id="cv" src="assets/cv-olivier-cochard.pdf" width="100%" height="100%" data-en="Your browser does not support PDFs." data-fr="Ton navigateur ne supporte pas les fichiers PDF.">
			</iframe>
		</div>

		<div class="buttons">
		  <a id="cv-download" class="btn" href="assets/cv-olivier-cochard.pdf" download data-en="Download" data-fr="Télécharger"></a>
		  <a id="cv-view" class="btn" href="assets/cv-olivier-cochard.pdf" target="_blank" data-en="View" data-fr="Regarder"></a>
		</div>
	</div>
	<?php generateFooter(); ?>
	<script src="scripts/lang.js"></script>
	<script src="scripts/themeToggle.js"></script>
</body>
</html> 