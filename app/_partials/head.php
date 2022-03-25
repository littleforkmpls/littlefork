        <!-- ZzZzZz  -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />

        <!-- Resource Hints -->
        <link rel="preconnect" href="https://plausible.io" />
        <link rel="preconnect" href="https://kit.fontawesome.com" />

        <!-- Favicons from https://realfavicongenerator.net -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#e01b84">
        <meta name="msapplication-TileColor" content="#edf0f1">
        <meta name="theme-color" content="#edf0f1">

        <!-- CSS -->
        <link rel="stylesheet" media="screen and (min-width: 1em)" href="<?php echo $root_url; ?>_assets/styles/app.css?v=<?php echo $version; ?>" />

        <!-- Third Party -->
        <link rel="stylesheet" media="screen and (min-width: 1em)" href="<?php echo $root_url; ?>_assets/third-party/aos/aos.min.css" />
        <script src="<?php echo $root_url; ?>_assets/third-party/aos/aos.min.js"></script>
        <script defer src="https://kit.fontawesome.com/70d3953f7a.js" crossorigin="anonymous"></script>
        <?php if ($mode !== 'dev') { ?><script defer data-domain="little-fork.com" src="https://plausible.io/js/plausible.js"></script><?php } ?>

        <!-- SEO -->
        <title><?php echo $page_title; ?></title>
        <meta name="description" content="<?php echo $page_description; ?>" />
        <link rel="canonical" href="<?php echo $page_url; ?>" />
        <link rel="shortlink" href="<?php echo $page_url; ?>" />

        <!-- OpenGraph -->
        <meta property="og:url" content="<?php echo $page_url; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $page_title; ?>" />
        <meta property="og:description" content="<?php echo $page_description; ?>" />
        <meta property="og:image" content="https://little-fork.com/assets/media/little-fork-og-share.png" />
        <meta property="og:image:alt" content="" />
        <meta property="og:locale" content="en_US" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo $page_title; ?>">
        <meta name="twitter:description" content="<?php echo $page_description; ?>">
        <meta name="twitter:image" content="https://little-fork.com/assets/media/little-fork-twitter-share.png">
        <meta name="twitter:image:alt" content="">
