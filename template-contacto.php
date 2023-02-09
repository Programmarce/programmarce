<?php
/*template name: contacto*/

mostrarRuta(0, __FILE__);
get_header();
?>

<main style="margin: 81px 2rem 0px 2rem;">
    <div class="card text-center">
        <div class="card-header">
            <h2>Contactanos para Diseñar tu Web</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <?php the_content(); ?>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</main>

<?php get_footer() ?>
