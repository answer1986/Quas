<style>
 #ivan{
    color:green;
    text-align: right;
    margin-right: 10%;
    height: 8%;
    background-color: none;
    
    
   
 }   
</style>

@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <div class="headcont">
                <i class="fas fa-1x fa-mobile-alt messenge"></i>
                <a href="tel:+56 9 7453 2868" style="color:white">+56 9 7453 2868</a>
            </div>
            <div class="headcont">
                <i class="fas fa-1x fa-envelope messenge"></i>
                <a style= "color:white"href="mailto:comercial@quas.cl">comercial@quas.cl</a>    
            
            </div>
        </div>
    </div>
    <br>
    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
        <button type="button" id="ivan" class="btn btn-outline-success" role="link" onclick="window.location='https://www.quasmanager.cl/profile'">Clientes Quasmanager</button>
    </div>
    
</div>
@endsection