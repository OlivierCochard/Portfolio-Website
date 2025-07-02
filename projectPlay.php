<?php
	include 'scripts/menu.php';
	include 'scripts/footer.php';
	include 'scripts/projectPageBuilder.php';
?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<title data-en="Play" data-fr="Jouer"></title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<head>
	<link rel="stylesheet" href="styles/genericStyle.css">
	<link rel="stylesheet" href="styles/playStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php generateMenu(''); ?>
	<div class="content">
		<?php
			$filter = '';
			if (isset($_GET['filter']) && !empty($_GET['filter']))
		    	$filter = $_GET['filter'];
			$category = '';
			if (isset($_GET['category']) && !empty($_GET['category']))
		    	$category = $_GET['category'];
		    $numero = -1;
		    if (isset($_GET['numero']) && is_numeric($_GET['numero']))
		    	$numero = (int) $_GET['numero'];

			$project = generateProject($category, $numero);
			if ($project === null){
				echo "<h1 data-en='Error Unknown Project.' data-fr='Erreur Projet Inconnu.'></h1>";
			}
			else {
				echo "<h1 data-en=\"" . htmlspecialchars($project->getTitle('en'), ENT_QUOTES) . "\" data-fr=\"" . htmlspecialchars($project->getTitle('fr'), ENT_QUOTES) . "\"></h1>";
				if ($project->getPlay() === []){
					echo "<h3 data-en='Impossible to play' data-fr='Impossible de jouer'></h3>";
				}
				else {
					echo "<h3 data-en='Download my project to get a better experience' data-fr='Téléchargez mon projet pour avoir un meilleur confort de jeu'></h3>";
					echo "<div class='iframe-container'>
					  <iframe 
					    src=" . $project->getPlay()[0] . "?color=F6FCDF' 
					    frameborder='0' 
					    allowfullscreen
					  ></iframe>
					  <a href=" . $project->getPlay()[1] . " data-en='Play on external site' data-fr='Jouer sur un site externe'></a>
					</div>";
				}
			}

			echo "<br>";
			echo "<div class='buttons'>";
			echo "<a href=". $project->getItchLink() . " class='btn' data-en='Download page' data-fr='Page de téléchargement'></a>";
			echo "<a href='projectDetails.php?category=$category&numero=$numero&filter=$filter' class='btn' data-en='Back to details project' data-fr='Retourner sur les details du projet'></a>";
			echo "</div>";
		?>
	</div>
	<?php generateFooter(); ?>
	<script src="scripts/lang.js"></script>
	<script src="scripts/themeToggle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>
</html> 