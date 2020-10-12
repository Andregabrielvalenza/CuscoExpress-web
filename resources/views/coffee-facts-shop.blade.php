<?php use App\Http\Librerias\CaracteresEspeciales;?>
@extends('layouts.master-web')
@section('title','Cusco Express')
@section('cuerpo')

	<section class="sec_fondo">
		<div class="div_fondo position-relative">
			<img src="/assets-web/img/Sin-titulo-15.jpg" class="img_fondo">
			<h1 class="h1_blanco">Café info & catálogo</h1>
		</div>
	</section>
	<section class="bajar_seccion_todos">
		<div class="container">
			<div class="row m-0 justify-content-center">
				<div class="col-12 text-center">
					<p class="p_descripcion_book_ac">Del corazón de la ceja de selva nos llevamos el placer y el agradecimiento de las familias de los agricultores, a quienes admiramos y tenemos gran aprecio por su trabajo demostrado en los sembríos cafetaleros durante mas de una década de trabajo conjunto.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="sec_fondo_produc bajar_seccion_todos">
		<div class="container">
			<div class="d-flex flex-wrap justify-content-center animatedParent" data-sequence='500'>
				<div class="div_producto_genral animated fadeInUp" data-id='1'>
					<div class="div_produc">
						<img src="/assets-web/img/1.png" class="img_produc">
					</div>
					<div>
						<div class="div_titulo_produc py-2 my-3">
							<h6 class="h6_atri my-0 text-center">Tueste medio</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_produ_dos">Gran aroma, mayor acidez con toques cítricos persistentes.</p>
						<a href="{{route('producto')}}" class="btn btn_list_proc">Conoce más ></a>
					</div>
				</div>
				<div class="div_producto_genral animated fadeInUp" data-id='2'>
					<div class="div_produc">
						<img src="/assets-web/img/2.png" class="img_produc">
					</div>
					<div>
						<div class="div_titulo_produc py-2 my-3">
							<h6 class="h6_atri my-0 text-center">Sabor Peruano</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_produ_dos">Sabor balanceado, buen cuerpo y aromas frutales.</p>
						<a href="" class="btn btn_list_proc">Conoce más ></a>
					</div>
				</div>
				<div class="div_producto_genral animated fadeInUp" data-id='3'>
					<div class="div_produc">
						<img src="/assets-web/img/3.png" class="img_produc">
					</div>
					<div>
						<div class="div_titulo_produc py-2 my-3">
							<h6 class="h6_atri my-0 text-center">Tueste Oscuro</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_produ_dos">Sabor intenso, baja acidez, con gran cuerpo, y notas a chocolate</p>
						<a href="" class="btn btn_list_proc">Conoce más ></a>
					</div>
				</div>
				<div class="div_producto_genral animated fadeInUp" data-id='4'>
					<div class="div_produc">
						<img src="/assets-web/img/4.png" class="img_produc">
					</div>
					<div>
						<div class="div_titulo_produc py-2 my-3">
							<h6 class="h6_atri my-0 text-center">Sabor intenso</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_produ_dos">Gran aroma, mayor acidez con toques cítricos persistentes.</p>
						<a href="" class="btn btn_list_proc">Conoce más ></a>
					</div>
				</div>
				<div class="div_producto_genral animated fadeInUp" data-id='5'>
					<div class="div_produc">
						<img src="/assets-web/img/5.png" class="img_produc">
					</div>
					<div>
						<div class="div_titulo_produc py-2 my-3">
							<h6 class="h6_atri my-0 text-center">Gift wrap</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_produ_dos">Sabor balanceado, buen cuerpo y aromas frutales.</p>
						<a href="" class="btn btn_list_proc">Conoce más ></a>
					</div>
				</div>
				<div class="div_producto_genral animated fadeInUp" data-id='6'>
					<div class="div_produc">
						<img src="/assets-web/img/6.png" class="img_produc">
					</div>
					<div>
						<div class="div_titulo_produc py-2 my-3">
							<h6 class="h6_atri my-0 text-center">Granos enteros</h6>
						</div>
						<p class="p_descripcion_book_ac p_cantidad_produ_dos">Sabor intenso, baja acidez, con gran cuerpo, y notas a chocolate</p>
						<a href="" class="btn btn_list_proc">Conoce más ></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
@endsection