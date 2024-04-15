@extends('plantilla')
@section('contenido')
@include('assets.nav')  
@section('title', $fmp->folio)  
 
<br>

<div class="container bg-white  p-5 sombra .area-a-imprimir"> <!--Contenedor de todo -->


<!-- encabezado -->

<div class="container shadow shadow-sm">
  <div class="row border border-5">
    
    <div class="col-sm-12 col-md-4  col-lg-4 centrar-verticalmente p-2 mt-2">
      <img src="{{asset('img/logo.png')}}" class="mx-auto img-fluid" alt="">
    </div>
    
    <div class="col-sm-12 col-md-4 col-lg-4 border mt-2"> 
      <div class="row text-center border">
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
        <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Pagina</div>
        <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >1 de 4</div>
      </div>

    </div>
  
  </div>
</div>
<!-- encabezado -->
    

<!-- datos del formato -->
<div class="container">
  <div class="row mt-3 p-4 justify-content-center shadow shadow-sm">

  <div class="col-sm-12 col-md-5 col-lg-5 border">

      <div class="row">
        <div class="col-auto mt-1">
          <span class="centrar-verticalmente h6">Planta:</span>
        </div>       
        <div class=" col-sm-3 col-md-3 col-lg-2 bg-white mt-1">
          <h6 class="mt-2">{{$fmp->planta}}</h6>
        </div>
      </div>
      
      <div class="row mt-2 border-top">
        <div class="col-auto mt-1">
          <span class="centrar-verticalmente h6">Fecha:</span>
        </div>       
        <div class="col-auto bg-white mt-1">
          <span class="font-weight-bold">{{$fmp->fecha}}</span>
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
        <span class="text-danger font-weight-bold h6">{{$fmp->folio}}</span>
      </div>
    </div>
    
    <div class="row mt-2">
      <div class="col-auto">
        <span class="centrar-verticalmente h6">Hora de recepción:</span>
      </div>       
      <div class="col-auto bg-white ">
        <span class="fw-bold"> {{$fmp->hora_recepcion}} </span>
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
            <h6 class="m-2">{{$fmp->producto}}</h6>
        </div>

        <div class="col-10 mt-3 border border-gray border-2 fondo-titulos">
            <h6 class="mt-1">PROVEEDOR</h6>
        </div>

        <div class="col-10 p-0">
            <h6 class="m-2">{{$fmp->proveedor}}</h6>
        </div>

        <div class="col-10 fondo-titulos mt-3">
            <h6 class="mt-1">LOTE</h6>
        </div>

        <div class="col-10 p-0">
            <h6 class="m-2">{{$fmp->lote}}</h6>
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
            <h6 class="m-2">{{$fmp->linea_transportista}}</h6>
        </div>

        <div class="col-10 mt-3 fondo-titulos border border-gray ">
            <h6 class="mt-1">OPERADOR</h6>
        </div>

        <div class="col-10 ">
            <h6 class="mt-2">{{$fmp->nombre_operador}}</h6>
        </div>

        <div class="col-10  fondo-titulos mt-3">        
            <h6 class="mt-2">PLACAS DEL TRACTO O TORTON :</h6>
        </div>

        <div class="col-10 p-0 mt-1">
            <h6 class="m-2">{{$fmp->placas_transporte}}</h6>
        </div>

        <div class="col-10  fondo-titulos mt-3">        
          <h6 class="mt-2">PLACAS CAJA :</h6>
        </div>

        <div class="col-10 p-0 mt-1">
            <h6 class="m-2">{{$fmp->placas_caja}}</h6>
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
            <h6 class="m-2">{{$fmp->hora_entrada_lab}}</h6>
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-5 border mt-3">
      <div class="row">
        <div class="col-6">
          <h6 class="mt-2">Hora de liberación:</h6>
        </div>
        <div class="col-6">
            <h6 class="m-2">{{$fmp->hora_liberacion}}</h6>
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
          <small class="fw-bold">HUMEDAD: </small>
        </div>
          @if ($fmp->humedad)
          <div class="col-6">
              <h6 class="m-2">{{$fmp->humedad}} %</h6>
          </div>  

          @else
            <div class="col-6 fondo">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif
      </div>
    </div>
    




    <div class="col-sm-12 col-md-12 col-lg-4 my-2">
      <div class="row justify-content-center border">
        <div class="col-5 mt-2">
          <small class="fw-bold">TEMP.: </small>
        </div>
          @if ($fmp->temperatura)
            <div class="col-6">
                <h6 class="m-2">{{$fmp->temperatura}} °C</h6>
            </div>  

          @else
            <div class="col-6 fondo">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif 
      </div>
    </div>






    <div class="col-sm-12 col-md-12 col-lg-4 my-2">
      <div class="row justify-content-center border">
        <div class="col-5 mt-2">
          <small class="fw-bold">PESO ESPECIFICO: </small>
        </div>

          @if ($fmp->peso_especifico)
            <div class="col-6">
                <h6 class="m-2">{{$fmp->peso_especifico}} g/l</h6>
            </div>  

          @else
            <div class="col-6 fondo">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif
        
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
          @if ($fmp->grano_maltratado)
          <div class="col-6">
              <h6 class="m-2">{{$fmp->grano_maltratado}}%</h6>
          </div>  

          @else
            <div class="col-6 fondo">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif
      </div>
    </div>
    

    <div class="col-sm-12 col-md-12 col-lg-4 my-2">
      <div class="row justify-content-center border">
        <div class="col-5 mt-2">
          <small class="fw-bold">GRANO QUEBRADO</small>
        </div>
          @if ($fmp->grano_quebrado)
          <div class="col-6">
              <h6 class="m-2">{{$fmp->grano_quebrado}}%</h6>
          </div>  

          @else
            <div class="col-6 fondo">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif 
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-4 my-2">
      <div class="row justify-content-center border">
        <div class="col-5 mt-2">
          <small class="fw-bold">IMPUREZAS</small>
        </div>
          @if ($fmp->impurezas)
          <div class="col-6">
              <h6 class="m-2">{{$fmp->impurezas}}%</h6>
          </div>  

          @else
            <div class="col-6 fondo">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif
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
          @if ($fmp->cantidad_muestra)
          <div class="col-6">
              <h6 class="m-2">{{$fmp->cantidad_muestra}}Kg</h6>
          </div>  

          @else
            <div class="col-6 fondo">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif
      </div>
    </div>
    


    <div class="col-sm-12 col-md-12 col-lg-4 my-2">
      <div class="row justify-content-center border">
        <div class="col-5 mt-2">
          <small class="fw-bold">*BX</small>
        </div>
          @if ($fmp->bx)
          <div class="col-6">
              <h6 class="m-2">{{$fmp->bx}}</h6>
          </div>  

          @else
            <div class="col-6 fondo">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif 
      </div>
    </div>
   


    <div class="col-sm-12 col-md-12 col-lg-4 my-2">
      <div class="row justify-content-center border">
        <div class="col-5 mt-2">
          <small class="fw-bold">PLAGAS</small>
        </div>
        <div class="col-6">
            <h6 class="m-2">{{$fmp->plagas}}</h6>
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
            <h6 class="m-2">{{$fmp->certificado_calidad}}</h6>
        </div>
      </div>
    </div>

    
    <div class="col-sm-12 col-md-12 col-lg-4 my-2">
      <div class="row justify-content-center border">
        <div class="col-5 mt-2">
          <small class="fw-bold">FLOURECENCIA</small>
        </div>
          @if ($fmp->fluorecencia)
          <div class="col-6">
              <h6 class="m-2">{{$fmp->fluorecencia}}%</h6>
          </div>  

          @else
            <div class="col-6 fondo">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif 
      </div>
    </div>


    <div class="col-sm-12 col-md-12 col-lg-4 my-2">
      <div class="row justify-content-center border">
        <div class="col-5 mt-2">
          <small class="fw-bold">ASEGURADO</small>
        </div>
        <div class="col-6">
            <h6 class="m-2">{{$fmp->asegurado}}</h6>
        </div>   
      </div>
    </div>

  </div>
  <!-- FILA DE CERTIFICADO DE CALIDAD, BX Y ASEGURADO -->









<!-- FILA DE COLOR Y OLOR CARACTERISTICO, MATERIA EXTRAÑA-->
<div class="row justify-content-between">
    
    <div class="col-sm-12 col-md-12 col-lg-6 my-2">
      <div class="row justify-content-center border">
        <div class="col-5 mt-2">
          <small class="fw-bold">COLOR Y OLOR CARACTERISTICO</small>
        </div>
        <div class="col-6">
            <h6 class="m-2">{{$fmp->colo_olor_caracteristico}}</h6>
        </div>
      </div>
    </div>
    

    <div class="col-sm-12 col-md-12 col-lg-6 my-2">
      <div class="row justify-content-center border">
        <div class="col-5 mt-2">
          <small class="fw-bold">EQUIPO DE MUESTREO</small>
        </div>
        <div class="col-6">
            <h6 class="m-2">{{$fmp->equipo_muestreo}}</h6>
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
        @if ($fmp->materia_impropio)
        <div class="col-6">
            <h6 class="m-2">{{$fmp->materia_impropio}}</h6>
        </div>  

      @else
        <div class="col-6 fondo">
          <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
          <small class="text-info-emphasis mt-2" >No rellenado</small>
        </div>  
      @endif 
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
          <h6 class="mt-2"> <b> METODO DE MUESTREO: </b> {{$fmp->metodo_muestreo}}</h6>
        </div>
        
        <div class="col-12 border p-2 text-center">
          <h6 class="mt-2">ACEPTADO POR CONCESIÓN</h6>
        </div>
        
        <div class="col-12 border p-2 text-center">
            <h6 class="m-2">{{$fmp->aceptado_concesion}}</h6>
        </div>
      
      </div>
    </div>
    


    <div class="col-sm-12 col-md-12  col-lg-3 mt-3">

      <div class="row">
        <div class="col-6 text-center border">
          <h6 class="mt-2">DWG (micrones)</h6>
        </div>

        @if ($fmp->dwg)
        <div class="col-6">
            <h6 class="m-2">{{$fmp->dwg}}%</h6>
        </div>  

        @else
          <div class="col-6 fondo">
            <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
            <small class="text-info-emphasis mt-2" >No rellenado</small>
          </div>  
        @endif

      </div>



      <div class="row">
        <div class="col-6 py-0 px-1  border">
          <h6 class="mt-2">M10 (%)</h6>
        </div>
          @if ($fmp->m10)
          <div class="col-6">
              <h6 class="m-2">{{$fmp->m10}}%</h6>
          </div>  

          @else
            <div class="col-6 fondo border border-white">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif
      </div>






      <div class="row">
        <div class="col-6 py-0 px-1  border">
          <h6 class="mt-2">M16 (%)</h6>
        </div>
          @if ($fmp->m16)
          <div class="col-6">
              <h6 class="m-2">{{$fmp->m16}}%</h6>
          </div>  

          @else
            <div class="col-6 fondo border border-white">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif
      </div>





      <div class="row">
        <div class="col-6 py-0 px-1  border">
          <h6 class="mt-2">M18 (%)</h6>
        </div>
            @if ($fmp->m18)
            <div class="col-6">
                <h6 class="m-2">{{$fmp->m18}}%</h6>
            </div>  

            @else
              <div class="col-6 fondo border border-white">
                <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
                <small class="text-info-emphasis mt-2" >No rellenado</small>
              </div>  
            @endif
      </div>







      <div class="row">
        <div class="col-6 py-0 px-1  border">
          <h6 class="mt-2">F(%)</h6>
        </div>
          @if ($fmp->f)
          <div class="col-6">
              <h6 class="m-2">{{$fmp->f}}%</h6>
          </div>  

          @else
            <div class="col-6 fondo">
              <i class="fa-solid fa-square-xmark text-info-emphasis mt-2"></i>
              <small class="text-info-emphasis mt-2" >No rellenado</small>
            </div>  
          @endif
      </div>







    </div>
    



    <div class="col-sm-12 col-md-12  col-lg-4 mt-3 border border-4">

      <div class="row">
        <div class="col-12 text-center mt-4">
          <h4>SUPERVISO MUESTREO</h4>
        </div>
        <div class="col-12 text-center mt-4 fondo-titulos">
          <h4 class="mt-2">{{$fmp->usuario_logeado}}</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-6 text-center mt-4">
          <h5 class="mt-3">DICTAMEN FINAL</h5>
        </div>
        @if ($fmp->dictamen_final == 'ACEPTADO')
          <div class="col-6 text-center mt-4 bg-success text-white py-2">
             <li class="fa fa-circle-check"></li>
              <h6 class="">{{$fmp->dictamen_final}}</h6>
          </div>
            
        @else
        <div class="col-6 text-center mt-4 bg-danger text-white py-2">
          <li class="fa fa-circle-xmark"></li>
          <h6>{{$fmp->dictamen_final}}</h6>
        </div>   
        @endif
      </div>

    </div>

  </div>
</div>
<!-- CONTAINER DE SUPERVISOR DEL MUESTREO, ACEPTADO POR CONCESIÓN Y DWG -->






<!-- CONTENEDOR DE OBSERVACIONES -->
<div class="container mt-5">
  <div class="row mt-4 d-flex justify-content-around ">


        <div class="col-sm-12 col-md-12 col-lg-3">

          <div class="row">
            <div class="col-12">
              <h6>OBSERVACIONES BASCULA:</h6>
            </div>
            <div class="col-12">
              <i>
                @if ($fmp->observaciones_bascula && $fmp->reviso_bascula)
                    {{$fmp->observaciones_bascula}}
                @else 
                     <li>No hubo oberservaciones</li> 
                @endif 
              </i>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="row">
            <div class="col-12">
              <h6>OBSERVACIONES PRODUCCION:</h6>
            </div>
            <div class="col-12">
              <i>
                @if ($fmp->observaciones_produccion && $fmp->reviso_produccion)
                {{$fmp->observaciones_produccion}}
                @else 
                    <li>No hubo oberservaciones</li> 
                @endif 
               </i>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="row">
            <div class="col-12">
              <h6>OBSERVACIONES CALIDAD:</h6>
            </div>
            <div class="col-12 text-justify ">
              <i>
                @if ($fmp->observaciones_realizador)
                {{$fmp->observaciones_realizador}}
                @else 
                    <li>No hubo oberservaciones</li> 
                @endif 
               </i>
            </div>
          </div>
        </div>


  </div>
</div>
<!-- CONTENEDOR DE OBSERVACIONES -->






<!-- CONTENEDOR DE LAS FIRMAS -->
<div class="container mt-5">
    <div class="row justify-content-around">




      <div class="col-sm-12 col-md-12 col-lg-3">
        <div class="row">
          <div class="col-12 text-center">
            <h3>BASCULA</h3>
          </div>

          @if ($fmp->reviso_bascula)
            <div class="col-12 text-white text-center bg-success">
              <i class="fa fa-circle-check mt-3"></i> 
              <h6> <b> REVISO:</b> {{$fmp->reviso_bascula}} </h6>
            </div>
          @else
            <div class="col-12 text-white text-center bg-secondary">
              <i class="fa fa-eye mt-3"></i> 
              <h6> FALTA POR REVISAR</h6>
            </div>     
          @endif

        </div>
      </div>



      <div class="col-sm-12 col-md-12 col-lg-3">
        <div class="row">
          <div class="col-12 text-center">
            <h3>PRODUCCIÓN</h3>
          </div>
          
          @if ($fmp->reviso_produccion)
            <div class="col-12 text-white text-center bg-success">
              <i class="fa fa-circle-check mt-3"></i> 
              <h6> <b> REVISO:</b> {{$fmp->reviso_produccion}} </h6>
            </div>
          @else
            <div class="col-12 text-white text-center bg-secondary">
              <i class="fa fa-eye mt-3"></i> 
              <h6> FALTA POR REVISAR</h6>
            </div>     
          @endif

        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3">

        <div class="row">
          <div class="col-12 text-center">
            <h3>CALIDAD</h3>
          </div>
          
          <div class="col-12 text-white text-center bg-success">
            <i class="fa fa-circle-check mt-3"></i> 
            <h6> <b> REVISO:</b> {{$fmp->usuario_logeado}} </h6>
          </div>

        </div>


      </div>
    </div>
  </div>
  <!-- CONTENEDOR DE LAS FIRMAS -->




</div><!--Cierra contenedor de todo-->

@endsection