<!DOCTYPE html>
<html>

<style type="text/css">
  .NatJur {  }
  .inputfield{ height:30px}
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
<div class="containe col-lg-12">

<form action="{{url('Guardar')}}" method="POST" class="form-horizontal" style="font-size: .85em;">
  @csrf
    <div class="col-lg-10 card-header">
              <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="estado">Estado:</label>
                  <div class="col-lg-2">
                    <select class="form-control" id="estado" name="estado" style="font-size: 1em;">
                      <option>Activo</option>
                      <option>Inactivo</option>
                    </select>
                  </div>
              </div>

              <div class="form-group row" style="margin-bottom: 3px; "> 
                  <label class="col-lg-2 col-form-label text-right" for="tipo">Tipo:</label>
                  <div class="col-sm-2">
                    <select class="form-control" id="tipo" name="tipo" style="font-size: 1em;" onchange="CambiaTipoID()">
                      <option>Natural</option>
                      <option>Jurídica</option>
                      <option selected>Sin RUC/CI</option>
                    </select>
                  </div>
              </div>

              <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="especial">Contribuyente Especial:</label>
                  <div class="form-inline">
                    <input type="checkbox" class="form-control" id="especial" name="especial">
                  </div>
              </div>

              <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="ruc">RUC:</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="ruc" name="ruc" placeholder="">
                  </div>
              </div>

             <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="cedula">Cédula:</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="">
                  </div>
              </div>

             <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="nombre">Nombre:</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
                  </div>
              </div>

             <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="nombrecomercial">Nombre comercial:</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nombrecomercial" name="nombrecomercial" placeholder="">
                  </div>
              </div>

             <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="telefono">Teléfono:</label>
                  <div class="col-sm-3">
                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="">
                  </div>
              </div>

              <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="direccion">Dirección:</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="">
                  </div>
              </div>

               <div class="form-group row NatJur" style="margin-bottom: 3px; "> 
                  <label class="col-lg-2 col-form-label text-right" for="provincia">Provincia:</label>
                  <div class="col-sm-3">
                    <select class="form-control" id="provincia" name="provincia" style="font-size: 1.11em;" onchange="Cantones()">
                        <option> </option>
                    </select>
                  </div>
              </div>

              <div class="form-group row NatJur" style="margin-bottom: 3px; "> 
                  <label class="col-lg-2 col-form-label text-right" for="canton">Cantón:</label>
                  <div class="col-sm-3">
                    <select class="form-control" id="canton" name="canton" style="font-size: 1.11em;">
                    </select>
                  </div>
              </div>

              <div class="form-group row etqta" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="Extranjero">Extranjero:</label>
                  <div class="form-inline">
                    <input type="checkbox" class="form-control" id="extranjero" name="extranjero">
                  </div>
              </div>

             <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="asociado">Persona Asociada:</label>
                  <div class="col-sm-3 input-group">
                    <input type="text" class="form-control" id="asociado" placeholder="..." name="asociado">
                    <div class="input-group-btn input-group-append">
                          <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
              </div>

              <div class="form-group row etqta" style="margin-bottom: 3px; "> 
                  <label class="col-lg-2 col-form-label text-right" for="dirrecciondeaviso">Dirección Aviso de Cobro:</label>
                  <div class="col-sm-3">
                    <select class="form-control" id="dirrecciondeaviso" name="dirrecciondeaviso" style="font-size: 1.11em;">
                      <option>Dirección trabajo</option>
                      <option>Dirección domicilio</option>
                    </select>
                  </div>
              </div>


             <div class="form-group row" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="categoria">Categoría:</label>
                  <div class="col-sm-3 input-group">
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="...">
                    <div class="input-group-btn input-group-append">
                          <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
              </div>



               <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="correo">Correo electrónico :</label>
                  <div class="col-sm-3">
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="">
                  </div>
              </div>

              <div class="form-group row etqta" style="margin-bottom: 3px; ">
                  <label class="col-lg-2 col-form-label text-right" for="bloqueado">Bloquear cliente:</label>
                  <div class="form-inline">
                    <input type="checkbox" class="form-control" id="bloqueado" name="bloqueado">
                  </div>
              </div>
      </div>

      <div class="container col-sm-12" style="font-size: 0.9em;">
          <div class="card-header" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsediv1" style="font-size: 1.2em;"> Cliente</>
          </div>
          <div id='collapsediv1' class='collapse p-4  border  col-lg-12 row' style="margin-left:1px;">

            <div class="col-lg-5">
                                 <div class="form-group row" style="margin-bottom: 3px; ">
                                    <label class="col-lg-4 col-form-label text-right" for="cuentasporcobrar">Cuentas por cobrar:</label>
                                    <div class="col-sm-6 input-group">
                                      <input type="text" class="form-control" id="cuentasporcobrar" name="cliente[cuentasporcobrar]" placeholder="...">
                                      <div class="input-group-btn input-group-append">
                                            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                                      </div>
                                    </div>
                                </div>

                               <div class="form-group row" style="margin-bottom: 3px; "> 
                                    <label class="col-lg-4 col-form-label text-right" for="vendedor">Vendedor:</label>
                                    <div class="col-sm-6">
                                      <select class="form-control" id="vendedor" name="cliente[vendedor]" style="font-size:1.11em;">
                                          <option>vendedor 1</option>
                                          <option>vendedor 2</option>
                                          <option>vendedor 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-bottom: 3px; ">
                                    <label class="col-lg-4 col-form-label text-right" for="descuento">Descuento:</label>
                                    <div class="col-sm-6">
                                      <input type="texto" class="form-control  inputfield" id="descuento" name="cliente[descuento]" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row etqta" style="margin-bottom: 3px; ">
                                    <label class="col-lg-4 col-form-label text-right" for="paraexportar">Para Exportación:</label>
                                    <div class="form-inline">
                                      <input type="checkbox" class="form-control" id="paraexportar" name="cliente[paraexportar]">
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-bottom: 3px; ">
                                    <label class="col-lg-4 col-form-label text-right" for="centrocosto">Centro de costo:</label>
                                    <div class="col-sm-6 input-group">
                                      <input type="text" class="form-control" id="centrocosto" placeholder="..." name="cliente[centrocosto]">
                                      <div class="input-group-btn input-group-append">
                                            <button class="btn" style="background: #ecf0f1; color: #96a1ab; border-color: #ced4da"><i class="fa fa-search"></i></button>
                                      </div>
                                    </div>
                                </div>
            </div>

            <div class="col-lg-6">
                            <div class="form-group row" style="margin-bottom: 3px; ">
                                    <label class="col-lg-3 col-form-label text-right" for="saldoinicial">Saldo inicial:</label>
                                    <div class="col-sm-5">
                                      <input type="texto" class="form-control  inputfield" id="saldoinicial" name="cliente[saldoinicial]" placeholder="">
                                    </div>
                            </div>

                            <div class="form-group row" style="margin-bottom: 3px; ">
                                    <label class="col-lg-3 col-form-label text-right" for="PVP">PVP por defecto:</label>
                                    <div class="col-sm-5 input-group">
                                      <input type="text" class="form-control" id="PVP" name="cliente[PVP]" placeholder="...">
                                      <div class="input-group-btn input-group-append">
                                            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                                      </div>
                                    </div>

                                <div class="form-group row" style="margin-bottom: 3px; ">
                                      <label class="col-lg-5 col-form-label text-right" for="manual">Manual:</label>
                                      <div class="form-inline col-lg-3">
                                      <input type="checkbox" class="form-control" id="manual" name="cliente[manual]">
                                    </div>
                                </div>

                            </div>
            </div>
          </div>
      </div>




      <div class="container col-lg-12" style="font-size: 0.9em;">
          <div class="card-header" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsedivX" style="font-size: 1.2em;"> Proveedor</>
          </div>
          <div id='collapsedivX' class='collapse p-4  border  col-lg-12 row' style="margin-left:1px;">


            <div class="col-lg-4">
                            <div class="form-group row" style="margin-bottom: 3px; ">
                                    <label class="col-lg-4 col-form-label text-right" for="porpagarpro">Cuentas por pagar:</label>
                                    <div class="col-sm-6 input-group">
                                      <input type="text" class="form-control " id="porpagarpro" placeholder="..." name="proveedor[cuentasporpagar]">
                                      <div class="input-group-btn input-group-append">
                                            <button class="btn btn-secondary "><i class="fa fa-search"></i></button>
                                      </div>
                                    </div>
                            </div>

                            <div class="form-group row" style="margin-bottom: 3px; ">
                                    <label class="col-lg-4 col-form-label text-right" for="recurrente">Cuenta recurrente:</label>
                                    <div class="col-sm-6 input-group">
                                      <input type="text" class="form-control" id="recurrente" placeholder="..." name="proveedor[cuentarecurrente]">
                                      <div class="input-group-btn input-group-append">
                                            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                                      </div>
                                    </div>
                            </div>

                            <div class="form-group row" style="margin-bottom: 3px; ">
                                    <label class="col-lg-4 col-form-label text-right" for="centrocostopro">Centro de costo:</label>
                                    <div class="col-sm-6 input-group">
                                      <input type="text" class="form-control" id="centrocostopro" placeholder="..." name="proveedor[centrocostopro]">
                                      <div class="input-group-btn input-group-append">
                                            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                                      </div>
                                    </div>
                            </div>


                                  
                            <div class="form-group row" style="margin-bottom: 3px; ">
                                      <label class="col-lg-4 col-form-label text-right" for="ciarelacionada">Cia Relacionada:</label>
                                      <div class="form-inline">
                                          <input type="checkbox" class="form-control" id="ciarelacionada" name="proveedor[ciarelacionada]">
                                      </div>
                            </div>
         
                            <div class="form-group row" style="margin-bottom: 3px; ">
                                      <label class="col-lg-4 col-form-label text-right" for="artesano">Artesano:</label>
                                      <div class="form-inline">
                                        <input type="checkbox" class="form-control" id="artesano" name="proveedor[artesano]">
                                      </div>
                            </div>
            </div>

            <div class="col-lg-7">
                            <div class="form-group row NatJur" style="margin-bottom: 3px; ">
                                    <label class="col-lg-3 col-form-label text-right" for="saldoinipro">Saldo inicial:</label>
                                    <div class="col-sm-3">
                                      <input type="texto" class="form-control  inputfield" id="saldoinipro" placeholder="" name="proveedor[saldoinipro]">
                                    </div>
                            </div>

                            <div class="form-group row" style="margin-bottom: 3px; ">
                                    <label class="col-lg-3 col-form-label text-right" for="retIR">Ret. IR:</label>
                                    <div class="col-sm-3 input-group">
                                      <input type="text" class="form-control " id="RetIR" placeholder="..." name="proveedor[retIR]">
                                      <div class="input-group-btn input-group-append">
                                            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                                      </div>
                                    </div>


                                    <label class="col-lg-2 col-form-label text-right" for="retIVA">Ret. IVA:</label>
                                    <div class="col-sm-3 input-group ">
                                      <input type="text" class="form-control " id="retIVA" placeholder="..." name="proveedor[retIVA]">
                                      <div class="input-group-btn input-group-append">
                                            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                                      </div>
                                    </div>

                            </div>
            </div>
          </div>
      </div>

      <div class="col-lg-12" >
          <div class="card-header col-sm-12" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsediv2"> Empleado</>
          </div>

          <div id='collapsediv2' class='collapse p-4  border'>
                                  <div class="col-lg-6">
                                      <div class="form-group row" style="margin-bottom: 3px; ">
                                            <label class="col-lg-5 col-form-label text-right" for="gerente">Gerente:</label>
                                            <div class="form-inline col-lg-3">
                                            <input type="checkbox" class="form-control" id="gerente" name="empleado[gerente]">
                                          </div>
                                      </div>
                                  </div>
            
                                  <div class="col-lg-6">
                                      <div class="form-group row" style="margin-bottom: 3px; ">
                                            <label class="col-lg-5 col-form-label text-right" for="pasante">Pasante:</label>
                                            <div class="form-inline col-lg-3">
                                            <input type="checkbox" class="form-control" id="pasante" name="empleado[pasante]">
                                          </div>
                                      </div>
                                  </div>
          </div>
      </div>

      <div class="col-lg-12" >
          <div class="card-header col-sm-12" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsediv3"> Accionista</>
          </div>

          <div id='collapsediv3' class='collapse p-4  border'>
                              <div class="form-group row" style="margin-bottom: 3px; ">
                                    <label class="col-lg-4 col-form-label text-right" for="porpagaracio">Cuentas por pagar:</label>
                                    <div class="col-sm-6 input-group">
                                      <input type="text" class="form-control " id="porpagaracio" placeholder="..." name="accionista[cuentasporpagar]" >
                                      <div class="input-group-btn input-group-append">
                                            <button class="btn btn-secondary "><i class="fa fa-search"></i></button>
                                      </div>
                                    </div>
                            </div>
          </div>
      </div>

      <div class="col-lg-12" >
          <div class="card-header col-sm-12" id="headingOne" style="background: #e7e7e7;">
            <input type="checkbox" data-toggle="collapse" data-target="#collapsediv4" name="vendedor"> Vendedor</>
          </div>
      </div>
</div>

  <div class="col-lg-10 text-right">
    <button class="btn btn-success ">Guardar <i class="fa fa-save"></i></button>
  </div>  
</form>
</div> 
</body>
</html>

@include('provincias')

<script type="text/javascript">

 myJson=<?php echo prueba(); ?>
  
/*alert(myJson['1']['cantones']['101']['canton']);*/
  Provincias();

  function Provincias(){
      var x = document.getElementById("provincia");
      

      for (var i = 1; i < (Object.keys(myJson).length); i++) {
        var option = document.createElement("option");    
        option.text = myJson[i]['provincia'] ;
        x.add(option);
      }

  }

  function Cantones(){

    xProv=document.getElementById("provincia");
    xCant=document.getElementById("canton");   

    for (let i = xCant.options.length; i >= 0; i--) {
          xCant.remove(i);
      }
        
    for (const prop in myJson[xProv.selectedIndex]['cantones']){
               console.log(`${prop}`); 
               
        var option = document.createElement("option"); 
        option.text = myJson[xProv.selectedIndex]['cantones'][prop]['canton'] ;
        xCant.add(option);
      }
  }

  

  function interaccion(obj, nvl){
      
      for (const prop in obj){
              if (typeof(obj[prop])=='object') { interaccion(obj[prop],nvl+1); } else { console.log(`${nvl}- obj.${prop} = ${obj[prop]}`); }
      }  

  }

 
  function CambiaTipoID() {  sTipo=document.getElementById("tipo");
    if (sTipo.selectedIndex==2) { $('.NatJur').hide(); } else { $('.NatJur').show(); } 
  }
     CambiaTipoID();


</script>
