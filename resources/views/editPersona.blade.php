<!DOCTYPE html>
<html>
<style type="text/css">
  .NatJur

</style>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Personas</title>

</head>
<body>
<div class="container">

<form class="form-horizontal" style="font-size: .85em;">

  <div class="form-group row" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="estado">Estado:</label>
      <div class="col-lg-2">
        <select class="form-control" id="estado" style="font-size: 1em;">
          <option>Activo</option>
          <option>Inactivo</option>
        </select>
      </div>
  </div>

  <div class="form-group row" style="margin-bottom: 1px; "> 
      <label class="col-lg-2 col-form-label text-right" for="tipo">Tipo:</label>
      <div class="col-sm-2">
        <select class="form-control" id="tipo" style="font-size: 1em;">
          <option>Natural</option>
          <option>Jurídica</option>
          <option>Sin RUC/CI</option>
        </select>
      </div>
  </div>

  <div class="form-group row NatJur" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="contespe">Contribuyente Especial:</label>
      <div class="form-inline">
        <input type="checkbox" class="form-control" id="contespe">
      </div>
  </div>

  <div class="form-group row NatJur" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="ruc">RUC:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="ruc" placeholder="">
      </div>
  </div>

 <div class="form-group row NatJur" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="cedula">Cédula:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="cedula" placeholder="">
      </div>
  </div>

 <div class="form-group row" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="nombre">Nombre:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="nombre" placeholder="">
      </div>
  </div>

 <div class="form-group row NatJur" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="comnombre">Nombre comercial:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="comnombre" placeholder="">
      </div>
  </div>

 <div class="form-group row NatJur" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="telefono">Teléfono:</label>
      <div class="col-sm-3">
        <input type="tel" class="form-control" id="telefono" placeholder="">
      </div>
  </div>

  <div class="form-group row NatJur" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="direccion">Dirección:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="direccion" placeholder="">
      </div>
  </div>

   <div class="form-group row NatJur" style="margin-bottom: 1px; "> 
      <label class="col-lg-2 col-form-label text-right" for="provincia">Provincia:</label>
      <div class="col-sm-3">
        <select class="form-control" id="provincia" style="font-size: 1.11em;">
          <option>Pichincha</option>
          <option>Azuay</option>
          <option>El Oro</option>
        </select>
      </div>
  </div>

  <div class="form-group row NatJur" style="margin-bottom: 1px; "> 
      <label class="col-lg-2 col-form-label text-right" for="canton">Cantón:</label>
      <div class="col-sm-3">
        <select class="form-control" id="canton" style="font-size: 1.11em;">
          <option>canton 1</option>
          <option>canton 2</option>
          <option>canton 3</option>
        </select>
      </div>
  </div>

  <div class="form-group row etqta" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="Extranjero">Extranjero:</label>
      <div class="form-inline">
        <input type="checkbox" class="form-control" id="extranjero">
      </div>
  </div>

 <div class="form-group row" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="asociado">Persona Asociada:</label>
      <div class="col-sm-3 input-group">
        <input type="text" class="form-control" id="asociado" placeholder="...">
        <div class="input-group-btn input-group-append">
              <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
        </div>
      </div>
  </div>

  <div class="form-group row etqta" style="margin-bottom: 1px; "> 
      <label class="col-lg-2 col-form-label text-right" for="diraviso">Dirección Aviso de Cobro:</label>
      <div class="col-sm-3">
        <select class="form-control" id="diraviso" style="font-size: 1.11em;">
          <option>Dirección trabajo</option>
          <option>Dirección domicilio</option>
        </select>
      </div>
  </div>


 <div class="form-group row" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="categoria">Categoría:</label>
      <div class="col-sm-3 input-group">
        <input type="text" class="form-control" id="categoria" placeholder="...">
        <div class="input-group-btn input-group-append">
              <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
        </div>
      </div>
  </div>



   <div class="form-group row NatJur" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="correo">Correo electrónico :</label>
      <div class="col-sm-3">
        <input type="email" class="form-control" id="correo" placeholder="">
      </div>
  </div>

  <div class="form-group row etqta" style="margin-bottom: 1px; ">
      <label class="col-lg-2 col-form-label text-right" for="bloqueado">Bloquear cliente:</label>
      <div class="form-inline">
        <input type="checkbox" class="form-control" id="bloqueado">
      </div>
  </div>


<div class="row" style="margin: 40px; font-size: 1.2em;">

      <div class="col-lg-12" >
          <div class="card-header col-sm-12" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsediv1"> Cliente</>
          </div>

          <div id='collapsediv1' class='collapse p-4  border'>
            <div class="col-lg-6">
              
            </div>
            <div class="col-lg-6">
              
            </div>
          </div>
      </div>

      <div class="col-lg-12" >
          <div class="card-header col-sm-12" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsediv2"> Empleado</>
          </div>

          <div id='collapsediv2' class='collapse p-4  border'>
            <div class="col-lg-6">
              
            </div>
            <div class="col-lg-6">
              
            </div>
          </div>
      </div>

      <div class="col-lg-12" >
          <div class="card-header col-sm-12" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsediv3"> Accionista</>
          </div>

          <div id='collapsediv3' class='collapse p-4  border'>
            <div class="col-lg-6">
              
            </div>
            <div class="col-lg-6">
              
            </div>
          </div>
      </div>

            <div class="col-lg-12" >
          <div class="card-header col-sm-12" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsediv4"> Vendedor</>
          </div>

          <div id='collapsediv4' class='collapse p-4  border'>
            <div class="col-lg-6">
              
            </div>
            <div class="col-lg-6">
              
            </div>
          </div>
      </div>


</div>

</form>
</div> 
</body>
</html>