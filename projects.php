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
		    $contextFilter = '';
		    if (isset($_GET['contextFilter']) && !empty($_GET['contextFilter']))
		        $contextFilter = $_GET['contextFilter'];
		    $contextFilter_en = "";
		    $contextFilter_fr = "";
		    if ($contextFilter === 'academic'){
		        $contextFilter_en = "Academic ";
		        $contextFilter_fr = " Académiques";
		    }
		    else if ($contextFilter === 'personal'){
		        $contextFilter_en = "Personal ";
		        $contextFilter_fr = " Personnels";
		    }

		    $categoryFilter = '';
		    if (isset($_GET['categoryFilter']) && !empty($_GET['categoryFilter']))
		        $categoryFilter = $_GET['categoryFilter'];
		    $categoryFilter_en = "";
		    $categoryFilter_fr = "";
		    if ($categoryFilter === 'game'){
		        $categoryFilter_en = "Game ";
		        $categoryFilter_fr = " De Jeux";
		    }
		    else if ($categoryFilter === 'software'){
		        $categoryFilter_en = "Software ";
		        $categoryFilter_fr = " De Logiciels";
		    }
		    else if ($categoryFilter === 'web'){
		        $categoryFilter_en = "Web ";
		        $categoryFilter_fr = " De Web";
		    }

		    echo "<h1 data-en='My {$categoryFilter_en}{$contextFilter_en}Projects.' data-fr='Mes Projets{$contextFilter_fr}{$categoryFilter_fr}.'></h1>";
		?>

		<?php
			$contextFilter = $_GET['contextFilter'] ?? 'all';
			$categoryFilter = $_GET['categoryFilter'] ?? 'all';

			$contextOptions = [
			    'all' => ['en' => 'All', 'fr' => 'Tous'],
			    'academic' => ['en' => 'Academic', 'fr' => 'Académique'],
			    'personal' => ['en' => 'Personal', 'fr' => 'Personnel'],
			];

			$categoryOptions = [
			    'all' => ['en' => 'All', 'fr' => 'Tous'],
			    'web' => ['en' => 'Website', 'fr' => 'Site Web'],
			    'game' => ['en' => 'Game', 'fr' => 'Jeu'],
			    'software' => ['en' => 'Software', 'fr' => 'Logiciel'],
			];
		?>

		<div class="buttons">
			<div class="filters">
			    <form method="get" style="display: inline;">
			        <label for="contextFilter" data-en="Context:" data-fr="Contexte :">Context:</label>
			        <select name="contextFilter" id="contextFilter" onchange="this.form.submit()">
			            <?php foreach ($contextOptions as $key => $label): ?>
			                <option
			                    value="<?= $key ?>"
			                    <?= $contextFilter === $key ? 'selected' : '' ?>
			                    data-en="<?= $label['en'] ?>"
			                    data-fr="<?= $label['fr'] ?>"
			                >
			                    <?= $label['en'] ?>
			                </option>
			            <?php endforeach; ?>
			        </select>
			        <input type="hidden" name="categoryFilter" value="<?= $categoryFilter ?>">
			    </form>

			    <form method="get" style="display: inline;">
			        <label for="categoryFilter" data-en="Category:" data-fr="Catégorie :">Category:</label>
			        <select name="categoryFilter" id="categoryFilter" onchange="this.form.submit()">
			            <?php foreach ($categoryOptions as $key => $label): ?>
			                <option
			                    value="<?= $key ?>"
			                    <?= $categoryFilter === $key ? 'selected' : '' ?>
			                    data-en="<?= $label['en'] ?>"
			                    data-fr="<?= $label['fr'] ?>"
			                >
			                    <?= $label['en'] ?>
			                </option>
			            <?php endforeach; ?>
			        </select>
			        <input type="hidden" name="contextFilter" value="<?= $contextFilter ?>">
			    </form>
			</div>
		</div>

		<?php
			if ($categoryFilter === 'game' || $categoryFilter === '' || $categoryFilter === 'all'){
				echo "<h1 data-en='Games.' data-fr='Jeux.'></h1>";
				echo "<div class='projectTrio'>";
				generateSection("Game", $contextFilter, $categoryFilter);
				echo "</div>";
			}
			if ($categoryFilter === 'software' || $categoryFilter === '' || $categoryFilter === 'all'){
				echo "<h1 data-en='Software.' data-fr='Logiciels.'></h1>";
				echo "<div class='projectTrio'>";
				generateSection("Software", $contextFilter, $categoryFilter);
				echo "</div>";
			}
			if ($categoryFilter === 'web' || $categoryFilter === '' || $categoryFilter === 'all'){
				echo "<h1 data-en='Website.' data-fr='Sites Web.'></h1>";
				echo "<div class='projectTrio'>";
				generateSection("Web", $contextFilter, $categoryFilter);
				echo "</div>";
			}
		?>
	</div>

	<?php generateFooter(); ?>
	<script src="scripts/lang.js"></script>
	<script src="scripts/themeToggle.js"></script>
</body>
</html>
