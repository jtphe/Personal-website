<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
    <title>Mes réalisations</title>
    <meta name="title" content="Mes réalisations">
    <meta name="description" content="Quelques-un de mes projets">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jtphe.ddns.net/src/php/projects.php">
    <meta property="og:title" content="Mes réalisations">
    <meta property="og:description" content="Quelques-un de mes projets">
    <meta property="og:image" content="https://jtphe.ddns.net/public/images/profilePicture.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://jtphe.ddns.net/src/php/projects.php">
    <meta property="twitter:title" content="Mes réalisations">
    <meta property="twitter:description" content="Quelques-un de mes projets">
    <meta property="twitter:image" content="https://jtphe.ddns.net/public/images/profilePicture.png">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="../../public/images/favicons/ms-icon-144x144.png">
    <meta name="msapplication-TileColor" content="#3080e8">
    <meta name="msapplication-TileImage" content="../../public/images/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <link rel="apple-touch-icon" sizes="152x152" href="../../public/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../public/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../public/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../../public/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3080e8">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var _paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//jtphe.ddns.net/analytics/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
</head>
<body>
    <?php include('../html/header.html'); ?>
    <div class="section-banner-welcome">
        <div class='section-banner-welcome-container'>
            <div class='section-banner-about-container'>
                <h1 class='section-banner-about--title'>Mes projets et réalisations</h1>
                <h3 class='section-banner-about--subtitle'>Différents projets et réalisations fait tout au long de mes études et en dehors !</h3>
            </div>
        </div>
    </div>
    <div class="projects-global-container">
        <div class="projects-item-container">
            <div class="project-thumb">
                <img class="project-thumb-image" src="../../public/images/mellitus_screen.png" alt="Projet OwnSpace - React Native">
            </div>
            <div class="projects-item-content">
                <h3 class="project-title">
                    Mellitus
                </h3>
                <div class="project-description">
                    <p>Projet tuteuré réalisé durant ma formation de DUT à l'IUT Robert Schuman.
                        Jouant la consience du personnage choisi ou créé, Mellitus a pour but d'apporter une aide aux personne atteinte de diabète (de type 2 principalement), afin d'apprendre de manière assez ludique comment gérer le taux d’insuline, tout en gardant le côté serious game.
                        Le projet a été codée en JavaScript principalement.</p>
                </div>
                <a href="https://github.com/jtphe/Mellitus" target="blank">Voir le projet</a>
            </div>
        </div>
        <div class="projects-item-container">
            <div class="project-thumb">
                <img class="project-thumb-image" src="../../public/images/ownspace_screen.png" alt="Projet Mellitus">
            </div>
            <div class="projects-item-content">
                <h3 class="project-title">
                    OwnSpace - React Native
                </h3>
                <div class="project-description">
                    <p>Application cloud développé dans le cadre ma licence DSMC à la CCI Campus de Colmar.
                        Version développée sous React Native (JavaScript)</p>
                </div>
                <a href="https://github.com/jtphe/ownspace-react" target="blank">Voir le projet</a>
            </div>
        </div>
        <div class="projects-item-container">
            <div class="project-thumb">
                <img class="project-thumb-image" src="../../public/images/ownspace_screen.png" alt="Projet OwnSpace - Kotlin">
            </div>
            <div class="projects-item-content">
                <h3 class="project-title">
                    OwnSpace - Kotlin
                </h3>
                <div class="project-description">
                    <p>Application cloud développé dans le cadre ma licence DSMC à la CCI Campus de Colmar.
                        Version développée sous Kotlin</p>
                </div>
                <a href="https://github.com/jtphe/ownspace-android" target="blank">Voir le projet</a>
            </div>
        </div>
        <div class="projects-item-container">
            <div class="project-thumb">
                <img class="project-thumb-image" src="../../public/images/eliseretouches_screen.png" alt="Elise retouches">
            </div>
            <div class="projects-item-content">
                <h3 class="project-title">
                    Elise retouches
                </h3>
                <div class="project-description">
                    <p>Pour aider ma mère à avoir de la visibilité dans Strasbourg et ses alentours, je l'ai aidé à développer son site vitrine.
                        Réalisé en HTML, CSS et PHP</p>
                </div>
                <a href="http://eliseretouches.com/" target="blank">Voir le projet</a>
            </div>
        </div>
        <div class="projects-item-container">
            <div class="project-thumb">
                <img class="project-thumb-image" src="../../public/images/jtphe_screen.png" alt="Site internet personnel">
            </div>
            <div class="projects-item-content">
                <h3 class="project-title">
                    Site internet personnel
                </h3>
                <div class="project-description">
                    <p>Mon site personnel
                        Développé en HTML, CSS et PHP</p>
                </div>
                <a href="https://jtphe.ddns.net/" target="blank">Voir le projet</a>
            </div>
        </div>
    </div>
    <?php include('../html/footer.html'); ?>
</body>
</html>
