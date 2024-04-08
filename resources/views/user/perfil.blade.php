@extends('plantilla')
@section('contenido')
@include('assets.nav') 
@section('title', Auth::user()->nombre_completo )






<!-- MENU DE OPCIONES -->
<div class="container">


    <div class="row d-flex justify-content-around">
        


@if (Auth::user()->area == 'CALIDAD')


{{-- SECCION DEL FORMATO DE MATERIA PRIMA --}}   
    <div class="col-sm-12 col-md-6 col-lg-4 m-3 border border-5 fondo p-3 mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h6>FORMATO DE RECEPCIÓN DE MATERIA PRIMA</h6>
            </div>
        </div>


        <div class="row d-flex justify-content-center">
    
            {{-- card rellenar  formatos materia prima --}}
            <div class="col-sm-12 col-lg-6 sombra btn resizeable-div   border border-5 m-2">
                <a href="{{route('fmp.rellenar')}}">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="mx-auto mt-3">RECEPCIÓN MATERIA PRIMA</h6>
                        </div>
                        <div class="col-12">
                            <i class="fa fa-pencil fa-2x mt-2"></i>
                        </div>
                    </div>
                </a>
            </div>
            {{-- card rellenar  formatos materia prima --}}




            {{-- card documentos generados formato materia prima --}}
            <div class="col-sm-12 col-lg-6 sombra btn resizeable-div  border border-5  mt-3">
                <a href="{{route('fmp.generados')}}">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <h6 class="mx-auto">DOCUMENTOS GENERADOS</h6>
                        </div>
                        <div class="col-12">
                            <i class="fa-solid fa-magnifying-glass fa-2x mt-3"></i>
                        </div>
                    </div>
                </a>
            </div>
              {{-- card documentos generados formato materia prima --}}            


        </div>
    </div>
{{-- SECCION DEL FORMATO DE MATERIA PRIMA --}}   









{{-- SECCION DEL FORMATO DE PRODUCTO NO CONFORME --}}   
    <div class="col-sm-12 col-md-6 col-lg-4 m-3 border border-5 fondo p-3 mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h6>FORMATO DE PRODUCTO NO CONFORME</h6>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
             {{-- card rellenar  formatos producto no conforme --}}
            <div class="col-sm-12 col-lg-6 sombra btn resizeable-div   border border-5 m-2">
                <a href="{{route('tabla.fpnc')}}">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="mx-auto mt-3">PRODUCTO NO CONFORME</h6>
                        </div>
                        <div class="col-12">
                            <i class="fa fa-pencil fa-2x mt-2"></i>
                        </div>
                    </div>
                </a>
            </div>
            {{-- card rellenar  formatos producto no conforme --}}
    
    
    
         {{-- card generados  formatos producto no conform --}}
            <div class="col-sm-12 col-lg-6 sombra btn resizeable-div  border border-5  mt-3">
                <a href="{{route('fpnc.generados')}}">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <h6 class="mx-auto">DOCUMENTOS GENERADOS</h6>
                        </div>
                        <div class="col-12">
                            <i class="fa-solid fa-magnifying-glass fa-2x mt-3"></i>
                        </div>
                    </div>
                </a>
            </div>
            {{-- card generados  formatos producto no conform --}}
    
        </div>
    </div>
{{-- SECCION DEL FORMATO DE PRODUCTO NO CONFORME --}}   




{{-- SECCION DEL FORMATO DE VERIFICACION DE UNIDADES --}} 
<div class="col-sm-12 col-md-6 col-lg-4 m-3 border border-5 fondo p-3 mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h6>FORMATO DE VERIFICACIÓN DE UNIDADES </h6>
        </div>
    </div>


    <div class="row d-flex justify-content-center">
        
        {{-- card RELLENAR  formatos VERIFICACION UNIDADES --}}
            <div class="col-sm-12 col-lg-6 sombra btn resizeable-div   border border-5">
                <a href="{{route('fvu.rellenar')}}">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="mx-auto mt-3">VERIFICACIÓN DE UNIDADES</h6>
                        </div>
                        <div class="col-12">
                            <i class="fa fa-pencil mt-2 fa-2x"></i>
                        </div>
                    </div>
                </a>
            </div>  
        {{-- card RELLENAR  formatos VERIFICACION UNIDADES --}}
            
            


    {{-- card generados  formatos V U --}}
            <div class="col-sm-12 col-lg-6 sombra btn resizeable-div   border border-5 mx-1 mt-4">
                <a href="#">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="mx-auto mt-3"> VER VERIFICACIÓN DE UNIDADES</h6>
                        </div>
                        <div class="col-12">
                            <i class="fa fa-pencil mt-2 fa-2x"></i>
                        </div>
                    </div>
                </a>
            </div>  
        {{-- card generados  formatos V U --}}


    </div>
</div>
{{-- SECCION DEL FORMATO DE VERIFICACION DE UNIDADES --}} 
        
        
    
        
        
        
        


        

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