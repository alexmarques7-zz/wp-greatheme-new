<div class="m-falecom d-flex d-select-none py-5 d-bg-gray-light container-fluid">
    <div class="container px-0 py-4">
        <div class="row align-items-start justify-content-between">
            <div class="col-12 col-lg-6 d-flex flex-column mb-4">
                <h2 class="d-text-green-dark text-center text-lg-start d-font-bold d-text-xxxl mb-3">
                    <?php the_field('titulo-fale-com-um-consultor',46); ?>
                </h2>
                <p class="d-text-color-dark text-center text-lg-start d-font-medium d-text-xl mb-4">
                    <?php the_field('texto-fale-com-um-consultor',46); ?>
                </p>
            </div>
            <div class="col-12 col-lg-5 p-5 d-bg-brand-color-two">
                <?php echo do_shortcode("[contact-form-7 id='476' title='Fale com um consultor' html_class='c-contact-form']"); ?>
            </div>
        </div>
    </div>
</div>