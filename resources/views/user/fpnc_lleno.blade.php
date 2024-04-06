@extends('plantilla')
@section('contenido')
@include('assets.nav')  
@section('title', 'FO/GP/CC/001/001')  
<br>



<div class="container bg-white  p-5 sombra"> <!--Contenedor de todo -->


<!-- encabezado -->
<div class="container shadow shadow-sm">
  <div class="row border border-5">
    
    <div class="col-sm-12 col-md-3 col-lg-4 d-flex align-items-center p-2 mt-2">
      <img src="{{asset('img/logo.png')}}" class="mx-auto img-fluid" alt="">
    </div>
    
    <div class="col-sm-12 col-md-4 col-lg-4 border mt-2"> 
      <div class="row text-center border">
        <h3>FORMATO</h3>
      </div>
      
      <div class="row">
            <span class="text-center mt-3">NOTIFICACIÓN DE PRODUCTO NO CONFORME</span>
      </div>
    </div>

    <div class=" col-sm-12 col-md-5 col-lg-4 border mt-2">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Codigo</div>
        <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >FO/GP/CC/001/001</div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Versión</div>
        <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >03</div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Vigencia</div>
        <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >
          FEBRERO 2026</div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Pagina</div>
        <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >1 de 1</div>
      </div>

    </div>
  
  </div>
</div>
<!-- encabezado -->



<!-- fecha y folio -->
<div class="container mt-3 border p-3">
    <div class="row">
        <div class="col-sm-12 col-md-12 mt-2 col-lg-4">
            <div class="row">
                <div class="col-auto">
                    <span><b> FOLIO DE:  <i> FO/GP/CC/070/01</i> </b> </span> 
                    <span class="text-danger fw-bold mx-2">{{$fpnc->folio}}</span>
                    <input type="hidden" name="folio_fpnc" value="{{$fpnc->folio}}">
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 mt-2 col-lg-5">
            <div class="row">
                <div class="col-auto">
                    <span class="fw-bold">Fecha de emisión: </span>
                </div>
                <div class="col-6">
                   {{$fpnc->fecha}}
                   <input type="hidden" name="fecha" value="{{$fpnc->fecha}}">
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-12 mt-2 col-lg-3">
            <div class="row">
                <div class="col-auto">
                    <span class="fw-bold">Folio: </span>
                    <input type="hidden" name="id_fpnc" value="{{$fpnc->id}}">
                </div>
                <div class="col-auto text-danger">
                    <i class="fa fa-lock mx-1"></i>
                   <span class="fw-bold">
                    {{$fpnc->folio}}
                   </span>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- fecha y folio -->





<!-- materia prima, material de empaque -->
<div class="container mt-3 p-3">
    <div class="row d-flex justify-content-center border">
        <div class="col-8 text-center">
            <h4>{{$fpnc->materia}}</h4>
        </div>
    </div>
</div>



<!-- materia prima, material de empaque -->





<!-- Proveedor, producto y presentación -->
<div class="container mt-4">
    <div class="row border p-4 d-flex justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
            <div class="row">
                <div class="col-4">
                    <span class="fw-bold">Proveedor: </span>
                </div>
                <div class="col-6">
                    <span>{{$fpnc->proveedor}}</span>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
            <div class="row">
                <div class="col-3">
                    <span class="fw-bold">Producto: </span>
                </div>
                <div class="col-6">
                    <span>{{$fpnc->producto}}</span>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
            <div class="row">
                <div class="col-4">
                    <span class="fw-bold">Presentación: </span>
                </div>
                <div class="col-6">
                    <span>{{$fpnc->presentacion}}</span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Proveedor, producto y presentación -->






<!-- lote y cantidad -->

<div class="container mt-4 border">
    <div class="row p-3 d-flex justify-content-center">

        <div class="col-sm-12 col-md-5  col-lg-6 mt-3 text-center">
            <div class="row d-flex justify-content-center">
                <div class="col-auto">
                    <span class="fw-bold">Lote: </span>
                </div>
                <div class="col-auto">
                    <span>{{$fpnc->lote}}</span>
                </div>
            </div>
        </div>




        <div class="col-sm-12 col-md-5  col-lg-6 mt-3 text-center">
            <div class="row d-flex justify-content-center">
                <div class="col-auto">
                    <span class="fw-bold">Cantidad: </span>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-auto p-0">  
                    <span>{{$fpnc->cantidad}}</span>
                </div>

            </div>
        </div>        


    </div>
</div>


<!-- lote y cantidad -->










<!-- desviacion -->
<div class="container mt-3">
    <div class="row">
        <div class="col-12 text-center fondo">
            <span class="fw-bold">Desviación:</span>
        </div>
        <div class="col-12 mt-2 p-0">
            <p>{{$fpnc->desviacion}}</p>            
        </div>
    </div>
</div>

<!-- desviacion -->






<!-- evicencia de desviación -->
<div class="container">
    <div class="row p-3 justify-content-around">
        <div class="col-12 text-center fondo">
            <h5>Evidencias</h5>
        </div>




        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center" id="imagen1">
                    <img src="{{Storage::url($fpnc->foto1)}}" class="img-fluid"  alt="" data-bs-toggle="modal" data-bs-target="#e{{$fpnc->lote}}">
                </div>
            </div>
        </div>

        <div class="modal fade" id="e{{$fpnc->lote}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <img src="{{Storage::url($fpnc->foto1)}}" class="img-fluid"  alt="" data-bs-toggle="modal" data-bs-target="#exampleModal">
            </div>
            </div>
        </div>







        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center" id="imagen1">
                    <img src="{{Storage::url($fpnc->foto2)}}" class="img-fluid"  alt="" data-bs-toggle="modal" data-bs-target="#e{{$fpnc->via_notificacion}}">
                </div>
            </div>
        </div>


        <div class="modal fade" id="e{{$fpnc->via_notificacion}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <img src="{{Storage::url($fpnc->foto2)}}" class="img-fluid"  alt="" data-bs-toggle="modal" data-bs-target="#exampleModal">
            </div>
            </div>
        </div>






        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center" id="imagen1">
                    <img src="{{Storage::url($fpnc->foto3)}}" class="img-fluid"  data-bs-toggle="modal" data-bs-target="#e{{$fpnc->folio}}">
                </div>
            </div>
        </div>

        <div class="modal fade" id="e{{$fpnc->folio}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                    <img src="{{Storage::url($fpnc->foto3)}}" class="img-fluid"  alt="" data-bs-toggle="modal" data-bs-target="#exampleModal">
            </div>
            </div>
        </div>





    </div>
</div>



<!-- evicencia de desviación -->



<!-- observaciones -->
<div class="container">
    <div class="row">
        <div class="col-12 fondo text-center">
            <span class="fw-bold">Observaciones:</span>
        </div>
        <div class="col-12 mt-2 p-3 border">
            <p>{{$fpnc->observaciones}}</p>
        </div>
    </div>
</div>

<!-- observaciones -->




<!-- via de notificacion -->
<div class="container mt-5 border pb-3">
    
    <div class="row justify-content-center">
        <div class="col-12 text-center fondo">
            <h4 class="mt-2">Via de notificación</h4>
        </div>
    </div>

    <div class="row mt-4 justify-content-center">
        <div class="col-8 text-center">

            @if ($fpnc->via_notificacion == 'otra')
                <h5> {{$fpnc->otra_notificacion}} </h5>
            @else
                <h5> {{$fpnc->via_notificacion}} </h5>
            @endif
           
        </div>
    </div>
</div>
<!-- via de notificacion -->





<!-- quien recibe notificación -->
<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-9">

            
            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    <span>Quien recibe la notificación: </span>
                </div>
                <div class="col-4">
                    <strong>{{$fpnc->emite_notificacion}}</strong>
                </div>
            </div>



            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    <span>Quien emite la notificación: </span>
                </div>
                <div class="col-4">
                    <strong>{{$fpnc->recibe_notificacion}}</strong>
                </div>
            </div>


        </div>


    </div>
</div>
<!-- quien recibe notificación -->




<!-- boton de guardar todo alv -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h4 class="fw-bold">REVISO:</h4>
        </div>
        <div class="col-5 text-center bg-success text-white rounded">
            <i class="fa fa-square-check"></i>
            <h5 class="mt-2">{{$fpnc->usuario_logeado}}</h5>
        </div>
    </div>
</div>



<!-- boton de guardar todo alv -->

</div><!--Cierra contenedor de todo-->







@endsection