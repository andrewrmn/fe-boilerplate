<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- META DATA -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <!--[if IE]><meta http-equiv="cleartype" content="on" /><![endif]-->

    <title>Front end Boilerplate</title>

    <!-- ICONS -->
    <link rel="shortcut icon" type="image/ico" href="/build/images/favicons/favicon.png" />
    <link rel="apple-touch-icon" href="/build/images/favicons/apple-touch-icon.png" />
    <link rel="icon" href="/build/images/favicons/android-favicon.png">

    <!-- FONTS -->
    <link href='https://fonts.gstatic.com' rel='preconnect' crossorigin>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,700,400italic' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel="stylesheet" media="screen" href="build/css/main.css" />
</head>

<body id="top">

<?php
    // Detect Homepage
    $exactUrl = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $domain = $_SERVER['SERVER_NAME'] . '/';
    $homepage = "/index.php";
    $currentpage = $_SERVER['REQUEST_URI'];
?>

<header class="site-header">
    <div class="wrapper-wide">
        <h1 class="logo" itemscope itemtype="http://schema.org/Organization">
            <a href="/" itemprop="url">
                <span class="sr-only" itemprop="name">Front end boilerplate</span>
                A
            </a>
            <span class="sr-only"></span>
        </h1>
        <div class="burger" data-click-target="mainNav" data-click-bodyClass="mobile-menu-is-open">
            <div class="burger-inner">
                <span class="burger-top"></span>
                <span class="burger-middle"></span>
                <span class="burger-bottom"></span>
            </div>
        </div>
        <div class="site-header-panel">
            <nav class="site-navigation">
                <ul class="site-navigation-list">
                    <li data-click-target="ipsum-modal" data-click-bodyClass="modal-is-active"><span>I need Ipsum</span></li>
                    <li><a href="https://github.com/drewross/boilerplate" target="_blank">Github</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main id="content" class="main fadeIn">
