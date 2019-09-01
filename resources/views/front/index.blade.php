@extends('front.template')

@section('pageTitle', 'Página de inicio')

@section('mainContent')

  <div class="home">
    <div class="row">
      <div class="col-12">
          <img class="img-home" src="/images/home.jpg" alt="home-brakeup">
      </div>
    </div>
  </div>

	<div id="seguinos-ig" class="banner-insta">
    <div class="row">
      <div class="col-12">
          <h3>SEGUINOS EN INSTAGRAM @BRAKEUPOFICIAL</h3>
      </div>
    </div>
  </div>


	<div id="mapa-google" class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.0618019444473!2d-58.479768849812125!3d-34.627878480357325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc993aeaf67d3%3A0x4733e2e264a30322!2sBrake%20Up!5e0!3m2!1ses-419!2sar!4v1566957011642!5m2!1ses-419!2sar" width="100%" height="600	" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>

	<div id="banner-wh" class="banner-insta">
		<div class="row">
			<div class="col-12">
					<a id="texto-wh" href="https://api.whatsapp.com/send?phone=5491130494150&text=Me%20contacto%20para%20realizar%20un%20pedido" target="_blank">HACE CLIC AQUI Y CONTACTANOS VIA WHATSAPP...TE RESPONDEREMOS A LA BREVEDAD</a>
			</div>
		</div>
	</div>
	<br>
	<div class="base-form">
		<!-- start base texts -->
		<div class="base-textos">
			<div class="row">
				<div class="col-6">
					<div class="titulo-contacto">
							<h3>CONTACTO</h3>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="texto-contacto">
							<p>Comunicate con nosotros por whatsapp, e-mail, redes sociales o completando el siguiente formulario para consultas y presupuestos mayoristas. Dentro de las 24 hs. nos estaremos comunicando con vos.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="iconos-contacto">
							<i class="fab fa-instagram"> brakeupofficial </i>
						<br>
						<i class="fab fa-whatsapp"> 1156765676</i>
						<br>
						<i class="far fa-envelope"> mayoristas@brakeup.com.ar</i>
						<br>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-6">
					<div class="sucursales-contacto">
							<span>Local Mayorista</span>
							<br>
							<i class="fas fa-map-marker-alt"> Concordia 407</i>
							<br>
							<i class="fab fa-whatsapp"> 4671-5231</i>
							<br>

						<br>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-6">
					<div class="sucursales-contacto">
							<span>Outlet</span>
							<br>
							<i class="fas fa-map-marker-alt"> Helguera 396</i>
							<br>
							<i class="fab fa-whatsapp"> 4612-1362</i>
							<br>

						<br>
					</div>
				</div>
			</div>



		</div>
		<!-- end base texts -->

		<!-- start base inputs -->
		<div class="base-inputs">
			<div class="row">
				<div class="col-6">
					<form class="contact" action="" method="post">

						<input id="input-sm" type="text" name="nombre" value="NOMBRE">
						<br>
						<br>
						<input id="input-sm" type="email" name="email" value="EMAIL">
						<br>
						<br>
						<input id="input-md" type="text" name="mensaje" value="MENSAJE">
						<br>
						<br>
						<button id="button-form" type="submit" name="button">ENVIAR</button>
						<br>
						<br>
					</form>
				</div>
			</div>
		</div>
		<!-- end base inputs -->
	</div>





	<div class="btn-whatsapp">
		<a id="btn-wh" href="https://api.whatsapp.com/send?phone=5491130494150&text=Me%20contacto%20para%20realizar%20un%20pedido" target="_blank">
			<i id="btn-icon" class="fab fa-whatsapp"></i>
		</a>
	</div>

<script src="/js/navbar.js"></script>
@endsection
