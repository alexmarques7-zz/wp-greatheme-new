<div class="m-depoimentos d-select-none d-bg-brand-color-two py-5">
    <div class="container-fluid py-4">
        <div class="container p-0">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-5 mb-5 mb-md-0 d-flex flex-column align-items-center justify-content-center align-items-md-start text-center text-md-start">
                    <h2 class="d-text-color-light d-font-bold d-text-xxxl">Veja o que os produtores estão falando</h2>
                    <p class="d-text-color-light d-font-regular d-text-lg mb-4">Quer mais informações sobre a plataforma?</p>
                    <a class="e-btn --white" href="#">Fale com o Consultor</a>
                </div>

                <div class="col-12 col-md-6 col-xl-7">


                    <div id="carouselTextImages" class="c-carousel carousel slide" data-bs-ride="carousel">
                        <button class="c-carousel__controls" type="button" data-bs-target="#carouselTextImages" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon --prev" aria-hidden="true"></span>
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

                                $depoimentos = new WP_Query($args);
                                if($depoimentos->have_posts()):
                                while($depoimentos->have_posts()):
                                $depoimentos->the_post();
                            ?>

                            <div class="c-carousel__item carousel-item <?php if ( $i == 1 ) {echo 'active';} ?>" data-bs-interval="10000">
                                <div class="e-card-color --white">
                                    <img class="e-card-color__image e-circle" width="300" height="300" src="" alt="">
                                    <div>
                                        <p class="e-card-color__text">"Através da Aulapp consegui levar meus cursos e palestras para o meio digital. É uma plataforma incrível, intuitiva e com recursos que permitem personalizar a estrutura de cada curso."</p>
                                        <p class="e-card-color__name">
                                            Débora Guerreiro
                                            <span class="e-card-color__name2">Owner G5 Brasil</span>
                                        </p>
                                        <a class="e-card-color__link" href="#" target="_blank">
                                            <i class="e-card-color__link-icon fab fa-linkedin"></i>
                                            <span class="e-card-color__link-text">Nome</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <?php $i++; ?>
                            <?php endwhile; else: ?>

                            <p class="d-text-color-dark d-font-medium d-text-lg mb-4"><?php esc_html_e( 'Cadastrar os depoimentos.' ); ?></p>
                            <?php endif; ?>
                        </div>

                        <button class="c-carousel__controls" type="button" data-bs-target="#carouselTextImages" data-bs-slide="next">
                            <span class="carousel-control-next-icon --next" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div> 