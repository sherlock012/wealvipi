<?php
$url = $_SERVER['REQUEST_URI'];
$url_vals = explode('/', $url)[1];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="keywords" content="Alvipi , деревянные окна, аллюминевые окна, окна, двери">
    <meta name="description" content="Alvipi ✔ Деревянные окна ✔ аллюминевые окна✔ Гарантия 10 лет">

    <meta property="og:title" content="Alvipi | Дерево-алюминиевые окна">
    <meta property="og:description" content="Alvipi ✔ Деревянные окна ✔ аллюминевые окна✔ Гарантия 10 лет">
    <meta property="og:image" content="<?= get_template_directory_uri() ?>/assets/og-img.jpg">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="570">
    <meta name="”twitter:image”" content="<?= get_template_directory_uri() ?>/assets/og-img.jpg">

    <!-- <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri() ?>/assets/favicon.ico"> -->

    <meta name="msapplication-config" content="<?= get_template_directory_uri() ?>/assets/favicon/browserconfig.xml">
    <meta name="msapplication-TileImage" content="<?= get_template_directory_uri() ?>/assets/favicon/mstile-150x150.png">
    <meta name="msapplication-TileColor" content="#ae8160">
    <meta name="application-name" content="Alvipi , деревянные окна, аллюминевые окна, окна, двери">
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48" href="<?= get_template_directory_uri() ?>/assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/favicon/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-touch-icon.png">

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/fonts/firasans/firasans.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/styles/jquery.background-video.min.css" />

    <script src="<?= get_template_directory_uri() ?>/assets/scripts/jquery-3.6.1.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/scripts/jquery.background-video.min.js"></script>

    <title> Alvipi | Дерево-алюминиевые окна </title>
    <?php do_action('add_index_style') ?>
    <?php wp_head() ?>
</head>

<body>