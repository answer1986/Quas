@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color:green" class="imgtamaño"></h2>
        <img  class="imgtamaño" src="{{ asset('img/Logo-Quas.png')}}" alt="">
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >Inicio</a></li>
                <li><a class="active" href="{{ url('/productos')}}">Servicios</a></li>
                <li><a href="{{ url('/nosotros')}}">Nosotros</a></li>
                <li><a href="{{ url('/contact')}}">Contacto</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection