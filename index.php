<?php
    include_once __DIR__ .'/controller/baseController.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>title
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="En 1981, à Gotham City, Arthur Fleck, un comédien raté, sombre dans la folie
    après une série de tragédies et d'humiliations...">
    <title><?= title ?> - Film</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="apple-touch-icon" sizes="180x180" href="public/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon/favicon-16x16.png">
    <link rel="manifest" href="public/favicon/site.webmanifest">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <!-- En-tête de la page -->
    <header>
        <h1>
            <span aria-hidden="true">🤡</span><?= title ?>
        </h1>
    </header>

    <!-- Contenu principal -->
    <main>
        <!-- Section Affiche du film -->
        <section class="movie-poster">
            <img src="https://wave.fr/images/1916/07/joker-3-bonnes-raisons-aller-voir-film-cinema-aujourdhui.jpg" alt="Affiche du film Le Joker">
        </section>

        <!-- Section Storyline -->
        <section class="storyline">
            <h2>Histoire</h2>
            <p>
                En 1981, à Gotham City, Arthur Fleck, un comédien raté, sombre dans la folie
                après une série de tragédies et d'humiliations. Incapable de se connecter aux
                autres et désespéré par l'absence de sens dans sa vie, Arthur se transforme
                progressivement en Joker, une figure de chaos et de violence, qui devient 
                une icône pour les citoyens les plus marginalisés.
            </p>
        </section>

        <!-- Section Cast -->
        <section class="cast">
            <h2>Cast Principal : <?php $navigator ?></h2>
            <ul>
                <li><strong>Joaquin Phoenix </strong>dans le rôle d'Arthur Fleck (Joker)</li>
                <li><strong>Robert De Niro</strong> dans le rôle de Murray Franklin</li>
                <li><strong>Zazie Beetz</strong> dans le rôle de Sophie Dumond</li>
                <li><strong>Frances Conroy</strong> dans le rôle de Penny Fleck</li>
            </ul>
        </section>

        <!-- Section Date de Sortie -->
        <section class="release-date">
            <h2>Date de Sortie</h2>
            <p>9 octobre 2019</p>
        </section>

        <!-- Bouton vers AlloCiné -->
        <section class="trailer-button">
            <a href="https://www.allocine.fr/video/player_gen_cmedia=19582354&cfilm=255710.html" target="blank">
                <span class="material-symbols-outlined" aria-hidden="true">
                    video_file
                </span>Voir la bande-annonce
            </a>
        </section>
    </main>

    <!-- Pied de page -->
    <footer>
        <p>© 2024 - Informations sur le film Le Joker</p>
    </footer>

    <pre>
        <?php
            print_r($_SERVER)
        ?>
    </pre>
</body>
</html>
