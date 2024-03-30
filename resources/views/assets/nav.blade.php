<!-- BARRA DE NAVEGACIÓN -->
<div class="container-fluid bg-light border-bottom border-5 tiempo">
    <div class="row p-2 justify-content-center">

        <div class="col-sm-6 col-md-4 col-lg-2 d-flex align-items-center text-center mt-2 mb-2">
            <img src="{{asset('img/logo.png')}}" class="img-fluid w-50 mx-auto" alt="">
        </div>

       <div class="col-sm-12 col-md-12 col-lg-8 d-flex align-items-center">
   
       </div>  <!--  Para que haga espacio -->

       <div class="col-sm-6 col-md-4 col-lg-2 mt-2">
            <div class="row justify-content-center">
                <div class="col-12 text-center mb-0">
                    <h6>
                        @if (isset(Auth::user()->nombre_completo))
                            {{  Auth::user()->nombre_completo}}
                        @endif
                    </h6>
                </div>
                <div class="col-12 text-center mt-0">
                    <form action="{{route('cerrar.sesion')}}" method="POST">
                        @csrf
                        <button class="btn  btn-sm" type="submit">Cerrar Sesión</button>
                    </form>
                </div>
            </div>
       </div>

    </div>
</div>
<!-- BARRA DE NAVEGACIÓN -->