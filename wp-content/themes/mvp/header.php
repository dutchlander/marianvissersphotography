<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body>
<section class="header-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg.jpg')">
		
    <div class="grid navgrid">
        <nav class="nav">
            <ul class="nav__list" id="hamburgerToggle">
                <li class="nav__list-item"><a href="aboutme.html" class="nav__link">About me</a></li>
                <li class="nav__list-item"><a href="portfolio.html" class="nav__link">Portfolio</a></li>
                <li class="nav__list-item logo"><a href="index.html" class="nav__link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo_zwart.png" alt="" class="logo"></a></li>
                <li class="nav__list-item"><a href="services.html" class="nav__link">Services</a></li>
                <li class="nav__list-item"><a href="contact.html" class="nav__link">Contact</a></li>
            </ul>
            
            <div class="nav__cross">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
        
    </div>
</section>

<script>
    // Todo: Move to js
function myFunction() {
  var x = document.getElementById("hamburgerToggle");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
	
