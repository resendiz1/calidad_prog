@extends('plantilla')
@section('contenido')
@include('assets.nav')    
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
                <div class="col-5">
                    <span class="fw-bold">Fecha de emisión: </span>
                </div>
                <div class="col-6">
                    24 de Febrero del 2024
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 mt-2 col-lg-4">
            <!-- Espacio en blanco  -->
        </div>


        <div class="col-sm-12 col-md-12 mt-2 col-lg-4">
            <div class="row">
                <div class="col-5">
                    <span class="fw-bold">Folio: </span>
                </div>
                <div class="col-6">
                    24 de Febrero del 2024
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fecha y folio -->





<!-- materia prima, material de empaque -->
<div class="container mt-3 p-3">
    <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-3 border p-3">
            <div class="form-check">
                <input class="form-check-input p-2" type="checkbox" value="" id="materia_prima">
                <label class="form-check-label h5" for="materia_prima">
                    Materia Prima
                </label>
              </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3 border p-3">
            <div class="form-check">
                <input class="form-check-input p-2" type="checkbox" value="" id="material_empaque">
                <label class="form-check-label h5" for="material_empaque">
                    Material de Empaque
                </label>
              </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3 border p-3">
            <div class="form-check">
                <input class="form-check-input p-2" type="checkbox" value="" id="producto_terminado">
                <label class="form-check-label h5" for="producto_terminado">
                    Producto Terminado
                </label>
              </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3 border p-3">
            <div class="form-check">
                <input class="form-check-input p-2" type="checkbox" value="" id="otros">
                <label class="form-check-label h5" for="otros">
                    Otros
                </label>
              </div>
        </div>

    </div>
</div>



<!-- materia prima, material de empaque -->





<!-- Proveedor, producto y presentación -->
<div class="container mt-4">
    <div class="row border p-4 d-flex justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
            <div class="row">
                <div class="col-3">
                    <span class="fw-bold">Proveedor: </span>
                </div>
                <div class="col-6">
                    <span>Nombre proveedor</span>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
            <div class="row">
                <div class="col-3">
                    <span class="fw-bold">Producto: </span>
                </div>
                <div class="col-6">
                    <span>Nombre producto</span>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
            <div class="row">
                <div class="col-4">
                    <span class="fw-bold">Presentación: </span>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control form-control-sm">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Proveedor, producto y presentación -->






<!-- lote y cantidad -->

<div class="container mt-4 border">
    <div class="row p-3 justify-content-around">
        <div class="col-sm-12 col-md-5  col-lg-3">
            <div class="row">
                <div class="col-auto">
                    <span class="fw-bold">Lote: </span>
                </div>
                <div class="col-auto">
                    <span>Numero del lote</span>
                </div>
            </div>
        </div>
        <div class=" col-sm-12 col-md-2 col-lg-6">
            <!-- es para ocupar un espacio entre lote y cantidad -->
        </div>

        <div class="col-sm-12 col-md-5  col-lg-3">
            <div class="row">
                <div class="col-auto">
                    <span class="fw-bold">Cantidad: </span>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-5">
                    <input type="text" class="form-control form-control-sm">
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
            <textarea name="" class="form-control" class="w-100 border"></textarea>
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
                    <input type="file" class="form-control form-control-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" class="form-control form-control-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" class="form-control form-control-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" class="form-control form-control-sm">
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 p-4">
            <div class="row">
                <div class="col-12 border text-center">
                    <img src="img/images.png"  alt="">
                </div>
                <div class="col-12">
                    <input type="file" accept="jpeg" class="form-control form-control-sm">
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
            <textarea name="" id="" class="w-100 form-control"></textarea>
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
                <input class="form-check-input" type="checkbox" value="" id="email">
                <label class="form-check-label" for="email">
                    E-mail
                </label>
              </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-2 text-center mx-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="telefonica">
                <label class="form-check-label" for="telefonica">
                    Telefónica
                </label>
              </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-2 text-center mx-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="otra">
                <label class="form-check-label" for="otra">
                    Otra
                </label>
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
                    <input type="text" class="form-control" placeholder="Nombre / Puesto">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-3 mt-2">
                    <span>Quien emite la notificación</span>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Nombre / Puesto">
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


@endsection