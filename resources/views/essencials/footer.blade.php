

@section('footer')
<footer>
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

                            <div class="col-md-1-fluid text-black height:15px" width= "100">
                                <ul type="none" class="p-10">
                                <h8> <li><b><a style="color: black;" href="{{url('/contact')}}">Contacto</a></b></li>
                                <h8><li><b></a></li></h8>
                                <h8><li><a href="#planesmodal" data-toggle="modal" data-target="#planesmodal" style="color: black;" >Planes y precios</a></b></li>
                                
                            </ul>
                            </div>
                
                    
                            <div class="col-md-2 text-center" style="color:black;">
                            
                                <h8><b> Proximamente siguenos en redes sociales </b></h8>
                                    <br>
                                    
                                <!--<a href="https://www.linkedin.com/in/quas-quasmanager-167175246/">-->
                                <img src="{{ asset('/img/Footer/Linked.png')}}" width= "30" height="30" style = "margin: 3px;" />
                                <!--<i class="fab fa-facebook-square icon-3x text-white m-2"></i>-->
                                </a>
                                <!--<a href="https://twitter.com">-->
                                <img src="{{ asset('/img/Footer/tweeter.jpeg')}}" width= "30" height="30" style = "margin: 3px;"/>
                                <!--<i class="fab fa-instagram-square icon-3x text-white m-2"></i>-->
                                </a>   
                                <!--<a href="https://www.youtube.com/channel/UCAhaIRzp1FMBIcnCuLtwFxw">-->
                                <img src="{{ asset('/img/Footer/youtube.png')}}" width= "30" height="30" style = "margin: 3px;"/>
                                <!--<i class="fab fa-youtube-square icon-3x text-white m-2"></i>-->
                                </a>
                            </div>
                        
                            <div class="col-md-2,5 text-black texty center"style="color:black; margin-left:3%;">
                                <h8><b> Desarrollado por: soporte@quas.cl</b></h8><br>
                                <a href=" "><p style="color:black">todos los derechos reservados</p>
                            </div>    
                    
                            <div class="col-md-1,5" style="margin-left:3%">
                                <a href="https://www.quasmanager.cl/profile">
                                <img src="{{ asset('/img/footerquas.png')}}"width= "100" height="80" style = "margin: 3px;"   />
                            </div>   
                            
                        
                                
                </div>
        </div>
</div>    
</footer>
@endsection

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