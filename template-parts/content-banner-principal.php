<div class="m-banner-principal ">
    <div class="container-fluid d-bg-gray-light">
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

    <?php if (is_page_template( 'page-educacional.php' )): ?>
        <div class="container-fluid video pb-3 d-bg-brand-color-two">
            <div class="container py-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-8">
                        <div class="video-wrapper">
                            <iframe 
                                title="iframe"
                                src="<?php the_field('educacional-video-banner', 579); ?>"
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                        <p class="d-flex mb-5 d-md-none d-text-lg d-color-white text-center"><?php the_field('educacional-texto-aux-banner', 579); ?></p>
                        <a class="e-btn" title="<?php the_field('texto-aux-botao', 579); ?>" href="<?php echo get_site_url(); ?><?php the_field('texto-aux-link', 579); ?>"><?php the_field('texto-aux-botao', 579); ?></a>   
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container-fluid video d-bg-brand-color-two">
            <div class="container py-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                        <p class="d-flex mb-5 d-md-none d-text-lg d-color-white text-center"><?php the_field('corporativo-texto-aux-banner', 579); ?></p>
                        <a class="e-btn --brand-color-three" title="<?php the_field('texto-aux-botao', 579); ?>" href="<?php echo get_site_url(); ?><?php the_field('texto-aux-link', 579); ?>"><?php the_field('texto-aux-botao', 579); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
</div>