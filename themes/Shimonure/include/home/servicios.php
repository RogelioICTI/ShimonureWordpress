<?php
$args = array(
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order' => 'ASC',
    'post_type' => 'servicio',
    'post_status' => 'publish',
);

$servicios = get_posts($args);
?>

<div class="white-section">
    <div class="container padding-bottomtop-40">
        <div class="row">
            <div class="col-xs-12 padding-bottom-15">
                <h1><?php echo get_field('admin_home_page_servicios_titulo', 'options'); ?></h1>
            </div>
        </div>

        <div class=" row text-center">
            <?php foreach ($servicios as $indice => $servicio): ?>

                <script>
                    $(document).ready(function () {
                        console.log($("#columna-servicio-<?php echo $indice; ?>").height());
                        ;
                    });
                </script>
                <div id="columna-servicio-<?php echo $indice; ?>" class="col-md-4 col-sm-6 col-xs-12 text-center padding-bottomtop-10 column-center">
                    <script>
                        $(document).ready(function () {
                            $("#servicio-item-<?php echo $indice; ?>").hover(
                                    function () {
                                        $(this).css('border', '2px solid <?php echo get_field('servicio_color_general', $servicio->ID) ?>');
                                    },
                                    function () {
                                        $(this).css('border', '2px solid #B1B19C');
                                    }
                            );
                        });
                    </script>
                    <style>
                        @media (max-width:768px){
                            #servicio-item-<?php echo $indice; ?>{
                                border: 2px solid <?php echo get_field('servicio_color_general', $servicio->ID) ?>;
                            }
                        }
                    </style>
                    <!--<a class="no-underline" href="<?php echo get_permalink($servicio->ID); ?>">-->
                    <div class=" wow bounceInUp">
                        <a class="no-underline" href="<?php echo get_permalink($servicio->ID); ?>">
                            <div id="servicio-item-<?php echo $indice; ?>" class=" servicio-item-home effect8 ">
                                <?php
                                $icono = get_field('servicio_icono_home', $servicio->ID);
                                $icono_url = "";
                                if (isset($icono['url'])) {
                                    $icono_url = $icono['url'];
                                }
                                ?>

                                <img class="icono-servicio" src="<?php echo $icono_url; ?>" alt="">
                                <h2><?php echo $servicio->post_title; ?></h2>
                                <p><?php echo $servicio->post_excerpt; ?></p>

                            </div>
                        </a>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>
        <!--
        <div class="col-xs-12">
            <div class="margin-top-10">
                <a class="btn btn-primary fs-18 btn-arrow" href="page-servicios.php">Ir a Servicios &nbsp; <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
        -->

    </div>
</div>

<?php
$imagen_div = get_field('admin_home_page_servicios_imagen_division', 'options');
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
        equalheight("div[id^='servicio-item']");
    });


    $(window).resize(function () {
        equalheight("div[id^='servicio-item']");
    });

</script>

