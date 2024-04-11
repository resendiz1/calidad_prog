@extends('plantilla')
@section('contenido')
@include('assets.nav')
@section('title', 'FO/GP/CC/070/05')
    

<form action="{{route('fvu.agregar')}}" enctype="multipart/form-data" method="POST">
    @csrf
        <!-- contenedor de todo -->
        <div class="container bg-white p-5 sombra mt-2">

            <!-- encabezado -->
            <div class="container shadow shadow-sm bg-white">
                <div class="row border border-5">
                
                <div class="col-sm-12 col-md-4  col-lg-4 centrar-verticalmente p-2 mt-2">
                    <img src="{{asset('img/logo.png')}}" class="mx-auto img-fluid" alt="">
                </div>
                
                <div class="col-sm-12 col-md-4 col-lg-4 border mt-2"> 
                    <div class="row text-center border">
                    <h3>FORMATO</h3>
                    </div>
                    
                    <div class="row d-flex align-items-center">
                        <span class="text-center mt-3">VERIFICACIÓN DE UNIDADES</span>
                    </div>
                </div>
            
                <div class=" col-sm-12 col-md-4 col-lg-4 border mt-2">
                    <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Codigo</div>
                    <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >FO/GP/CC/070/05</div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Versión</div>
                    <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >03</div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Vigencia</div>
                    <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >
                        AGOSTO 2023</div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Pagina</div>
                    <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >1 de 4</div>
                    </div>
            
                </div>
                
                </div>
            </div>
            <!-- encabezado -->
            
            
            
            
            
            <!-- datos del formato -->
            <div class="container bg-white">
                <div class="row  p-4 justify-content-center shadow shadow-sm">
            
                <div class="col-sm-12 col-md-5 col-lg-5 border">
            
                    <div class="row">
                    <div class="col-auto mt-1">
                        <span class="centrar-verticalmente h6">Planta:</span>
                    </div>       
                    <div class=" col-auto bg-white mt-1">
                        <h6 class="mt-2">No. {{Auth::user()->planta}}</h6>
                        <input type="hidden" name="planta" value="{{Auth::user()->planta}}">
                        <input type="hidden" name="usuario_logeado" value="{{Auth::user()->nombre_completo}}">
                    </div>
                    </div>
                    
                    <div class="row mt-2 border-top">
                    <div class="col-auto mt-1">
                        <span class="centrar-verticalmente h6">Fecha:</span>
                    </div>       
                    <div class="col-auto bg-white mt-1">
                        <span class="font-weight-bold">{{$fecha}}</span>
                        <input type="hidden" value="{{$fecha}}" name="fecha" >
                    </div>
                </div>
            
                </div>
            
            
                <div class="col-sm-12 col-md-2 col-lg-2 my-3 "></div>     <!-- Este es para que se quede el espacio en blando entre las dos tablas de datos -->
            
            
                <div class="col-sm-12 col-md-5 col-lg-5 border p-2">
                
                <div class="row border-bottom">
                    <div class="col-auto mt-1">
                    <span class="centrar-verticalmente h6">Folio:</span>
                    </div>       
                    <div class="col-auto bg-white mt-1">
                    <span class="text-danger font-weight-bold h6">
                        <i class="fa fa-lock"></i>
                        Se generara cuando se guarde el documento
                    </span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-auto">
                        <span class="centrar-verticalmente h6">Hora de recepción:</span>
                    </div>       
                    <div class="col-auto bg-white">
                        <input type="time" name="hora" class="form-control mt-2" value="{{old('hora')}}">
                        {!!$errors->first('hora', '<small class="text-danger fw-bold badge badge-danger">:message</small>  ')!!}
                    </div>
                </dv>      
                </div>
                </div>
            
                </div>
            </div>
            <!-- datos del formato -->
            
            
            
            
            
            <!-- Titulos -->
            <div class="container  bg-white">
                <div class="row justify-content-around shadow shadow-sm py-3 border">
            
            <!-- COLUMNA DE LOS "DATOS DE LA MATERIA PRIMA" -->
                <div class="col-sm-12 col-md-6  col-lg-6 border">
                    <div class="row justify-content-around">
            
                    <div class="col-lg-8 mx-1 text-center fondo border border-dark">
                        <span class="mt-1 h6 h6-sm">DATOS DEL CLIENTE / PROVEEDOR</span>
                    </div>
            
            
                    <div class="col-10 mt-3 border border-gray border-2 fondo-titulos">
                        <h6 class="mt-1">PROVEEDOR / CLIENTE</h6>
                    </div>
            
                    <div class="col-10 p-0">
                        <select class="text-left form-select form-control mt-1" name="propietario">
                        <option value="Roberto Beristain">Roberto Beristain</option>
                        <option value="PROMEXA">PROMEXA</option>
                        </select>
                    </div>
                    <div class="col-10 mt-3 border fondo-titulos border border-gray">
                        <h6 class="mt-1">LINEA TRANSPORTISTA</h6>
                    </div>
                    
                    <div class="col-10 text-left p-0">
                        <select class="text-left form-select form-control mt-2" name="linea_transportista">
                        <option value="Tinisa">Tinisa</option>
                        <option value="SCP">SCP</option>
                        <option value="villaueva">villaueva</option>
                        <option value="BMER">BMER</option>
                        </select>
                    </div>
            
                    <div class="col-10 fondo-titulos mt-3">
                        <h6 class="mt-1">NÚMERO DE EMBARQUE</h6>
                    </div>
            
                    <div class="col-10 p-0">
                        <input type="text" class="form-control mt-1" name="embarque" value="{{old('embarque')}}">
                        {!!$errors->first('embarque', '<small class="text-danger fw-bold badge badge-danger">:message</small>  ')!!}
                    </div>
            
                    </div>
                </div>
            <!-- COLUMNA DE LOS "DATOS DE LA MATERIA PRIMA" -->
            
            
            
            <!-- COLUMNA DE LOS "DATOS DEL TRANSPORTE" -->
                <div class="col-sm-12 col-md-6 col-lg-6 border">
                    <div class="row justify-content-around">
                    <!-- Titulo datos del transporte -->
                    <div class="col-lg-8 mx-1 text-center fondo border border-dark">
                        <span class="mt-1 h6 ">DATOS DEL TRANSPORTE</span>
                    </div>
                        
                    <div class="col-10 mt-3 fondo-titulos border border-gray p-0">
                        <h6 class="mt-1">OPERADOR</h6>
                    </div>
            
                    <div class="col-10 p-0">
                        <input type="text" class="form-control mt-1" autocomplete="on" name="operador" value="{{old('operador')}}">
                        {!!$errors->first('operador', '<small class="text-danger fw-bold badge badge-danger">:message</small>  ')!!}
                    </div>
                    <div class="col-10 p-0 fondo-titulos mt-3">        
                        <h6 class="mt-2">PLACAS DEL TRACTO O TORTON :</h6>
                    </div>
                    <div class="col-10 p-0 mt-1">
                        <input type="text" class="form-control" name="placas_transporte" value="{{old('placas_transporte')}}">
                        {!!$errors->first('placas_transporte', '<small class="text-danger fw-bold badge badge-danger">:message</small>  ')!!}
                    </div>
                    <div class="col-10 p-0 fondo-titulos mt-3">        
                        <h6 class="mt-2">PLACAS CAJA :</h6>
                    </div>
                    <div class="col-10 p-0 mt-1">
                        <input type="text" class="form-control" name="placas_caja" value="{{old('placas_caja')}}">
                        {!!$errors->first('placas_caja', '<small class="text-danger fw-bold badge badge-danger">:message</small>  ')!!}

                    </div>
                </div>
            <!-- COLUMNA DE LOS "DATOS DEL TRANSPORTE" -->
            
                </div>
            </div>
            </div>
            <!-- Titulos -->
            
            
            
            
            <!-- contenedor de los datos de la estructura -->
            <div class="container  bg-white p-5 ">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 fondo text-center border border-dark">
                    <h6 class="mt-2">ESTRUCTURA</h6>
                    </div>
                </div>

                <div class="row mt-4 d-flex justify-content-center" >

                    <div class="col-6 border">

                        <div class="row">
                            <div class="col-12 fondo text-center">
                                <h4>TRANSPORTE</h4>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center mt-2">
                            <div class="col-auto m-2 ">
                                <input type="radio" class="btn-check" value="Camioneta" name="vehiculo" id="camioneta1" autocomplete="off" checked>
                                <label class="btn btn-outline-secondary" for="camioneta1">Camioneta</label>
                            </div>
                
                            <div class="col-auto m-2 ">
                                <input type="radio" class="btn-check" value="Torton" name="vehiculo" id="torton1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="torton1">Torton</label>
                            </div>
                        
                            <div class="col-auto m-2 ">
                                <input type="radio" class="btn-check" value="Trailer" name="vehiculo" id="trailer1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="trailer1">Trailer</label>
                            </div>
                            
                        </div>
                    </div>



                    <div class="col-6 border">

                        <div class="row">
                            <div class="col-12 fondo text-center">
                                <h4>CONTENEDOR</h4>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-auto m-2 ">
                                <input type="radio" class="btn-check" value="Redilas" name="estructura_contenedor" id="redilas1" autocomplete="off" checked>
                                <label class="btn btn-outline-secondary" for="redilas1">Redilas</label>            
                            </div>
                
                            <div class="col-auto m-2 ">
                                <input type="radio" class="btn-check" value="Caja Seca" name="estructura_contenedor" id="caja_seca1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="caja_seca1">Caja Seca</label>      
                            </div>
                        
                            <div class="col-auto m-2 ">
                                <input type="radio" class="btn-check" value="Gondola" name="estructura_contenedor" id="gondola1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="gondola1">Gondola</label>    
                            </div>
                
                            <div class="col-auto m-2 ">
                                <input type="radio" class="btn-check" value="Plataforma" name="estructura_contenedor" id="plataforma" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="plataforma">Plataforma</label>    
                            </div>

                        </div>
                    </div>  
                    
                    


                </div>

            </div>
            <!-- contenedor de los datos de la estructura -->
            
            
            <!-- verificacion interna -->
            <div class="container bg-white p-5">
            
                <div class="row justify-content-around ">
                    <div class="col-12 fondo border border-dark text-center">
                        <h5 class="mt-2" >VERIFICACIÓN INTERNA</h5>
                        <b> ANTES DE INICIAR LA CARGA, REVISAR LA UNIDAD PROPUESTA SEÑALANDO CON UNA MARCA EL ESTADO QUE GUARDAN LOS PUNTOS: </b>
                    <br> <small> SI CUMPLEN LOS REQUERIMIENT MENCIONADOS EN LAS INSTRUCCIONES MARCAR CON UN <b>SI</b>, SI ALGUNA DE LAS ESPECIFICACIONES NO SE CUMPLE FAVOR DE ANOTAR <b>NO</b>  </small>
                    </div>
                </div>
            
                <div class="row mt-4">  <!--row de los criterios de verificacion interna -->
            
                    <div class="col-sm-12 col-md-4 col-lg-3 mt-4">
                        <label for="" class="fw-bold" >PISO</label>
                        <select class="form-select form-control-lg" name="piso" aria-label="Default select example">
                            <option value="SI">SI CUMPLE</option>
                            <option value="NO">NO CUMPLE</option>
                        </select>
                    </div>
            
                    <div class="col-sm-12 col-md-4 col-lg-3 mt-4">
                        <label for="" class="fw-bold" >PUERTAS</label>
                        <select class="form-select form-control-lg" name="puertas" aria-label="Default select example">
                            <option value="SI">SI CUMPLE</option>
                            <option value="NO">NO CUMPLE</option>
                        </select>
                    </div>
            
                    <div class="col-sm-12 col-md-4 col-lg-3 mt-4">
                        <label for="" class="fw-bold" >PAREDES</label>
                        <select class="form-select form-control-lg" name="paredes" aria-label="Default select example">
                            <option value="SI">SI CUMPLE</option>
                            <option value="NO">NO CUMPLE</option>
                        </select>
                    </div>
            
                    <div class="col-sm-12 col-md-4 col-lg-3 mt-4">
                        <label for="" class="fw-bold" >TECHO</label>
                        <select class="form-select form-control-lg" name="techo" aria-label="Default select example">
                            <option value="SI">SI CUMPLE</option>
                            <option value="NO">NO CUMPLE</option>
                        </select>
                    </div>
            
            
                    <div class="col-sm-12 col-md-4 col-lg-2 mt-4">
                        <label for="" class="fw-bold" >MATERIA EXTRAÑA</label>
                        <select class="form-select form-control-lg" name="materia_desconocida" aria-label="Default select example">
                            <option value="SI">SI CUMPLE</option>
                            <option value="NO">NO CUMPLE</option>
                        </select>
                    </div>
            
                    <div class="col-sm-12 col-md-4 col-lg-2 mt-4">
                        <label for="" class="fw-bold" >PLAGA</label>
                        <select class="form-select form-control-lg" name="plaga" aria-label="Default select example">
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
            
                    <div class="col-sm-12 col-md-4 col-lg-3 mt-4">
                        <label for="" class="fw-bold" >LIMPIEZA</label>
                        <select class="form-select form-control-lg" name="limpieza" aria-label="Default select example">
                            <option value="SI">SI CUMPLE</option>
                            <option value="NO">NO CUMPLE</option>
                        </select>
                    </div>
            
            
                    <div class="col-sm-12 col-md-4 col-lg-3 mt-4">
                        <label for="" class="fw-bold" >OLORES EXTRAÑOS</label>
                        <select class="form-select form-control-lg" name="olores_raros" aria-label="Default select example">
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
            
                    <div class="col-sm-12 col-md-4 col-lg-2 mt-4">
                        <label for="" class="fw-bold" >FILTRACIONES</label>
                        <select class="form-select form-control-lg" name="filtraciones" aria-label="Default select example">
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
            
                </div> <!--row de los criterios de verificacion interna -->
            
            
            
            
            
                <div class="row justify-content-around mt-5">
                    <div class="col-12 fondo border border-dark text-center">
                        <h5 class="mt-2" >VERIFICACIÓN EXTERNA</h5>
                    </div>
                </div>
            
            
            
                <div class="row mt-1">  <!--row de los criterios de verificacion externa -->
            
                    <div class="col-sm-12  col-lg-6 border">
            
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                            <label for="" class="fw-bold" >CERTIFICADOS DE FUMIGACIÓN Y SANITIZACIÓN</label>
                            <select class="form-select form-control-lg" name="fumigacion" aria-label="Default select example">
                                <option value="SI">SI CUMPLE</option>
                                <option value="NO">NO CUMPLE</option>
                            </select>
                        </div>
                
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                            <label for="" class="fw-bold" >LIBRE DE BASURA, QUIMICOS U OTROS</label>
                            <select class="form-select form-control-lg" name="libre_basura" aria-label="Default select example">
                                <option value="SI">SI CUMPLE</option>
                                <option value="NO">NO CUMPLE</option>
                            </select>
                        </div>  
                        
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                            <label for="" class="fw-bold" >VIDRIOS ESTRELLADOS</label>
                            <select class="form-select form-control-lg" name="vidrios_estrellados" aria-label="Default select example">
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>  
                
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                            <label for="" class="fw-bold" >SANITIZACIÓN LLANTAS Y CHASIS ANTES DE INGRESAR</label>
                            <select class="form-select form-control-lg" name="sanitizacion_llantas" aria-label="Default select example">
                                <option value="SI CUMPLE">SI CUMPLE</option>
                                <option value="NO CUMPLE">NO CUMPLE</option>
                            </select>
                        </div>  
            
            
                    </div>
            
            
            
                    <div class="col-sm-12  col-lg-6 p-5 text-center border">
                        <div class="row">
                            <div class="col-12">
                                <h4>EN CASO DE ALGUN INCUMPLIMIENTO </h4>
                                <h6>EL OPERADOR SE ATRIBUYE EL GARANTIZAR LA INTEGRIDAD DE LA CARGA</h6>
                            </div>
                            <div class="col-12 p-2 border border border-2" id="firma_preview">
                            <img src="https://cdn-icons-png.flaticon.com/512/104/104645.png" class="img-fluid w-50" alt="">
                            </div>
                            <div class="col-12 p-2 border border border-2">
                            <input type="file" class="form-control" name="firma" id="firma">
                            </div>
                        </div>
                    </div>
            
                </div> <!--row de los criterios de verificacion externa -->
            
            </div>
            <!-- verificacion interna y externa -->
            
            
            
            
            
            <div class="container bg-white p-5"> <!--dictamen y observaciones -->
            
                <div class="row justify-content-around">
                <div class="col-12 fondo border border-dark text-center">
                    <h5 class="mt-2" >OBSERVACIONES Y DICTAMEN</h5>
                </div>
                </div>
            
            
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-12 col-lg-2">
                    <label for="" class="fw-bold">DICTAMEN FINAL: <mark> {{Auth::user()->nombre_completo}} </mark></label>
            
                    <select class="form-select form-control-lg" name="dictamen_final" aria-label="Default select example">
                        <option value="LIBERADO">LIBERADO</option>
                        <option value="RECHAZADO">RECHAZADO</option>
                    </select>
                    </div>
            
                    <div class="col-sm-12 col-md-12 col-lg-10 mt-2">
                        <label for="" class="fw-bold">OBSERVACIONES </label>
                            <textarea class="form-control w-100" name="observaciones">{{old('observaciones')}}</textarea>
                    </div>
            
                </div>
            </div><!--dictamen y observaciones -->
            
            
            
            
            
            
            
            
            <div class="container bg-white"><!--EVIDENCIAS DEL LUGRA DONDE SE ENCONTRO LA INCONFORMIDAD -->
            
            <div class="row justify-content-center ">
                <div class="col-11 fondo  text-center border border-dark">
                <h5 class=mt-2>EVIDENCIAS DEL LUGRA DONDE SE ENCONTRO LA INCONFORMIDAD</h5>
                </div>
            </div>
            
            <div class="row justify-content-around p-3">
            
                <div class="col-sm-12 col-md-4 col-lg-4 border text-center shadow shadow-sm">
                <div class="row">

                    <div class="col-12" id="imagenPrevia">
                    <img src="{{asset('img/images.png')}}" alt="">
                    </div>

                    <div class="col-12">
                    <input type="file" name="evidencia1" id="evidencia1" class="form-control">
                    </div>

                </div>
                </div>
            
                <div class="col-sm-12 col-md-4 col-lg-4 border text-center shadow shadow-sm">
                <div class="row">
                    <div class="col-12" id="imagenPrevia2">
                    <img src="{{asset('img/images.png')}}" alt="">
                    </div>
                    <div class="col-12">
                    <input type="file" name="evidencia2" id="evidencia2" class="form-control">
                    </div>
                </div>
                </div>
            
                <div class="col-sm-12 col-md-4 col-lg-4 border text-center shadow shadow-sm">
                <div class="row">
                    <div class="col-12" id="imagenPrevia3">
                    <img src="{{asset('img/images.png')}}" alt="">
                    </div>
                    <div class="col-12">
                    <input type="file" name="evidencia3" id="evidencia3" class="form-control">
                    </div>
                </div>
                </div>
            
            
            </div>
            
            
            
            </div> <!-- EVIDENCIAS DEL LUGRA DONDE SE ENCONTRO LA INCONFORMIDAD -->
            
            
            
            <div class="container bg-white p-4">
            <div class="row">
                <div class="col-12">
                <button class="btn btn-success w-100"> <h2> Guardar </h2> </button>
                </div>
            </div>
            </div>
            
            
        </div>
            <!-- contenedor de todo -->











</form>






<script>

    document.getElementById('evidencia1').addEventListener('change', function(){
        var file = this.files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(e){
                var preview = document.getElementById('imagenPrevia');
                preview.innerHTML = '<img src="' + e.target.result + '" alt="Vista previa de imagen" class="img-fluid" >';
            }

            reader.readAsDataURL(file);
        }
    });





    document.getElementById('evidencia2').addEventListener('change', function(){
        var file = this.files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(e){
                var preview = document.getElementById('imagenPrevia2');
                preview.innerHTML = '<img src="' + e.target.result + '" alt="Vista previa de imagen" class="img-fluid" >';
            }

            reader.readAsDataURL(file);
        }
    });




    document.getElementById('evidencia3').addEventListener('change', function(){
        var file = this.files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(e){
                var preview = document.getElementById('imagenPrevia3');
                preview.innerHTML = '<img src="' + e.target.result + '" alt="Vista previa de imagen" class="img-fluid" >';
            }

            reader.readAsDataURL(file);
        }
    });



    document.getElementById('firma').addEventListener('change', function(){
        var file = this.files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(e){
                var preview = document.getElementById('firma_preview');
                preview.innerHTML = '<img src="' + e.target.result + '" alt="Vista previa de imagen" class="img-fluid" >';
            }

            reader.readAsDataURL(file);
        }
    });




</script>





@endsection