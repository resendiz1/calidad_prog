@extends('plantilla')
@section('contenido')
@include('assets.nav')


<br>

<div class="container bg-white  p-5 sombra"> <!--Contenedor de todo -->


<!-- encabezado -->

<div class="container shadow shadow-sm">
  <div class="row border border-5">
    
    <div class="col-sm-12 col-md-4  col-lg-4 centrar-verticalmente p-2 mt-2">
      <img src="{{asset('img/logo.png')}}" class="mx-auto img-fluid" alt="">
    </div>
    
    <div class="col-sm-12 col-md-4 col-lg-4 border mt-2"> 
      <div class="row  text-center border">
        <h3>FORMATO</h3>
      </div>
      
      <div class="row">
            <span class="text-center">RECEPCIÓN DE MATERIA PRIMA Y MATERIAL DE EMPAQUE</span>
      </div>
    </div>

    <div class=" col-sm-12 col-md-4 col-lg-4 border mt-2">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Codigo</div>
        <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >FO/GP/CC/070/01</div>
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
        <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Página</div>
        <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >1 de 1</div>
      </div>

    </div>
  
  </div>
</div>
<!-- encabezado -->
    



<form action="{{route('fmp.agregar')}}" method="POST">
  @csrf

      <!-- datos del formato -->
      <div class="container">
        <div class="row mt-3 p-4 justify-content-center shadow shadow-sm">

        <div class="col-sm-12 col-md-5 col-lg-5 border">

            <div class="row">
              <div class="col-auto mt-1">
                <span class="centrar-verticalmente h6">Planta:</span>
              </div>       
              <div class=" col-sm-3 col-md-3 col-lg-2 bg-white mt-1">
                <h6 class="mt-2">{{Auth::user()->planta}}</h6>
                <input type="hidden" value="{{Auth::user()->planta}}" name="planta" >
              </div>
            </div>
            
            <div class="row mt-2 border-top">
              <div class="col-auto mt-1">
                <span class="centrar-verticalmente h6">Fecha:</span>
              </div>       
              <div class="col-auto bg-white mt-1">
                <span class="font-weight-bold">{{$fecha}}</span>
                <input type="hidden" name="fecha" value="{{$fecha}}">
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
              <span class="text-danger font-weight-bold h6 mt-0 ">
                <i class="fa fa-lock mx-3"></i>
                  Se generara al guardar el documento
              </span>
            </div>
          </div>
          
          <div class="row">
            <div class="col-auto">
              <span class="centrar-verticalmente h6">Hora de recepción:</span>
            </div>       
            <div class="col-auto bg-white">
              <input type="time" class="form-control mt-2" name="hora_recepcion">
            </div>
          </dv>      
          </div>
        </div>
      
        </div>
      </div>
      <!-- datos del formato -->


      <!-- Titulos -->
      <div class="container mt-5">
        <div class="row justify-content-around shadow shadow-sm py-3 border">

      <!-- COLUMNA DE LOS "DATOS DE LA MATERIA PRIMA" -->
          <div class="col-sm-12 col-md-6  col-lg-6">
            <div class="row justify-content-around">

              <div class="col-lg-8 mx-1 text-center fondo border border-dark">
                <span class="mt-1 h6 h6-sm">DATOS DE MATERIA PRIMA</span>
              </div>

              <div class="col-10 mt-3 border fondo-titulos border border-gray">
                <h6 class="mt-1">PRODUCTO:</h6>
              </div>

              <div class="col-10 text-left p-0">
                <select class="text-left form-select form-control mt-1" name="producto">
                  <option value="Pulidura de arroz">Pulidura de arroz</option>
                  <option value="Salvadillo">Salvadillo</option>
                  <option value="Alfalfa">Alfalfa</option>
                </select>
              </div>

              <div class="col-10 mt-3 border border-gray border-2 fondo-titulos">
                <h6 class="mt-1">PROVEEDOR</h6>
              </div>

              <div class="col-10 p-0">
                <select class="text-left form-select form-control mt-1" name="proveedor">
                  <option value="Roberto Beristain">Roberto Beristain</option>
                  <option value="PROMEXA">PROMEXA</option>
                </select>
              </div>

              <div class="col-10 fondo-titulos mt-3">
                <h6 class="mt-1">LOTE</h6>
              </div>

              <div class="col-10 p-0">
                <input type="text" class="form-control mt-1" name="lote" >
              </div>

            </div>
          </div>
      <!-- COLUMNA DE LOS "DATOS DE LA MATERIA PRIMA" -->



      <!-- COLUMNA DE LOS "DATOS DEL TRANSPORTE" -->
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="row justify-content-around">
              <!-- Titulo datos del transporte -->
              <div class="col-lg-8 mx-1 text-center fondo border border-dark">
                <span class="mt-1 h6 ">DATOS DEL TRANSPORTE</span>
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

              <div class="col-10 mt-3 fondo-titulos border border-gray p-0">
                <h6 class="mt-1">OPERADOR</h6>
              </div>

              <div class="col-10 p-0">
                <input type="text" class="form-control mt-1" name="operador">
              </div>
              <div class="col-10 p-0 fondo-titulos mt-3">        
                <h6 class="mt-2">PLACAS DEL TRACTO O TORTON :</h6>
              </div>
              <div class="col-10 p-0 mt-1">
                <input type="text" class="form-control" name="placas_transporte">
              </div>
              <div class="col-10 p-0 fondo-titulos mt-3">        
                <h6 class="mt-2">PLACAS CAJA :</h6>
              </div>
              <div class="col-10 p-0 mt-1">
                <input type="text" class="form-control" name="placas_caja">
              </div>
          </div>
      <!-- COLUMNA DE LOS "DATOS DEL TRANSPORTE" -->

        </div>
      </div>
      <!-- Titulos -->

      

      <!-- TITULO DE "RESULTADOS DE LABORATORIO" -->
      <div class="container mt-4">
        <div class="row justify-content-between">
          <div class="col-12 fondo text-center border border-dark">
            <h5 class="mt-2 font-weight-bold">RESULTADOS DEL LABORATORIO</h5>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-5 mt-3 border">
            <div class="row">
              <div class="col-6">
                <h6 class="mt-2">Hora entrada lab.: </h6>
              </div>
              <div class="col-6">
                <input type="time" class="form-control" id="hora" name="hora_entrada_laboratorio"  >
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-5 border mt-3">
            <div class="row">
              <div class="col-6">
                <h6 class="mt-2">Hora de liberación:</h6>
              </div>
              <div class="col-6">
                <input type="time" class="form-control" name="hora_liberacion">
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- TITULO DE "RESULTADOS DE LABORATORIO" -->









      <!-- GRILLA DE PROPIEDADES DEL PRODUCTO -->
      <div class="container mt-4 border py-4">

        <!-- FILA DE TEMPERATURA, HUMEDAD Y PESOS ESPECIFICO -->

        <div class="row justify-content-between">
          
          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">HUMEDAD</small>
              </div>
              <div class="col-6">
                <input type="number" step="any" class="form-control" placeholder="(%)" name="humedad">
              </div>
            </div>
          </div>
          

          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">TEMP.</small>
              </div>
              <div class="col-6">
                <input type="number" step="any" class="form-control" placeholder="(°C)" name="temperatura" >
              </div>   
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">PESO ESPECIFICO</small>
              </div>
              <div class="col-6">
                <input type="number" step="any" class="form-control" placeholder="(g/l)" name="peso_especifico">
              </div>   
            </div>
          </div>

        </div>

        <!-- FILA DE TEMPERATURA, HUMEDAD Y PESOS ESPECIFICO -->




        <!-- FILA DE GRANO DAÑADO, GRANO QUEBRADO E IMPUREZAS -->

        <div class="row justify-content-between">
          
          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">GRANO DAÑADO</small>
              </div>
              <div class="col-6">
                <input type="number" step="any" class="form-control" placeholder="(%)" name="grano_dañado">
              </div>
            </div>
          </div>
          

          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">GRANO QUEBRADO</small>
              </div>
              <div class="col-6">
                <input type="number" step="any" class="form-control" placeholder="(%)" name="grano_quebrado">
              </div>   
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">IMPUREZAS</small>
              </div>
              <div class="col-6">
                <input type="number" step="any" class="form-control" placeholder="(%)" name="impurezas">
              </div>   
            </div>
          </div>

        </div>
        <!-- FILA DE GRANO DAÑADO, GRANO QUEBRADO E IMPUREZAS -->









        <!-- FILA DE CANTIDAD DE MUESTRA, DW Y PLAGAS -->
      <div class="row justify-content-between">
          
          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">CANT. MUESTRA</small>
              </div>
              <div class="col-6">
                <input type="number" step="any" class="form-control" placeholder="(Kg)" name="cantidad_muestra">
              </div>
            </div>
          </div>
          


          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">*BX</small>
              </div>
              <div class="col-6">
                <input type="text" step="any" class="form-control" name="bx">
              </div>   
            </div>
          </div>
        


          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">PLAGAS</small>
              </div>
              <div class="col-6">
                <select class="text-left form-select form-control mt-1" name="plagas">
                  <option value="NO">NO</option>
                  <option value="SI">SI</option>
                </select>
              </div>   
            </div>
          </div>

        </div>
      <!-- FILA DE CANTIDAD DE MUESTRA, DW Y PLAGAS -->










        <!-- FILA DE CERTIFICADO DE CALIDAD, BX Y ASEGURADO -->
        <div class="row justify-content-between">
          
          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">CERTIF. DE CALIDAD</small>
              </div>
              <div class="col-6">
                <select class="text-left form-select form-control mt-1" name="certificado_calidad">
                  <option value="NO">NO</option>
                  <option value="SI">SI</option>
                </select>
              </div>
            </div>
          </div>

          
          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">FLUORECENCIA</small>
              </div>
              <div class="col-6">
                <input type="text" class="form-control form-control" name="fluorecencia" >
              </div>   
            </div>
          </div>


          <div class="col-sm-12 col-md-12 col-lg-4 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">ASEGURADO</small>
              </div>
              <div class="col-6">
                <select class="text-left form-select form-control mt-1" name="asegurado" >
                  <option value="SI/FLEJE">SI/FLEJE</option>
                  <option value="SI/CANDADO">SI/CANDADO</option>
                  <option value="NO">NO</option>
                </select>
              </div>   
            </div>
          </div>

        </div>
        <!-- FILA DE CERTIFICADO DE CALIDAD, BX Y ASEGURADO -->









      <!-- FILA DE COLOR Y OLOR CARACTERISTICO, MATERIA EXTRAÑA-->
      <div class="row justify-content-between">
          
          <div class="col-sm-12 col-md-12 col-lg-6 my-2">
            <div class="row justify-content-center border">
              <div class="col-6 mt-2">
                <small class="fw-bold">COLOR Y OLOR CARACTERISTICO</small>
              </div>
              <div class="col-6">
                <select class="text-left form-select mt-1 form-control" name="color_olor">
                  <option value="CUMPLE">CUMPLE</option>
                  <option value="NO CUMPLE">NO CUMPLE</option>
                  <option value="NO APLICA">NO APLICA</option>
                </select>
              </div>
            </div>
          </div>
          

          <div class="col-sm-12 col-md-12 col-lg-6 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">EQUIPO DE MUESTREO</small>
              </div>
              <div class="col-6">
                <select class="text-left form-select mt-1 form-control" name="equipo_muestreo">
                  <option value="CALADOR DE ALVEOLOS">CALADOR DE ALVEOLOS</option>
                  <option value="CALDO DE MANO">CALADOR DE MANO</option>
                  <option value="CAVA HOYOS">CAVA HOYOS</option>
                  <option value="MUESTRADOR DE LIQUIDOS">MUESTRADOR DE LIQUIDOS</option>
                </select>
              </div>
            </div>
          </div>







        </div>
        <!-- FILA DE COLOR Y OLOR CARACTERISTICO, MATERIA EXTRAÑA-->








        <!-- FILA  DE EQUIPO DE MUESTREO Y FLOURECENCIA -->
        <div class="row justify-content-between">

          <div class="col-sm-12 col-md-12 col-lg-12 my-2">
            <div class="row justify-content-center border">
              <div class="col-5 mt-2">
                <small class="fw-bold">MATERIA EXTRAÑA</small>
              </div>
              <div class="col-6">
                <input type="text" class="form-control form-control" name="materia_extraña">
              </div>   
            </div>
          </div>
        
        </div>

        <!-- FILA  DE EQUIPO DE MUESTREO Y FLOURECENCIA -->


      </div>
      <!-- GRILLA DE PROPIEDADES DEL PRODUCTO -->






      <!-- CONTAINER DE SUPERVISOR DEL MUESTREO, ACEPTADO POR CONCESIÓN Y DWG -->
      <div class="container mt-4 bg-white">
        <div class="row justify-content-around">
          
          <div class="col-sm-12 col-md-12  col-lg-3 mt-3">
            <div class="row">
              <div class="col-12 border p-2 text-center">
                <h6 class="mt-2"> <b> METODO DE MUESTREO: </b> POE/GP/CC/080</h6>
                <input type="hidden" value="POE/GP/CC/080" name="metodo_muestreo">
              </div>
              
              <div class="col-12 border p-2 text-center">
                <h6 class="mt-2">ACEPTADO POR CONCESIÓN</h6>
              </div>
              
              <div class="col-12 border p-2">
                <select class="text-center form-select mt-1 form-control p-0" name="aceptado_concecion">
                  <option value="SR. ROBERTO BERISTAIN ">SR. ROBERTO BERISTAIN </option>
                  <option value="DR. SAMUEL BERISTAIN ">DR. SAMUEL BERISTAIN </option>
                  <option value="SR. MOISES BRITAIN ">SR. MOISES BERISTAIN </option>
                  <option value="SR. ROBERTO BERISTAIN">SR. ROBERTO BERISTAIN</option>
                  <option value="SR. JOSUE BERISTAIN ">SR. JOSUE BERISTAIN </option>
                </select>
              </div>
            
            </div>
          </div>
          


          <div class="col-sm-12 col-md-12  col-lg-3 mt-3">

            <div class="row">
              <div class="col-6 text-center border">
                <h6 class="mt-2">DWG (micrones)</h6>
              </div>
              <div class="col-6 py-2  px-0 border">
                <input type="text" class="form-control form-control-sm mt-2" class="dwg">
              </div>
            </div>

            <div class="row">
              <div class="col-6 py-0 px-1  border">
                <h6 class="mt-2">M10 (%)</h6>
              </div>
              <div class="col-6 py-0 px-1 border">
                <input type="text" class="form-control form-control-sm" name="m10" >
              </div>
            </div>

            <div class="row">
              <div class="col-6 py-0 px-1  border">
                <h6 class="mt-2">M16 (%)</h6>
              </div>
              <div class="col-6 py-0 px-1 border">
                <input type="text" class="form-control form-control-sm" name="m16" >
              </div>
            </div>

            <div class="row">
              <div class="col-6 py-0 px-1  border">
                <h6 class="mt-2">M18 (%)</h6>
              </div>
              <div class="col-6 py-0 px-1 border">
                <input type="text" class="form-control form-control-sm" name="m18" >
              </div>
            </div>

            <div class="row">
              <div class="col-6 py-0 px-1  border">
                <h6 class="mt-2">F(%)</h6>
              </div>
              <div class="col-6 py-0 px-1 border">
                <input type="text" class="form-control form-control-sm" name="f" >
              </div>
            </div>

          </div>
          



          <div class="col-sm-12 col-md-12  col-lg-4 mt-3 border border-4">

            <div class="row">
              <div class="col-12 text-center mt-4">
                <h4>SUPERVISO MUESTREO</h4>
              </div>
              <div class="col-12 text-center">
                <select class="text-center form-select mt-1 form-control p-1" name="superviso_muestreo" >
                  @foreach ($usuarios_planta as $usuario)
                    <option value="{{$usuario->nombre_completo}}">{{$usuario->nombre_completo}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-12 text-center mt-4 fondo-titulos mt-5">
                <h4 class="mt-2">{{Auth::user()->nombre_completo}}</h4>
                <input type="hidden" value="{{Auth::user()->nombre_completo}}" name="usuario_logeado">
              </div>
            </div>

            <div class="row">
              <div class="col-6 text-center mt-4">
                <h5 class="mt-3">DICTAMEN FINAL</h5>
              </div>
              <div class="col-6 text-center mt-4 fondo-titulos">
                <select class="text-center form-select mt-1 form-control p-0">
                  <option value="ACEPTADO">ACEPTADO</option>
                  <option value="RECHAZADO">RECHAZADO</option>
                </select>
              </div>
            </div>

          </div>

        </div>
      </div>
      <!-- CONTAINER DE SUPERVISOR DEL MUESTREO, ACEPTADO POR CONCESIÓN Y DWG -->






      <!-- CONTENEDOR DE OBSERVACIONES -->
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h4>OBSERVACIONES:</h4>
          </div>
          <div class="col-12">
            <textarea name="" id="miTextarea" class="form-control w-100 h-100"></textarea>
          </div>
        </div>
      </div>
      <!-- CONTENEDOR DE OBSERVACIONES -->




      <!-- BOTON PARA ENVIAR A REVISIÓN -->
      <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <button class="btn btn-success btn-lg w-100">
              <i class="fa fa-save mx-3"></i> GUARDAR Y ENVIAR FORMATO
            </button>
          </div>
        </div>
      </div>
      <!-- BOTON PARA ENVIAR A REVISIÓN -->



</form>











</div><!--Cierra contenedor de todo-->



@endsection