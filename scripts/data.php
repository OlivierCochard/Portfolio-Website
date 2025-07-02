<?php

$projectItems = [
    "Game" => [
        0 => new project(array(
            'languages' => "Python",
            'imageFileName' => ["images/projects/game_1_1.png", "images/projects/game_1_2.png", "images/projects/game_1_3.png", "images/projects/game_1_4.png"],
            'gitHubLink' => "https://github.com/OlivierCochard/Switch-Them-All",

            'title' => [
                'en' => "Switch them all",
                'fr' => "Échange-les tous",
            ],
            'period' => [
                'en' => "1st",
                'fr' => "1ère",
            ],
            'type' => [
                'en' => "Python game",
                'fr' => "Jeu python",
            ],
            'group' => [
                'en' => "Group (ft. Quentin Dumont & Alexis Pestel)",
                'fr' => "Groupe (avec. Quentin Dumont & Alexis Pestel)",
            ],
            'description' => [
                'en' => "This was my first project developed in Python using Pygame. We experimented with Pygame and its graphical interfaces. While the game may seem simple at first glance, it actually contains a level of complexity that challenged us quite a bit during our first year of studying computer science. We also put considerable effort into the graphics to make the experience more engaging.",
                'fr' => "C'était mon premier projet développé en Python avec Pygame. Nous avons exploré Pygame et ses interfaces graphiques. Bien que le jeu puisse sembler simple au premier abord, il contient en réalité un niveau de complexité qui nous a beaucoup challengés durant notre première année en informatique. Nous avons également accordé beaucoup d'efforts aux graphismes pour rendre l'expérience plus immersive.",
            ],
            'instructions' => [
                'en' => "$ python3 Src/main.py",
                'fr' => "$ python3 Src/main.py",
            ],
        )),
        1 => new project(array(
            'languages' => "Java",
            'imageFileName' => ["images/projects/game_2_1.png", "images/projects/game_2_2.png", "images/projects/game_2_3.png", "images/projects/game_2_4.png"],
            'gitHubLink' => "https://github.com/OlivierCochard/Naval-Battle",

            'title' => [
                'en' => "Naval battle",
                'fr' => "Bataille navale",
            ],
            'period' => [
                'en' => "2nd",
                'fr' => "2ème",
            ],
            'type' => [
                'en' => "Java game",
                'fr' => "Jeu java",
            ],
            'group' => [
                'en' => "Group (ft. Alexis Pestel)",
                'fr' => "Groupe (avec. Alexis Pestel)",
            ],
            'description' => [
                'en' => "This game was developed in Java, where we experimented with graphical user interfaces using Swing and AWT. The boats are placed randomly, and the opponent's AI chooses its shots randomly as well. Our main focus was to allow the game to be played both in the console and through a graphical interface.",
                'fr' => "Ce jeu a été développé en Java, où nous avons expérimenté les interfaces graphiques avec Swing et AWT. Les bateaux sont placés aléatoirement, et l'IA adverse choisit également ses tirs de façon aléatoire. Notre objectif principal était de permettre de jouer aussi bien en console qu’avec une interface graphique.",
            ],
            'instructions' => [
                'en' => "$ javac -d \"dist\" src/game/*.java\n$ java -cp \"dist\" [game.ExecutableInterface, game.ExecutableConsole]",
                'fr' => "$ javac -d \"dist\" src/game/*.java\n$ java -cp \"dist\" [game.ExecutableInterface, game.ExecutableConsole]",
            ],
        )),
        2 => new project(array(
            'languages' => "C#",
            'imageFileName' => ["images/projects/game_5_1.png", "images/projects/game_5_2.png", "images/projects/game_5_3.png", "images/projects/game_5_4.png"],
            'gitHubLink' => "",
            'itchLink' => "https://holyvier-studio.itch.io/floppybird",
            'play' => ["https://itch.io/embed-upload/12292578", "https://holyvier-studio.itch.io/floppybird"],
            'isAcademic' => false,

            'title' => [
                'en' => "FloppyBird",
                'fr' => "FloppyBird",
            ],
            'period' => [
                'en' => "3rd",
                'fr' => "3ème",
            ],
            'type' => [
                'en' => "Unity game",
                'fr' => "Jeu unity",
            ],
            'description' => [
                'en' => "This is a 2D Unity game coded in C#. The goal is to get as far as possible, the game is heavily inspired by the classic Flappy Bird. Obstacles are generated randomly but intelligently, creating a dynamic challenge each run.\nThe project includes a high score system, menus, animations, shaders and music. I put a lot of effort into the visuals to give the game a polished feel. I only downloaded the music and fonts, everything else was created by me.\nThe main goal behind this project was to fully complete a Unity game from start to finish, so I chose a relatively simple and straightforward concept to begin this journey.\nThe game is playable on Linux, Windows, and in the browser (WebGL).",
                'fr' => "C’est un jeu 2D Unity codé en C#. Le but est d’aller le plus loin possible, le jeu est fortement inspiré du classique Flappy Bird. Les obstacles sont générés de manière aléatoire, mais intelligente, offrant un défi dynamique à chaque partie.\nLe projet inclut un système de score élevé, des menus, des animations, des shaders et de la musique. J’ai mis beaucoup d’efforts dans le visuel pour donner au jeu une finition soignée. Je n’ai téléchargé que la musique et les polices, tout le reste a été créé par moi.\nL’objectif principal de ce projet était de réaliser un jeu Unity complet de A à Z, donc j’ai choisi un concept relativement simple et direct pour commencer cette aventure.\nLe jeu est jouable sous Linux, Windows, et dans le navigateur (WebGL).
",
            ],
            'commands' => [
                'en' => "[space, mouse left] => jump",
                'fr' => "[espace, clic gauche souris] => saut",
            ],
            'instructions' => [
                'en' => "extract .zip\ndouble-click the executable file",
                'fr' => "extraire .zip\ndouble clic sur le fichier executable",
            ],
        )),
        3 => new project(array(
            'languages' => "Java, XML",
            'imageFileName' => ["images/projects/game_3_1.png", "images/projects/game_3_2.png", "images/projects/game_3_3.png", "images/projects/game_3_4.png"],
            'gitHubLink' => "https://github.com/OlivierCochard/Complex-Grid-Battle",

            'title' => [
                'en' => "Complex grid battle",
                'fr' => "Jeu de grille complexe",
            ],
            'period' => [
                'en' => "3rd",
                'fr' => "3ème",
            ],
            'type' => [
                'en' => "Java game",
                'fr' => "Jeu java",
            ],
            'description' => [
                'en' => "This game was developed in Java following the MVC architecture. It includes unit tests and features an aggressive AI using A* pathfinding. A more defensive AI was also created but disabled due to its inefficienc,it often skipped turns, making AI-only games extremely long and uninteresting.\nThe game is highly customizable via the terminal: players can choose the number of participants, map size, player names, controllable entities, and their types, each with different stats. Players can move, set traps (bombs and mine,hidden from enemies), shoot vertically and horizontally, equip a shield for one-turn immunity, or skip their turn. The goal is to be the last player with remaining energy. Some pads on the map restore a bit of energy.\nSeveral game variables can be configured through a .properties file. The game can be played on 4 predefined maps (for 2 to 8 players) or on randomly generated maps using a strategy pattern (chaotic or balanced layouts). It is fully playable both in the terminal and through a graphical interface built with AWT and Swing.\nAlthough the project was intended for teams of about four students, I chose to tackle it solo. I’m very proud of this school project, which took me several months to complete.",
                'fr' => "Ce jeu a été développé en Java en suivant l’architecture MVC. Il inclut des tests unitaires et propose une IA agressive utilisant l’algorithme de pathfinding A*. Une IA plus défensive a également été créée, mais désactivée car peu efficace, elle sautait souvent des tours, rendant les parties uniquement avec l’IA très longues et peu intéressantes.\nLe jeu est très personnalisable via le terminal : les joueurs peuvent choisir le nombre de participants, la taille de la carte, les noms des joueurs, les entités contrôlables et leurs types, chacun avec des caractéristiques différentes. Les joueurs peuvent se déplacer, poser des pièges (bombes et mines, cachés aux ennemis), tirer verticalement et horizontalement, s’équiper d’un bouclier offrant une immunité d’un tour, ou passer leur tour. Le but est d’être le dernier joueur avec de l’énergie restante. Certaines zones sur la carte restaurent un peu d’énergie.\nPlusieurs variables du jeu peuvent être configurées via un fichier .properties. Le jeu peut se jouer sur 4 cartes prédéfinies (pour 2 à 8 joueurs) ou sur des cartes générées aléatoirement grâce à un pattern stratégie (disposition chaotique ou équilibrée). Il est entièrement jouable aussi bien en terminal qu’avec une interface graphique développée avec AWT et Swing.\nBien que le projet ait été conçu pour des équipes d’environ quatre étudiants, j’ai choisi de le réaliser seul. Je suis très fier de ce projet scolaire qui m’a pris plusieurs mois à achever.",
            ],
            'instructions' => [
                'en' => "$ ant [javadoc, runTests, run]",
                'fr' => "$ ant [javadoc, runTests, run]",
            ],
        )),
        4 => new project(array(
            'languages' => "C#",
            'isAcademic' => false,
            'imageFileName' => ["images/projects/game_6_1.jpg", "images/projects/game_6_2.jpg", "images/projects/game_6_3.jpg", "images/projects/game_6_4.jpg"],
            'itchLink' => "https://holyvier-studio.itch.io/switchnest",
            'play' => ["https://itch.io/embed-upload/12807765", "https://holyvier-studio.itch.io/switchnest"],

            'title' => [
                'en' => "SwitchNest",
                'fr' => "SwitchNest",
            ],
            'period' => [
                'en' => "3rd",
                'fr' => "3ème",
            ],
            'type' => [
                'en' => "Unity game",
                'fr' => "Jeu unity",
            ],
            'description' => [
                'en' => "This is a 2D action-platformer where you can swap dimension made with Unity and coded in C#. The objective is to reach the egg at the end of each level. The game features 20 levels, along with an additional game mode where you must complete all 20 levels in a row while trying to beat your best overall time.\nEach map introduces new obstacles and mechanics as the game progresses, keeping the experience fresh and challenging.\nThe project includes a double high score system (one per level and one for the final game mode), as well as menus, level progression, animations, shaders, and music. I put a lot of effort into the visuals to give the game a polished and satisfying look.\nAside from the music and fonts, everything else was made by me.\nThe main goal behind this second Unity project was to build a more complex game, add more gameplay mechanics, and explore different game design styles compared to my previous projects.\nThe game is playable on Linux, Windows, and in the browser (WebGL).",
                'fr' => "Il s'agit d'un jeu d’action-plateforme 2D où l’on peut changer de dimension, développé avec Unity et codé en C#. L’objectif est d’atteindre l’œuf à la fin de chaque niveau. Le jeu comporte 20 niveaux, ainsi qu’un mode supplémentaire où il faut enchaîner les 20 niveaux tout en essayant de battre son meilleur temps global.\nChaque carte introduit de nouveaux obstacles et mécaniques au fur et à mesure, offrant une expérience fraîche et stimulante.\nLe projet inclut un système de double meilleur score (un par niveau et un pour le mode final), ainsi que des menus, une progression des niveaux, des animations, des shaders et de la musique. J’ai mis beaucoup d’efforts dans le visuel pour donner au jeu une apparence soignée et agréable.\nÀ part la musique et les polices, tout a été réalisé par moi.\nLe but principal de ce deuxième projet Unity était de créer un jeu plus complexe, d’ajouter davantage de mécaniques de gameplay et d’explorer différents styles de game design comparé à mes projets précédents.
                    Le jeu est jouable sous Linux, Windows, et dans le navigateur (WebGL).",
            ],
            'commands' => [
                'en' => "[A, left arrow] => left\n[D, right arrow] => right\n[W, top arrow, left mouse, space] => jump\n[E, mouse right, left shift] => swap dimension\n[escape] => pause\n[R] => restart",
                'fr' => "[Q, flèche de gauche] => gauche\n[D, flèche de droite] => droite\n[Z, flèche du haut, clic gauche souris, espace] => saut\n[E, clic droit souris, shift gauche] => changement de dimension\n[echap] => pause\n[R] => recommencer",
            ],
            'instructions' => [
                'en' => "extract .zip\ndouble-click the executable file",
                'fr' => "extraire .zip\ndouble clic sur le fichier executable",
            ],
        )),
        5 => new project(array(
            'languages' => "Java, XML",
            'imageFileName' => ["images/projects/game_4_1.png", "images/projects/game_4_2.png", "images/projects/game_4_3.png", "images/projects/game_4_4.png"],
            'gitHubLink' => "https://github.com/OlivierCochard/Tron-Coalition-Battle",

            'title' => [
                'en' => "Tron coalition battle",
                'fr' => "Bataille de la Coalition Tron",
            ],
            'period' => [
                'en' => "3rd",
                'fr' => "3ème",
            ],
            'type' => [
                'en' => "Java game",
                'fr' => "Jeu java",
            ],
            'description' => [
                'en' => "This game was developed in Java. It follows the MVC architecture, includes unit tests, and features dedicated classes for data analysis and statistics generation. Several AI strategies are available, including MaxN, Paranoid, and their extended versions using SOS (Secure Opponent Strategy).\nThe game is fully customizable via terminal input: players can set the number of participants, team sizes, map dimensions, and the type of AI. Players move across the map and automatically place a wall on their previous tile after each move.\nMaps are generated procedurally based on a strategy pattern, with three modes (Chaos, Balanced and Optimal: strategic spawn points based on the number of players and map size).\nThe game can be played in the terminal and also features a graphical interface made with AWT and Swing in Java.\nThis project was originally intended for teams of around four students, but I chose to work on it solo. I faced significant challenges, especially in the AI implementation, but I’m proud of the progress I made on my own.",
                'fr' => "Ce jeu a été développé en Java. Il suit l’architecture MVC, inclut des tests unitaires et propose des classes dédiées à l’analyse de données et à la génération de statistiques. Plusieurs stratégies d’IA sont disponibles, notamment MaxN, Paranoid et leurs versions étendues utilisant SOS (Secure Opponent Strategy).\nLe jeu est entièrement personnalisable via les entrées du terminal : les joueurs peuvent définir le nombre de participants, la taille des équipes, les dimensions de la carte et le type d’IA. Les joueurs se déplacent sur la carte et placent automatiquement un mur sur leur case précédente après chaque déplacement.\nLes cartes sont générées de manière procédurale selon un strategy pattern, avec trois modes : Chaos, Équilibré et Optimal (points d’apparition stratégiques basés sur le nombre de joueurs et la taille de la carte).\nLe jeu peut être joué dans le terminal, et dispose également d’une interface graphique réalisée avec AWT et Swing en Java.\nCe projet était initialement prévu pour des équipes d’environ quatre étudiants, mais j’ai choisi de le réaliser en solo. J’ai rencontré de nombreuses difficultés, notamment dans l’implémentation de l’IA, mais je suis fier des progrès accomplis par moi-même.",
            ],
            'instructions' => [
                'en' => "$ ant [javadoc, runWinrate, runTemps, runSurvie, run]",
                'fr' => "$ ant [javadoc, runWinrate, runTemps, runSurvie, run]",
            ],
        )),
    ],
    "Software" => [
        0 => new project(array(
            'languages' => "Java",
            'imageFileName' => ["images/projects/software_1_1.png"],
            'gitHubLink' => "https://github.com/OlivierCochard/Interactive-Book-Analyser",

            'title' => [
                'en' => "Interactive book analyser",
                'fr' => "Livre d'analyse interactif",
            ],
            'period' => [
                'en' => "2nd",
                'fr' => "2ème",
            ],
            'type' => [
                'en' => "Java software",
                'fr' => "Logiciel java",
            ],
            'group' => [
                'en' => "Group (ft. Quentin Dumont & Alexis Pestel)",
                'fr' => "Groupe (avec. Quentin Dumont & Alexis Pestel)",
            ],
            'description' => [
                'en' => "It's a software build using java. This project visualizes \"choose your own adventure\" books as graphs, where each paragraph is a node and each choice is a connection between nodes. We explored different graph algorithms like Dijkstra, Floyd-Warshall, and Kamada-Kawai. We ended up using the JUNG library to display the graph, since implementing Kamada-Kawai ourselves was too complex.\nThe program can read .json and .txt files and create color-coded graphs based on the type of events. It gives a clear view of the different possible paths in the story.",
                'fr' => "Il s’agit d’un logiciel développé en Java. Ce projet permet de visualiser des livres «dont vous êtes le héros» sous forme de graphes, où chaque paragraphe est représenté par un nœud, et chaque choix par une connexion entre deux nœuds. Nous avons exploré différents algorithmes de graphes comme Dijkstra, Floyd-Warshall et Kamada-Kawai. Finalement, nous avons utilisé la bibliothèque JUNG pour afficher le graphe, car implémenter Kamada-Kawai nous-mêmes s’est révélé trop complexe.Le programme peut lire des fichiers .json et .txt et générer des graphes codés par couleur en fonction du type d’événement. Il offre une vue claire des différents chemins possibles dans l’histoire.",
            ],
            'instructions' => [
                'en' => "$ javac -d \"build\" -cp \".:lib/jung/algos.jar:lib/jung/api.jar:lib/jung/collections.jar:lib/jung/graph_api.jar:lib/jung/vizualization.jar\" src/vue/*.java\n$ java -cp \"build:lib/jung/algos.jar:lib/jung/api.jar:lib/jung/collections.jar:lib/jung/graph_api.jar:lib/jung/vizualization.jar\" vue.Demo",
                'fr' => "$ javac -d \"build\" -cp \".:lib/jung/algos.jar:lib/jung/api.jar:lib/jung/collections.jar:lib/jung/graph_api.jar:lib/jung/vizualization.jar\" src/vue/*.java\n$ java -cp \"build:lib/jung/algos.jar:lib/jung/api.jar:lib/jung/collections.jar:lib/jung/graph_api.jar:lib/jung/vizualization.jar\" vue.Demo",
            ],
        )),
    ],
    "Web" => [
        0 => new project(array(
            'languages' => "HTML, CSS",
            'imageFileName' => ["images/projects/website_1_1.jpg", "images/projects/website_1_2.jpg", "images/projects/website_1_3.jpg", "images/projects/website_1_4.jpg"],
            'gitHubLink' => "https://github.com/OlivierCochard/First-Website",

            'title' => [
                'en' => "First website",
                'fr' => "Premier site web",
            ],
            'period' => [
                'en' => "1st",
                'fr' => "1ère",
            ],
            'type' => [
                'en' => "Website",
                'fr' => "Site web",
            ],
            'description' => [
                'en' => "It's a website built using HTML and CSS. I experimented with the basics by implementing features such as an embedded trailer, playable music, styled first letters, hover effects, and use of various HTML tags. The site consists of multiple pages, each with its own specific CSS file in addition to a shared global stylesheet. My focus was not on the content or visual design, but rather on exploring and applying core web development functionalities.",
                'fr' => "Il s’agit d’un site web développé en HTML et CSS. J’y ai expérimenté les bases en implémentant des fonctionnalités comme une bande-annonce intégrée, de la musique jouable, des lettrines stylisées, des effets au survol, et l’utilisation de diverses balises HTML. Le site est composé de plusieurs pages, chacune ayant sa propre feuille de style CSS en plus d’une feuille de style globale partagée. Mon objectif n’était pas le contenu ou le design visuel, mais plutôt l’exploration et l’application des fonctionnalités fondamentales du développement web.",
            ],
        )),
        1 => new project(array(
            'languages' => "HTML, CSS, PHP, MySql",
            'imageFileName' => ["images/projects/website_2_1.png", "images/projects/website_2_2.png", "images/projects/website_2_3.png", "images/projects/website_2_4.png"],
            'gitHubLink' => "https://github.com/OlivierCochard/Festival-Website",

            'title' => [
                'en' => "Festivals website",
                'fr' => "Annuaire de festivals",
            ],
            'period' => [
                'en' => "2nd",
                'fr' => "2ème",
            ],
            'type' => [
                'en' => "Database website",
                'fr' => "Site web avec bdd",
            ],
            'description' => [
                'en' => "A website that catalogs music festivals, developed using HTML, CSS, PHP, and MySQL. I implemented a MySQL database that can be populated through a user-submitted form. The list of festivals can be sorted by name, genre, or maximum capacity. Each festival entry can be viewed, edited, or deleted directly from the website by users. As with my website previous project, I focused on implementing the database functionalities rather than the visual design.",
                'fr' => "Un site web répertoriant des festivals de musique, développé en HTML, CSS, PHP et MySQL.\nJ’ai mis en place une base de données MySQL pouvant être alimentée via un formulaire soumis par les utilisateurs.\nLa liste des festivals peut être triée par nom, genre musical ou capacité maximale.\nChaque fiche de festival peut être consultée, modifiée ou supprimée directement depuis le site par les utilisateurs.\nComme pour mon précédent projet web, je me suis davantage concentré sur la mise en œuvre des fonctionnalités liées à la base de données que sur le design visuel.",
            ],
        )),
        2 => new project(array(
            'languages' => "JavaScript, CSS, MySql, GraphQL",
            'imageFileName' => ["images/projects/website_3_1.png", "images/projects/website_3_2.png", "images/projects/website_3_3.png", "images/projects/website_3_4.png"],
            'gitHubLink' => "https://github.com/OlivierCochard/Todolist-React",

            'title' => [
                'en' => "Todolist react",
                'fr' => "Gestionnaire de todolist",
            ],
            'period' => [
                'en' => "3rd",
                'fr' => "3ème",
            ],
            'type' => [
                'en' => "React.js web app",
                'fr' => "Web-app en react.js",
            ],
            'description' => [
                'en' => "A web application built with React.js for managing to-do lists, using JavaScript, CSS, MySQL, and GraphQL. Users can interact with a database to create, edit, or delete entire to-do lists. Within each list, they can check or uncheck tasks, sort them, add new ones, or remove existing ones. I also implemented a progress bar that visually indicates how many tasks have been completed in each to-do list. I focused on both front-end development with React and back-end integration using MySQL and GraphQL.",
                'fr' => "Une application web développée avec React.js pour gérer des listes de tâches, utilisant JavaScript, CSS, MySQL et GraphQL.\nLes utilisateurs peuvent interagir avec une base de données pour créer, modifier ou supprimer des listes complètes de tâches.\nÀ l’intérieur de chaque liste, ils peuvent cocher ou décocher des tâches, les trier, en ajouter de nouvelles ou en supprimer.\nJ’ai également implémenté une barre de progression indiquant visuellement le nombre de tâches accomplies dans chaque liste.\nJe me suis concentré à la fois sur le développement front-end avec React et sur l’intégration back-end via MySQL et GraphQL.",
            ],
            'instructions' => [
                'en' => "$ npm run start\n$ node mon-serveur-graphql/index.js",
                'fr' => "$ npm run start\n$ node mon-serveur-graphql/index.js",
            ],
        )),
        3 => new project(array(
            'languages' => "HTML, CSS, JavaScript, PHP",
            'imageFileName' => ["images/projects/website_4_1.png", "images/projects/website_4_2.png", "images/projects/website_4_3.png", "images/projects/website_4_4.png"],
            'gitHubLink' => "https://github.com/OlivierCochard/Portfolio-Website",

            'title' => [
                'en' => "Portolio website",
                'fr' => "Portfolio site web",
            ],
            'period' => [
                'en' => "3rd",
                'fr' => "3ème",
            ],
            'type' => [
                'en' => "Website",
                'fr' => "Site web",
            ],
            'description' => [
                'en' => "This is a showcase website that serves as a personal developer portfolio, built using HTML, CSS, JavaScript, and PHP.\nIt includes a homepage, a page presenting my skills, an « About » page featuring my resume, a contact page with a form, a project listing page with a filter allowing sorting by different categories (none, academic, or personal), a page with detailed information about each project, and a page that lets users play a game directly via a WebGL link when available.\nThe design is based on a general stylesheet, complemented by specific CSS files for each page. The website is bilingual, with the ability to switch between French and English, and includes a button to toggle between light and dark themes, which also affects the resume display. Two dedicated JavaScript files manage the language and theme features.\nThe site is designed to be easily maintainable: adding new content simply requires inserting a new entry into an array within the scripts/data.php script. I paid close attention to both functionality and visual presentation to achieve a professional and user-friendly result.",
                'fr' => "Il s’agit d’un site web vitrine qui fait office de portfolio personnel de développeur, développé en HTML, CSS, JavaScript et PHP.\nJ’y ai intégré une page d’accueil, une page présentant mes compétences, une page « À propos » contenant mon CV, une page de contact avec un formulaire, une page listant mes projets avec un filtre permettant de trier selon différentes catégories (aucun filtre, académique ou personnel), une page dédiée aux détails de chaque projet, ainsi qu’une page permettant de jouer directement à un jeu via un lien WebGL lorsque celui-ci est disponible.\nLe design repose sur une feuille de style générale complétée par des CSS spécifiques à chaque page. Le site est bilingue, avec la possibilité de basculer entre le français et l’anglais, et inclut un bouton pour changer le thème entre clair et sombre, ce qui affecte également l’affichage du CV. Deux fichiers JavaScript sont dédiés à la gestion de la langue et du thème.\nCe site est conçu pour être assez autonome : il suffit d’ajouter une nouvelle entrée dans un tableau du script 'scripts/data.php' pour enrichir le contenu. J’ai porté une attention particulière aux fonctionnalités ainsi qu’à l’aspect graphique final afin d’obtenir un rendu professionnel et ergonomique.",
            ],
            'instructions' => [
                'en' => "Link : http://oliviercochard.myartsonline.com",
                'fr' => "Lien: http://oliviercochard.myartsonline.com",
            ],
        )),
    ],
];

?>