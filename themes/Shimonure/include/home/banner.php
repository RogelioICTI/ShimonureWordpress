<?php
$imagen = get_field('admin_home_page_banner_principal', 'options');
if (isset($imagen['url'])) {
    $imagen_url = $imagen['url'];
}
?>
<header class="intro" style="background: url('<?php echo $imagen_url ?>') no-repeat center center fixed;">
    <div class="over-transparency">
    <div class="container">
        
        <div class="banner-info">
            
            <h1><?php echo get_field('admin_home_page_banner_titulo', 'options') ?></h1>
            <p>
                <?php echo get_field('admin_home_page_banner_subtitulo', 'options') ?>           
            </p>

        </div>
    </div>
        </div>
</header>