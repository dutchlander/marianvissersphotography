<?php
/**
* Template Name: Information
*
* @package WordPress
* @madeby Ruud Vissers
*/
?>
<?php
get_header();
?>

<section class="service">
    <div class="wrapper">
        <div class="container grid">

            <div class="service__content">
                <h2 class="service__content-header">Familie</h2>
                <blockquote class="service__content-quote">“Een heerlijk moment samen, en een mooie herinnering voor later”</blockquote>
                <span class="service__content-price">€75</span>
                <p class="service__content-info">
                    60 – 90 minuten<br/>
                    Op locatie<br/>
                    Een online galerij om de foto’s zelf uit te kiezen<br/>
                    Incl. 20 digitale bestanden in grote- en kleine resolutie</p>
                <!-- <button class="btn__seconday"></button> -->
            </div>

            <div class="service__image">
                <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-pagina/Family 2 1.jpg">
            </div>

        </div>
    </div>
</section>

<section class="service">
    <div class="wrapper">
        <div class="container grid">

            <div class="service__content even">
                <h2 class="service__content-header">Familie</h2>
                <blockquote class="service__content-quote">“Een heerlijk moment samen, en een mooie herinnering voor later”</blockquote>
                <span class="service__content-price">€75</span>
                <p class="service__content-info">
                    60 – 90 minuten<br/>
                    Op locatie<br/>
                    Een online galerij om de foto’s zelf uit te kiezen<br/>
                    Incl. 20 digitale bestanden in grote- en kleine resolutie</p>
                <!-- <button class="btn__seconday"></button> -->
            </div>

            <div class="service__image even">
                <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-pagina/Family 2 1.jpg">
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container grid">
        <p class="rte">
            <strong>De bovenstaande prijs is inclusief BTW en exclusief reiskosten vanaf 30 km (€0.35 per km vanaf postcode 6532 ZJ)</strong></br>
            Bij het boeken van een fotoshoot ga je automatisch akkoord met mijn algemene voorwaarden en het gebruik van de foto’s op mijn sociale media, website en andere promotie doeleinde van Marian Vissers Photography. Wil je dit liever niet? Geen probleem, meld dit dan even  bij het boeken van een fotoshoot.
        </p>
    </div>
</section>

<?php    
get_footer();
?>