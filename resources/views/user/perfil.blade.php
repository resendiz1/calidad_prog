@extends('plantilla')
@section('contenido')
@include('assets.nav')    



<!-- MENU DE OPCIONES -->
<div class="container-fluid mt-5 menu">
    <div class="row d-flex justify-content-around">
        



    @if (Auth::user()->area == 'CALIDAD')
            
        <div class="col-sm-12 col-md-3 mt-1 col-lg-4 sombra btn resizeable-div  p-5 border border-5">
            <a href="{{route('fmp.rellenar')}}">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mx-auto">RELLENAR FORMATO FO/GP/CC/070/01</h5>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-pencil fa-3x mt-2"></i>
                    </div>
                </div>
            </a>
        </div>




        <div class="col-sm-12 col-md-3 mt-1 col-lg-4 sombra btn resizeable-div p-5 border border-5 ">
            <a href="{{route('fmp.generados')}}">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mx-auto">DOCUMENTOS GENERADOS</h5>
                    </div>
                    <div class="col-12">
                        <i class="fa-solid fa-magnifying-glass fa-3x mt-3"></i>
                    </div>
                </div>
            </a>
        </div>

    @else    



    
        <div class="col-sm-12 col-md-3 mt-1 col-lg-4 sombra btn resizeable-div p-5 border border-5 w-100">
            <div class="row">
                <a href="{{route('pendientes.revisar')}}">
                    <div class="col-12">
                        <p class="mx-auto h5">FORMATOS POR REVISAR</p>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-eye fa-3x mt-3"></i>
                    </div>
                </a>
            </div>
        </div>
    @endif
        
        
    </div>
</div>

<!-- MENU DE OPCIONES -->



{{-- alertas de que el usurio se agrego con exito o que hubo un error se desaparecen en 3 segundos--}}
@if (session('creado'))
    <script>
         window.addEventListener('load', function(){
            Swal.fire({
                title: "Hecho",
                text:  "{{session('creado')}}",
                icon: "success"
            });

            setTimeout(function(){
                window.location.replace(window.location.href);
            }, 3500);
         });
        
    </script>
 
@endif





@endsection