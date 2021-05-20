<div class="m-apresentacao d-select-none pt-5 d-bg-gray-light container-fluid">
    <div class="container mt-5">
        <div class="row">
            
            <div class="col-12 col-lg-5 pe-lg-4 mt-2 pb-3 mb-5">
                <h2 class="d-text-green-dark d-font-bold d-text-xxxl mb-3"><?php echo get_the_title( 54 ); ?></h2>
                <p class="d-text-green-dark d-font-medium d-text-sm mb-4"><?php echo get_post_field('post_content', 54); ?></p>

                <?php if (is_page_template( 'page-educacional.php' )): ?>
                    <a class="e-btn" title="<?php the_field('texto_do_botao', 54); ?>" href="#"><?php the_field('texto_do_botao', 54); ?></a>
                <?php else: ?>
                    <a class="e-btn --brand-color-three" title="<?php the_field('texto_do_botao', 54); ?>" href="#"><?php the_field('texto_do_botao', 54); ?></a>
                <?php endif ?>
                
            </div>
            <div class="col-12 col-lg-7 ps-lg-4"">
                <img class="img-fluid" src="" alt="Mulher e Tablet">
            </div>

        </div>
    </div>
</div>