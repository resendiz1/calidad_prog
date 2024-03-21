@extends('plantilla')
@section('contenido')
@include('assets.nav')



<!-- MENU DE OPCIONES -->
<br><br>
<div class="container-fluid mt-5 menu">
    <div class="row mt-5 justify-content-around">

        <div class="col-sm-12 col-md-3 mt-1 col-lg-3 sombra btn resizeable-div  p-0 border border-5">
            <a href="{{route('admin.add_usuario')}}">
                <div class="row p-5">
                    <div class="col-12 ">
                        <h5 class="mx-auto">AGREGAR USUARIOS</h5>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-user-plus fa-3x mt-2"></i>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-sm-12 col-md-3 mt-1 col-lg-3 sombra btn resizeable-div border border-5">
            <a href="{{route('lista.usuarios')}}">
                <div class="row p-5">
                    <div class="col-12">
                        <h5 class="mx-auto">GESTIONAR USUARIOS</h5>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-users fa-3x mt-2"></i>
                    </div>
                </div>
            </a>
        </div>






        <div class="col-sm-12 col-md-3 mt-1 col-lg-3 sombra btn resizeable-div border border-5">
            <a href="{{route('busqueda.fmp')}}">
                <div class="row p-5">
                    <div class="col-12">
                        <h5 class="mx-auto">BUSCAR DOCUMENTOS</h5>
                    </div>
                    <div class="col-12">
                        <i class="fa-solid fa-magnifying-glass fa-3x "></i>
                    </div>
                </div>
            </a>
        </div>



    </div>
</div>

<!-- MENU DE OPCIONES -->
@endsection