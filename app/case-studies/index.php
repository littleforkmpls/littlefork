<?php require(realpath(dirname(__FILE__)) . '/../_partials/_config.php'); ?>
<?php
    // set page constants
    $page_title = 'Case Studies | Little Fork';
    $page_description = 'Little Fork is a tiny web design & development company that brings big ideas to life.';
    $page_url ='https://little-fork.com/case-studies/';
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
                        <div class="hero">
                            <div class="hero__title">
                                <div data-aos="fade-left" data-aos-delay="300">
                                    <h1 class="txt txt--title" data-title="Services">
                                        Case Studies
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
                </div>

                <!-- PORTFOLIO -->
                <div class="tier tier--offwhite">
                    <div class="wrapper">
                        <div class="section">
                            <div class="section__hd">
                                <h2>Projects</h2>
                            </div>
                            <div class="section__bd">
                                <div class="collection">
                                    <div class="collection__item">
                                        The Good Silver Steak Co.
                                        Ecommerce, BigCommerce, Startup, Steak, Operations
                                    </div>
                                    <div class="collection__item">
                                        North Star Story Map
                                        WordPress, CMS, Non-Profit, AIA, MHS, Mill City
                                    </div>
                                    <div class="collection__item">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LOGO SOUP -->
                <div class="tier">
                    <div class="wrapper">
                        <div class="section">
                            <div class="section__hd">
                                <h2>Companies we work with</h2>
                            </div>
                            <div class="section__bd">
                                <ul>
                                    <li>AIA Minnesota</li>
                                    <li>Fellow, Inc</li>
                                    <li>Fortified Branding</li>
                                    <li>The Hunt Agency</li>
                                    <li>More Leads Online</li>
                                    <li>Parqa Marketing</li>
                                    <li>Sorted Content</li>
                                    <li>Silver Creek Equity</li>
                                    <li>Straight to Hell Apparel</li>
                                    <li>The Good Silver Steak Co.</li>
                                    <li>Triage Co</li>
                                    <li>Wattle & Daub</li>
                                    <li>WeCreative</li>
                                    <li>Wit & Delight</li>
                                </ul>
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
