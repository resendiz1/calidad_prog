@extends('plantilla')
@section('contenido')
@include('assets.nav')  
@section('title', 'FO/GP/CC/001/001')  
<br>


<form action="{{route('fpnc.agregar')}}" method="POST">
@csrf


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
                    <span class="text-danger fw-bold mx-2">{{$fmp->folio}}</span>
                    <input type="hidden" name="folio_fmp" value="{{$fmp->folio}}">
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 mt-2 col-lg-5">
            <div class="row">
                <div class="col-auto">
                    <span class="fw-bold">Fecha de emisión: </span>
                </div>
                <div class="col-6">
                   {{$fecha}}
                   <input type="hidden" name="fecha" value="{{$fecha}}">
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-12 mt-2 col-lg-3">
            <div class="row">
                <div class="col-auto">
                    <span class="fw-bold">Folio: </span>
                </div>
                <div class="col-auto text-danger">
                    <i class="fa fa-lock mx-1"></i>
                   <span>
                    Por generar
                   </span>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- fecha y folio -->





<!-- materia prima, material de empaque -->
<div class="container mt-3 p-3">
    <div class="row d-flex justify-content-around border">

        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="material" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-secondary" value="materia_prima" for="btnradio1">Materia Prima</label>
          
            <input type="radio" class="btn-check" value="material_empaque" name="material" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="btnradio2">Material de empaque</label>
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
                    <span>{{$fmp->proveedor}}</span>
                    <input type="hidden" name="proveedor" value="{{$fmp->proveedor}}">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
            <div class="row">
                <div class="col-3">
                    <span class="fw-bold">Producto: </span>
                </div>
                <div class="col-6">
                    <span>{{$fmp->producto}}</span>
                    <input type="hidden" name="producto" value="{{$fmp->producto}}">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
            <div class="row">
                <div class="col-4">
                    <span class="fw-bold">Presentación: </span>
                </div>
                <div class="col-6">
                    <input type="text" name="presentacion" value="{{old('presentacion')}}" class="form-control form-control-sm">
                    {!!$errors->first('presentacion', '<li class="text-danger text-justify fw-bold">:message</li>')!!}
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
                    <span>{{$fmp->lote}}</span>
                    <input type="hidden" value="{{$fmp->lote}}" name="lote">
                </div>
            </div>
        </div>




        <div class="col-sm-12 col-md-5  col-lg-6 mt-3 text-center">
            <div class="row d-flex justify-content-center">
                <div class="col-auto">
                    <span class="fw-bold">Cantidad: </span>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-auto p-0">  
                    <input type="text" class="form-control form-control-sm" name="cantidad" value="{{old('cantidad')}}">
                    {!!$errors->first('cantidad', '<li class="text-danger text-justify fw-bold">:message</li>')!!}
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
            <textarea name="desviacion" class="form-control" class="w-100 border">{{old('desviacion')}}</textarea>
            {!!$errors->first('desviacion', '<li class="text-danger text-justify fw-bold">:message</li>')!!}
            
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
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" name="imagen1" value="{{old('imagen1')}}" class="form-control form-control-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" name="imagen2" value="{{old('imagen2')}}" class="form-control form-control-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" name="imagen3" value="{{old('imagen3')}}" class="form-control form-control-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" name="imagen4" value="{{old('imagen4')}}" class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" name="imagen5" value="{{old('imagen5')}}" class="form-control form-control-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" name="imagen6" value="{{old('imagen6')}}" accept="jpeg" class="form-control form-control-sm">
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
        <div class="col-12 mt-2 p-0">
            <textarea name="observaciones" class="w-100 form-control">{{old('observaciones')}}</textarea>
            {!!$errors->first('observaciones', '<small class="text-danger text-justify fw-bold">:message</small>')!!}
        </div>
    </div>
</div>

<!-- observaciones -->




<!-- via de notificacion -->
<div class="container mt-5">
    
    <div class="row">
        <div class="col-12 text-center fondo">
            <h4 class="mt-2">Via de notificación</h4>
        </div>
    </div>

    <div class="row mt-4 justify-content-center">
        <div class="col-sm-12 col-md-3 col-lg-2 text-center mx-4">
            <div class="form-check">
                <input class="form-check-input" name="notificacion_email" value="on"  type="checkbox" value="" id="email">
                <label class="form-check-label" for="email">
                    E-mail
                </label>
              </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-2 text-center mx-4">
            <div class="form-check">
                <input class="form-check-input" name="notificacion_telefonica" value="on"  type="checkbox" value="" id="telefonica">
                <label class="form-check-label" for="telefonica">
                    Telefónica
                </label>
              </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-2 text-center mx-4">
            <div class="form-check">
                <input class="form-check-input" name="notificacion_otra" value="on"  type="checkbox" value="" id="otra">
                <label class="form-check-label" for="otra">
                    Otra
                </label>
                <input type="text" class="form-control" name="otra_notificacion">
              </div>
        </div>
    </div>
</div>
<!-- via de notificacion -->





<!-- quien recibe notificación -->
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-3 mt-2">
                    <span>Quien recibe la notificación</span>
                </div>
                <div class="col-4">
                    <input type="text" name="recibe_notificacion" value="{{old('recibe_notificacion')}}" class="form-control" placeholder="Nombre / Puesto">
                    {!!$errors->first('recibe_notificacion', '<small class="text-danger text-justify fw-bold">:message</small>')!!}
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-3 mt-2">
                    <span>Quien emite la notificación</span>
                </div>
                <div class="col-4">
                    <input type="text" name="emite_notificacion" value="{{old('emite_notificacion')}}" class="form-control" placeholder="Nombre / Puesto">
                    {!!$errors->first('emite_notificacion', '<small class="text-danger text-justify fw-bold">:message</small>')!!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- quien recibe notificación -->




<!-- boton de guardar todo alv -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <button class="btn btn-success w-100">
               <i class="fa fa-save mx-3"></i>  Guardar
            </button>
        </div>
    </div>
</div>



<!-- boton de guardar todo alv -->

</div><!--Cierra contenedor de todo-->





</form>

@endsection