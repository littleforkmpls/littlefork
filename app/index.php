<?php require(realpath(dirname(__FILE__)) . '/_partials/_config.php'); ?>
<!doctype html>
<html lang="en-us">
    <head>
        <?php require($abs_path . '_partials/head.php'); ?>

        <!-- SEO -->
        <title>Little Fork</title>
        <meta name="description" content="Little Fork is a tiny web design & development company that brings big ideas to life." />
        <link rel="canonical" href="https://little-fork.com/" />
        <link rel="shortlink" href="https://little-fork.com/" />

        <!-- OpenGraph -->
        <meta property="og:url" content="https://little-fork.com/" />
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
                <div class="tier tier--media tier--media--hero">
                    <div class="wrapper">
                        <div class="hero">
                            <div class="hero__brand">
                                <h1 class="isVisuallyHidden">Little Fork</h1>
                                <div data-aos="fade-left" data-aos-delay="300">
                                    <picture class="d-block">
                                        <source srcset="<?php echo $root_url; ?>assets/brand/logo-horizontal.svg" type="image/svg+xml" media="(min-width: 520px)" />
                                        <img class="logo" src="<?php echo $root_url; ?>assets/brand/logo-vertical.svg" alt="Little Fork" />
                                    </picture>
                                </div>
                            </div>
                            <div class="hero__lede">
                                <div data-aos="fade-right" data-aos-delay="300">
                                    <h2 class="txt txt--flex-lg2xl">A tiny web design &amp; development company that brings big ideas to life.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site__footer">
                <?php require($abs_path . '_partials/footer.php'); ?>
            </div>
        </div>
        <?php require($abs_path . '_partials/outro.php'); ?>
    </body>
</html>
