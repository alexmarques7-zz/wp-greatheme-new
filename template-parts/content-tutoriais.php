<div class="m-tutoriais d-flex align-items-center justify-content-between d-select-none py-5 d-bg-gray-light container-fluid">
    <div class="container px-0 py-4">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-5 d-flex flex-column align-items-center align-items-lg-start mb-5 pe-lg-5">
                <h2 class="d-text-green-dark text-center text-lg-start d-font-bold d-text-xxxxl mb-3">
                    <?php the_field('plataforma-titulo',24); ?>
                </h2>
                <p class="d-text-color-dark text-center text-lg-start d-font-medium d-text-md mb-4">
                    <?php the_field('plataforma-texto',24); ?>
                </p>
                <a class="e-btn" target="_blank" href="<?php the_field('plataforma-botao-link',24); ?>"><?php the_field('plataforma-botao-texto',24); ?></a>
            </div>
            <div class="col-12 col-lg-7">
                <div id="carouselTextImages" class="c-carousel carousel slide" data-bs-ride="carousel">

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
                            <div class="c-banner-cases vide video-wrapper">
                                <iframe width="1280" height="720" src="<?php the_field('plataforma-video-um',24); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="c-carousel__item carousel-item" data-bs-interval="10000">
                            <div class="c-banner-cases vide video-wrapper">
                                <iframe src="<?php the_field('plataforma-video-dois',24); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="c-carousel__item carousel-item" data-bs-interval="10000">
                            <div class="c-banner-cases vide video-wrapper">
                                <iframe src="<?php the_field('plataforma-video-tres',24); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <?php $i++; ?>
                        <?php endwhile; else: ?>

                        <p class="d-text-color-dark d-font-medium d-text-lg mb-4"><?php esc_html_e( 'Cadastrar os Cases.' ); ?></p>
                        <?php endif; ?>

                        <!-- <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="c-carousel__controls" type="button" data-bs-target="#carouselTextImages" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon --prev" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>

                            <button class="c-carousel__controls" type="button" data-bs-target="#carouselTextImages" data-bs-slide="next">
                                <span class="carousel-control-next-icon --next" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div> -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>