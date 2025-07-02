<?php
	include 'scripts/menu.php';
	include 'scripts/footer.php';
	include 'scripts/projectPageBuilder.php';
?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<title data-en="Projects" data-fr="Projets"></title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<head>
	<link rel="stylesheet" href="styles/genericStyle.css">
	<link rel="stylesheet" href="styles/projectsStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php generateMenu('projects'); ?>
	<div class="content">
		<?php
		    $filter = '';
		    if (isset($_GET['filter']) && !empty($_GET['filter']))
		        $filter = $_GET['filter'];

		    $word_en = "";
		    $word_fr = "";

		    if ($filter === 'academic'){
		        $word_en = "Academic ";
		        $word_fr = " Académiques";
		    }
		    else if ($filter === 'personal'){
		        $word_en = "Personal ";
		        $word_fr = " Personnels";
		    }

		    echo "<h1 data-en='My {$word_en}Projects.' data-fr='Mes Projets{$word_fr}.'></h1>";
		?>


		<p data-en="If you want, you can filter my projects" data-fr="Si vous voulez, vous pouvez filtrer mes projets"></p>
		<div class="buttons">
			<?php
				if ($filter !== 'academic')
					echo "<a href='?filter=academic' class='btn' data-en='Academic' data-fr='Académiques'></a>";
				if ($filter === 'academic' || $filter  === 'personal')
					echo "<a href='?filter=none' class='btn' data-en='None' data-fr='Rien'></a>";
				if ($filter !== 'personal')
					echo "<a href='?filter=personal' class='btn' data-en='Personal' data-fr='Personnels'></a>";
			?>
		</div>

		<h1 data-en="Games." data-fr="Jeux."></h1>
		<?php
			echo "<div class=projectTrio>";
			generateSection("Game", $filter);
			echo "</div>";
		?>

		<h1 data-en="Software." data-fr="Logiciels.">.</h1>
		<?php
			echo "<div class=projectTrio>";
			generateSection("Software", $filter);
			echo "</div>";
		?>

		<h1>Web.</h1>
		<?php
			echo "<div class=projectTrio>";
			generateSection("Web", $filter);
			echo "</div>";
		?>
	</div>
	<?php generateFooter(); ?>
	<script src="scripts/lang.js"></script>
	<script src="scripts/themeToggle.js"></script>
</body>
</html> 