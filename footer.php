<footer class="m-footer">
  
    <!-- Copyright Section -->
    <div class="container-fluid d-bg-gray-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Redes Sociais
                </div>
                <div class="col-md-12">
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'footer_menu', 
                        ) ); 
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    Pagamentos
                </div>
                <div class="col-12 col-md-4">
                    Powered
                </div>
                <div class="col-12 col-md-4">
                    Associados
                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>