<?php 
$imagen = get_field('admin_home_page_banner_principal','options');
if(isset($imagen['url'])){
    $imagen_url = $imagen['url'];
}
?>
<header class="intro" style="background: url('<?php echo $imagen_url?>') no-repeat center center fixed;">
    <div class="container">
        <div class="banner-info">
            <h1>Rogelio Vargas Marquez</h1>
            <p>
                Bienvenido, me dedico a eso de la programación y las tecnologías de la información. Me considero un Programador Full Stack y me encantaría poder colaborar contigo.           
            </p>

        </div>
    </div>
</header>