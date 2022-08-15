@extends('layouts.fronted.index')
@extends('essencials.navbar_top')
@extends('essencials.navbar')
@extends('essencials.redes')


@section('tres')
<div class="containers" style="height: 80%; width:100%;margin-top:2%;">


<div row >
    <div col>
        <h1 style="color:white;">Porque escoger</h1>
    </div>
    <br>
    <div col>
        <h4 style="color:white;">Te damos 4 motivos...</h4>
    </div>
</div>
	<div class="card">
        <div class="over"style="color:white; height:2%;">
            <h1>Q</h1>
        </div>
		<div class="content">
			<h2>01</h2>
			<h3>Experiencia</h3>
			<p>Años de experiencia como consultora y pre certificadora nos avalan más de 40 clientes satisfechos en nuestra trayectoria</p>
			<a href="{{ url('/nosotros')}}">Averigua Mas</a>
		</div>
	</div>
	<div class="card">
        <div class="over"style="color:white; height:2%;">
            <h1>U</h1>
        </div>
		<div class="content">
			<h2>02</h2>
			<h3>Oferta</h3>
			<p>Tenemos la mejor oferta comercial y diseñada a tu medida. </p>
			<a href="{{ url('/contact')}}">Averigua aquí</a>
		</div>
	</div>
	<div class="card">
        <div class="over" style="color:white; height:2%;">
            <h1>A</h1>
        </div>
		<div class="content">
			<h2>03</h2>
			<h3>Tiempo y tecnología</h3>
			<p>Tenemos un software con un plan específico y a tu medida, el cual te hará obtener tu certificación en tiempo récord</p>
			<a href="{{ url('/nosotros')}}">Ve más aquí.</a>
		</div>
	</div>
    <div class="card">
        <div class="over" style="color:white; height:2%;">
            <h1>S</h1>
        </div>
		<div class="content">
			<h2>04</h2>
			<h3>Calidad</h3>
			<p>Tenemos un alto estándar de calidad que nos permite asegurar el éxito del proceso, tenemos soluciones a las distintas necesidades. </p>
			<a href="{{ url('/productos')}}">Ve más aquí.</a>
		</div>
	</div>
</div>


@endsection

@section('cards_service')

    <div class="container_cards"style="background:#FFFFFF">
        <div class="row_cards">
            <div class="col-md-3 col-sm-6 mb-3 text-center">
                <div class="single-content_service">
                    <div class="service">
                        <img src="{{asset('/img/Servicios/Implementacion.jpeg')}}" alt="220px" width="220px"><br>
                        <br>
                        <h4 class="title_services">Implementación</h4> 
                        <p class="description_services">¡Tenemos una serie de servicios que agilizan el proceso a nuestra plataforma.</p>                
                        <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-x3">Ver mas</a>  
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 text-center">
                <div class="single-content_service">
                    <div class="service">
                        <img src="{{asset('/img/Servicios/Diagnostico.jpeg')}}" alt="180px" width="180px"><br>
                        <br>
                        <h4 class="title_services" style="margin:10px ;">Diagnostico</h4>
                        <p class="description_services"style="margin:9px;">Realizamos un diagnostico organizacional profundo y analítico.</p>
                        <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>  
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 text-center">
                <div class="single-content_service">
                    <div class="service">
                    <img src="{{asset('/img/Servicios/Asesoria.jpeg')}}" alt="220px" width="220px"><br>
                        <br><br>
                        <h4 class="title_services">Asesorías</h4>
                        <p class="description_services">Formalización de procesos, protocolos y normalizaciones a la iso y mucho mas.</p>
                        <a  href="{{ url('/contact')}}" class="btn_modal_wel mt-5" style="margin: bottom 5px;">Ver mas</a>  
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 text-center">
                <div class="single-content_service">
                    <div class="service">
                         <img src="{{asset('/img/Servicios/mantenimiento.jpeg')}}" alt="220px" width="220px"><br>
                        <br>
                        <h4 class="title_services"; style="margin: 12px;">Mantenimiento</h4>
                        <p class="description_services">Te ayudamos a mantener tu certificación vigente en el tiempo y mejoramos procesos! </p>
                        <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>          
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('cards')
<div class="container_cards">    
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/certificacion_iso_9001.jpeg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Implementación de normas</h3>
                    <hr class="style2">
                    <h5>En tiempo record logra tu certificación.</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/Certificacion.jpeg')}}"  alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Mantenimiento de Normas</h3>
                    <hr class="style2">
                    <h5>Tenemos una plataforma que se adapta a tus necesidades.</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/Dinero.jpeg')}}"  alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Tenemos la flexibilidad</h3>
                    <hr class="style2">
                    <h5>Competimos con el precio, cotiza con nosotros.</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/Mano-iso.jpeg') }}"  alt="Categorias Higienika Oficce Perú">
                <div class="text-content">    
                    <h3>Años de experiencia</h3>
                    <hr class="style2">
                    <h5>Nuestro portafolio de clientes certificados nos avalan.</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title5')
<div class="col" style="background: #fff">
		<div class="proveedor-title">
			<h4 style="color: black">CONOCE A</h4>
            <h3 style="color: black">NUESTRA PLATAFORMA.</h3>
            <hr class="style5">
	    </div>
     <div class="row">
            <div class="col align-center" style="margin: left 10px;">
                <br>
                    <iframe width="500" height="300" src="https://www.youtube.com/embed/omLyQjEKv60" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br> 
        </div>

        <div class="col text-center">
                <h3>QUE ES QUAS MANAGER?</h3>
               <p> Es un modelo de desarrollo empresarial para organizaciones públicas y privadas de todo tamaño,  sector e industria, que por medio de nuestra plataforma, proporciona a las organizaciones en un mismo proceso, la implementación, certificación  y posterior manutención de sistemas de gestión,  en normas internacionales ISO.
                   Implementado para atender la demanda de toda la region.
               </p>
               <img src="{{asset ('img/Iconos/mundo-gif-2.gif')}}" alt="">
        </div>
     </div>                    
</div>
@endsection



@section('products')
<div class="producst_body autoplay ">
    @foreach($productos as $producto)
    <div class="wrapper">
        <div class="container">
            <img class="top"src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
          <div class="bottom">
            <div class="left">
              <div class="details">
                <h2 class="txt_products">{{$producto->name}}</h2>
                <p>S/{{$producto->price}}</p>
              </div>
              <div class="buy text-center">
                <a href="{{route('product-details', $producto->slug)}}">
                    <i class="fas fa-eye"></i>
                </a>  
            </div>
            </div>
          </div>
        </div>
        <div class="inside">
          <div class="icon"><i class="fas fa-plus"></i></div>
          <div class="contents">
            <h1>{{$producto->extract}}</h1>
            <h5 style="color: white">{{$producto->descriptions}}</h5>
          </div>
        </div>
      </div>
    @endforeach 
</div>
@endsection
@extends('essencials.footer')
@section('title')
<div class="col-12" style="background:#FFFFFF">
		<div class="testimonial-title">
			<h4>CONOCE</h4>
            <h3>NUESTRAS PROPUESTA DE VALOR</h3>
            <hr class="style1">
	    </div>
</div>
@endsection
<!--MODALS-->
@section('modals')
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center modal-title" id="exampleModalCenterTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="principalPagos">
                    <div id="contenedor" class="row_p">
                        <div id="naranja" class="">
                            <img class="popou_img"src="{{ asset('img/mantenimiento.jpeg')}}" alt="">
                        </div>       
                        <div id="verde" class="content_pagos"> 
                            <h2 class=" frm_pagos text-center" style="color:black">Mantenimiento</h2>
                <hr class="style3"> 
                <div class="mantee" style="color:black">
                    <p>Una vez que su organización obtiene la certificación ISO, nos aseguramos de que usted continúe recibiendo los beneficios de nuestros servicios de asesoría para mejorar continuamente la eficacia del sistema y mantener el nivel de cumplimiento requerido para asegurar que las auditorías de seguimiento periódicas y auditoría de re certificación se atiendan sin ningún problema.

                            Usted contrata la administración y mejora del Sistema de Gestión ISO y QUAS Consultores pone al servicio de usted un equipo de consultores, instructores  que garantizan el normal funcionamiento de su Sistema para mantener la certificación ISO.

                            Al dejar en nuestras manos su Sistema de Gestión le permite maximizar la eficacia y eficiencia del mismo, reduciendo costes. Podrá ahorrar y mejorar el Sistema de Gestión, con un coste variable y una disminución del importe.
                        </p>
                </div>

                <div id="price">
                    <!--price tab-->
                    <div class="plan">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>Análisis</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-computer"></i>
                          </div>
                        </div>
                       
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan basic">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>Estudio</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-card"></i>
                          </div>
                        </div>
                       
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan standard">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>Plan</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-apple-core"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab--> 
                </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="btn-group; align-group:center  "  >
                <a href="#" class="btn fab fa-google" style="background-color:trans; color:white"  aria-current="page">Google </a>
                <a href="#" class="btn fab fa-facebook"style="background-color:trans; color:white">Facebook</a>
                <a href="#" class="btn fab fa-twitter" style="background-color:trans; color:white">twitter</a>
             </div>
        <h6 style="color: white" class="text-center">Si necesita mas información contactase con nosotros</h6>   
    </div>
</div>

<div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center modal-title" id="exampleModalCenterTitle">Análisis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>       
                <h2 class=" frm_pagos text-center" style="color:black;">Diagnostico</h2>  
                    <div id="contenedor" class="row_p"> 
                        <div class="col-md-6 offset-md-0">
                            <img class="popou_img"src="{{ asset('img/Servicios/Diagnostico-2.jpeg')}}" alt="">
                        </div>    
                        <div class="col-sm-5  ">   
                            <p> diagnóstico organizacional es una manera efectiva de ver una organización para determinar las brechas entre el desempeño actual y el deseado, y cómo puede lograr sus objetivos. El diagnóstico puede limitarse a un equipo, un proyecto o una empresa en general.

                                Es un proceso que implica tres pasos: ingresar públicamente en un sistema humano, recopilar datos válidos sobre diferentes experiencias y retroalimentar al sistema para promover el desempeño corporativo. Es un enfoque estructurado que evalúa la operación y la eficiencia de una organización.

                                EN el cual Quas es especialista en el area con mas de 10 años en el mercado y varios clientes de renombre satisfechos con nuestra alianza. 
                            </p>   
                        </div>   
                    </div>                    
                </div>
        </div>
            <div class="btn-group" >
                <a href="#" class="btn fab fa-google" style="background-color:trans; color:white"  aria-current="page">Google </a>
                <a href="#" class="btn fab fa-facebook"style="background-color:trans; color:white">Facebook</a>
                <a href="#" class="btn fab fa-twitter" style= "background-color:trans; color:white">twitter</a>
            </div>
            <h6 style="color: white" class="text-center">Si necesita mas información conectase con nosotros</h6>    
    </div>
    
</div>

<div class="modal fade modal fade bd-example-modal-x3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center modal-title" id="exampleModalCenterTitle">Implementación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-6">
                            <img class="popou_img"src="{{ asset('img/Servicios/Implementacion.jpeg')}}" alt="300px" width="300px" >    
                        </div>
                            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                                En QUAS Consultores ofrecemos una amplia gama de servicios de asesoría para la implementación y certificación de Sistemas de Gestión ISO, independientemente de que su organización está en la fase inicial de implementación o si está a mitad de camino o se está acercando a la auditoría de certificación o su sistema está abandonado, nuestros servicios de consultoría ISO agregarán valor a la eficacia general en su sistema de gestión ISO, permitiendo alcanzar una ventaja competitiva sostenible.
                                <br>
                            </div>
                        
                    </div>        
                </div>
            </div>  
        </div>
        <div class="btn-group; align-group:center  "  >
            <a href="#" class="btn fab fa-google" style="background-color:trans; color:white"  aria-current="page">Google </a>
            <a href="#" class="btn fab fa-facebook"style="background-color:trans; color:white">Facebook</a>
            <a href="#" class="btn fab fa-twitter" style="background-color:trans; color:white">twitter</a>
        </div>
        <h6 style="color: white" class="text-center">Si necesita mas información conectase con nosotros</h6>   
    </div>
     
</div>

@endsection
