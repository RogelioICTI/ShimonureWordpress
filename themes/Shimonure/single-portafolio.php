<?php get_header(); ?>
<?php
$imagen = get_field('portafolio_imagen_muestra', $post->ID);
$imagen_url = "";
if (isset($imagen['url'])) {
    $imagen_url = $imagen['url'];
}
?>
<header class="intro-portafolio" >
    <div class="glass" style="background: url('<?php echo $imagen_url; ?>') no-repeat top center fixed;"></div>
    <div class="over-transparency">
        <div class="wow fadeIn intro-contenido ">
            <span class="mega-title"><?php echo $post->post_title; ?></span>
        </div>
    </div>
</header>
<div class="container">
    <div class="row padding-bottomtop-10">
        <div class="col-md-8">
            <h2>Descripción</h2>
            <?php echo apply_filters('the_content', $post->post_content); ?>
        </div>
        <div class="col-md-4">
            <h2>Tecnologías</h2>
            <?php $tecnologias_usadas = wp_get_post_terms($post->ID, 'tecnologia_usada'); ?> 

            <?php foreach ($tecnologias_usadas as $indice => $tecnologia): ?>
                <?php
                $icono = get_field('tecnologias_usadas_icono', $tecnologia);
                $icono_url = "";
                if (isset($icono['url'])) {
                    $icono_url = $icono['url'];
                }
                ?>
                <img class="item-tecnologias" data-toggle="tooltip" title="<?php echo $tecnologia->name ?>" src="<?php echo $icono_url; ?>">
            <?php endforeach; ?>
        </div>
    </div>

</div>

<?php $images = get_field('portafolio_galeria'); ?>

<?php if ($images): ?>
    <div class="container">
        <div class="owl-carousel">
            <?php foreach ($images as $indice => $image): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <?php endforeach; ?>

        </div>
    </div>
<?php endif; ?>


<?php $format_left = '<button class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> %link </button>'; ?>
<?php $format_right = '<button class="btn btn-primary"> %link <i class="fa fa-arrow-right" aria-hidden="true"></i></button>'; ?>
<div class="container">
    <div class="row padding-bottomtop-10">
        <div class="col-xs-4 text-left">
            <?php previous_post_link($format_left, "Anterior", $in_same_term = false, $excluded_terms = '', $taxonomy = 'category'); ?>
        </div>
        <div class="col-xs-4 text-center">
            <a class="btn btn-primary" href="<?php echo get_home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
        </div>
        <div class="col-xs-4 text-right">
            <?php next_post_link($format_right, "Siguiente", $in_same_term = false, $excluded_terms = '', $taxonomy = 'category'); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel(
                {
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    autoplay: true,
                    navText: ["Anterior", "Siguiente"],
                    navContainerClass: "owl-nav col-xs-12 text-center padding-bottomtop-10",
                    navClass: ["owl-prev btn btn-success margin-leftright-8", " owl-next btn btn-success margin-leftright-8"],
                    autoHeight: true,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 3,
                        },
                        1000: {
                            items: 5,
                        }
                    }
                }
        );
    });
</script>