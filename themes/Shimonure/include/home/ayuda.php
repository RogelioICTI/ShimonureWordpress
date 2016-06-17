<div class="container padding-bottomtop-40">
    <div class="row">
        <div class="col-xs-12 text-center padding-bottom-20">
            <h1><?php echo get_field('admin_home_page_contacto_titulo', 'options'); ?></h1>
        </div>
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="contacto-item-home padding-leftright-10 padding-ayuda">
                <h3><b>Ponte en contacto conmigo.</b></h3>
                <ul class="datos-contacto">
                    <!--Télefono-->
                    <li>
                        <a href="tel:5591101300">
                            <i style="font-size: 28px;" class="fa fa-mobile"></i>(55) 9110-1300
                        </a>
                    </li>

                    <!--Email-->
                    <li>
                        <a href="mailto:rogelio.vargas.marquez@gmail.com">
                            <i style="font-size: 22px;" class="fa fa-at"></i>rogelio.vargas.marquez@gmail.com
                        </a>
                    </li>

                    <!--Skype-->
                    <li>
                        <a href="skype:shimonureyue?chat">
                            <i style="font-size: 22px;" class="fa fa-skype"></i>shimonureyue
                        </a>
                    </li>

                    <!--Linkedin-->
                    <li>
                        <a href="https://www.linkedin.com/in/rogeliovargasmarquez">
                            <i style="font-size: 22px;" class="fa fa-linkedin-square"></i>linkedin
                        </a>
                    </li>                    
                </ul>
            </div>
            <div class="margin-top-15">
                <a class="btn btn-primary fs-18 btn-arrow" href="<?php echo get_field('admin_home_page_contacto_url', 'options');?>">Ir a la sección de contacto &nbsp; <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>

        <?php
        $imagen_contacto = get_field('admin_home_page_contacto_imagen', 'options');
        $imagen_contacto_url = "";
        if (isset($imagen_contacto['url'])) {
            $imagen_contacto_url = $imagen_contacto['url'];
        }
        ?>

        <div class="col-md-6 hidden-sm hidden-xs" align="center">
            <img  class="wow flipInY img-responsive" src="<?php echo $imagen_contacto_url;?>">
        </div>
    </div>
</div>

