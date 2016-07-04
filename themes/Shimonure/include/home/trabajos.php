<?php
$args = array(
    'posts_per_page' => 6,
    'orderby' => 'rand',
    'order' => 'ASC',
    'post_type' => 'portafolio',
    'post_status' => 'publish',
);

$trabajos = get_posts($args);
?>
<div class="white-section">
    <div class="container padding-bottomtop-40">
        <div class="row">
            <div class="col-xs-12 padding-bottom-15">
                <h1><?php echo get_field('admin_home_page_portafolio_titulo', 'options'); ?></h1>
            </div>
        </div>
        <div id="row-trabajos" class="row text-center">
            <?php foreach ($trabajos as $indice => $trabajo): ?>

                <div id="columna-item-<?php echo $indice; ?>" class="col-md-4 col-sm-6 text-justify padding-bottomtop-10  column-center">
                    <script>
                        $(document).ready(function () {
                            $("#trabajo-item-<?php echo $indice; ?>").hover(
                                    function () {
                                        $(this).css('border', '2px solid <?php echo get_field('portafolio_color_general', $trabajo->ID) ?>');
                                    },
                                    function () {
                                        $(this).css('border', '2px solid #B1B19C');
                                    }
                            );
                        });
                    </script>
                    <style>
                        @media (max-width:768px){
                            #trabajo-item-<?php echo $indice; ?>{
                                border: 2px solid <?php echo get_field('portafolio_color_general', $trabajo->ID) ?>;
                            }
                        }
                    </style>
                    <div class="wow fadeInUp fullHeight">
                        <div id="trabajo-item-<?php echo $indice; ?>" class="trabajo-item-home padding-leftright-10 effect8 fullHeight">
                            <?php
                            $imagen = get_field('portafolio_imagen_muestra', $trabajo->ID);
                            $imagen_url = "";
                            if (isset($imagen['url'])) {
                                $imagen_url = $imagen['url'];
                            }
                            ?>
                            <a href="<?php echo get_permalink($trabajo->ID); ?>"><img class="img-responsive" src="<?php echo $imagen_url; ?>"></a>
                            <a href="<?php echo get_permalink($trabajo->ID); ?>"><h3><?php echo $trabajo->post_title; ?></h3></a>
                            <p><?php echo $trabajo->post_excerpt; ?></p>


                            <?php $tecnologias_usadas = wp_get_post_terms($trabajo->ID, 'tecnologia_usada'); ?> 
                            <div class="minibarra-lenguajes">
                                <?php foreach ($tecnologias_usadas as $indice => $tecnologia): ?>
                                    <?php
                                    $icono = get_field('tecnologias_usadas_icono', $tecnologia);
                                    $icono_url = "";
                                    if (isset($icono['url'])) {
                                        $icono_url = $icono['url'];
                                    }
                                    ?>
                                    <img class="item-minibarra" data-toggle="tooltip" title="<?php echo $tecnologia->name ?>" src="<?php echo $icono_url; ?>">
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


<!--
        <div class="col-xs-12">
            <div class="margin-top-10">
                <a class="btn btn-primary fs-18 btn-arrow" href="<?php echo get_field('admin_home_page_portafolio_url', 'options'); ?>">Ir a mi Portafolio &nbsp; <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
-->


    </div>
</div>


<?php
$imagen_div = get_field('admin_home_page_portafolio_imagen_division', 'options');
$imagen_div_url = "";
if (isset($imagen_div['url'])) {
    $imagen_div_url = $imagen_div['url'];
}
?>
<div class="division-codigo" style="background-image:url('<?php echo $imagen_div_url; ?>');">
    <div class="over-transparency"></div>
</div>

<script>
    $(window).load(function () {
        equalheight("div[id^='columna-item' ");
    });
    $(window).resize(function () {
        equalheight("div[id^='columna-item' ");
    });
</script>
