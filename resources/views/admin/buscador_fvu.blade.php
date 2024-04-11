@extends('plantilla')
@section('contenido')
@include('assets.nav')
@section('title', 'FO/GP/CC/001/001')




<form action="{{route('buscados.fvu')}}" method="POST">
    @csrf
    <!-- INPUT PARA INGRESAR DATOS PARA BUSCAR -->
    <div class="container mt-5 bg-white p-4 border border-5 sombra">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <input type="text" name="busqueda" class="form-control" placeholder="propietario, embarque, folio" autofocus >
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 d-flex align-items-center mt-1">
                        <button class="btn btn-success w-100"> <i class="fa fa-search"></i> Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INPUT PARA INGRESAR DATOS PARA BUSCAR -->
</form>





<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12 bg-light p-4">

        @forelse ($formatos as $formato)
        <a href="{{route('fvu.lleno.admin', $formato->id)}}">
            <div class="row p-3 resizeable-table mt-1 justify-content-around"> 
                <div class="col-lg-2">
                    <b>Folio: </b>
                    <h6 class="text-danger">{{$formato->folio}}</h6>
                </div>
                <div class="col-lg-2 p-2">
                    <b>Fecha:</b>
                    <h6> {{$formato->fecha}} </h6>
                </div>
                <div class="col-lg-2 p-2">
                    <b>Linea Transportista:</b>
                    <h6> {{$formato->linea_transportista}} </h6>
                </div>
                <div class="col-lg-2 p-2">
                    <b>Embarque:</b>
                    <h6>{{$formato->numero_embarque}}</h6>
                </div>
                <div class="col-lg-3 p-2">
                    <b>Reviso:</b>
                    <h6>{{$formato->usuario_logeado}}</h6>
                </div>
            </div>
        </a>
        @empty

        <li>Sin resultados</li>
        @endforelse

        </div>
    </div>
</div>
<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->

@endsection