@extends('layouts.fronted.terminos')
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
                </div>
                <div class="container mb-8">
                    <div class="card card-custom p-6">
                        <div class="card-body">
                            <!--end::Content-->
                            <h4 class="font-weight-bold text-dark mb-4">1.- Recolección de información:</h4>
                            <div class="text-dark-50 line-height-lg">
                                <p class="text-justify">
                                    Recogemos información sobre usted cuando se registra en nuestro sitio, ingresa a su cuenta, realiza el pago de sus servicios, participa en un concurso y/o cuando cierra su sesión. La información recolectada incluye su nombre, dirección de correo electrónico y eventualmente su número de teléfono. En ningún caso incluye datos de su tarjeta de crédito u otros de valor.<br/><br/>
                                    Además, recibimos y registramos automáticamente información sobre su computador y su navegador, incluyendo su dirección IP, programa y atributos de hardware, y la página que solicitó.
                                </p>
                            </div>
                            <!--end::Content-->
                            <!--end::Content-->
                            <h4 class="font-weight-bold text-dark mb-4">2.- Uso de información:</h4>
                            <div class="text-dark-50 line-height-lg">
                                <p class="text-justify">
                                    Cualquier información que recolectamos sobre usted puede ser utilizada para:
                                </p>
                                <ul>
                                    <li>Personalizar su experiencia y responder a sus necesidades individuales.</li>
                                    <li>Proporcionar contenido publicitario personalizado.</li>
                                    <li>Mejorar nuestro sitio web.</li>
                                    <li>Mejorar el servicio al consumidor y sus necesidades de soporte.</li>
                                    <li>Contactarlo por correo electrónico.</li>
                                </ul>
                            </div>
                            <!--end::Content-->
                            <!--end::Content-->
                            <h4 class="font-weight-bold text-dark mb-4">3.- Privacidad del comercio electrónico:</h4>
                            <div class="text-dark-50 line-height-lg">
                                <p class="text-justify">
                                    Nosotros somos los únicos propietarios de la información recolectada en este sitio. Su información de identificación personal no será vendida, intercambiada, transferida ni proporcionada a ninguna empresa de terceros por ninguna razón, sin su consentimiento, a menos que sea necesario para cumplir con una solicitud de la autoridad.
                                </p>
                            </div>
                            <!--end::Content-->
                            <!--end::Content-->
                            <h4 class="font-weight-bold text-dark mb-4">4.- Divulgación a terceros:</h4>
                            <div class="text-dark-50 line-height-lg">
                                <p class="text-justify">
                                    Nosotros no vendemos, intercambiamos, ni transferimos de ningún otro modo a terceros externos su información de identificación personal. Esto no incluye terceros confiables que nos asisten para operar nuestro sitio web o llevar a cabo nuestro negocio, siempre que las partes acepten mantener esta información confidencial.<br/><br/>
                                    Creemos que es necesario compartir información para investigar, prevenir o tomar medidas respecto a actividades ilegales, sospechas de fraude, situaciones que impliquen amenazas potenciales a la seguridad física de cualquier persona, violaciones de nuestros términos de uso, o que de otra manera sea requerido por la ley.
                                </p>
                            </div>
                            <!--end::Content-->
                            <!--end::Content-->
                            <h4 class="font-weight-bold text-dark mb-4">5.- Protección de información:</h4>
                            <div class="text-dark-50 line-height-lg">
                                <p class="text-justify">
                                    Implementamos distintas medidas de seguridad para mantener la seguridad de su información personal. Utilizamos encriptación de avanzada para proteger información confidencial transmitida en línea. VpnMentor también protege su información sin conexión a internet. Solo los empleados que necesitan realizar una tarea específica (por ejemplo, la facturación o atención al cliente) tienen acceso a la información de identificación personal. Los computadores/servidores usados para almacenar la información de identificación personal están guardados en un entorno seguro.
                                </p>
                            </div>
                            <!--end::Content-->
                            <!--end::Content-->
                            <h4 class="font-weight-bold text-dark mb-4">¿Usamos cookies?</h4>
                            <div class="text-dark-50 line-height-lg">
                                <p class="text-justify">
                                    Sí. Nuestras cookies mejoran el acceso a nuestro sitio e identifican a los visitantes frecuentes. Nuestras cookies mejoran la experiencia del usuario haciendo un seguimiento de sus intereses. Sin embargo, este uso de cookies no está relacionado de ninguna manera a cualquier información de identificación personal en nuestro sitio.
                                </p>
                            </div>
                            <!--end::Content-->
                            <!--end::Content-->
                            <h4 class="font-weight-bold text-dark mb-4">6.- Desuscribirse:</h4>
                            <div class="text-dark-50 line-height-lg">
                                <p class="text-justify">
                                    Utilizamos la dirección de correo electrónico que usted proporcionó para enviarle información y actualizaciones relacionadas con su servicio, noticias ocasionales de la empresa, información de servicios relacionados, etc. Si en algún momento usted quisiera desuscribirse para no recibir más correos electrónicos futuros, puede solicitarlo directamente enviando un correo a soporte@quas.cl.
                                </p>
                            </div>
                            <!--end::Content-->
                            <!--end::Content-->
                            <h4 class="font-weight-bold text-dark mb-4">7.- Consentimiento:</h4>
                            <div class="text-dark-50 line-height-lg">
                                <p class="text-justify">
                                    Al utilizar nuestro sitio, usted brinda su consentimiento a nuestra política de privacidad.
                                </p>
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <br></br>
@endsection
@extends('essencials.footer')


