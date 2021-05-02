<div class="m-social-midia d-select-none py-5 d-bg-gray-light container-fluid">
  <div class="container">

    <div class="row mb-4"> 
      <div class="col-12">
        <?php
          $args = [
            'type'              => 'post',
            'posts_per_page'    => -1,
            'cat'               => array(12),
          ];
          $novidades = new WP_Query($args);
          if($novidades->have_posts()):
          while($novidades->have_posts()):
          $novidades->the_post();
        ?>

        <a title="<?php the_field('midia_social_name'); ?>" href="<?php the_field('midia_social_link'); ?>" class="d-text-color-dark d-font-bold d-text-xxxl mb-3">
          <span class="material-icons"><?php the_field('midia_social_icon'); ?></span>
        </a>
        
        <?php endwhile; else: ?>

        <p class="col-12 d-text-color-dark d-font-regular d-text-lg mb-4"><?php esc_html_e( 'Cadastrar as mídias sociais.' ); ?></p>

        <?php endif; ?>
      
      </div>
    </div>

  </div>
</div>