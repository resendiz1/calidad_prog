@extends('plantilla')
@section('contenido')
@include('assets.nav')

<div class="container bg-white mt-4 mb-3 sombra border border-5">
    <div class="row">
        <div class="col-12 text-center p-3">
            <h3 class="fw-bold">FORMATOS DE PRODUCTO NO CONFORME PENDIENTES</h3>
        </div>
    </div>
</div>




<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12 bg-light p-4">

        @forelse ($fmp as $ifmp)
               
                <a href="{{route('fpnc.rellenar', $ifmp->id)}}">
                    <div class="row p-3 resizeable-table mt-1"> 
                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Folio: </b> <br>
                            <span class="fw-bold text-danger">{{$ifmp->folio}}</span>
                        </div>
                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Producto: </b> <br>
                            <span>{{$ifmp->producto}}</span>
                        </div>
                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Proveedor: </b> <br>
                            <span>{{$ifmp->proveedor}}</span>
                        </div>
                        <div class=" col-sm-6 col-md-6 col-lg-3 p-2 border-start">
                          <b>Realizo: </b> <br>
                          <span>{{$ifmp->usuario_logeado}}</span>
                        </div>
                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Dictamen Final: </b> <br>
                            <span class="text-danger fw-bold">
                                <i class="fa fa-square-xmark"></i>
                                {{$ifmp->dictamen_final}}
                            </span>
                          </div>
                    </div>
                </a>

         @empty
            
        @endforelse

        </div>
    </div>
</div>
<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->







@endsection