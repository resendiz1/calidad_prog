@extends('plantilla')
@section('contenido')
@include('assets.nav')

<div class="container bg-white mt-4 mb-3 sombra border border-5">
    <div class="row">
        <div class="col-12 text-center p-3">
            <h3 class="fw-bold">FORMATOS DE VERIFICACIÓN DE UNIDADES</h3>
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

        @forelse ($fvu as $ifvu)
               
                <a href="{{route('fvu.lleno', $ifvu->id)}}">
                    <div class="row p-3 resizeable-table mt-1"> 

                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Folio: </b> <br>
                            <span class="fw-bold text-danger">{{$ifvu->folio}}</span>
                        </div>

                        <div class=" col-sm-6 col-md-6 col-lg-3 p-2 border-start">
                            <b>Fecha: </b> <br>
                            <span>{{$ifvu->fecha}}</span>
                        </div>

                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Estructura: </b> <br>
                            <span>{{$ifvu->estructura_transporte}}</span>
                        </div>

                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                          <b>Contenedor: </b> <br>
                          <span>{{$ifvu->estructura_contenedor}}</span>
                        </div>

                        <div class=" col-sm-6 col-md-6 col-lg-2 p-2 border-start">
                            <b>Dictamen: </b> <br>

                                @if ($ifvu->dictamen_final == 'LIBERADO' )
                                    <span class="text-success fw-bold" >{{$ifvu->dictamen_final}}</span>
                                @else
                                     <span class="text-danger fw-bold" >{{$ifvu->dictamen_final}}</span>
                                @endif



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