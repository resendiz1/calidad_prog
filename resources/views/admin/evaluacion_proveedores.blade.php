@extends('plantilla')
@section('contenido')
@include('assets.nav')    

<div class="container mt-5">


    <div class="row mt-5 justify-content-center bg-white p-5">
        <div class="col-9 text-center  p-5 sombra">
            <h2 class="mb-4">EVALUACIÓN DE PROVEEDORES</h2>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre del proveedor</th>
                  <th>Producto</th>
                  <th>Grano Dañado</th>
                  <th>Impurezas</th>
                  <th>Humedad</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>PROMEXA</td>
                  <td>MAIZ</td>
                  <td>30%</td>
                  <td>50%</td>
                  <td>30%</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>

    <div class="row p-3 justify-content-center bg-white ">

        <div class="col-6 p-5 sombra text-center">
            <h4>CUMPLIMIENTO DE PROVEEDORES</h4>
            <div class="form-group mt-3">
                <label for="" class="fw-bold">TIPO DE GRAFICO</label>
                <select class="form-select mt-1 form-control-sm p-0 text-center" id="grafico" name="area" >
                    <option value="" selected>NO GRAFICA</option >
                    <option value="bar">BARRAS</option>
                    <option value="line">LINEAS</option>
                    <option value="pie">PASTEL</option>
                    <option value="doughnut">DONA</option>
                </select>
            </div>
            <canvas id="myChart" class="m-5"></canvas>
        </div>

    </div>


</div>


<script>

var contador= 0;
var ctx = document.getElementById('myChart');
alert(ctx)
const forma = document.getElementById('grafico')

forma.addEventListener('change', function(){


    alert('antes de todo'+ ctx)



    
    if(typeof ctx !== undefined){
        ctx = undefined;
        ctx = document.getElementById('myChart');
        alert('despues del if '+ ctx)
    }

    

    // contador = contador +1;
    const grafico = document.getElementById('grafico').value;




//const ctx = document.getElementById('myChart');


new Chart(ctx, {
  type: grafico,
  data: {
    labels: ['Roberto Beristain', 'PROMEXA', 'Otro proveedor', 'Otro proveedor 2'],
    datasets: [{
      label: 'PROVEEDORES EN CUMPLIMIENTO',
      data: [55, 64, 41, 80],
      borderWidth: 1
    }]
  },





  options: {
    scales: {
    //   y: {
    //     beginAtZero: true,
    //     max: 100
    //   }
    }
    
  }
});

})











</script>


@endsection