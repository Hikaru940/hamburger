<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="l-header">
        <div class="l-header__left">
            <h1 class="l-header__left__head"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__left--color l-header__left--size">Hamburger</a></h1>
            <?php get_search_form(); ?>
        </div>
        <div class="c-black-bg"></div>
    </header>
    
    <main class="l-main">
        <div class="l-main-left">
