<?php require(realpath(dirname(__FILE__)) . '/_partials/_config.php'); ?>
<?php
    // set page constants
    $page_title = 'Little Fork';
    $page_description = 'Little Fork is a tiny web design & development company that brings big ideas to life.';
    $page_url ='https://little-fork.com';
?>
<!doctype html>
<html lang="en-us">
    <head>
        <?php require($abs_path . '_partials/head.php'); ?>
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
                                        <source srcset="<?php echo $root_url; ?>_assets/brand/logo-horizontal.svg" type="image/svg+xml" media="(min-width: 520px)" />
                                        <img src="<?php echo $root_url; ?>_assets/brand/logo-vertical.svg" alt="Little Fork" />
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
