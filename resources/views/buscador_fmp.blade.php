@extends('plantilla')
@section('contenido')
@include('assets.nav')





<!-- INPUT PARA INGRESAR DATOS PARA BUSCAR -->
<div class="container mt-5 bg-white p-4 border border-5 sombra">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-2">
                    <input type="text" class="form-control">
                </div>
                <div class="col-3 d-flex align-items-center">
                    <button class="btn btn-success btn-sm"> <i class="fa fa-search"></i> Buscar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- INPUT PARA INGRESAR DATOS PARA BUSCAR -->




<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->
<div class="container mt-4">
<div class="row">
    <div class="col-12 bg-light p-4">
    
        <a href="buscado.html">
            <div class="row p-3 resizeable-table mt-1"> 
                <div class="col-4 p-2">
                   <h6> 26 DE FEBRERO DEL 2024 </h6>
                </div>
                <div class="col-4 p-2">
                   <h6> PULIDURA DE ARROZ </h6>
                </div>
                <div class="col-4 p-2">
                    PROMEXA
                </div>
            </div>
        </a>

        <a href="buscado.html">
            <div class="row p-3 resizeable-table mt-1"> 
                <div class="col-4 p-2">
                    26 DE FEBRERO DEL 2024
                </div>
                <div class="col-4 p-2">
                    PULIDURA DE AROZ
                </div>
                <div class="col-4 p-2">
                    PROMEXA
                </div>
            </div>
        </a>





    </div>
</div>
</div>
<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->

@endsection