<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="iso, certificacion iso, iso-9001,mejora continua,Procesos organizacionales,ISO 9001,ISO 14001,ISO 45001, ISO 22000,HACCP"/>
        <link rel="shortcut icon" type="imagenes" href="{{asset('img/favicon.ico')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <title>Quas|Terminos y Condiciones</title>

        <!-- Fonts--> 
        <link href="{{asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
    </head>
    <body>
        @yield('redes')
        <section id="headerSection_holi">
            @yield('navbar_top')
            @yield('navbar')
            @yield('banner')
        </section>
        
        @yield('title')
        @yield('footer')
        
       
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="{{asset('js/responsive.js') }}"></script>
    <script src="{{asset('js/security.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
	var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',grabCursor: true,centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: true,
        },
        loop:true,
	    autoplay:{
			delay:3500,
			disableOnInteraction:false,
        },
    });	
    </script>
    
    </body>
</html>