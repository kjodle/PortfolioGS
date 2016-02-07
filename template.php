<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		PortfolioGS custom theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />

<!-- Google Webfonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Mono' rel='stylesheet' type='text/css'>

<!-- FontAwesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Site style sheets -->
	<link rel="stylesheet" media="screen and (min-width: 801px)" href="<?php get_theme_url(); ?>/css/style.css?v=1.0">
	<link rel="stylesheet" media="screen and (max-width: 800px)" href="<?php get_theme_url(); ?>/css/mobile.css?v=1.0">
	<link rel="stylesheet" media="print" href="css/print.css?v=1.0">

</head>
<body id="<?php get_page_slug(); ?>" >

<header>
	<div id="siteinfo">
		<img src="<?php get_theme_url(); ?>/images/avatar-002.png" />
		<h1>Kenneth John Odle</h1>
		<h2><a href="https://portfolio.kjodle.net/" title="Click here to return to portfolio">Web Portfolio</a></h2>
	<div style="clear:both;"></div>
	</div>
</header>


<div id="container">
		<a href="<?php get_site_url(); ?>" class="home-link"><span class="fa fa-backward"></span>&nbsp;Home</a>
			<div id="page-content">
				<div class="page-text">
					<?php get_page_content(); ?>
					<p class="page-meta">Published on &nbsp;<span><?php get_page_date('l d F Y'); ?></span></p>
				</div>
			</div>
</div><!-- end "container" -->


<footer>
<p>
	Built with PHP, HTML5, and CSS3,
	<br class="rwd-break" />
	<span style="white-space: nowrap;">with help from <a href="https://jquery.com/">jQuery</a>, <a href="https://jqueryui.com/">jQuery UI</a>, </span>
	<br class="rwd-break" />
	<span style="white-space: nowrap;">and <a href="https://fortawesome.github.io/Font-Awesome/">FontAwesome</a>.</span>
	<br />
	<span style="white-space: nowrap;">Blogging capabilites provided by <a href="http://get-simple.info/">GetSimple CMS</a>.</span>
</p>
<p id="social">
	<a class="fa fa-twitter-square" href="http://twitter.com/#!/iswpw"></a>
	<a class="fa fa-github-square" href="https://github.com/kjodle"></a>
	<a class="fa fa-linkedin-square" href="http://www.linkedin.com/in/kennethjohnodle"></a>
	<a class="fa fa-google-plus-square" href="https://plus.google.com/110700479688438997749"></a>
	<a class="fa fa-envelope-square" href="mailto:contact2@kjodle.net"></a>
</p>
</footer>

<?php get_footer(); ?>

</body>
</html>
