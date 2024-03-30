@extends('plantilla')
@section('contenido')
@include('assets.nav')
@section('title', 'FORMATOS GENERADOS')

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
    
<a href="{{route('fmp.lleno', $formato->id)}}" class="mx-2">
    <div class="row p-3 resizeable-table mt-1 border justify-content-center "> 
        <div class=" col-sm-6 col-md-6 col-lg-1 p-2 border-start">
            <b>Folio: </b> <br>
            <span class="fw-bold text-danger">{{$formato->folio}} </span>
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-3 p-2 border-start">
            <b>Fecha: </b> <br>
            <span>{{$formato->fecha}} <br>
                <b> {{substr($formato->created_at, -8)}} </b> 
            </span>
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-3 p-2 border-start">
            <b>Producto: </b> <br>
            <span> {{$formato->producto}}</span>
        </div>
        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
            <b>Proveedor: </b> <br>
            <span>{{$formato->proveedor}}</span>
        </div>
        <div class=" col-sm-12 col-md-12 col-lg-3 p-2 border-start text-center">
            <div class="row justify-content-center">
                <div class="col-3 text-center">
                    <span>Bascula: 
                    @if ($formato->reviso_bascula)
                        <i class="fa fa-check  mx-2"></i> </span>
                    @elseif ($formato->reviso_bascula=='')
                        <i class="fa fa-clock mx-2"></i> </span>
                    @endif
                </div>
                <div class="col-3 text-center">
                    <span>Producción: 
                    @if ($formato->reviso_produccion)
                        <i class="fa fa-check mx-2"></i> </span>
                    @elseif ($formato->reviso_produccion=='')
                        <i class="fa fa-clock  mx-2"></i> </span>
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