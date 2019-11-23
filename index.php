<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="/favicon/favicon.png" type="image/x-icon">
  <link rel="icon" href="/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="/favicon/favicon.ico">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,maximum-scale=1,user-scalable=no">
  <meta http-equiv="content-language" content="en">
  <meta http-equiv="content-language" content="fr">
  <meta name="description" lang="fr" content="Bonjour je suis Jean-Thavorak Phe & je suis un développeur d'applications mobiles">
  <meta name="description" lang="en" content="Hello I'm Jean-Thavorak Phe & I'm a mobile developer">
  <meta name="theme-color" content="#000000">
  <link rel="apple-touch-icon" sizes="57x57" href="/images/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/images/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/images/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/images/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/images/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/images/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/images/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/images/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/images/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
  <script src="https://kit.fontawesome.com/921fec88a5.js" crossorigin="anonymous"></script>
  <script src="/public/js/navbar.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./public/css/style.css">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="msapplication-TileImage" content="/images/favicons/ms-icon-144x144.png">
  <title>Jean-Thavorak Phe</title>
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
  <div class='section-banner-welcome'>
    <div class='section-banner-welcome-container'>
      <div class='section-banner-welcome-infos'>
        <div class='section-banner-welcome-infos-text'>
          <div class='section-banner-welcome-infos-text-first'>
            <h1 class='section-banner-hello'>Hello, moi c'est Jean Phe !</h1>
          </div>
          <div class='section-banner-welcome-infos-text-second'>
            <h3 class='section-banner-job'>Je suis développeur d'applications mobiles</h3>
          </div>
        </div>
        <div class='section-banner-welcome-infos-buttons'>
          <div class='section-banner-welcome-infos-button-whoami'>
            <button class='btn--who-am-i'>Qui suis-je ?</button>
          </div>
          <div class='section-banner-welcome-infos-button-download'>
            <button class='btn--download'>Télécharger mon CV</button>
          </div>
        </div>
      </div>
      <div class='section-banner-welcome-picture'>
        <img class='profile-picture' src='./public/images/profilePicture.png' alt='Profile picture of Jean Phe'>
      </div>
    </div>
  </div>
  <?php include('./src/html/footer.html'); ?>
</body>
<html>