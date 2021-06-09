<div class="m-banner-principal ">
    <div class="container-fluid d-bg-gray-dark-light banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                
                <?php if (is_page_template( 'page-educacional.php' )): ?>
                    <?php echo do_shortcode('[smartslider3 slider="2"]');?>
                <?php else: ?>
                    <?php echo do_shortcode('[smartslider3 slider="5"]');?>
                <?php endif ?>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid video d-bg-brand-color-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 col-xxl-7">
                    <div class="video-wrapper">
                        <iframe 
                            title="iframe"
                            src="<?php the_field('video_producao_conteudo', 196); ?>"
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">

                <?php if (is_page_template( 'page-educacional.php' )): ?>
                    <a class="e-btn" title="Quero saber mais" href="#">Agende uma demonstração</a>
                <?php else: ?>
                    <a class="e-btn --brand-color-three" title="Quero saber mais" href="#">Agende uma demonstração</a>
                <?php endif ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>