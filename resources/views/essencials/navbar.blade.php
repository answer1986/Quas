

@section('navbar')
    <header>
        <a href="{{ url('/')}}" class="logo">
            <h4 style="color:green" class="imgtamaño"></h4>
            <img  class="imgtamaño" src="{{ asset('img/Logo-Quas.png')}}"  alt="">
        </a>
          <div class="menu-toggle" ></div>-->
              <nav class="navbar navbar-expand-lg ">
                  <div class="container-fluid">
                      <ul>
                          <li><a href="{{ url('/')}}" >Inicio</a></li>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href= "" role="button" data-bs-toggle="dropdown" aria-expanded="false"><!-- "{{ url('/productos')}}"-->
                                  Servicios
                                </a>
                                <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Consultoria empresarial</a></li>
                                      <li><a class="dropdown-item" href="#">Certificaciones Iso</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">Software a la medida</a></li>
                                </ul>
                          </li>
                          <li><a href="{{ url('/nosotros')}}">Nosotros</a></li>
                          <li><a href="{{ url('/contact')}}">Contacto</a></li>
                          <li><a href="#bannerformmodal" data-toggle="modal" data-target="#bannerformmodal">Quas?</a></li>

                      </ul>
                  </div>
              </nav>
          
            <div class="clearfix"></div>

        
    </header>

@endsection
<!-- Modal -->
<div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" id="bannerformmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quas y su ERP Quasmanager</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        A continuacion te presentamos quienes somos y al final de nuestra pagina te presentamos nuestra herramienta ganadora, que te ayudara a obtener la certificacion que buscar en tiempo record y al mejor precio del mercado.
        <br>
                    <iframe width="450" height="300" src="https://www.youtube.com/embed/3jiVNQIWG3E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br> 
      </div>
    </div>
  </div>
</div>
