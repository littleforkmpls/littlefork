<?php require(realpath(dirname(__FILE__)) . '/../_partials/_config.php'); ?>
<?php
    // set page constants
    $page_title = 'Request a Quote | Little Fork';
    $page_description = 'Little Fork is a tiny web design & development company that brings big ideas to life.';
    $page_url ='https://little-fork.com/quote/';
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

                <!-- HERO -->
                <div class="tier tier--media tier--media--hero">
                    <div class="wrapper">

                        <div class="main" role="main">
                            <div class="main__section">
                                <div class="hero">
                                    <div class="hero__title">
                                        <div data-aos="fade-left" data-aos-delay="300">
                                            <h1 class="txt txt--title" data-title="Services">
                                                Get a Quote
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="hero__lede">
                                        <div data-aos="fade-right" data-aos-delay="300">
                                            <p class="txt txt--flex-md2lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main__section">
                                <div class="poster">
                                    <div class="form form--quote">
                                        <div class="form__bd">
                                            <script charset="utf-8" type="text/javascript" src="https://js.hsforms.net/forms/shell.js"></script>
                                            <script>
                                                hbspt.forms.create({
                                                    region: "na1",
                                                    portalId: "21213195",
                                                    formId: "1ecc10a5-726e-42be-adc2-acf557035d16"
                                                });
                                            </script>
                                        </div>
                                    </div>
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
