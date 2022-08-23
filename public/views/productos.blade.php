@extends('layouts.fronted.productos')

@section('navbar_top')
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño">Quas</h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/Logo-Higienika_office_peru_div.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a class="active" href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
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
                        <h4>PAGINA <span>WEB</span></h4>
					    <br><br>
                        <h1 class="tipeo1">VARIEDAD DE PRODUCTOS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('products')
        <div class="container mt-5 mb-5">
            <div class="row">
                @foreach($productos as $producto)
                <div class="col-md-4 col-sm-6">
                    <div class="product-grid8">
                        <div class="product-image8">
                            <a href="#">
                                <img  class="pic-1" src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
                                <!--<img class="pic-2" src="https://via.placeholder.com/280x300/FFF5EE/000000">-->
                            </a>
                            <ul class="social">
                                <li><a href="" class="fa fa-search"></a></li>
                            </ul>
                            <span class="product-discount-label">{{$producto->visible == 1 ? "En Stock":"Agotado"}}</span>
                        </div>
                        <div class="product-content">
                            <div class="price">{{$producto->name}}</div>
                            <!--<<span class="product-shipping">Free Shipping</span>-->
                            <h3 class="title"><a href="{{ route('searchCategory' ,$producto->categoria->name)}}">{{$producto->categoria->name}}</a></h3>
                            <a class="all-deals" href="{{route('product-details', $producto->slug)}}">Detalles<i class="fa fa-angle-right icon"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{$productos->links()}}
        </div>
@endsection
@yield('footer')