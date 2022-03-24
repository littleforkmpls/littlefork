<?php require(realpath(dirname(__FILE__)) . '/../_partials/_config.php'); ?>
<?php
    // set page constants
    $page_title = 'Contact | Little Fork';
    $page_description = 'Little Fork is a tiny web design & development company that brings big ideas to life.';
    $page_url ='https://little-fork.com/contact/';
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

            </div>
            <div class="site__footer">
                <?php require($abs_path . '_partials/footer.php'); ?>
            </div>
        </div>
        <?php require($abs_path . '_partials/outro.php'); ?>
    </body>
</html>
