<!DOCTYPE html>
<html <?php language_attributes(); ?> class="wide wow-animation">
	<head>
		<title><?php wp_title(); ?></title>
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="/wp-content/themes/cprime/assets/css/style.css">
        <script> var $baseURL = " "; </script>
        <?php wp_head(); ?>
        <style type="text/css" media="screen">
		header .brand-name {
			display: none;
		}
		header .rd-navbar-fixed .rd-navbar-brand .brand-name {
			display: show;
		}
		header .rd-navbar-static .rd-navbar-brand > a > img {
			max-height: 100px;
			width: auto;
			margin-top: -30px;
		}
		header .rd-navbar-static .rd-navbar-panel {
			padding-bottom: 10px;
		}
		.rd-navbar-top-panel-wrap a {
			color: white;
		}
		.rd-navbar-top-panel-wrap a:hover {
			color: #ada50c;
		}
		.swiper-slide-caption .container p,
		.swiper-slide-caption .container .price {
			text-shadow:
			   -1px -1px 0 #333,
			    1px -1px 0 #333,
			    -1px 1px 0 #333,
			     1px 1px 0 #333;
		}
		.thumbnail ul.describe-1,
		.thumbnail ul.describe-2 {
			font-size: 15px;
		}
		.row-destaque .caption h4 {
			width: 100%;
			overflow: hidden;
		}
		.row-destaque .caption h4 a {
			white-space: nowrap;
		}
		.space-4 {
			display: block;
			margin-top: 8px;
		}
		.space-8 {
			display: block;
			margin-top: 16px;
		}

		.rd-navbar-brand .brand-name {
			padding-left: 68px;
		}
		.rd-navbar-brand .brand-name:before {
			color:transparent;
			margin-top: -5px;
			width: 57px;
			height: 32px;
			background-image: url(<?=SITE_ROOT?>/assets/images/logos/mini.jpg);
			background-size: cover;
		}

		.form-group input, .form-group textarea, .form-group select,
		.rd-mailform input, .rd-mailform textarea, .rd-select {
			color: #444;
            border: 1px solid #888 !important;
		}

		@media (min-width: 768px) {
			.section-breadcrumb {
				padding-bottom: 80px; }
			.thumbnail .img-link img {
				min-height: 250px;
				 }
			.thumbnail .img-link {
				max-height: 250px; }
			.row-destaque .caption {
				min-height: 175px; } }

		@media (max-width: 767px) {
			.thumbnail .img-link img {
				width: 100%; }
			.section-sm {
				padding-top: 20px;
				padding-bottom: 20px; } }
		div.rd-mailform-validate {
			font-size: 22px;
			max-width: 500px;
			bottom: 50%;
			border: 50px solid white;
		}
		</style>
	</head>
	<body>
		<div class="page">
			<header class="page-head">
				<div class="rd-navbar-wrap header_minimal bg-gray">
					<nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-device-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="100px">
						<div class="rd-navbar-top-panel">
							<div class="rd-navbar-top-panel-wrap" style="float: right;">
								header 1
							</div>
						</div>
						<div class="rd-navbar-inner inner-wrap">
							<div class="rd-navbar-panel">
								<button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
								<div class="rd-navbar-brand">
									<a href="/"><img src="/wp-content/themes/cprime/assets/images/logo.jpg" class="brand"></a>
									<a href="<?php echo home_url(); ?>" class="brand-name">
                                        <?php bloginfo( 'name' ); ?>
									</a>
								</div>
								<div class="visible-xs pull-right" style="position: absolute; right: 10px;">
									<a href="https://api.whatsapp.com/send?phone=5511967917155&text=Olá Camargo Prime" target="_blank" style="text-align: center; color: white !important; ">
										<span class="fa fa-whatsapp fa-lg"></span>
									</a>
								</div>
							</div>
							<div class="rd-navbar-nav-wrap toggle-original-elements">
                                <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'rd-navbar-nav', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
							</div>
						</div>
					</nav>
				</div>
			</header>