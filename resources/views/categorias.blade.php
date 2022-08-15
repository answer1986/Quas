<style>
.page-laser-to-text {
	position: relative;
	overflow: hidden;
}
	canvas {
		display: block;
	}

	input {
		position: absolute;
		bottom: 50px;
		left: 0;
		right: 0;
		display: block;
		outline: none;
		background-color: rgba(38, 50, 56, 0.2);
		color: #ffffff;
		border: none;
		width: 50%;
		min-width: 500px;
		max-width: 100%;
		margin: auto;
		height: 60px;
		line-height: 60px;
		font-size: 40px;
		padding: 0 20px;

		&:hover, &:focus {
			border: 1px solid rgba(38, 50, 56, 0.6);
		}

		&::-webkit-input-placeholder {
			color: rgba(#ffffff, 0.1);
		}
  }
	
}
</style>

@extends('layouts.fronted.categorias')
@extends('essencials.redes')

@extends('essencials.navbar_top')

@extends('essencials.navbar')

@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                       
					    <br><br>
                        <h1 class="tipeo1">Variedad de servicios</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('products')
  <div class="main">
    <h1 class="title_category">Escoja una de nuestras categorías</h1>
             <div class="row">  
               <div class="col">
                  <hr class="style4">
                        <img class="holi" style="height: 300px;"src="{{ asset('img/Abstract-iso.jpeg')}}" >
                  <br></br>
               </div>
                <div class="col">
                    <div class="page page-laser-to-text">
                        <input id="input" type="text" maxlength="24" placeholder="Nuestros servicios!">
                        <canvas id="canvas" style="height:300px; width:600px; margin-top:33px;"></canvas>
                    </div>
                </div>
             </div>
             <br></br>
          <div style="text-align:right ;"><p class="fa fa-arrow-down">Colpasa y expande aqui</p></div>
         <div id="accordion">
            <div class="card">
              <div class="card-header" id="CERTIFICACIONES">
                <h5 class="mb-0">
                  <button class="btn btn-link " style="color:black" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  	CERTIFICACIONES
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  Operamos con todos los organismos de certificación del mercado, nosotros lo certificaremos.<br>
                  Además, disponemos de alianzas con organismos certificadores de cobertura mundial, que aseguran las mejores condiciones del servicio y certeza del proceso.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="IMPLEMENTACIONES">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    IMPLEMENTACIONES
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                Elaboramos documentación, preparamos personal  y preparamos la organización, para certificar en NORMAS: 9001 – 14001 – 45001 – 27001 - 22000 –  BPM   – HACCP – FSSC – BRC.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="MEJORAS CONTINUAS">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    MEJORAS CONTINUAS
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  Preparamos, aplicamos y controlamos, programas de mejora continua para sistemas de gestión certificados.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="ACTUALIZACIONES">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    ACTUALIZACIONES
                  </button>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                  Preparamos, aplicamos y controlamos, programas de actualización de normas,  a sistemas de gestión certificados
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="CONFIANZA">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    CONFIANZA
                  </button>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                    Aseguramos el éxito en la certificación de nuestro cliente, este es nuestro compromiso corporativo
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="QUASMANGER">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseFour">
                    QUASMANGER
                  </button>
                </h5>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                  Es nuestro modelo de desarrollo expresado en un software de gestión, elaborado para asegurar el éxito en los procesos de implementación, certificación y mejora continua de sistemas en las empresas.      </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="CONTROL EN TIEMPO REAL">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      CONTROL EN TIEMPO REAL
                    </button>
                  </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                  <div class="card-body">
                    En cualquier día de la semana, en todo horario, nuestros usuarios podrán monitorear la marcha y avance del sistema, a través de un Smartphone.
                  </div>
                </div>
            </div>
            <div class="card">
              <div class="card-header" id="INFORMES DE GESTIÓN">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapseHeight" aria-expanded="false" aria-controls="collapseHeight">
                    INFORMES DE GESTIÓN
                  </button>
                </h5>
              </div>
              <div id="collapseHeight" class="collapse" aria-labelledby="headingHeight" data-parent="#accordion">
                <div class="card-body">
                  Informes de gestión por procesos, áreas y responsables, son emitidos automáticamente por el software, detallando a través de gráficas y porcentajes los resultados y niveles de avance.
                </div>
              </div>
            </div>


            <div class="card">
              <div class="card-header" id="RESPALDO CONSULTOR">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">RESPALDO CONSULTOR</button>
                </h5>
              </div>
              <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                <div class="card-body">
                  Toda cuenta es seguida y supervisada técnicamente por experto consultor asignado, asegurando la mejora continua del sistema y el cumplimiento de los requerimientos normativos.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="RESPALDO DOCUMENTAL">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    RESPALDO DOCUMENTAL
                  </button>
                </h5>
              </div>
              <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                <div class="card-body">
                    El software Quasmanager, genera respaldos de seguridad de la información de manera automática, asegurando la disponibilidad de la documentación de los sistemas de manera permanentemente.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="FORMACIÓN DE PERSONAL">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                    FORMACIÓN DE PERSONAL
                  </button>
                </h5>
              </div>
              <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                <div class="card-body">
                Capacitaciones, entrenamiento y certificación de personal requerido por norma, son cubiertos por el proceso de consultoría de la empresa Quas Consultores.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="FOCO EN EL NEGOCIO">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" style="color:black" data-toggle="collapse" data-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                    FOCO EN EL NEGOCIO
                  </button>
                </h5>
              </div>
            </div>
            <div id="collapsetwelve" class="collapse" aria-labelledby="headingtwelve" data-parent="#accordion">
                <div class="card-body">
                  Quas Consultores centra su actividad, en la gestión de todo requerimiento exigido por el proceso de certificación en organizaciones, con el objetivo de permitir que sus clientes, puedan concentrar su esfuerzo y foco de atención en el negocio.
                </div>
            </div>
        </div>
      </div>
  </div>
<br>
    
    
    
    
    <!--   @foreach($categorias as $categoria)
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img  src="{{ asset('img/Tutu_paz_bloom.jpeg')}}" height="100"></div>
          <div class="card_content">
            <h1 class="card_title">{{$categoria->name}}</h1>
            <hr>
            <p class="card_text">{{$categoria->descripcion}}</p> 
            <a class="btn card_btn" href="{{ route('searchCategory' , $categoria->slug)}}"> 
                Productos
            </a>
          </div>
        </div>
      </li>
      @endforeach 
    </ul>
  </div>-->
@endsection

@extends('essencials.footer')
