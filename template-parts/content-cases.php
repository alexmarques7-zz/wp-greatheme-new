<div class="m-cases d-select-none py-5 d-bg-gray-light container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="d-text-color-dark d-font-bold d-text-xxxl mb-3"><?php echo get_the_title( 95 ); ?></h2>
                <p class="d-text-color-dark d-font-regular d-text-lg mb-4"><?php echo get_post_field( 'post_content', 95 ); ?></p>
            </div>
        </div>

            <div id="carouselTextImages" class="c-carousel carousel carousel-dark slide" data-bs-ride="carousel">

                <button class="c-carousel__controls --prev" type="button" data-bs-target="#carouselTextImages" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <div class="c-carousel__content carousel-inner">

                    <?php
                        $i=1;

                        $args = [
                        'type'              => 'post',
                        'posts_per_page'    => -1,
                        'cat'               => array(10),
                        'post__not_in'      => array(95)
                        ];

                        $cases = new WP_Query($args);
                        if($cases->have_posts()):
                        while($cases->have_posts()):
                        $cases->the_post();
                    ?>

                    <div class="c-carousel__item carousel-item <?php if ( $i == 1 ) {echo 'active';} ?>" data-bs-interval="10000">

                        <div class="c-banner-cases">
                            <img class="c-banner-cases__image" src="<?php the_field('cases_cliente_logo'); ?>" alt="Logo">
                            <div>
                                <p class="c-banner-cases__text"><?php the_field('cases_cliente_descricao'); ?></p>
                                <p class="c-banner-cases__name">
                                    <?php the_field('cases_cliente_nome'); ?>
                                    
                                    <span class="c-banner-cases__details">
                                        <?php the_field('cases_cliente_sobre'); ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                
                    </div>

                    <?php $i++; ?>

                    <?php endwhile; else: ?>

                    <p class="d-text-color-dark d-font-regular d-text-lg mb-4"><?php esc_html_e( 'Cadastrar os Cases.' ); ?></p>

                    <?php endif; ?>

                </div>

                <button class="c-carousel__controls --next" type="button" data-bs-target="#carouselTextImages" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>


    </div>
</div>