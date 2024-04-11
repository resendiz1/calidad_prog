@extends('plantilla')
@section('contenido')
@include('assets.nav')
@section('title', Auth::user()->nombre_completo)



<!-- MENU DE OPCIONES -->
<br><br>
<div class="container-fluid  menu">
    <div class="row  justify-content-around">






{{-- SECCION DE BUSQUEDA DE DOCUMENTOS --}}   
<div class="col-sm-12 col-md-6 col-lg-6 m-3 border border-5 fondo p-3 mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h6>BUSCAR DOCUMENTOS</h6>
        </div>
    </div>


    <div class="row d-flex justify-content-center">

        {{-- card rellenar  formatos materia prima --}}
        <div class="col-sm-12 col-lg-5 sombra btn resizeable-div   border border-5 m-2">
            <a href="{{route('busqueda.fmp')}}">
                <div class="row">
                    <div class="col-12">
                        <h6 class="mx-auto mt-3">MATERIA PRIMA</h6>
                    </div>
                    <div class="col-12">
                        <i class="fa-solid fa-magnifying-glass fa-2x mt-1"></i>
                    </div>
                </div>
            </a>
        </div>
        {{-- card rellenar  formatos materia prima --}}




        {{-- card documentos generados formato materia prima --}}
        <div class="col-sm-12 col-lg-5 sombra btn resizeable-div  border border-5 m-2">
            <a href="{{route('busqueda.fpnc')}}">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h6 class="mx-auto">PRODUCTO NO CONFORME</h6>
                    </div>
                    <div class="col-12">
                        <i class="fa-solid fa-magnifying-glass fa-2x mt-1"></i>
                    </div>
                </div>
            </a>
        </div>
        {{-- card documentos generados formato materia prima --}}      
        


        {{-- card documentos generados formato materia prima --}}
        <div class="col-sm-12 col-lg-5 sombra btn resizeable-div  border border-5 m-2">
            <a href="{{route('busqueda.fvu')}}">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h6 class="mx-auto">LIBERACIÓN DE UNIDADES</h6>
                    </div>
                    <div class="col-12">
                        <i class="fa-solid fa-magnifying-glass fa-2x mt-1"></i>
                    </div>
                </div>
            </a>
        </div>
        {{-- card documentos generados formato materia prima --}}      






    </div>
</div>
{{-- SECCION DE BUSQUEDA DE DOCUMENTOS --}}   















{{-- SECCION DE GESTIONAR USUARIOS --}}   
<div class="col-sm-12 col-md-6 col-lg-4 m-3 border border-5 fondo p-3 mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h6>GESTIONAR USUARIOS</h6>
        </div>
    </div>


    <div class="row d-flex justify-content-center">

        {{-- card rellenar  formatos materia prima --}}
        <div class="col-sm-12 col-lg-6 sombra btn resizeable-div   border border-5 m-2">
            <a href="{{route('lista.usuarios')}}">
                <div class="row">
                    <div class="col-12">
                        <h6 class="mx-auto mt-3">GESTIONAR USUARIOS</h6>
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
            <a href="{{route('admin.add_usuario')}}">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h6 class="mx-auto">AGREGAR USUARIOS</h6>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-pencil fa-2x mt-2"></i>
                    </div>
                </div>
            </a>
        </div>
          {{-- card documentos generados formato materia prima --}}            


    </div>
</div>
{{-- SECCION DE GESTIONAR USUARIOS --}}   






        



    </div>
</div>

<!-- MENU DE OPCIONES -->
@endsection