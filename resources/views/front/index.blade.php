@extends('front.template')

@section('pageTitle', 'Brake up - Home')

@section('mainContent')

  <!-- imagen home -->
  <div class="home">
    <div class="row">
      <div class="col-12">
          <img class="img-home" src="/images/home.jpg" alt="home-brakeup">
      </div>
    </div>
  </div>

  <!-- banner instagram -->
	<div id="seguinos-ig" class="banner-insta">
    <div class="row">
      <div class="col-12">
          <h3>SEGUINOS EN INSTAGRAM @BRAKEUPOFICIAL</h3>
      </div>
    </div>
  </div>
  <!-- secciones -->
  <div class="row">
    <div id="secciones" class="secciones col-12">
        <a id="link-seccion" class="col-3" href="/">
          <div id="seccion1" class="seccion1">
            <img id="img-seccion" src="/images/seccion1.jpg" alt="">
            <div id="titulo" class="overlay">
              <span>REMERAS</span>
            </div>
          </div>
        </a>

        <a id="link-seccion" class="col-3" href="/">
          <div id="seccion1" class="seccion1">
            <img id="img-seccion" src="/images/seccion1.jpg" alt="">
            <div id="titulo" class="overlay">
              <span>ABRIGOS</span>
            </div>
          </div>
        </a>
        <a id="link-seccion" class="col-3" href="/">
          <div id="seccion1" class="seccion1">
            <img id="img-seccion" src="/images/seccion1.jpg" alt="">
            <div id="titulo" class="overlay">
              <span>NEWARRIVALS</span>
            </div>
          </div>
        </a>

        <a id="link-seccion" class="col-3" href="/">
          <div id="seccion1" class="seccion1">
            <img id="img-seccion" src="/images/seccion1.jpg" alt="">
            <div id="titulo" class="overlay">
              <span>DENIM</span>
            </div>
          </div>
        </a>

      </div>
    </div>

    <div class="row">
      <div id="secciones" class="secciones col-12">
          <a id="link-seccion" class="col-3" href="/">
            <div id="seccion1" class="seccion1">
              <img id="img-seccion" src="/images/seccion1.jpg" alt="">
              <div id="titulo" class="overlay">
                <span>REMERAS</span>
              </div>
            </div>
          </a>

          <a id="link-seccion" class="col-3" href="/">
            <div id="seccion1" class="seccion1">
              <img id="img-seccion" src="/images/seccion1.jpg" alt="">
              <div id="titulo" class="overlay">
                <span>ABRIGOS</span>
              </div>
            </div>
          </a>
          <a id="link-seccion" class="col-3" href="/">
            <div id="seccion1" class="seccion1">
              <img id="img-seccion" src="/images/seccion1.jpg" alt="">
              <div id="titulo" class="overlay">
                <span>NEWARRIVALS</span>
              </div>
            </div>
          </a>

          <a id="link-seccion" class="col-3" href="/">
            <div id="seccion1" class="seccion1">
              <img id="img-seccion" src="/images/seccion1.jpg" alt="">
              <div id="titulo" class="overlay">
                <span>DENIM</span>
              </div>
            </div>
          </a>

        </div>
      </div>





  <!-- mapa google -->

      <div id="map"></div>
      <script>
  // Initialize and add the map
  function initMap() {
    // The location of Uluru
    var uluru = {lat:-34.627756898772326, lng:-58.47816451193709,};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom:50, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  }
      </script>

      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgbBoiCfWxdnYNyCVc-hquYhTcc7GVYAg&callback=initMap">
      </script>



  <!-- banner whatsapp -->
	<div id="banner-wh" class="banner-wh">
		<div class="row">
			<div class="col-12">
					<a id="texto-wh" href="https://api.whatsapp.com/send?phone=5491130494150&text=Me%20contacto%20para%20realizar%20un%20pedido" target="_blank">HACE CLIC AQUI Y CONTACTANOS VIA WHATSAPP...TE RESPONDEREMOS A LA BREVEDAD</a>
			</div>
		</div>
	</div>
	<br>

  <!-- formulario de contacto -->
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
		<div id="formulario" class="base-inputs">
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


  <!-- boton whatsapp -->
	<div class="btn-whatsapp">
		<a id="btn-wh" href="https://api.whatsapp.com/send?phone=5491130494150&text=Me%20contacto%20para%20realizar%20un%20pedido" target="_blank">
			<i id="btn-icon" class="fab fa-whatsapp"></i>
		</a>
	</div>


<script src="/js/navbar.js"></script>
<script src="/js/map.js"></script>
@endsection
