<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<section class="header-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg.jpg')">
		
    <div class="grid navgrid">
        <nav class="nav">
            <ul class="nav__list ">
                <li class="nav__list-item"><a href="aboutme.html" class="nav__link">About me</a></li>
                <li class="nav__list-item"><a href="portfolio.html" class="nav__link">Portfolio</a></li>
                <li class="nav__list-item logo"><a href="index.html" class="nav__link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo_zwart.png" alt="" class="logo"></a></li>
                <li class="nav__list-item"><a href="services.html" class="nav__link">Services</a></li>
                <li class="nav__list-item"><a href="contact.html" class="nav__link">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="grid container header-image__container">
        <div class="header-image__content">
            
        </div>
    </div>
</section>

	
