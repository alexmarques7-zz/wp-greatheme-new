<footer class="m-footer">
  
    <!-- Copyright Section -->
    <div class="container-fluid d-bg-gray-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="c-navbar --simple">
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'footer_menu', 
                            ) );
                        ?>
                    </div>
                </div>
            </div>

            <div class="row py-3 --d-border-top">
                <div class="col-12 d-flex justify-content-between">
                    <p class="d-flex align-items-center m-0">
                        <span class="d-text-xs me-3"><?php echo get_theme_mod( 'text_company' ); ?></span>
                        <?php
                            $logo_company = get_theme_mod( 'logo_company' );
                            if ( $logo_company ) {
                                echo wp_get_attachment_image( $logo_company, array('44', '44'), '', array( "class" => ""));
                            }
                        ?>
                    </p>

                    <p class="d-flex align-items-center m-0">
                        <span class="d-text-xs me-3"><?php echo get_theme_mod( 'text_associated' ); ?></span>
                        <?php
                            $logo_company = get_theme_mod( 'logo_associated_1' );
                            if ( $logo_company ) {
                                echo wp_get_attachment_image( $logo_company, array('120', '44'), '', array( "class" => "me-3"));
                            }
                        ?>
                        <?php
                            $logo_company = get_theme_mod( 'logo_associated_2' );
                            if ( $logo_company ) {
                                echo wp_get_attachment_image( $logo_company, array('44', '44'), '', array( "class" => "img-responsive"));
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>