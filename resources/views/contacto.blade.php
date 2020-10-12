<?php use App\Http\Librerias\CaracteresEspeciales;?>
@extends('layouts.master-web')
@section('title','Cusco Express')
@section('cuerpo')

	<section class="">
		<div class="container-fluid pl-3 pl-sm-5 pl-lg-0 pr-3 pr-sm-5 pr-lg-5">
		<div class="row m-0 justify-content-center justify-content-lg-between">
			<div class="col-6 pl-0 d-none d-lg-block">
				<img src="/assets-web/img/contact-cafe.jpg" width="100%">
			</div>
			<div class="col-12 col-lg-5 text-right bajar_col_contac">
				<h1 class="h6_especial text-center">Contactanos</h1>
				<p class="p_descripcion_book_ac mb-0 text-center">Tomamos un café? Cualquier duda o pregunta, escríbenos y le atenderemos con gusto.</p>
				<div class="div_linea mt-4 mb-3"></div>
				<input type="text" name="" placeholder="Name and last name" class="input_contac px-3 py-1 mb-2">
				<input type="number" name="" placeholder="Phone number" class="input_contac px-3 py-1 mb-2">
				<input type="email" name="" placeholder="E-mail" class="input_contac px-3 py-1 mb-2">
				<select class="select_contac px-3 py-1 mb-2">
					<option>Producto relacionado</option>
				</select>
				<textarea placeholder="Your message" class="textarea_contac px-3 py-1 mb-2"></textarea>
				<button type="ssubmit" class="btn btn_contac">Enviar</button>
			</div>
		</div>
	</section>
	
@endsection