<?php
/**
* Template Name: About Me
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
					<h2 class="subheader">Over mij</h2>
					<p class="bodytext" >
                    Mijn naam is Marian Vissers, ik ben 26 jaar oud en samen met mijn vriend woonachtig in Nijmegen. Fotografie is een grote passie van mij en ik vind het dan ook heerlijk om naast mijn baan als fysiotherapeut creatief bezig te zijn met fotografie en de nabewerking hiervan.</br></br>
                    Ik focus me voornamelijk op portret- en lifestylefotografie, van zowel mensen als dieren. Mijn stijl kan ik het beste omschrijven als sprekend en puur. Ik vind het belangrijk dat je je op je gemak voelt en streef er naar om spontane en ongedwongen foto’s te maken.
                    </p>
					<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/marian2.jpg"> -->
					<div>
					</div>
				</div>
				<div class="profile-image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/marian2.jpg">
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
?>

