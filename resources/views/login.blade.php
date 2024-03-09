@extends('plantilla')
@section('contenido')

    <div class="container p-5 mt-5">
        <div class="row mt-5 justify-content-center">
            <div class="col-sm-12 col-md-9 col-lg-5 mt-5 bg-white p-5 border border-5 sombra">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="img/logo.png" class="img-fluid" alt="">
                        <h3 class="mt-2">Inicio de sesión</h3>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="input-group">
                            <div class="input-group-icon">
                                <span class="input-group-text"> <i class="fa fa-user p-1"></i> </span>
                            </div>
                            <input type="text" class="form-control login" aria-describedby="input-group-icon" placeholder="Usuario">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock p-1"></i> </span>
                            </div>
                            <input type="password" class="form-control form-control-sm login" aria-describedby="input-group-prepend" placeholder="Contraseña" >
                        </div>
                    </div>
                </div>



                <div class="row mt-3 justify-content-center">
                    <!-- <div class="col-9 text-center">
                        <input type="checkbox" class="form-check-input" value="Entrar como administrador" name="" id="administrador">
                        <label for="administrador">Ingresar como administrador</label>
                    </div> -->
                    <div class="col-sm-12 col-md-9 col-lg-9 mt-3">
                        <a href="admin.html" class="btn btn-success w-100"> <i class="fa fa-"></i> Entrar como administrador</a>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9 mt-3">
                        <a href="user.html" class="btn btn-success w-100"> <i class="fa fa-"></i> Entrar como usuario</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

     




