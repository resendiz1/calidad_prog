@extends('plantilla')
@section('contenido')
@include('assets.nav')



<!-- MENU DE OPCIONES -->
<br><br>
<div class="container-fluid mt-5 menu">
    <div class="row mt-5 justify-content-around">

        <div class="col-sm-12 col-md-3 mt-1 col-lg-3 sombra btn resizeable-div  p-5 border border-5">
            <a href="add-users.html">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mx-auto">AGREGAR USUARIOS</h5>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-user-plus fa-3x mt-2"></i>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-sm-12 col-md-3 mt-1 col-lg-3 sombra btn resizeable-div  p-5 border border-5">
            <a href="gestionar-users.html">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mx-auto">GESTIONAR USUARIOS</h5>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-users fa-3x mt-2"></i>
                    </div>
                </div>
            </a>
        </div>






        <div class="col-sm-12 col-md-3 mt-1 col-lg-3 sombra btn resizeable-div p-5 border border-5">
            <a href="busqueda.html">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mx-auto">BUSCAR DOCUMENTOS</h5>
                    </div>
                    <div class="col-12">
                        <i class="fa-solid fa-magnifying-glass fa-3x mt-3"></i>
                    </div>
                </div>
            </a>
        </div>



    </div>
</div>

<!-- MENU DE OPCIONES -->
@endsection