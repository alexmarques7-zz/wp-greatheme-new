<footer class="m-footer">
  
    <!-- Copyright Section -->
    <div class="container-fluid d-bg-gray-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'footer_menu', 
                        ) ); 
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    Powered
                </div>
                <div class="col-12 col-md-6">
                    Associados
                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>