<footer>
    <div class="main-footer">
        <div class="container">
            <div class="contact-information">
                <div class="contact-phone">
                    
                    <a href="tel:+4542420718">
                        <p> <i class="fas fa-phone"></i> +45 42 42 07 18 </p> 
                    </a>
                </div>
                <div class="contact-address">
                    <p><i class="fas fa-map-marker-alt"></i>Frederiks Allé 134, 8000 Aarhus C</p>
                </div>
            </div>

            <div class="contact-hours">
                <p><i class="far fa-clock"></i>Man-Fre: 10:00 - 17:30 Lørdage: Lukket</p>
            </div>
        </div>
    </div>

    <div class="sub-footer">
        <div class="container">
            <div class="contact-rights">
                <p>©2019 FastFix, All Rights Reserved.</p>
                <?php wp_nav_menu( array( 'theme_location' => 'footer-link' ) ); ?>
            </div>

            <div class="contact-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>