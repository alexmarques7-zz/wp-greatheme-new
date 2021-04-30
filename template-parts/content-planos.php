<div class="m-planos">

  <?php while ( have_posts() ) : the_post(); ?>

    <div class="d-select-none py-5 d-bg-brand-color container-fluid">
      <div class="container">
        <div class="row mb-4"> 
          <div class="col-12 text-center">
              <h2 class="d-text-color-light d-font-bold d-text-xxxl mb-3"><?php echo get_the_title( 61 ); ?></h2>
              <p class="d-text-color-light d-font-regular d-text-lg mb-4"><?php echo get_post_field('post_content', 61); ?></p>
          </div>
        </div>

      </div>
    </div>

    <div class="d-select-none py-5 d-bg-brand-color-two container-fluid">
      <div class="container">
      
        <div class="row mb-4">
          <div class="col-12 col-lg-4 c-plans-box">
            <h3 class="c-plans-box__title"><?php echo the_field('titulo_plano_basico', 61); ?></h3>
            <p class="c-plans-box__text"><?php echo the_field('descricao_plano_basico', 61); ?></p>
            <a class="c-plans-box__button e-btn --glass" title="<?php echo the_field('botoes_link', 61); ?>" href="#"><?php echo the_field('botoes_link', 61); ?></a>
          </div>

          <div class="col-12 col-lg-4 c-plans-box --highlighted">
            <i class="e-circle-icon material-icons mb-4"><?php echo the_field('icone_plano_oportunidade', 61); ?></i>
            <h3 class="c-plans-box__title"><?php echo the_field('titulo_plano_oportunidade', 61); ?></h3>
            <p class="c-plans-box__text"><?php echo the_field('descricao_plano_oportunidade', 61); ?></p>
            <a class="c-plans-box__button e-btn" title="<?php echo the_field('botoes_link', 61); ?>" href="#"><?php echo the_field('botoes_link', 61); ?></a>
          </div>

          <div class="col-12 col-lg-4 c-plans-box">
          <h3 class="c-plans-box__title"><?php echo the_field('titulo_plano_economico', 61); ?></h3>
            <p class="c-plans-box__text"><?php echo the_field('descricao_plano_economico', 61); ?></p>
            <a class="c-plans-box__button e-btn --glass" title="<?php echo the_field('botoes_link', 61); ?>" href="#"><?php echo the_field('botoes_link', 61); ?></a>
          </div>

          <div class="col-12 text-center mt-5">
            <h2 class="d-text-color-light d-font-bold d-text-xxxl mb-3"><?php the_field('titulo_dois', 61); ?></h2>
            <p class="d-text-color-light d-font-regular d-text-lg mb-4"><?php echo the_field('descricao_link', 61); ?></p>
            <a class="e-btn" title="Vamos começar?" href="#"><?php echo the_field('botao_link_descricao', 61); ?></a>
          </div>

        </div>

      </div>
    </div>

  <?php endwhile;?>
</div>