<div class="m-diferenciais  d-select-none py-5 d-bg-gray-medium container-fluid">
  <div class="container">

    <div class="row mb-4"> 
      <div class="col-12 text-center">
          <h2 class="d-text-color-dark d-font-bold d-text-xxxl mb-3"><?php echo get_the_title( 98 ); ?></h2>
          <p class="d-text-color-dark d-font-regular d-text-lg mb-4"><?php echo get_post_field('post_content', 98); ?></p>
      </div>
    </div>
    
    <div class="row">
      <?php
        $args = [
          'type'              => 'post',
          'posts_per_page'    => -1,
          'cat'               => array(11),
          'post__not_in'      => array(98)
        ];
        $novidades = new WP_Query($args);
        if($novidades->have_posts()):
        while($novidades->have_posts()):
        $novidades->the_post();
      ?>

      <div class="col-12 col-sm-6 col-lg-4 mb-5 d-flex flex-column align-items-center text-center">
        <i class="e-circle-icon material-icons mb-4"><?php the_field('icone_diferenciais'); ?></i>
        <h3 class="d-text-color-dark d-font-bold d-text-xl mb-3"><?php the_field('titulo_diferenciais'); ?></h3>
        <p class="d-text-color-dark d-font-regular d-text-md text-center"><?php the_field('descricao_diferenciais'); ?></p>
      </div>

      <?php endwhile; else: ?>

			<p class="col-12 d-text-color-dark d-font-regular d-text-lg mb-4"><?php esc_html_e( 'Cadastrar os diferenciais.' ); ?></p>
			
      <?php endif; ?>

    </div>
  </div>
</div>