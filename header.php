<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" type="image/png" href="http://assets.adjectivespecies.com/favicon.png" />
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
        <header class="adjspecies-header">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#adjspecies-main-nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://adjectivespecies.com">[adjective][species]</a>
                    </div>
                    <div class="navbar-collapse collapse" id="adjspecies-main-nav">
                        <ul class="nav navbar-nav">
                            <li><a href="http://lovesexfur.com">Love &#9702; Sex &#9702; Fur</a></li>
                            <li><a href="https://furrypoll.com">2015 Furry Poll</a></li>
                            <li><a href="http://survey.adjectivespecies.com">Surveys</a></li>
                            <li><a href="http://vis.adjectivespecies.com">Visualizations</a></li>
                            <li><a href="https://twitter.com/adjspecies">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="header">
                <div class="header-image">
                    <h1>
                        [adjective][species]
                    </h1>
                    <h2>
                        The Furry World from the Inside Out
                    </h2>
                </div>
            </div>
            <nav class="navbar navar-default navbar-static-top">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/contributing">Contributing</a></li>
                        <li><a href="/about">About</a></li>
			<!--<li><a href="/code-of-conduct">Code of Conduct</a></li>-->
                    </ul>
                    <div class="navbar-form navbar-right">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </nav>
        </header>

		<div id="main" class="site-main">
