<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/favicon/favicon.png" type="image/x-icon">
    <link rel="icon" href="/favicon/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,maximum-scale=1,user-scalable=no">
    <meta http-equiv="content-language" content="en">
    <meta http-equiv="content-language" content="fr">
    <meta name="description" lang="fr" content="Vous pouvez me contacter sur cette page">
    <meta name="description" lang="en" content="You can contact me on this page">
    <meta property="og:title" content="Contacter Jean-Thavorak Phe">
    <meta property="og:site_name" content="Portefolio de Jean-Thavorak Phe">
    <meta property="og:url" content="https://jtphe.ddns.net/src/php/contact.php">
    <meta property="og:description" content="Une question, une demande, n'hésitez pas à me contacter 😊">
    <meta property="og:type" content="profile">
    <meta name="msapplication-TileColor" content="#3080e8">
    <meta name="msapplication-TileImage" content="../../public/images/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="../../public/images/favicons/ms-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../public/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../public/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../public/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../../public/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3080e8">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <script src="https://kit.fontawesome.com/921fec88a5.js" crossorigin="anonymous"></script>
    <title>Contact</title>
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
    <?php include('../html/header.html'); ?>
    <div class="container-contact">
        <div class="contact-text">
            <div class="contact-title">
                <h2>Une question, une demande, n'hésitez pas à me contacter 😊</h2>
            </div>
            <div class="contact-typeform">
                <a class="typeform-share button" href="https://form.typeform.com/c/LaNZQi" data-mode="popup" style="display:inline-block;text-decoration:none;background-color:#457B9D;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:18px;line-height:45px;text-align:center;margin:0;height:45px;padding:0px 30px;border-radius:22px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">Contactez moi ! </a>
                <script>
                    (function() {
                        var qs, js, q, s, d = document,
                            gi = d.getElementById,
                            ce = d.createElement,
                            gt = d.getElementsByTagName,
                            id = "typef_orm_share",
                            b = "https://embed.typeform.com/";
                        if (!gi.call(d, id)) {
                            js = ce.call(d, "script");
                            js.id = id;
                            js.src = b + "embed.js";
                            q = gt.call(d, "script")[0];
                            q.parentNode.insertBefore(js, q)
                        }
                    })()
                </script>
            </div>

        </div>
    </div>
    <div class="special-footer"><?php include('../html/footer.html'); ?></div>
</body>

</html>