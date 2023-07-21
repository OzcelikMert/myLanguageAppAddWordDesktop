<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?= page_title ?></title>
    <?php require "./components/tools/head.php"; ?>
    <?= custom_links ?>
</head>
<body>
<div id="page">
    <?php
    require "components/tools/preloader.php";
    ?>

    <?php
    if (page_name != "login" && page_name != "404") {
        ?>
        <div class="page-container">
            <?php require "components/tools/sidebar.php"; ?>
            <div class="page-content">
                <?php require "components/tools/navbar.php"; ?>
                <div class="min-vh-100">
                    <?= page_body ?>
                </div>
                <?php require "components/tools/footer.php"; ?>
            </div>
        </div>
        <script>
            let selfId = <?= $_SESSION[\config\session\Keys::ID] ?>;
        </script>
        <?php
    } else {
        ?>
        <?= page_body ?>
        <?php
    }
    ?>
</div>
<?php require "./components/tools/scripts.php"; ?>
<?= custom_scripts ?>
</body>
</html>