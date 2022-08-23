@extends('layouts.fronted.catalogos')
@extends('essencials.redes')
@extends('essencials.navbar_top')
@section('navbar')
<header>
    <a href="{{ url('/')}}" class="logo">
        <h4 style="color:green" class="imgtamaño"></h4>
        <img  class="imgtamaño" src="{{ asset('img/Logo-Quas.png')}}"  alt="">
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >Inicio</a></li>
                <li><a class="active" href="{{ url('/productos')}}">Servicios</a></li>
                <li><a href="{{ url('/nosotros')}}">Nosotros</a></li>
                <li><a href="{{ url('/contact')}}">Contacto</a></li>
                <li><a href="#bannerformmodal" data-toggle="modal" data-target="#bannerformmodal">Quasmanager</a></li>

            </ul>
        </nav>
        <div class="clearfix"></div>
 </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
					    <br><br>
                        <h1 class="tipeo1">Productos:</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('title')

    <br>
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="text-center pt-15">
                    <h1 class="h2 font-weight-bolder text-dark mb-6">A continuacion le presentamos </h1>
                    <div class="h4 text-dark-50 font-weight-normal">el catalogo de productos .</div>
                    <div class="row">
                        <div class="offset-md-3 col-md-6">
                            <span class="svg-icon svg-icon-full">
                                <!-- FOTO -->
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="h5 text-dark-50 font-weight-normal">En un mercado lleno de posibilidades, Quas es el mejor aliado estrategico y operacional del mercado, ofreciendo un abanico de soluciones a la medida de nuestros clientes, "un traje a la medida de sus necesidades y recursos." .</div>
                </div>
                <br>
                <div class="container mb-8">
                    <div class="row align-items-start">
                            <div class="col-md-4" style="text-align:center;">
                                <img src="{{asset('/img/catalogo/Quascontroller.png')}}">
                               <br></br>
                                <div class="col">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                         Selecciona Modulos
                                          </a>

                                         <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" target="_blank" href="{{ url('/bpm')}}">BPM</a></li>
                                            <li><a class="dropdown-item" target="_blank" href="{{ url('/hdm')}}">HDM</a></li>
                                            <li><a class="dropdown-item" target="_blank" href="{{ url('/esm')}}">ESM</a></li>
                                            <li><a class="dropdown-item" target="_blank" href="{{ url('/ecm')}}">ECM</a></li>
                                            <li><a class="dropdown-item" target="_blank" href="{{ url('/grc')}}">GRC</a></li>
                                            <li><a class="dropdown-item" target="_blank" href="{{ url('/cpm')}}">CPM</a></li>
                                            <li><a class="dropdown-item" target="_blank" href="{{ url('/eqm')}}">EQM</a></li>
                                         </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"style="text-align:center;">
                                <img src="{{asset('/img/catalogo/Quasmanager.png')}}" style="height: 10rem; margin-left:2rem;">
                                    <br></br>
                                    <div class="dropdown" style="top: 5px; left: 15px;">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Selecciona
                                        </a>

                                        <ul class="dropdown-menu" style="margin-top:5px ;">
                                            <li><a href="https://www.youtube.com/watch?v=H3iwL8TDOMs&list=PL_zvZxG3IM8rAFr_MlPkAy4dYpQxzAAKG&index=5" target="_blank" class="dropdown-item" >Que es Quasmanager</a></li>
                                            <li><a class="dropdown-item" href="#">Proximamente</a></li>
                                            <li><a class="dropdown-item" href="{{ url('/contact')}}">Contactanos</a></li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="col-md-4"style="text-align:center;">
                                <img src="{{asset('/img/catalogo/factory.jpeg')}}" style="height:120px; margin-left:15%; margin: top 5px;">
                                <img src="{{asset('/img/catalogo/Quasfactory.png')}}" style="margin-top:4%;margin: bottom 50px;">
                                    <br> </br>                              
                                    <div class="dropdown"style="top: 10px;">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Selecciona 
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="a">Proximamente.</a></li>
                                       <!-- <li><a class="dropdown-item" href="b">Another action</a></li>
                                        <li><a class="dropdown-item" href="c">Something else here</a></li>-->
                                    </ul>
                                    </div>
                            </div>
                            
                        </div>
                    </div>
            </div>
        </div>
        <hr>
    </div>

    </div>
    <br></br>
@endsection
@section('pie_pagina')
         <div id="footer">
             <div class="footer  d-flex flex-lg-column" id="kt_footer" style="background-color:aliceblue;">
                     <div class="row d-flex flex-md-row align-items-center ">
                                 <div class="col-md-2" style="margin-right: 4%;">
                                     <div class="col-md text-black ">
                                         <img style="margin-left: 15px;"src="{{ asset('/img/Logo-Quas.png')}}"  width= "180"  height="50"/>
                                         <a style="text-decoration: none;color:black"; href="https://www.quasmanager.cl/profile"><p style="margin-left:40%;">Quasmanager</p></a>
                                     </div>   
                                 </div>
                     
                                 <div class="col-md-2 text-black">
                                     <ul type="none" class="p-10">
                                         <b><li><a style="color: black;" href="">Privacidad</a></b></li>
                                         <b><li><a style="color: black;" href="{{ url('/nosotros')}}">Quiénes somos</a></b></li>
                                         <b><li><a style="color: black;" href="{{url ('/terminos')}}">Términos y Condiciones</a></b></li>
                                     </ul>
                                 </div>
                                 <div class="col-md-1">
                                     <div class="col-md-1-fluid text-black height:15px" width= "80">
                                         <ul type="none" class="p-10">
                                             <h8> <li><b><a style="color: black;" href="{{url('/contact')}}">Contacto</a></b></li>
                                             <h8><li><b></a></li></h8>
                                             <h8><li><a href="#planesmodal" data-toggle="modal" data-target="#planesmodal" style="color: black;" >Planes y precios</a></b></li>
                                         
                                         </ul>
                                     </div>
                                 </div>
                         
                            <div class="col-md-2 text-center" style="color:black;">
                 
                                 <h8><b> Siguenos en redes sociales </b></h8>
                                     <br>
                                 
                               <!--  <a href="https://www.linkedin.com/in/quas-quasmanager-167175246/">
                                 <img src="{{ asset('/img/Footer/Linked.png')}}" width= "30" height="30" style = "margin: 3px;" />
                                 <i class="fab fa-facebook-square icon-3x text-white m-2"></i>
                                 </a>
                                 <a href="https://twitter.com">
                                 <img src="{{ asset('/img/Footer/tweeter.jpeg')}}" width= "30" height="30" style = "margin: 3px;"/>
                                 <i class="fab fa-instagram-square icon-3x text-white m-2"></i>
                                 </a>   
                                 <a href="https://www.youtube.com/channel/UCAhaIRzp1FMBIcnCuLtwFxw">
                                 <img src="{{ asset('/img/Footer/youtube.png')}}" width= "30" height="30" style = "margin: 3px;"/>
                                 <i class="fab fa-youtube-square icon-3x text-white m-2"></i>
                                 </a>
                              </div>-->
                            </div>
                       
                            <div class="col-md-2">
                                <div class="col-md-2,5 text-black texty center"style="color:black; margin-left:3%;">
                                    <h8><b> Desarrollado por:</b></h8><br>
                                    <a href=" https://answer1986.github.io/"><p style="color:black">todos losderechos reservados</p>
                                </div>  
                            </div>  
                             <!--<div class="col-md-2">
                                 <a href="https://www.quasmanager.cl/profile">
                                 <img src="{{ asset('/img/footerquas.png')}}"width= "50" height="80"/>
                             </div> -->
               
                     </div>  
               </div>
         </div>

        <div class="modal fade planesmodal" tabindex="-1" role="dialog" aria-labelledby="planesmodal" aria-hidden="true" id="planesmodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Planes y precios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Cada plan es a la medida del cliente, el valor agregado de quas, es eso que manejamos una solucion a la medida, llevando al cliente con el minimo esfuerzo a conseguir su meta en certificacion o gestion. asi mismo los precios no son estandar se basan en la necesidad expuesta por nuestros clientes y segun el plan de accion se le ofrece una oferta a corde. 
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
<br>

