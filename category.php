<?php /* Template Name: Category */ ?>

<?php get_header(); ?>

<div class="m-perguntas container-fluid d-bg-gray-light">
    <div class="container px-0 py-5">

        <div class="row">
            <div class="col-12 d-flex flex-column mb-4 pe-5">
                <h2 class="d-text-green-dark d-font-bold d-text-xxxxl mb-3">
                    <?php the_field('titulo-central-de-ajuda',331); ?>
                </h2>
                <div class="d-text-color-dark d-font-medium d-text-md mb-4">
                    <?php the_field('subtitulo-central-de-ajuda',331); ?>
                </div>
            </div>
        </div>

        <div class="row">

            <ol class="e-list-ordered">


            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <a class="e-list-ordered__link" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <li class="e-list-ordered__item"><?php the_title(); ?></li>
                    </a>
 
                <?php endwhile; 
                
            else: ?>

            <p>Sorry, no posts matched your criteria.</p>
                
            <?php endif; ?>

            </ul>

        </div>
    </div>
</div>

<?php get_footer(); ?>