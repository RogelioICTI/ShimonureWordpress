<div class="white-section">
    <div class="container padding-bottomtop-40">
        <div class="col-md-8 col-sm-12">
            <h1 class="padding-bottom-15"><?php echo get_field('admin_home_page_aboutme_titulo', 'options'); ?></h1>

            <?php echo get_field('admin_home_page_aboutme_mensaje', 'options'); ?>

            <div class="margin-top-20">
                <a class="btn btn-primary fs-18 btn-arrow" href="<?php echo get_field('admin_home_page_aboutme_url_sobremi', 'options'); ?>">Más sobre mí &nbsp; <i class="fa fa-user"></i></a>
                &nbsp;
                <a class="btn btn-primary fs-18 btn-arrow" href="<?php echo get_field('admin_home_page_aboutme_url_curriculum', 'options'); ?>">Mi currículum &nbsp; <i class="fa fa-file-text-o"></i></a>
            </div>
        </div>
        <div class="col-md-4 text-center hidden-sm hidden-xs">
            <?php
            $imagen = get_field('admin_home_page_aboutme_imagen', 'options');
            $imagen_url = "";
            if (isset($imagen['url'])) {
                $imagen_url = $imagen['url'];
            }
            ?>
            <img class="img-responsive img-rounded " src="<?php echo $imagen_url; ?>">
        </div>

        <!--<div style="height: 400px" align="center"><h1 >About Me</h1></div>-->

    </div>
</div>

<?php
$imagen_div = get_field('admin_home_page_aboutme_imagen_division', 'options');
$imagen_div_url = "";
if (isset($imagen_div['url'])) {
    $imagen_div_url = $imagen_div['url'];
}
?>
<div class="division-codigo" style="background-image:url('<?php echo $imagen_div_url; ?>');">
    <div class="over-transparency"></div>
</div>