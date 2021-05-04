<div class="m-cases d-select-none py-5 d-bg-gray-light container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="d-text-color-dark d-font-bold d-text-xxxl mb-3"><?php echo get_the_title( 95 ); ?></h2>
                <p class="d-text-color-dark d-font-regular d-text-md mb-4"><?php echo get_post_field( 'post_content', 95 ); ?></p>
            </div>
        </div>

            <div id="carouselTextImages" class="carousel carousel-dark slide" data-bs-ride="carousel">

                <div class="carousel-inner">

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTextImages" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <div class="carousel-item active" data-bs-interval="10000">

                        <?php
                            $args = [
                            'type'              => 'post',
                            'posts_per_page'    => -1,
                            'cat'               => array(10),
                            'post__not_in'      => array(95)
                            ];
                            $novidades = new WP_Query($args);
                            if($novidades->have_posts()):
                            while($novidades->have_posts()):
                            $novidades->the_post();
                        ?>

                        <div class="c-banner-cases-item">
                            <img class="c-banner-cases-item__image" src="<?php the_field('cases_cliente_logo'); ?>" alt="Logo">
                            <div>
                                <p class="c-banner-cases-item__text"><?php the_field('cases_cliente_descricao'); ?></p>
                                <p class="c-banner-cases-item__name">
                                    <span class="c-banner-cases-item__cargo"><?php the_field('cases_nome'); ?></span>
                                    <?php the_field('cases_cliente_cargo'); ?>
                                </p>
                            </div>
                        </div>

                        <?php endwhile; else: ?>

                        <p class="d-text-color-dark d-font-regular d-text-lg mb-4"><?php esc_html_e( 'Cadastrar os Cases.' ); ?></p>

                        <?php endif; ?>
                
                    </div>

                    <p class="texto-red-span">123</p>

                    <div class="carousel-item" data-bs-interval="10000">

                        <div class="c-banner-cases-item">
                            <img class="c-banner-cases-item__image" src="..." alt="...">
                            <div>
                                <h3>First slide label 2</h3>
                                <p>Some representative placeholder content for the first slide 2</p>
                            </div>
                        </div>

                    </div>
                    
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTextImages" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>

            </div>


    </div>
</div>