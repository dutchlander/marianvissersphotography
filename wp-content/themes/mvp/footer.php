	<footer class="footer">
        <section>
            <div class="footer__socials wrapper">
                <img class="footer__socials-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb.png">
                <img class="footer__socials-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/insta.png">
            </div>
        </section>

        <section class="container grid">
            <div class="footer-wrapper">
                <div class="footer__contact bodytext">
                    <div> 
                        <p>
                            Marian Vissers<br /> 
                            6532 ZJ Nijmegen<br /> 
                            Nederland<br /> 
                            <br /> 
                            KVK: 77397770<br /> 
                            btw: 213448713B01<br /> 
                        </p>
                    </div>
                </div>

                <div class="footer__secondary">
                    <img class="footer__secondary-leaf" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bloem_zwart_links.png" style="width: 279px">
                    <span><u>algemene voorwaarden</u> & <u>privacy verklaring</u></span>
                    <span>made by <b>Ruud Vissers</b></span>
                </div>

                <div class="footer__third">
                    <p class="bold"><b>Contact</b></p>
                    <hr>
                    <p class="bold">Email:<span> info@marianvissersphotography.nl</span></p>
                    <p class="copyright">COPYRIGHT 2020 MARIAN VISSERS, ALLE RECHTEN VOORBEHOUDEN</p>
                </div>
            </div>
        </section>

    </footer>

<?php wp_footer(); ?>

<script>
    $(document).ready(function(){
    $('.menu-toggler').on('click', function(){
        $(this).toggleClass('open');
        $('.top-nav').toggleClass('open');
    });

    $('.top-nav .nav-link').on('click', function(){
        $('.menu-toggler' ).removeClass('open');
        $('.top-nav').removeClass('open');
    });

    $('nav a[href*="#"]').on('click', function(){
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 100
        }, 2000);
    });
});



$(function () {
  $(document).scroll(function () {
    var $nav = $(".nav");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
</script>

</body>
</html>
