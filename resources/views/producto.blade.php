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
	<section class="bajar_seccion_todos sec_fondo_produc">
		<div class="container">
			<div class="d-flex flex-wrap align-items-center">
				<div class="div_producto">
					<div class="px-4">
						<div class="div_boder_bottom_detalle px-lg-1 d-flex justify-content-between align-items-center">
							<h2 class="h6_especial text-center text-lg-left mb-0">Tueste medio</h2>
							<p class="p_blog_pequq mb-0">250 gr.</p>
						</div>
						<p class="p_descripcion_book_ac my-3">Gran aroma, mayor acidez con toques cítricos persistentes.</p>
					</div>
					<div class="d-flex flex-wrap">
						<div class="w-100 boder_complaeto_pro px-3 py-2 d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start">
							<img src="/assets-web/img/Grupo384.png" class="img_icon_cafe">
							<div class="ml-2 divline_pro text-center text-sm-left">
								<p class="p_hel_bold_pro mb-0">Sabor</p>
								<p class="p_descripcion_book_ac my-0">Mayor acidez con toque cítricos persistentes</p>
							</div>
						</div>
						<div class="div_cuatro_iguales px-3 py-2 border_left_produc d-flex flex-wrap align-items-center">
							<img src="/assets-web/img/Grupo383.png" class="img_icon_cafe">
							<div class="ml-2 divline_pro">
								<p class="p_hel_bold_pro mb-0">Aroma</p>
								<p class="p_descripcion_book_ac my-0">Suave</p>
							</div>
						</div>
						<div class="div_cuatro_iguales px-3 py-2 border_left_produc d-flex flex-wrap align-items-center border_right_celular">
							<img src="/assets-web/img/Grupo382.png" class="img_icon_cafe">
							<div class="ml-2 divline_pro">
								<p class="p_hel_bold_pro mb-0">Acidez</p>
								<p class="p_descripcion_book_ac my-0">Baja</p>
							</div>
						</div>
						<div class="div_cuatro_iguales px-3 py-2 border_left_produc d-flex flex-wrap align-items-center">
							<img src="/assets-web/img/Grupo381.png" class="img_icon_cafe">
							<div class="ml-2 divline_pro">
								<p class="p_hel_bold_pro mb-0">Moliendo</p>
								<p class="p_descripcion_book_ac my-0">Medio</p>
							</div>
						</div>
						<div class="div_cuatro_iguales px-3 py-2 border_left_right_produc d-flex flex-wrap align-items-center">
							<img src="/assets-web/img/Grupo380.png" class="img_icon_cafe">
							<div class="ml-2 divline_pro">
								<p class="p_hel_bold_pro mb-0">Tueste</p>
								<p class="p_descripcion_book_ac my-0">Oscuro</p>
							</div>
						</div>
					</div>
					<div class="px-4">
						<p class="p_descripcion_book_ac mt-3">De granos pilados y seleccionados de los mejores cultivos de alta montaña, el tueste medio es producto de un proceso de tostado entre 200 a 220 grados centígrados por alrededor de aproximadamente de 1 020 segundos y a vista de los expertos antes del segundo sonido característico del tueste o como lo suelen llamar “crack”.</p>
						<div class="d-flex flex-wrap my-5">
							<div class="div_detalle px-2">
								<div class="div_img_detalle_produc">
									<img src="/assets-web/img/Sin-titulo-25.jpg" class="img_produc">
								</div>
							</div>
							<div class="div_detalle px-2 mt-2 mt-sm-0">
								<div class="div_img_detalle_produc">
									<img src="/assets-web/img/Sin-titulo-26.jpg" class="img_produc">
								</div>
							</div>
						</div>
						<p class="p_descripcion_book_ac">
							Una vez tostado se procede con el enfriamiento a succión de aire hasta llegar a temperatura ambiente, donde es transportado al molino regulado a molienda media.<br><br> Nuestra preocupación por mantener el buen aroma del café, nos ha obligado a desarrollar técnicas de envasado al vacío las cuales consisten en extraer el aire del envase para eliminar el contacto de factores externos como el oxígeno y la humedad, evitando la oxidación del café.<br><br> La oxidación del café es un proceso químico por el cual las proteínas del café reaccionan al oxigeno, es decir que a mayor contacto de factores externos del producto la durabilidad de sus propiedades disminuye.
						</p>
					</div>
				</div>
				<div class="div_producto justify-content-center padding_lef_rigt">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="/assets-web/img/medio.png" class="d-block img_produc" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="/assets-web/img/5.png" class="d-block img_produc" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="/assets-web/img/3.png" class="d-block img_produc" alt="...">
					    </div>
					  </div>
					</div>
					<a href="" class="btn btn_slider">Consulta precios</a>
				</div>
			</div>
		</div>
	</section>
	
@endsection