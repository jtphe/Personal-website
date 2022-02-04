<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
    <title>Me contacter</title>
    <meta name="title" content="Me contacter">
    <meta name="description" content="Vous pouvez me contacter sur cette page">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jtphe.ddns.net/src/php/contact.php">
    <meta property="og:title" content="Me contacter">
    <meta property="og:description" content="Vous pouvez me contacter sur cette page">
    <meta property="og:image" content="https://jtphe.ddns.net/public/images/profilePicture.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://jtphe.ddns.net/src/php/contact.php">
    <meta property="twitter:title" content="Me contacter">
    <meta property="twitter:description" content="Vous pouvez me contacter sur cette page">
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
    <div class="container-contact">
        <div class="contact-text">
            <div class="contact-title">
            <h1 class='section-banner-about--title'>Une question, une demande, n'hésitez pas à me contacter ! 😎</h1>
            </div>
            <div class="contact-typeform">
                <a class="typeform-share button" href="https://form.typeform.com/c/LaNZQi" data-mode="popup" style="display:inline-block;text-decoration:none;background-color:#457B9D;color:white;cursor:pointer;font-family: Futura Now Headline Regular, Helvetica,Arial,sans-serif;font-size:18px;line-height:45px;text-align:center;margin:0;height:45px;padding:0px 30px;border-radius:22px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">Contactez moi ! </a>
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