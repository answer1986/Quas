<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="iso, certificacion iso, iso-9001,mejora continua,Procesos organizacionales,ISO 9001,ISO 14001,ISO 45001, ISO 22000,HACCP"/>
    <link rel="shortcut icon" type="imagenes" href="{{asset('img/logoPazBloom.JPG')}}">
    <title>Quas.cl</title>

    <!--LINNK-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link type="text/css" href="{{asset('css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{asset('css/slick.css') }}" rel="stylesheet">

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");
*{margin: 0; padding: 0; box-sizing: border-box; font-family: "Poppins", sans-serif;}


.containers{
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  min-width: auto;
  background-image: url('./img/giphy.gif');
  background-size: cover;
  transition:3s ;
  padding: 2%;


}
.containers .card{
  position: relative;
  padding: 20px;
  margin: 30px;
  height: 400px;
  width: 280px;
  background: rgb(255 255 255 / 10%);
  border-top:1px solid rgba(255, 255, 255, 0.3);
  border-left: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 10px;
  z-index: 1;
  box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
}
.containers .card .content{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 100%;
  color: white;
  text-align: center;
  transform: translateY(100px);
  opacity: 0;
  transition: 0.5s;
}
.containers .card:hover .content{
  transform: translateY(0px); opacity: 1;
}
.containers .card .content h2{
  position: absolute;
  top: -40px;
  right: 0;
  color: rgba(255, 255, 255, 0.1);
  font-size: 8em;
}
.containers .card .content h3{font-size: 1.8em; margin: 5px;}
.containers .card .content a{
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(45deg,  #D6D2D1, #b2427ef2);
  color: white;
  text-decoration: none;
  border-radius: 10px;
  height: 40px;
  width: 160px;
  margin: 15px;
}



#hide{
  display: none;
}


 #botoncito:hover + #hide {
    margin-top: 5px;
    color: #D6D2D1;
    display:block;
    transition: 0.5s;
    text-align: center;
}





  </style>

</head>
<body>
    @yield('redes')
        <section id="headerSection">
              @yield('navbar_top')
              @yield('navbar')
              @yield('banner')

          <br>
          <div class="d-flex justify-content-center" style="font-size: 30px;" id="myCanvasContainer">
              <canvas width="700" height="500" style="font-size: 30px;" id="myCanvas">

              </canvas>
          </div>
          <div  id="tags">
            <ul>
              <li><a id="IMPLEMENTACIONES" href="{{ url('/productos') }}" onclick="MyFunction();return false;"> IMPLEMENTACIONES</a></li>
              <li><a href="{{ url('/productos') }}">CERTIFICACIONES</a></li>
              <li><a href="{{ url('/productos') }}">MEJORAS CONTINUAS</a></li>
              <li><a href="{{ url('/productos') }}">ACTUALIZACIONES</a></li>
              <li><a href="{{ url('/productos') }}">CONFIANZA</a></li>
              <li><a href="{{ url('/productos') }}">QUASMANAGER</a></li>
              <li><a href="{{ url('/productos') }}">CONTROL EN TIEMPO REAL</a></li>
              <li><a href="{{ url('/productos') }}">INFORMES DE GESTIÓN</a></li>
              <li><a href="{{ url('/productos') }}">RESPALDO CONSULTOR</a></li>
              <li><a href="{{ url('/productos') }}">FORMACIÓN DE PERSONAL</a></li>
              <li><a href="{{ url('/productos') }}">FOCO EN EL NEGOCIO</a></li>
            </ul>
          </div>
          <br>


            <!--coloca 3 botones al centro con con margen derecho al 20%  -->
          <!--  <div id="botones-index"class="d-flex justify-content-center" style="margin-bottom:3%; margin-top: 50px;"  >
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="col md-4">
                        <button id = botoncito type="button" class="btn btn-outline-light"  style=" width: 350px; margin-left: 180px ; margin-right: 250px;border-radius: 20px"><h4>Consultoria empresarial</h4> </button>
                        <a id="hide" style="text-align:justify;margin-left:10% ;">Toda cuenta es seguida y supervisada técnicamente por experto consultor asignado, asegurando la mejora continua del sistema y el cumplimiento de los requerimientos normativos.</a>
                    </div>
                    <div class="col md-4">
                        <button  id = botoncito type="button" class="btn btn-outline-light" style=" width: 350px; margin: left 50px; margin-right: 250px;border-radius: 20px"><h4>Certificiaciones Iso</h4></button>
                        <a id="hide" style="text-align:justify ;">Contamos con un stack importante de normas iso que puedes implementar tenemos un abanico amplio de productos y 2 decadas de trayectoria.</a>
                    </div>
                    <div class="col md-4">
                        <button  id = botoncito type="button" class="btn btn-outline-light" style=" width: 350px; margin-right: 200px;border-radius: 20px"><h4>Software a la medida </h4></button>
                        <a id="hide" style="text-align:justify; margin-right:18% ;">Fabricamos y entregamos soluciones a la medida, tenemos un importante catalogo de alternativas las cuales permitiran potenciar tu operacion.</a>
                    </div>
                </div>

              </div>
          </br>-->



        </section>

    @yield('cards_service')
    @yield('tres')
    @yield('title')
        <div class="body_cards">
          @yield('cards')
        </div>

    @yield('title5')
        @yield('Proveedores')
    @yield('title2')
    @yield('products')
    @yield('footer')
    @yield('modals')
    <!--SCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('js/hgnka.js') }}"></script>
    <script src="{{asset('js/security.js') }}"></script>
    <script src="{{asset('js/provee.js') }}"></script>
    <script src="{{asset('js/slick.min.js') }}"></script>
    <script src="{{asset('js/typed.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-1.7.2.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.tagcanvas.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          if(!$('#myCanvas').tagcanvas({
            textColour: '#08fdd8',
            outlineColour: '#008000',
            reverse: true,
            depth: 0.8,
            maxSpeed: 0.03,
          },'tags')) {
            // something went wrong, hide the canvas container
            $('#myCanvasContainer').hide();
          }
        });
      </script>
    <script>
        var typed = new Typed('.type', {
        strings: ['<span><i class="fas fa-paint-brush"></i></span> RESPONSIVE',
                    '<span><i class="fas fa-building"></i></span> DINAMICA'
                    ,'<span><i class="fas fa-coffee"></i></span> FOLLOW ME'],
        typeSpeed:60,backSpeed:60,loop:true});
    </script>
    <script type="text/javascript">
    $(id).click(function(){click.elementby.id})
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init({
			duration: 1000,
			once: true
		});
	</script>

</body>
</html>
