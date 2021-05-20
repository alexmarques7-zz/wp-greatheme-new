<div class="p-producao-de-conteudo">
    <div class="container-fluid d-select-none d-bg-gray-light pt-5">
        <div class="container pt-4">

            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center text-center mb-4">
                    <h2 class="d-text-green-dark d-font-bold d-text-xxxxl mb-3"><?php the_field('tit_producao_conteudo', 196); ?></h2>
                    <p class="d-text-color-dark d-font-medium d-text-md mb-4"><?php the_field('sub_producao_conteudo', 196); ?></p>
                </div>
            </div>

            <div class="row d-flex justify-content-center --n-margin-box-1">
                <div class="col-7">
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
            </div>

        </div>
    </div>

    <div class="container-fluid d-select-none py-5 d-bg-brand-color-two --height-custom">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center text-center mb-4">
                    <!-- BG LINE -->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-select-none py-5 d-bg-gray-light">
        <div class="container py-5">
            <div class="row d-flex justify-content-center mb-5 --n-margin-box-2">
                
                <div class="col-10 py-4 px-5 col-span-2 --d-border">

                    <div class="my-5">
                        <h3 class="d-text-green-dark d-font-bold d-text-xxl mb-2"><?php the_field('detalhes_producao_conteudo_um', 196); ?></h3>
                        <p class="d-text-green-dark d-font-regular d-text-lg"><?php the_field('detalhes_producao_conteudo_um_descricao', 196); ?></p>
                    </div>
                    
                    <div class="mb-5">  
                        <h3 class="d-text-green-dark d-font-bold d-text-xxl mb-2"><?php the_field('detalhes_producao_conteudo_dois', 196); ?></h3>
                        <p class="d-text-green-dark d-font-regular d-text-lg"><?php the_field('detalhes_producao_conteudo_dois_descricao', 196); ?></p>
                    </div>

                    <div class="mb-5">
                        <h3 class="d-text-green-dark d-font-bold d-text-xxl mb-2"><?php the_field('detalhes_producao_conteudo_tres', 196); ?></h3>
                        <p class="d-text-green-dark d-font-regular d-text-lg"><?php the_field('detalhes_producao_conteudo_tres_descricao', 196); ?></p>
                    </div>

                    <div class="my-5">
                        <h3 class="d-text-green-dark d-font-bold d-text-xxl mb-2"><?php the_field('detalhes_producao_conteudo_um', 196); ?></h3>
                        <p class="d-text-green-dark d-font-regular d-text-lg"><?php the_field('detalhes_producao_conteudo_quatro_descricao', 196); ?></p>
                    </div>

                </div>
            </div>
            
            <div class="row mb-5 pt-5">
                <div class="col-12 d-flex justify-content-center">
                    <h3 class="d-text-green-dark d-font-bold d-text-xxxl text-center w-75"><?php the_field('tit_inf_producao_conteudo', 196); ?></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center text-center">
                    <i class="e-circle-icon --dark material-icons mb-4"><?php the_field('producao_conteudo_icone_um', 196); ?></i>
                    <h3 class="d-text-green-dark d-font-bold d-text-xxl mb-3"><?php the_field('producao_conteudo_icone_um_tit', 196); ?></h3>
                    <p class="d-text-color-dark d-font-medium d-text-sm text-center w-75 mb-0"><?php the_field('producao_conteudo_icone_um_desc', 196); ?></p>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center text-center">
                    <i class="e-circle-icon --dark material-icons mb-4"><?php the_field('producao_conteudo_icone_dois', 196); ?></i>
                    <h3 class="d-text-green-dark d-font-bold d-text-xxl mb-3"><?php the_field('producao_conteudo_icone_dois_tit', 196); ?></h3>
                    <p class="d-text-color-dark d-font-medium d-text-sm text-center w-75 mb-0"><?php the_field('producao_conteudo_icone_dois_desc', 196); ?></p>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center text-center">
                    <i class="e-circle-icon --dark material-icons mb-4"><?php the_field('producao_conteudo_icone_tres', 196); ?></i>
                    <h3 class="d-text-green-dark d-font-bold d-text-xxl mb-3"><?php the_field('producao_conteudo_icone_tres_tit', 196); ?></h3>
                    <p class="d-text-color-dark d-font-medium d-text-sm text-center w-75 mb-0"><?php the_field('producao_conteudo_icone_tres_desc', 196); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

