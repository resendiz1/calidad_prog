@extends('plantilla')
@section('contenido')
@include('assets.nav')

<div class="container bg-white mt-4 mb-3 sombra border border-5">
    <div class="row">
        <div class="col-12 text-center p-3">
            <h3 class="fw-bold">FORMATOS DE PRODUCTO NO CONFORME</h3>
            <a href="{{route('user.perfil')}}" class="btn btn-success btn-sm">
                Regresar
            </a>
        </div>
    </div>
</div>




<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12 bg-light p-4">

        @forelse ($fpnc as $ifpnc)
               
                <a href="{{route('fpnc.lleno', $ifpnc->id)}}">
                    <div class="row p-3 resizeable-table mt-1"> 
                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Folio: </b> <br>
                            <span class="fw-bold text-danger">{{$ifpnc->folio}}</span>
                        </div>
                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Producto: </b> <br>
                            <span>{{$ifpnc->producto}}</span>
                        </div>
                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Proveedor: </b> <br>
                            <span>{{$ifpnc->proveedor}}</span>
                        </div>
                        <div class=" col-sm-6 col-md-6 col-lg-3 p-2 border-start">
                          <b>Realizo: </b> <br>
                          <span>{{$ifpnc->usuario_logeado}}</span>
                        </div>
                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Proveedor: </b> <br>
                            <span class="fw-bold">
                                
                                {{$ifpnc->proveedor}}
                            </span>
                          </div>
                    </div>
                </a>

         @empty
            <li>No hay registros</li>
        @endforelse

        </div>
    </div>
</div>
<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->







@endsection