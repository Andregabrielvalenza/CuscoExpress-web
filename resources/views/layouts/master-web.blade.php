<?php use App\Http\Librerias\CaracteresEspeciales;?>
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="/favicon.png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    @yield('meta')
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="/assets-web/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="/assets-web/css/estilos.css">
     <link rel="stylesheet" type="text/css" href="/assets-web/css/animations.css">
</head>
<body style="position: relative;">
<?php
    setlocale(LC_TIME,"es_ES");
?>

<!-- inicio menu -->
<section class="secc_rigurosa w-100 sec_navabsolute">
    <button class="btn btn_close">
        <i class="fas fa-times"></i>
    </button>
    <div class="container text-center padding_left_rigth_nav">
        <a href="/">
           <img src="/assets-web/img/Logo-BYN1-1-.png" class="img_logo_nav"> 
        </a>
        <ul style="list-style-type: none;" class="pl-0 mb-0 mt-5 mt-sm-3 mt-md-5">
            <li>
                <a href="{{route('home')}}" class="link_mnu_nav">Inicio</a>
            </li>
            <div class="linea_menu my-3 my-sm-2 my-md-3"></div>
            <li>
                <a href="{{route('coffeShop')}}" class="link_mnu_nav">Nuestro café</a>
            </li>
            <div class="linea_menu my-3 my-sm-2 my-md-3"></div>
            <li>
                <a href="{{route('sobre-nosotros')}}" class="link_mnu_nav">Sobre nosotros</a>
            </li>
            <div class="linea_menu my-3 my-sm-2 my-md-3"></div>
            <li>
                <a href="{{route('recertario')}}" class="link_mnu_nav">Recetas</a>
            </li>
            <div class="linea_menu my-3 my-sm-2 my-md-3"></div>
            <li>
                <a href="{{route('blog')}}" class="link_mnu_nav">Blog</a>
            </li>
            <div class="linea_menu my-3 my-sm-2 my-md-3"></div>
            <li>
                <a href="{{route('contacto')}}" class="link_mnu_nav">Contactanos</a>
            </li>
        </ul>
    </div>
</section>

<section class="sec_nav position-relative">
    <a href="/">
       <img src="/assets-web/img/Logo-BYN1-1-.png" class="logo_nav"> 
    </a>
    <div class="div_nav position-relative">
        <img src="/assets-web/img/ad34b0e790168e0c4db02b62230f2aa8.png" class="img_nav">   
        <button class="btn btn_menu"><i class="fas fa-bars"></i></button>
    </div>
</section>
<!-- fin de menu -->
@yield('cuerpo')
<footer class="footer_fondo bajar_seccion_todos">
    <div class="container con_footer">
        <div class="row m-0 row_footer">
            <div class="col-12 px-0 bajar_logo_footer">
                <div class="row m-0 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-6 col-sm-3 col-lg-2 px-0">
                        <img src="/assets-web/img/Grupo395.png" width="100%">
                    </div>
                    <div class="col-md-12 col-lg-9 col-xl-8 px-0 bajar_list_footer">
                        <ul style="list-style-type: none;" class="pl-0 d-flex flex-wrap mb-0 justify-content-center justify-content-lg-end">
                            <li class="mr-sm-2 mr-md-3 mr-lg-4 list_footer mb-3 mb-sm-0">
                                <a href="" class="link_footer">Home</a>
                            </li>
                            <li class="mr-sm-2 mr-md-3 mr-lg-4 list_footer mb-3 mb-sm-0">
                                <a href="" class="link_footer">Our coffee</a>
                            </li>
                            <li class="mr-sm-2 mr-md-3 mr-lg-4 list_footer mb-3 mb-sm-0">
                                <a href="" class="link_footer">La empresa</a>
                            </li>
                            <li class="mr-sm-2 mr-md-3 mr-lg-4 list_footer mb-3 mb-sm-0">
                                <a href="" class="link_footer">Compromiso social</a>
                            </li>
                            <li class="mr-sm-2 mr-md-3 mr-lg-4 list_footer mb-3 mb-sm-0">
                                <a href="" class="link_footer">Recetario</a>
                            </li>
                            <li class="mr-sm-2 mr-md-3 mr-lg-4 list_footer mb-3 mb-sm-0">
                                <a href="" class="link_footer">Blog</a>
                            </li>
                            <li class="list_footer">
                                <a href="" class="link_footer">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center justify-content-sm-between flex-wrap px-0">
                <p class="p_footer_todos">Todos los derechos reservados. 2019.</p>
                <p class="p_footer_todos">Desarrollado por <a href="https://puntopro.pe/" target="_blank" class="link_pro">PuntoPro</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="/assets-web/js/jquery.min.js"></script>
<script src="/assets-web/js/popper.min.js"></script>
<script src="/assets-web/js/bootstrap.min.js"></script>
<script src="/assets-web/js/css3-animate-it.js"></script>
<script>
$(document).ready(function(){
 
    $('.btn_menu').click(function(){
       $('.sec_navabsolute').slideDown();
    });

    $('.btn_close').click(function(){
        $('.sec_navabsolute').slideUp();
    });

});
</script>
@yield('script')
</body>
</html>