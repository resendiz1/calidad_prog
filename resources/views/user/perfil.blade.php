@extends('plantilla')
@section('contenido')
@include('assets.nav') 
@section('title', Auth::user()->nombre_completo )






<!-- MENU DE OPCIONES -->
<div class="container mt-5 p-5 ">
    <div class="row d-flex justify-content-around">
        


    @if (Auth::user()->area == 'CALIDAD')
            
        <div class="col-sm-12 col-md-3 mt-1 col-lg-2 sombra btn resizeable-div   border border-5">
            <a href="{{route('fmp.rellenar')}}">
                <div class="row">
                    <div class="col-12">
                        <h6 class="mx-auto mt-3">RECEPCIÓN MATERIA PRIMA</h6>
                        <li>FO/GP/CC/070/01</li>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-pencil fa-2x mt-2"></i>
                    </div>
                </div>
            </a>
        </div>



        <div class="col-sm-12 col-md-3 mt-1 col-lg-2 sombra btn resizeable-div   border border-5">
            <a href="{{route('tabla.fpnc')}}">
                <div class="row">
                    <div class="col-12">
                        <h6 class="mx-auto mt-3">PRODUCTO NO CONFORME</h6>
                        <li>FO/GP/CC/001/001</li>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-pencil fa-2x mt-2"></i>
                    </div>
                </div>
            </a>
        </div>



        <div class="col-sm-12 col-md-3 mt-1 col-lg-2 sombra btn resizeable-div   border border-5">
            <a href="{{route('fvu.rellenar')}}">
                <div class="row">
                    <div class="col-12">
                        <h6 class="mx-auto mt-3">VERIFICACIÓN DE UNIDADES</h6>
                        <li>FO/GP/CC/070/05</li>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-pencil mt-2 fa-2x"></i>
                    </div>
                </div>
            </a>
        </div>        








        <div class="col-sm-12 col-md-3 mt-1 col-lg-2 sombra btn resizeable-div  border border-5 ">
            <a href="{{route('fmp.generados')}}">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h6 class="mx-auto">DOCUMENTOS GENERADOS</h6>
                        <li>FO/GP/CC/070/01</li>
                    </div>
                    <div class="col-12">
                        <i class="fa-solid fa-magnifying-glass fa-2x mt-3"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-12 col-md-3 mt-1 col-lg-2 sombra btn resizeable-div  border border-5 ">
            <a href="{{route('fpnc.generados')}}">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h6 class="mx-auto">DOCUMENTOS GENERADOS</h6>
                        <li>FO/GP/CC/001/001</li>
                    </div>
                    <div class="col-12">
                        <i class="fa-solid fa-magnifying-glass fa-2x mt-3"></i>
                    </div>
                </div>
            </a>
        </div>


        

    @else    

        <div class="col-sm-12 col-md-3 mt-1 col-lg-3 sombra btn resizeable-div  border border-5 ">
            <div class="row">
                <a href="{{route('pendientes.revisar')}}">
                    <div class="col-12">
                        <p class="mx-auto h5">FORMATOS POR REVISAR</p>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-eye mt-3 fa-2x"></i>
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