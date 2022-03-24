<?php require(realpath(dirname(__FILE__)) . '/../_partials/_config.php'); ?>
<!doctype html>
<html lang="en-us">
    <head>
        <?php require($abs_path . '_partials/head.php'); ?>

        <!-- SEO -->
        <title>About | Little Fork</title>
        <meta name="description" content="Little Fork is a tiny web design & development company that brings big ideas to life." />
        <link rel="canonical" href="https://little-fork.com/about/" />
        <link rel="shortlink" href="https://little-fork.com/about/" />

        <!-- OpenGraph -->
        <meta property="og:url" content="https://little-fork.com/about/" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Little Fork" />
        <meta property="og:description" content="Little Fork is a tiny web design & development company that brings big ideas to life." />
        <meta property="og:image" content="https://little-fork.com/assets/media/little-fork-og-share.png" />
        <meta property="og:image:alt" content="Little Fork" />
        <meta property="og:locale" content="en_US" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Little Fork">
        <meta name="twitter:description" content="Little Fork is a tiny web design & development company that brings big ideas to life.">
        <meta name="twitter:image" content="https://little-fork.com/assets/media/little-fork-twitter-share.png">
        <meta name="twitter:image:alt" content="Little Fork">
    </head>
    <body>
        <div class="site">
            <div class="site__masthead">
                <?php require($abs_path . '_partials/masthead.php'); ?>
            </div>
            <div class="site__main">

            </div>
            <div class="site__footer">
                <?php require($abs_path . '_partials/footer.php'); ?>
            </div>
        </div>
        <?php require($abs_path . '_partials/outro.php'); ?>
    </body>
</html>
