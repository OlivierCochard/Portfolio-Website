<?php
function generateMenu($activePage = '') {
    $menuItems = [
        'home' => [
            'label_fr' => 'Accueil',
            'label_en' => 'Home',
            'url' => 'index.php'
        ],
        'projects' => [
            'label_fr' => 'Projets',
            'label_en' => 'Projects',
            'url' => 'projects.php'
        ],
        'skills' => [
            'label_fr' => 'Compétences',
            'label_en' => 'Skills',
            'url' => 'skills.php'
        ],
        'about' => [
            'label_fr' => 'À propos',
            'label_en' => 'About',
            'url' => 'about.php'
        ],
        'contact' => [
            'label_fr' => 'Contact',
            'label_en' => 'Contact',
            'url' => 'contact.php'
        ],
    ];

    echo '<header>';
    echo '<nav>';
    echo '<ul>';

    foreach ($menuItems as $key => $item) {
        $class = ($key === $activePage) ? ' class="active"' : '';
        echo "<li{$class}><a href=\"{$item['url']}\" data-fr=\"{$item['label_fr']}\" data-en=\"{$item['label_en']}\">{$item['label_en']}</a></li>";
    }

    echo '</ul>';
    echo '</nav>';
    echo '</header>';
}
?>
