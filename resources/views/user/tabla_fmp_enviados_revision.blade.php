@extends('plantilla')
@section('contenido')
@include('assets.nav')

<div class="container bg-white mt-4 mb-3 sombra border border-5">
    <div class="row">
        <div class="col-12 text-center p-3">
            <h3 class="fw-bold">MIS FORMATOS ENVIADOS</h3>
        </div>
    </div>
</div>




<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12 bg-light p-4">

        

@forelse ($formatos as $formato)
    
<a href="{{route('fmp.lleno', $formato->id)}}">
    <div class="row p-3 resizeable-table mt-1"> 
        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
            <span>{{$formato->fecha}} {{substr($formato->created_at, -8)}}</span>
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-3 p-2 border-start">
            <span> {{$formato->producto}}</span>
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
            <span>{{$formato->proveedor}}</span>
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-5 p-2 border-start">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <span>Bascula: 
                    @if ($formato->reviso_bascula)
                        <i class="fa fa-eye text-success mx-2"></i> </span>
                    @elseif ($formato->reviso_bascula=='')
                        <i class="fa fa-clock text-danger mx-2"></i> </span>
                    @endif
                </div>
                <div class="col-6 text-center">
                    <span>Producción: 
                    @if ($formato->reviso_produccion)
                        <i class="fa fa-eye text-success mx-2"></i> </span>
                    @elseif ($formato->reviso_produccion=='')
                        <i class="fa fa-clock text-danger mx-2"></i> </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</a>
@empty
    
@endforelse






        </div>
    </div>
</div>
<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->


{{-- alertas de que el usurio se agrego con exito o que hubo un error se desaparecen en 3 segundos--}}
@if (session('creado'))
    <script>
         window.addEventListener('load', function(){
            Swal.fire({
                title: "Hecho",
                text:  "{!! session('creado') !!}",
                icon: "success"
            });

            setTimeout(function(){
                window.location.replace(window.location.href);
            }, 3500);
         });
        
    </script>
 
@endif




@endsection