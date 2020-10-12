<?php use App\Http\Librerias\CaracteresEspeciales;?>
@extends('layouts.master-web')
@section('title','Cusco Express')
@section('cuerpo')

	<section class="sec_fondo">
		<div class="div_fondo position-relative">
			<img src="/assets-web/img/anete-lusina-609858-unsplash.png" class="img_fondo">
			<h1 class="h1_blanco">Blog</h1>
		</div>
	</section>
	<section class="bajar_seccion_todos">
		<div class="container">
			<div class="row m-0 justify-content-center animatedParent" data-sequence='500'>
				<div class="col-sm-10 col-md-8 col-lg-12 px-lg-4 mb-5 animated fadeInUp" data-id='1'>
					<div class="row m-0 justify-content-center">
						<div class="col-lg-7 col-xl-7 text-center text-lg-right mt-3 pr-lg-4 order-2 order-lg-0 px-0 px-lg-3">
							<div class="div_titulo_blog pb-1">
								<h6 class="h6_atri mb-0 text-center text-lg-left">Soy el titulo de este articulo</h6>
							</div>
							<p class="p_blog_pequq mb-0 mt-2 text-center text-lg-left">24.12.18 l. Publicado por: Milagros Liñan.</p>
							<p class="p_descripcion_book_ac mt-2 text-center text-lg-left p_cantidad_cuatro_blog">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de .</p>
							<a href="{{route('blog-detalle')}}" class="btn btn_blog">Leer más</a>
						</div>
						<div class="col-lg-5 col-xl-4 px-0 px-lg-3">
							<div class="div_img_blog">
								<img src="/assets-web/img/Sin-titulo-17.jpg" class="img_produc">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-8 col-lg-12 px-lg-4 mb-5 animated fadeInUp" data-id='2'>
					<div class="row m-0 justify-content-center">
						<div class="col-lg-7 col-xl-7 text-center text-lg-right mt-3 pr-lg-4 order-2 order-lg-0 px-0 px-lg-3">
							<div class="div_titulo_blog pb-1">
								<h6 class="h6_atri mb-0 text-center text-lg-left">Soy el titulo de este articulo</h6>
							</div>
							<p class="p_blog_pequq mb-0 mt-2 text-center text-lg-left">24.12.18 l. Publicado por: Milagros Liñan.</p>
							<p class="p_descripcion_book_ac mt-2 text-center text-lg-left p_cantidad_cuatro_blog">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de .</p>
							<a href="" class="btn btn_blog">Leer más</a>
						</div>
						<div class="col-lg-5 col-xl-4 px-0 px-lg-3">
							<div class="div_img_blog">
								<img src="/assets-web/img/Sin-titulo-16.jpg" class="img_produc">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-8 col-lg-12 px-lg-4 mb-5 animated fadeInUp" data-id='3'>
					<div class="row m-0 justify-content-center">
						<div class="col-lg-7 col-xl-7 text-center text-lg-right mt-3 pr-lg-4 order-2 order-lg-0 px-0 px-lg-3">
							<div class="div_titulo_blog pb-1">
								<h6 class="h6_atri mb-0 text-center text-lg-left">Soy el titulo de este articulo</h6>
							</div>
							<p class="p_blog_pequq mb-0 mt-2 text-center text-lg-left">24.12.18 l. Publicado por: Milagros Liñan.</p>
							<p class="p_descripcion_book_ac mt-2 text-center text-lg-left p_cantidad_cuatro_blog">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de .</p>
							<a href="" class="btn btn_blog">Leer más</a>
						</div>
						<div class="col-lg-5 col-xl-4 px-0 px-lg-3">
							<div class="div_img_blog">
								<img src="/assets-web/img/Sin-titulo-23.jpg" class="img_produc">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-8 col-lg-12 px-lg-4 mb-5 animated fadeInUp" data-id='4'>
					<div class="row m-0 justify-content-center">
						<div class="col-lg-7 col-xl-7 text-center text-lg-right mt-3 pr-lg-4 order-2 order-lg-0 px-0 px-lg-3">
							<div class="div_titulo_blog pb-1">
								<h6 class="h6_atri mb-0 text-center text-lg-left">Soy el titulo de este articulo</h6>
							</div>
							<p class="p_blog_pequq mb-0 mt-2 text-center text-lg-left">24.12.18 l. Publicado por: Milagros Liñan.</p>
							<p class="p_descripcion_book_ac mt-2 text-center text-lg-left p_cantidad_cuatro_blog">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de .</p>
							<a href="" class="btn btn_blog">Leer más</a>
						</div>
						<div class="col-lg-5 col-xl-4 px-0 px-lg-3">
							<div class="div_img_blog">
								<img src="/assets-web/img/Sin-titulo-19.jpg" class="img_produc">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-md-8 col-lg-12 px-lg-4 mb-5 animated fadeInUp" data-id='5'>
					<div class="row m-0 justify-content-center">
						<div class="col-lg-7 col-xl-7 text-center text-lg-right mt-3 pr-lg-4 order-2 order-lg-0 px-0 px-lg-3">
							<div class="div_titulo_blog pb-1">
								<h6 class="h6_atri mb-0 text-center text-lg-left">Soy el titulo de este articulo</h6>
							</div>
							<p class="p_blog_pequq mb-0 mt-2 text-center text-lg-left">24.12.18 l. Publicado por: Milagros Liñan.</p>
							<p class="p_descripcion_book_ac mt-2 text-center text-lg-left p_cantidad_cuatro_blog">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de .</p>
							<a href="" class="btn btn_blog">Leer más</a>
						</div>
						<div class="col-lg-5 col-xl-4 px-0 px-lg-3">
							<div class="div_img_blog">
								<img src="/assets-web/img/Sin-titulo-19.jpg" class="img_produc">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
@endsection