<div class="m-apresentacao d-select-none py-5 d-bg-gray-light container-fluid">
    <div class="container">
        <div class="row">
            
            <div class="col-12 col-lg-6 pe-lg-4 mt-5 mb-5">
                <h2 class="d-text-color-dark d-font-bold d-text-xxl mb-3"><?php echo get_the_title( 54 ); ?></h2>
                <p class="d-text-color-dark d-font-regular d-text-sm mb-4"><?php echo get_post_field('post_content', 54); ?></p>
                <a class="e-btn" title="<?php the_field('texto_do_botao', 54); ?>" href="#"><?php the_field('texto_do_botao', 54); ?></a>
            </div>
            <div class="col-12 col-lg-6 ps-lg-4"">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/mulher-surpresa.png" alt="Mulher e Tablet">
            </div>

        </div>
    </div>
</div>