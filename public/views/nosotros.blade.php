<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@100;200;400&display=swap");
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html {
  font-family: "Nunito";
}
:root {
  --var-color: rgb(0, 238, 255);
}
section {
  height: 40vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #09111b;
}
.container h1 {
  font-size: 4vw;
  color: var(--var-color);
  position: relative;
}
.container h1::before {
  position: absolute;
  content: attr(data-text);
  text-shadow: 0px 0px 20px var(--var-color);
  filter: blur(10px) brightness(0);
  animation: flicker 2s linear forwards;
  animation-delay: 1s;
}
@keyframes flicker {
  0% {
    filter: blur(5px) brightness(1);
  }
  3% {
    filter: blur(5px) brightness(0);
  }
  6% {
    filter: blur(5px) brightness(0);
  }
  7% {
    filter: blur(5px) brightness(1);
  }
  8% {
    filter: blur(5px) brightness(0);
  }
  9% {
    filter: blur(5px) brightness(1);
  }
  10% {
    filter: blur(5px) brightness(0);
  }
  20% {
    filter: blur(5px) brightness(1);
  }
  50% {
    filter: blur(5px) brightness(1);
  }
  99% {
    filter: blur(5px) brightness(0);
  }
  100% {
    filter: blur(5px) brightness(1);
  }
}


</style>
@extends('layouts.fronted.nosotros')
@extends('essencials.redes')
@extends('essencials.navbar_top')
@extends('essencials.navbar')
 
@section('banner')
<div class="banner">
style  <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <h4> <span></span></h4>
						<br>
						<br>
                        <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('foda')
<div class="nosotros_body">
<div class="nosotros_container">
    <div class="nosotros_card">
        <div class="nosotros_imbBx"  data-text="¿Quienes Somos?">
            <i class="fas fa-5x fa-question"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Quienes somos?</h3>
                <p>Durante años de aprendizaje y experiencia en materias de consultorías, implementaciones, certificaciones y capacitaciones,  en el mundo público y privado en nuestro país, nos han permitido reunir las condiciones necesarias, para desarrollar y poner a disposición de las empresas, modelos de gestión de alta eficiencia y sustentables.
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Nuestra Misión?">
            <i class="fas fa-5x fa-user-friends"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestra Misión</h3>
                <p>Establecer una relación con nuestros clientes distribuyendo nuestros servicios con eficiencia,rapidez, buenos precios y buscando la mejora continua para contribuir con su desarrollo y el de nuestros colaboradores.
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Nuestra Visión?">
            <i class="fas fa-5x fa-chart-bar"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestra Visión</h3>
                <p>Consolidarnos como una de las empresas líderes en distribución de artículos no estratégicos a nivel nacional,
                    reconocida por su compromiso y responsabilidad.
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Porque escogernos?">
            <i class="fas fa-5x fa-money-bill-wave"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Porque escogernos?</h3>
                <p>Contamos con una amplia experiencia en ventas de servicios y a los mejores precios  para la satisfacción del cliente. 
                </p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<!--@section('clientes')
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($clientes as $cliente)
            <div class="swiper-slide">
                <img class="client_img text-center"src="{{asset('/img/clientes/'.$cliente->image)}}" alt="{{$cliente->image}}" class="card-img-top">
            </div>
            @endforeach  
        </div>
    </div>   
@endsection -->
@extends('essencials.footer')

@section('title')
<div class="col-10">
            <div class="testimonial-title">
                <h5>Porque  </h5>
                <h3>CONFÍAR EN NOSOTROS ?</h3>
                <hr class="style1">
            </div>   
              <div class="continer">
                <div class="row">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://www.quas.cl/img/Mano-iso.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                     <img src="https://www.quas.cl/img/Servicios/Asesoria.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.quas.cl/img/Servicios/Experiencia.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                    </div>
                    <div class="col" style="align-items:center ;">
                        <p> años de aprendizaje y experiencia en materias de consultorías, implementaciones, certificaciones y capacitaciones,  en el mundo público y privado en nuestro país, nos han permitido reunir las condiciones necesarias, para desarrollar y poner a disposición de las empresas, modelos de gestión de alta eficiencia y sustentables.</p><br>
                        <p>Nuestro compromiso no termina con el logro de la certificación, lo que nos ha permitido  trabajar con nuestros clientes de manera permanente en la actualización y mejora de sus sistemas, asegurando con ello la incorporación de valor y seguridad a su negocio.</p>   
                    </div>
                </div>
            </div>
            <br>
    </div>
@endsection
@section('quas')
<section>
  <div class="container" style="height:18% ;">
    <h1  data-text="Tenemos la mejor oferta del mercado, con un sistema adaptado a tu negocio,tu certificacion en tiempo record! ">Tenemos la mejor oferta del mercado, con un sistema adaptado a tu negocio,tu certificacion en tiempo record!</h1>
  </div>
</section>
@endsection
 