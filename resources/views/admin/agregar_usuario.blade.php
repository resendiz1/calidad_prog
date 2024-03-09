@extends('plantilla')
@section('contenido')
@include('assets.nav')



<!-- FORMLARO DE AGREGAR USUARIOS -->

<div class="container mt-5">
    <div class="row mt-5 justify-content-center">
        
        <div class="col-sm-10 col-md-6 col-lg-4 mt-5 bg-white p-4 sombra border border-5">

            <div class="row">
                <div class="col-12 text-center">
                    <h5>AGREGAR USUARIOS</h5>
                </div>
            </div>

            <div class="row mt-5 p-2">

                <div class="form-group">
                    <label for="" class="fw-bold">NOMBRE COMPLETO</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group mt-3">
                    <label for="" class="fw-bold">CORREO ELECTRONICO</label>
                    <input type="email" class="form-control">
                </div>
                
                <div class="form-group mt-3">
                    <label for="" class="fw-bold">CONTRASEÑA</label>
                    <input type="password" class="form-control">
                </div>

                
                <div class="form-group mt-3">
                    <label for="" class="fw-bold">CONFIRMA CONTRASEÑA</label>
                    <input type="password" class="form-control">
                </div>


                <div class="form-group mt-3">
                    <label for="" class="fw-bold">AREA</label>
                    <select class="form-select mt-1 form-control-sm p-0 text-center">
                        <option value="CALIDAD">CALIDAD</option>
                        <option value="PRODUCCIÓN">PRODUCCIÓN</option>
                        <option value="BASCULA">BASCULA</option>
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label for="" class="fw-bold">PLANTA</label>
                    <select class="form-select mt-1 form-control-sm p-0 text-center">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>



                <div class="form-group mt-5 text-center">
                    <button class="btn btn-success w-75">
                       <i class="fa fa-save mx-1"></i> ACEPTAR
                    </button>
                </div>

            </div>


        </div>
    </div>
</div>

<!-- FORMLARO DE AGREGAR USUARIOS -->




@endsection