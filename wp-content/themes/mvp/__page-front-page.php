<?php
/**
* Template Name: Front-page
*
* @package WordPress
* @madeby Ruud Vissers
*/
?>
<?php
get_header();
?>

	<section class="about-me">
		<div class="wrapper">
			<div class="container grid">
				<div class="profile">
					<h2 class="subheader">Meet</h2>
					<h1 class="header">Marian Vissers</h1>
					<p class="bodytext">Passie voor fotografie, dieren, natuur, reizen, techno, wijntjes en mooi licht.</p>
					<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/marian2.jpg"> -->
					<div>
						<!-- <a class="btn__primary" href="#" target="_blank" >Lees meer</a> -->
					</div>
				</div>
				<div class="profile-image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/marian2.jpg">
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio">
		<div class="wrapper">
			<div class="container grid">

				<div class="section__title">
					<h1 class="header">Portfolio</h1>
				</div>

				<div class="portfolio__items">
					<div class="portfolio__item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portret.jpg" alt="" class="portfolio__item-img">
						<h2 class="portfolio__item-title">Lifestyle</h2>		
					</div>

					<div class="portfolio__item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portret.jpg" alt="" class="portfolio__item-img">
						<h2 class="portfolio__item-title">Portretten</h2>		
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="cta">
		<div class="wrapper">
			<div class="container grid">
				<div class="call-to-action">
					<h2 class="subheader">Wil je een shoot boeken of heb je een vraag?</h2>
					<h1 class="header">Neem vrijblijvend contact op</h1>
					<div class="btn__container">
                        <a class="btn btn__secondary" href="#">Meer informatie</a>
                        <a class="btn btn__primary" href="#">Contact</a>
                    </div>
					<div class="cta__socials">
                        <img class="cta__socials-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb.png">
                        <img class="cta__socials-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/insta.png">
                    </div>
				</div>
			</div>
		</div>
	</section>

	<section class="social-slider">
		<div class="wrapper">
			<div class="container grid">
				<div class="section__title">
					<h1 class="header">Instagram</h1>
				</div>

				<div class="instagram__items">
					<div class="slider flex-row">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider_template_1.png" alt="" class="instagram__item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider_template_1.png" alt="" class="instagram__item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider_template_1.png" alt="" class="instagram__item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider_template_1.png" alt="" class="instagram__item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slider_template_1.png" alt="" class="instagram__item">
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
