<div class="m-planos">

  <?php while ( have_posts() ) : the_post(); ?>

    <?php if (is_page_template( 'page-educacional.php' )): ?>
      <div class="d-select-none --margin-planos px-lg-5 pt-5 d-bg-brand-color container-fluid">
    <?php else: ?>
      <div class="d-select-none --margin-planos px-lg-5 pt-5 d-bg-brand-color-three container-fluid">
    <?php endif ?>
    
      <div class="container py-4">
        <div class="row mb-4"> 
          <div class="col-12 d-flex flex-column align-items-center text-center">
              <h2 class="d-text-color-light d-font-bold d-text-xxxxl mb-3"><?php echo get_the_title( 61 ); ?></h2>
              <p class="d-text-color-light d-font-regular d-text-md mb-4 px-5"><?php echo get_post_field('post_content', 61); ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="d-select-none px-0 px-md-3 py-md-5 d-bg-brand-color-two container-fluid">
      <div class="container pb-5">

        <div class="row m-planos__plans">
          <div class="col-12 col-md-4 c-plans-box">
            <h3 class="c-plans-box__title"><?php the_field('titulo_plano_basico', 61); ?></h3>
            <p class="c-plans-box__text"><?php the_field('descricao_plano_basico', 61); ?></p>
            
            <?php if (is_page_template( 'page-educacional.php' )): ?>
              <a class="c-plans-box__button e-btn --glass-brand" title="<?php the_field('botoes_link', 61); ?>" href="#"><?php the_field('botoes_link', 61); ?></a>
            <?php else: ?>
              <a class="c-plans-box__button e-btn --glass-color-three" title="<?php the_field('botoes_link', 61); ?>" href="#"><?php the_field('botoes_link', 61); ?></a>
            <?php endif ?>          </div>

          <div class="col-12 col-md-4 c-plans-box --highlighted">

            <?php if (is_page_template( 'page-educacional.php' )): ?>
              <i class="e-circle-icon --brand-color material-icons mb-4"><?php the_field('icone_plano_oportunidade', 61); ?></i>
            <?php else: ?>
              <i class="e-circle-icon --brand-color-three material-icons mb-4"><?php the_field('icone_plano_oportunidade', 61); ?></i>
            <?php endif ?>

            <h3 class="c-plans-box__title"><?php the_field('titulo_plano_oportunidade', 61); ?></h3>

            <?php if (is_page_template( 'page-educacional.php' )): ?>
              <p class="c-plans-box__text d-brand-color"><?php the_field('descricao_plano_oportunidade', 61); ?></p>
              <a class="c-plans-box__button e-btn" title="<?php the_field('botoes_link', 61); ?>" href="#"><?php the_field('botoes_link', 61); ?></a>
            <?php else: ?>
              <p class="c-plans-box__text d-brand-color-three"><?php the_field('descricao_plano_oportunidade', 61); ?></p>
              <a class="c-plans-box__button e-btn --brand-color-three" title="<?php the_field('botoes_link', 61); ?>" href="#"><?php the_field('botoes_link', 61); ?></a>
            <?php endif ?>
            
          </div>

          <div class="col-12 col-md-4 c-plans-box">
            <h3 class="c-plans-box__title"><?php the_field('titulo_plano_economico', 61); ?></h3>
            <p class="c-plans-box__text"><?php the_field('descricao_plano_economico', 61); ?></p>

            <?php if (is_page_template( 'page-educacional.php' )): ?>
              <a class="c-plans-box__button e-btn --glass-brand" title="<?php the_field('botoes_link', 61); ?>" href="#"><?php the_field('botoes_link', 61); ?></a>
            <?php else: ?>
              <a class="c-plans-box__button e-btn --glass-color-three" title="<?php the_field('botoes_link', 61); ?>" href="#"><?php the_field('botoes_link', 61); ?></a>
            <?php endif ?>

          </div>
        </div>
        
        <div class="row">
          <div class="col-12 d-flex flex-column align-items-center text-center --padding-planos pt-5">
            <h2 class="d-text-color-light d-font-bold d-text-xxxxl mb-4"><?php the_field('titulo_dois', 61); ?></h2>
            <p class="d-text-color-light d-font-reglar d-text-md mb-5 w-75"><?php the_field('descricao_dois', 61); ?></p>

            <?php if (is_page_template( 'page-educacional.php' )): ?>
              <a class="e-btn --brand-color" title="Vamos começar?" href="#"><?php the_field('botao_link_descricao', 61); ?></a>
            <?php else: ?>
              <a class="e-btn --brand-color-three" title="Vamos começar?" href="#"><?php the_field('botao_link_descricao', 61); ?></a>
            <?php endif ?>

          </div>
        </div>
      </div>
    </div>

  <?php endwhile;?>
</div>