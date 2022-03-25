@extends('layouts.fronted.index')
@extends('essencials.navbar_top')
@extends('essencials.navbar')
@extends('essencials.redes')




@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                    <h1 class="tipeo1" href="#" class="logo">
                        <!--<img  class="logo" src="{{ asset('img/')}}" width="111px" height="111px">-->
                    </h1> 
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('cards_service')
<div class="container_cards">
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-percent fa-4x"></i>
                    <h4 class="title_services">Ofertas del Día</h4>
                    <p class="description_services">Ofertas especiales</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-x3">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <h4 class="title_services">Entrega Inmediata</h4>
                    <p class="description_services">Servicio de entrega inmediata</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-user-check fa-4x"></i>
                    <h4 class="title_services">Clientes Satisfechos</h4>
                    <p class="description_services">Nuestros clientes felices con nuestro servicio</p>
                    <a href="{{ url('/nosotros')}}" class="btn_modal_wel mt-5">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-thumbs-up fa-4x"></i>
                    <h4 class="title_services">Múltiples Formas de Pago</h4>
                    <p class="description_services">Diferentes tipos de pago</p>
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
                <img src="{{ asset('img/categoria/cat1.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Productos de Celulares</h3>
                    <hr class="style2">
                    <h5>Para el hogar y oficina</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cat2.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Artículos de Oficina</h3>
                    <hr class="style2">
                    <h5>Artículos de oficina de las mejores marcas</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cat3.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Repuestos De Moviles</h3>
                    <hr class="style2">
                    <h5>Distribuimos Partes y repuestos</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cat4.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Artículos de Laptops</h3>
                    <hr class="style2">
                    <h5>Artículos Laptops de trabajo</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title5')
<div class="col-12 pt-2" style="background: #0781b6">
		<div class="proveedor-title">
			<h5 style="color: black">CONOCE A</h5>
            <h3 style="color: white">NUESTROS PROVEEDORES</h3>
            <hr class="style5">
	    </div>
</div>
@endsection
@section('Proveedores')
<div class="container_prove">
    <div class="carousel_prove">
        <div class="buttons_prove">
            <span class="prev"> &#8592; </span>
            <span class="next"> &#8594; </span>
        </div>
        @foreach($proveedores as $proveedore)
        <div class="item">
            <div class="content">
                <h1>{{$proveedore->name}}</h1>
                <hr class="">
                <h5 style="color: white">En Este segmento puedes poner una descripción de lo mas importante acerca de tus proveedores.</h5>
            </div>
            <div class="img">
                <img src="{{asset('/img/proveedore/'.$proveedore->image)}}" alt="">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('title2')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTROS PRODUCTOS</h3>
            <hr class="style1">
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
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTRAS CATEGORÍAS</h3>
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
                <h5 class="text-center modal-title" id="exampleModalCenterTitle">Formas de pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="principalPagos">
                    <div id="contenedor" class="row_p">
                        <div id="naranja" class="">
                            <img class="popou_img"src="{{ asset('img/pagos.jpg')}}" alt="">
                        </div>       
                        <div id="verde" class="content_pagos"> 
                            <h2 class=" frm_pagos text-center">FORMAS DE PAGO</h2>
                <hr class="style3"> 

                <div id="price">
                    <!--price tab-->
                    <div class="plan">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>BCP</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-credit-card"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de cuenta</li>
                            <li>******************</li>
                            <li>N° de cta. interbancaria</li>
                            <li>*********************</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan basic">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>BBVA</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-credit-card"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de cuenta</li>
                            <li>*******************</li>
                            <li>N° de cta. interbancaria</li>
                            <li>**********************</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan standard">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>Yape</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-mobile-alt"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de Billetera Electronica</li>
                            <li>999 086 095</li>
                            <li>.</li>
                            <li>.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab--> 
                </div>
                        </div>
                    </div>
                </div> 
            </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div id="contenedor" class="row_p">
            <div id="naranja" class="">
                <img class="popou_img"src="{{ asset('img/entrega.jpg')}}" alt="">
            </div>       
            <div id="verde" class="content_pagos"> 
                <h2 class=" frm_pagos text-center">REALIZAMOS DELIVERY ESPECIAL</h2>  
                <hr class="style3">   
                <h5>Primero se envía la cotización al cliente, luego de ello el cliente envía la orden de compra por medio de nuestro correo y a las 24 horas 
                    se le realiza el envío de las credenciales sin costo alguno.</h5>                   
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal fade bd-example-modal-x3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="text-center modal-title" id="exampleModalCenterTitle">OFERTAS DEL DÍA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="principal">
                @foreach($ofertas as $oferta)
                <div id="contenedor" class="row_p">
                    <div id="naranja" class="">
                        <img class="popou_img"src="{{asset('/img/ofertas/'.$oferta->image)}}" alt="{{$oferta->image}}">
                    </div>       
                    <div id="verde" class="content_pagos"> 
                        <strong><h2 class=" frm_pagos text-center">{{$oferta->titulo}}</h2></strong>  
                        <br>    
                        <h4>{{$oferta->texto}}</h4>  
                        <button type="button" class="btnwssp btn btn-outline-success btn-lg">
                            <a target="none" href="https://wa.me/51987654321?text=Hola%2CEstoy+interesad%40+en+la+oferta%3A+{{$oferta->titulo}}">
                               Preguntar
                            </a>
                        </button> 
                    </div>
                </div>
                @endforeach  
            </div> 
        </div>
    </div>
    <div class='icon-scroll'></div> 
    <h6 style="color: white" class="text-center">Si hay más promociones por favor siga bajando</h6>     
</div>
@endsection