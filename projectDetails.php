<?php
	include 'scripts/menu.php';
	include 'scripts/footer.php';
	include 'scripts/projectPageBuilder.php';
?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<title data-en='ProjectDetail' data-fr='DetailProjet'></title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<head>
	<link rel="stylesheet" href="styles/genericStyle.css">
	<link rel="stylesheet" href="styles/projectDetailsStyle.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php generateMenu(''); ?>
	<div class="content">
		<?php
			$contextFilter = '';
			if (isset($_GET['contextFilter']) && !empty($_GET['contextFilter']))
		    	$contextFilter = $_GET['contextFilter'];
		    $categoryFilter = '';
			if (isset($_GET['categoryFilter']) && !empty($_GET['categoryFilter']))
		    	$categoryFilter = $_GET['categoryFilter'];
			$category = '';
			if (isset($_GET['category']) && !empty($_GET['category']))
		    	$category = $_GET['category'];
		    $numero = -1;
		    if (isset($_GET['numero']) && is_numeric($_GET['numero']))
		    	$numero = (int) $_GET['numero'];

			$project = generateProject($category, $numero);
			if ($project === null){
				echo "<h1 data-en='Error Unknown Project.' data-fr='Erreur Project Inconnu'></h1>";
			}
			else {
				echo "<h1 data-en=\"" . htmlspecialchars($project->getTitle('en'), ENT_QUOTES) . "\" data-fr=\"" . htmlspecialchars($project->getTitle('fr'), ENT_QUOTES) . "\"></h1>";
				echo "<div class='projectArea'>";
				echo "<div class='duoArea'>";

				echo "<div class='infoArea'>";
				echo "<div class='left'>";
				echo "<h3 data-en='Informations' data-fr='Informations'></h3>";
				echo "<div class='logo-text'>";
				echo "<img id='info-img' class='logo' src='images/infoLogo.png'alt='info logo'>";

				$word_en = "";
			    $word_fr = "";
				if ($project->getIsAcademic()){
					$word_en = "Academic ";
			        $word_fr = " académique";
				}
				else{
					$word_en = "Personal ";
			        $word_fr = " personnel";
				}

				$tmp = htmlspecialchars(strtolower($project->getType('en')), ENT_QUOTES);
				echo "<p data-en=\"{$word_en}{$tmp}\" data-fr=\"{$project->getType('fr')}{$word_fr}\"></p>";

				echo "</div>";
				echo "<div class='logo-text'>";
				echo "<img id='time-img' class='logo' src='images/timeLogo.png'alt='time logo'>";
				echo "<p data-en=\"{$project->getPeriod('en')} year bachelor's degree\" data-fr=\"{$project->getPeriod('fr')} année de licence info\"></p>";
				echo "</div>";
				
				echo "<div class='logo-text'>";
				echo "<img id='code-img' class='logo' src='images/codeLogo.png'alt='code logo'>";
				echo "<p>" . $project->getLanguages() . "</p>";
				echo "</div>";

				echo "<div class='logo-text'>";

				if ($project->getGroup('en') === "" && $project->getGroup('fr') === ""){
					echo "<img id='person-img' class='logo' src='images/personLogo.png'alt='person logo'>";
					echo "<p data-en='Solo' data-fr='Seul'></p>";
				}
				else {
					echo "<img id='group-img' class='logo' src='images/groupLogo.png'alt='group logo'>";
					echo "<p data-en=\"{$project->getGroup('en')}\" data-fr=\"{$project->getGroup('fr')}\"></p>";
				}
				echo "</div>";
				echo "</div>";
				echo "</div>";

				echo "<div class='infoArea'>";
				echo "<div class='right'>";
				echo "<h3 data-en='Links' data-fr='Liens'></h3>";
				if ($project->getPlay() !== []){
					echo "<div class='logo-text'>";
					echo "<a href='projectPlay.php?category=$category&numero=$numero&contextFilter=$contextFilter'><p data-en='Play with WebGL' data-fr='Jouer avec WebGL'></p></a>";
					echo "<img id='unity-img' class='logo' src='images/unityLogo.png'alt='unity logo'>";
					echo "</div>";
				}
				if ($project->getGitHubLink() !== ""){
					echo "<div class='logo-text'>";
					echo "<a href=" . $project->getGitHubLink() . "><p>GitHub</p></a>";
					echo "<img id='github-img' class='logo' src='images/gitHubLogo.png'alt='gitHub logo'>";
					echo "</div>";
				}
				if ($project->getItchLink() !== ""){
					echo "<div class='logo-text'>";
					echo "<a href=" . $project->getItchLink() . "><p>Itch.io</p></a>";
					echo "<img id='itch-img' class='logo' src='images/itchLogo.png'alt='itch logo'>";
					echo "</div>";
				}

				echo "</div>";
				echo "</div>";
				echo "</div>";
				
				if ($project->getImageFileName() !== []){
					echo "<div class='soloArea'>";
					echo "<div class='infoArea'>";
					echo "<h3>Images</h3>";
					echo "</div>";
					echo "</div>";
					if (count($project->getImageFileName()) > 0){
						$fileName = $project->getImageFileName()[0];
						echo "<a href='$fileName' data-lightbox='galerie'>";
						echo "<img src='$fileName' alt='img'>";
						echo "</a>";
					}

					echo "<div class='imageArea'>";
					for ($i = 1; $i < count($project->getImageFileName()); $i++){
						$fileName = $project->getImageFileName()[$i];
						echo "<a href='$fileName' data-lightbox='galerie'>";
						echo "<img src='$fileName' alt='img'>";
						echo "</a>";
					}
					echo "</div>";
				}

				if ($project->getDescription("en") !== "" || $project->getDescription("fr") !== ""){
					echo "<div class='soloArea'>";
					echo "<div class='infoArea'>";
					echo "<h3>Description</h3>";
					$tmp1 = htmlspecialchars($project->getDescription('en'), ENT_QUOTES);
					$tmp2 = htmlspecialchars($project->getDescription('fr'), ENT_QUOTES);
					echo "<p data-en=\"{$tmp1}\" data-fr=\"{$tmp2}\"></p>";
					echo "</div>";
					echo "</div>";
				}

				if ($project->getCommands('en') !== "" || $project->getCommands('fr') !== ""){
					echo "<div class='soloArea'>";
					echo "<div class='infoArea'>";
					echo "<h3 data-en='Commands' data-fr='Commandes'></h3>";
					$tmp1 = htmlspecialchars($project->getCommands('en'), ENT_QUOTES);
					$tmp2 = htmlspecialchars($project->getCommands('fr'), ENT_QUOTES);
					echo "<p data-en=\"{$tmp1}\" data-fr=\"{$tmp2}\"></p>";
					echo "</div>";
					echo "</div>";
				}
				
				if ($project->getInstructions('en') !== "" || $project->getInstructions('fr') !== ""){
					echo "<div class='soloArea'>";
					echo "<div class='infoArea'>";
					echo "<h3>Instructions</h3>";
					$tmp1 = htmlspecialchars($project->getInstructions('en'), ENT_QUOTES);
					$tmp2 = htmlspecialchars($project->getInstructions('fr'), ENT_QUOTES);
					echo "<p data-en=\"{$tmp1}\" data-fr=\"{$tmp2}\"></p>";
					echo "</div>";
					echo "</div>";
				}
			}
			echo "<div class='buttons'>";
			echo "<a href='projects.php?contextFilter=$contextFilter&categoryFilter=$categoryFilter' class='btn' data-en='Back to projects' data-fr='Retour aux projets'></a>";
			echo "</div>";
			echo "</div>";
		?>
	</div>
	<?php generateFooter(); ?>
	<script src="scripts/lang.js"></script>
	<script src="scripts/themeToggle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>
</html> 