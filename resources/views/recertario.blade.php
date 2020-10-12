<?php use App\Http\Librerias\CaracteresEspeciales;?>
@extends('layouts.master-web')
@section('title','Cusco Express')
@section('cuerpo')

	<section class="sec_fondo">
		<div class="div_fondo position-relative">
			<img src="/assets-web/img/nathan-dumlao-vbt-Fp3b5FA-unsplash.png" class="img_fondo">
			<h1 class="h1_blanco">Recertario</h1>
		</div>
	</section>
	<section class="bajar_seccion_todos">
		<div class="container">
			<div class="d-flex flex-wrap justify-content-center animatedParent" data-sequence='500'>
				<div class="div_recetario_genral mb-5 animated fadeInUp" data-id='1'>
					<div class="div_recetario">
						<img src="/assets-web/img/Sin-titulo-17.jpg" class="img_produc">
					</div>
					<div class="text-center">
						<div class="div_titulo_recetario pb-1">
							<h6 class="h6_recetario my-0 text-left">Soy el titulo de un receta deliciosa</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_rece_tres text-left mt-1">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
						<a href="{{route('recerta-detalle')}}" class="btn btn_list_recetario">Probar</a>
					</div>
				</div>
				<div class="div_recetario_genral mb-5 animated fadeInUp" data-id='2'>
					<div class="div_recetario">
						<img src="/assets-web/img/Sin-titulo-24.jpg" class="img_produc">
					</div>
					<div class="text-center">
						<div class="div_titulo_recetario pb-1">
							<h6 class="h6_recetario my-0 text-left">Receta #1 de algo</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_rece_tres text-left mt-1">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
						<a href="" class="btn btn_list_recetario">Probar</a>
					</div>
				</div>
				<div class="div_recetario_genral mb-5 animated fadeInUp" data-id='3'>
					<div class="div_recetario">
						<img src="/assets-web/img/Sin-titulo-21.jpg" class="img_produc">
					</div>
					<div class="text-center">
						<div class="div_titulo_recetario pb-1">
							<h6 class="h6_recetario my-0 text-left">Receta #1 de algo</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_rece_tres text-left mt-1">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
						<a href="" class="btn btn_list_recetario">Probar</a>
					</div>
				</div>
				<div class="div_recetario_genral mb-5 animated fadeInUp" data-id='4'>
					<div class="div_recetario">
						<img src="/assets-web/img/Sin-titulo-18.jpg" class="img_produc">
					</div>
					<div class="text-center">
						<div class="div_titulo_recetario pb-1">
							<h6 class="h6_recetario my-0 text-left">Soy el titulo de un receta deliciosa</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_rece_tres text-left mt-1">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
						<a href="" class="btn btn_list_recetario">Probar</a>
					</div>
				</div>
				<div class="div_recetario_genral mb-5 animated fadeInUp" data-id='5'>
					<div class="div_recetario">
						<img src="/assets-web/img/Sin-titulo-16.jpg" class="img_produc">
					</div>
					<div class="text-center">
						<div class="div_titulo_recetario pb-1">
							<h6 class="h6_recetario my-0 text-left">Receta #1 de algo</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_rece_tres text-left mt-1">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
						<a href="" class="btn btn_list_recetario">Probar</a>
					</div>
				</div>
				<div class="div_recetario_genral mb-5 animated fadeInUp" data-id='6'>
					<div class="div_recetario">
						<img src="/assets-web/img/Sin-titulo-22.jpg" class="img_produc">
					</div>
					<div class="text-center">
						<div class="div_titulo_recetario pb-1">
							<h6 class="h6_recetario my-0 text-left">Receta #1 de algo</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_rece_tres text-left mt-1">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
						<a href="" class="btn btn_list_recetario">Probar</a>
					</div>
				</div>
				<div class="div_recetario_genral mb-5 animated fadeInUp" data-id='7'>
					<div class="div_recetario">
						<img src="/assets-web/img/Sin-titulo-20.jpg" class="img_produc">
					</div>
					<div class="text-center">
						<div class="div_titulo_recetario pb-1">
							<h6 class="h6_recetario my-0 text-left">Soy el titulo de un receta deliciosa</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_rece_tres text-left mt-1">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
						<a href="" class="btn btn_list_recetario">Probar</a>
					</div>
				</div>
				<div class="div_recetario_genral mb-5 animated fadeInUp" data-id='8'>
					<div class="div_recetario">
						<img src="/assets-web/img/Sin-titulo-19.jpg" class="img_produc">
					</div>
					<div class="text-center">
						<div class="div_titulo_recetario pb-1">
							<h6 class="h6_recetario my-0 text-left">Receta #1 de algo</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_rece_tres text-left mt-1">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
						<a href="" class="btn btn_list_recetario">Probar</a>
					</div>
				</div>
				<div class="div_recetario_genral mb-5 animated fadeInUp" data-id='9'>
					<div class="div_recetario">
						<img src="/assets-web/img/Sin-titulo-23.jpg" class="img_produc">
					</div>
					<div class="text-center">
						<div class="div_titulo_recetario pb-1">
							<h6 class="h6_recetario my-0 text-left">Receta #1 de algo</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_rece_tres text-left mt-1">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
						<a href="" class="btn btn_list_recetario">Probar</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
@endsection