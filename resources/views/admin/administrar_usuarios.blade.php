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
                <div class="row p-3 resizeable-table mt-1"> 

                    <div class="col-3 p-2">
                    <h6 class="mt-2">ING. EFRAIN LÓPEZ MERINO</h6>
                    </div>

                    <div class="col-3 p-2">
                    <h6 class="mt-2"> CALIDAD </h6>
                    </div>

                    <div class="col-3 p-2">
                        <h6 class="mt-2">efrain.rojas@grupopabsa.com</h6>
                    </div>

                    <div class="col-3 p-2 text-end">
                        <div class="row d-flex justify-content-end">
                            <div class="col-6">
                                <a href="edit-user.html" class="btn btn-info btn-sm text-white">
                                    <i class="fa fa-edit mx-1 "></i> EDITAR
                                </a>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-danger btn-sm text-white" >
                                    <i class="fa fa-trash mx-1"></i> ELIMINAR
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- PANEL PARA MOSTRAR LA TABLA CON LOS RESULTADOS DE LA BUSQUEDA -->



@endsection