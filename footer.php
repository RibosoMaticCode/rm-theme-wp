<!-- SUSCRIBE -->
<section class="suscrip pt-5 pb-5 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 class="section-title text-center">SUSCRIBETE</h2>
                    <?php if ( is_active_sidebar( 'suscription' ) ) : ?>
                        <div class="block">
                            <?php dynamic_sidebar( 'suscription' ); ?>
                        </div>
                    <?php endif ?>

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <?php
                if ( is_active_sidebar( 'footer-1' ) ) {
                    ?>
                    <div class="col-md-3 foot-col">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                    <?php
                }
                ?>
                <?php
                if ( is_active_sidebar( 'footer-2' ) ) {
                    ?>
                    <div class="col-md-3 foot-col">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                    <?php
                }
                ?>
                <?php
                if ( is_active_sidebar( 'footer-3' ) ) {
                    ?>
                    <div class="col-md-3 foot-col">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>
                    <?php
                }
                ?>
                <?php
                if ( is_active_sidebar( 'footer-4' ) ) {
                    ?>
                    <div class="col-md-3 foot-col">
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="container bottom-section text-center">
            <p>© RibosoMatic 2006-2021 | Derechos reservados</p>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <!-- bootstrap -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>-->
    <!-- custom js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

    <?php wp_footer(); 
    // This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
    // Removing this fxn call will disable all kinds of plugins. 
    // Move it if you like, but keep it around.
    ?>
</body>
</html>