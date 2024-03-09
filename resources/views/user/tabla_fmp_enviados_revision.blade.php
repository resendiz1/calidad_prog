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

        
            <a href="#">
                <div class="row p-3 resizeable-table mt-1"> 
                    <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                        <span>26 DE FEBRERO DEL 2024</span>
                    </div>
                    <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                       <span> PULIDURA DE ARROZ </span>
                    </div>
                    <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                        <span>PROMEXA</span>
                    </div>
                    <div class=" col-sm-6 col-md-6 col-lg-5 p-2 border-start">
                        <div class="row">
                            <div class="col-4">
                                <span>Bascula: <i class="fa fa-eye text-primary mx-2"></i> </span>
                            </div>
                            <div class="col-4">
                                <span>Producción: <i class="fa fa-eye text-success mx-2"></i> </span>
                            </div>
                            <div class="col-4">
                                <span>Calidad: <i class="fa fa-eye text-danger mx-2"></i> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            
        </div>
    </div>
</div>
<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->







@endsection