<?php
require_once 'project.php';
require_once 'data.php';

function generateProject(String $category = '', int $numero = -1) {
    global $projectItems;

    if ($category === '' || $numero < 0){
        return null;
    }

    if (!isset($projectItems[$category][$numero])){
        return null;
    }

    return $projectItems[$category][$numero];
}
function generateSectionById(String $category = '', int $numero = -1, string $contextFilter, string $categoryFilter){
    $project = generateProject($category, $numero);
    if ($project === null) return false;

    $url = "projectDetails.php?category=" . urlencode($category) . "&numero=" . $numero . "&contextFilter=" . $contextFilter . "&categoryFilter=" . $categoryFilter;
    echo "<a href='$url' style='text-decoration: none; color: inherit;'>";
    echo "<div class='projectArea'>";
    echo "<h3 data-en=\"" . htmlspecialchars($project->getTitle('en'), ENT_QUOTES) . "\" data-fr=\"" . htmlspecialchars($project->getTitle('fr'), ENT_QUOTES) . "\"></h3>";


    $imageFileName = '';
    if (count($project->getImageFileName()) > 0){
        $imageFileName = $project->getImageFileName()[0];
    }
    echo "<img src='$imageFileName'>";

    echo "<p class='bg' data-en=\"" . htmlspecialchars($project->getType('en'), ENT_QUOTES) . "\" data-fr=\"" . htmlspecialchars($project->getType('fr'), ENT_QUOTES) . "\"></p>";

    echo "</div>";
    echo "</a>";
    return true;
}
function generateSection(string $category = '', string $contextFilter = '', string $categoryFilter = '') {
    global $projectItems;

    if (!isset($projectItems[$category])) return;

    $projects = array_reverse($projectItems[$category], true);
    $counter = 0;
    foreach ($projects as $numero => $project) {
        if ($contextFilter === "academic" && !$project->getIsAcademic()) continue;
        if ($contextFilter === "personal" && $project->getIsAcademic()) continue;

        if (generateSectionById($category, $numero, $contextFilter, $categoryFilter) === true)
            $counter++;
    }

    if ($counter == 0)
        echo "<p>...</p>";
}

?>