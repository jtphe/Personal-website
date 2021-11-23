<head>
  <meta charset="utf-8">
  <!-- Primary Meta Tags -->
  <title>Hello, moi c'est Jean Phe !</title>
  <meta name="title" content="Hello, moi c'est Jean Phe !">
  <meta name="description" content="Bonjour je suis Jean-Thavorak Phe & je suis un développeur">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://jtphe.ddns.net/">
  <meta property="og:title" content="Hello, moi c'est Jean Phe !">
  <meta property="og:description" content="Bonjour je suis Jean-Thavorak Phe & je suis un développeur">
  <meta property="og:image" content="https://jtphe.ddns.net/public/images/profilePicture.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://jtphe.ddns.net/">
  <meta property="twitter:title" content="Hello, moi c'est Jean Phe !">
  <meta property="twitter:description" content="Bonjour je suis Jean-Thavorak Phe & je suis un développeur">
  <meta property="twitter:image" content="https://jtphe.ddns.net/public/images/profilePicture.png">

  <link rel="shortcut icon" href="/favicon/favicon.png" type="image/x-icon">
  <link rel="icon" href="/favicon/favicon.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,maximum-scale=1,user-scalable=no">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="msapplication-TileImage" content="../../public/images/favicons/ms-icon-144x144.png">
  <meta name="msapplication-TileColor" content="#3080e8">
  <meta name="msapplication-TileImage" content="../../public/images/favicons/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/921fec88a5.js" crossorigin="anonymous"></script>
  <script src="./public/js/navbar.js"></script>
  <link rel="stylesheet" type="text/css" href="./public/css/style.css">
  <link rel="apple-touch-icon" sizes="152x152" href="../../public/images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../public/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../public/images/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../public/images/favicons/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3080e8">
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

<html>

<body>
  <?php include('./src/html/header.html'); ?>
  <div class="section-banner-welcome">
    <div class='section-banner-welcome-container'>
      <div class='section-banner-welcome-infos'>
        <div class='section-banner-welcome-infos-text'>
          <div>
            <h1 class='section-banner-hello'>Hello, moi c'est Jean Phe !</h1>
          </div>
          <div>
            <h3 class='section-banner-job'>Je suis <mark> développeur full stack </mark> 🧑🏻‍💻</h3>
          </div>
        </div>
        <div class='section-banner-welcome-infos-buttons'>
          <div class='section-banner-welcome-infos-button-whoami'>
            <button type="button" class="btn btn-primary btn--who-am-i"><a class="btn--download-link" href="https://jtphe.ddns.net/src/php/about.php">Qui suis-je ?</a></button>
          </div>
          <div class='section-banner-welcome-infos-button-download'>
            <!-- <button class='btn-download'></button> -->
            <button type="button" class="btn btn-primary btn--download"><a class="btn--download-link" href="public/CV_Jean_Thavorak_Phe.pdf" target="_blank" rel="noopener noreferrer">Télécharger mon CV</a></button>

          </div>
        </div>
      </div>
      <div class='section-banner-welcome-picture'>
        <img class='profile-picture' src='./public/images/profilePicture.png' alt='Profile picture of Jean Phe'>
      </div>
    </div>
  </div>
  <div class="section-presentation">
    <div class="section-presentation-col">
      <div class="section-presentation-col--title main-title" id="who-am-i"> <i class="far fa-question-circle"></i> Qui suis-je</div>
      <div class="section-presentation-col--content">Passionné par l'informatique, les nouvelles technologies et l'électronique j'exerce actuellement le poste de développeur full stack en alternance chez <a href="https://www.atolia.com">Atolia</a> 💻
      </div>
    </div>
    <div class="section-presentation-col">
      <div class="section-presentation-col--title"><i class="fas fa-bullseye"></i> Mes objectifs</div>
      <div class="section-presentation-col--content">
        J'ai différents objectifs dans ma vie tel que: Approfondir mes connaissances dans le domaine de l'informatique ou encore m'améliorer dans la pratique musicale.
        <br>J'aimerai aussi voyager à travers le monde et découvrir différents paysages ! 🌎
      </div>
    </div>
    <div class="section-presentation-col">
      <div class="section-presentation-col--title"><i class="fas fa-hourglass-half"></i> Citation favorite</div>
      <div class="section-presentation-col--content">
        "L'échec est le fondement de la réussite" - Patrice Martorano
      </div>
    </div>
  </div>
     <div class="special-footer"><?php include('./src/html/footer.html'); ?></div>
</body>
<html>