<div class="content-wrapper" style="min-height: 1761.5px;">
  
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Productos</h1>
              </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>

 <!-- Contenido -->
 <section class="content">
      <div class="container-fluid">
            <div class="row">
                <button class="btn btn-flat btn-sm btn-fuchsia" data-toggle="modal" data-target="#proveedores-modal">Agregar Producto</button>
            </div>
                  <div class="card-body table-full-width table-responsive">
                    <table class="table table-striped table-sm text-center" id="table-default">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre Producto</th>
                                <th>Proveedor</th>
                                <th>P/Compra S/imp</th>
                                <th>Cant x Caja</th>
                                <th>Minimo</th>
                                <th>P/Compra C/imp</th>
                                <th>Anaquel</th>
                                <th>Estado</th>
                                <th>Observaciones</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Papel higienico vangart</td>
                                <td>Abarrotera del Duero</td>
                                <td>1000</td>
                                <td>20</td>
                                <td>3</td>
                                <td>1200</td>
                                <td>A1-S1</td>
                                <td>Activo</td>
                                <td>Sin Observcaciones</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                    <button class="btn btn-flat btn-warning">Editar</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    
                    </table>
                  </div>
            </div>
      </section>
  <!-- /.content -->
</div>

<!-- Modal Agregar Proveedores -->

<div id="proveedores-modal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog  mw-100 w-75 mh-100 h-75">
    <div class="modal-content">
      <form role="form" method="post" class="needs-validation" novalidate>

      <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="color:grey">
          <h4 class="modal-title text-center">Datos del producto</h4>
          <button type="button" class="close float-left" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="bmd-label-floating">Codigo</label>
                    <input type="text" class="form-control form-control-sm" name="cod-prod" id="cod-prod" minlength="4" maxlength="25" pattern="[A-Za-z0-9]{4,25}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">El codigo debe terner min 4 caracteres max 25 letras y numeros.</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="bmd-label-floating">Proveedor.</label>
                    <input type="text" class="form-control form-control-sm" name="prov-prof" id="prov-prod" minlength="4" maxlength="35" pattern="[A-Za-z ]{4,15}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">El nombre debe terner min 4 y max 15 caracteres sin numeros.</div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
                <div class="form-group">
                    <label class="bmd-label-floating">Nombre Producto.</label>
                    <input type="text" class="form-control form-control-sm" name="nom-prod" id="nom-prod" minlength="4" maxlength="35" pattern="[A-Za-z ]{4,35}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">El nombre debe terner min 4 y max 35 caracteres sin numeros.</div>
                </div>
            </div>
        </div>
        <div class="row subtitle">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="bmd-label-floating">Precio Compra S/Impuestos</label>
                    <input type="text" class="form-control form-control-sm" name="pc-prod-simp" minlength="5" maxlength="5" pattern="[0-9]{5}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Solo Caracteres Numericos</div>
                </div>
            </div>
          </div>
        
        <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">Cantidad por Caja</label>
                    <input type="text" class="form-control form-control-sm" name="cant-caja-prod" maxlength="10" pattern="[0-9]{10}"required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Maximo 10 caracteres solo numeros.</div>
                    </div>
            </div>
            <div class="col-md-6" style="background-color: #F3F3F3;">
            <h4>RANGOS PARA PRODUCTOS</h4>
                <div class="form-group">
                    <label class="bmd-label-floating">Medio Mayoreo a partir de:</label>
                    <input type="text" class="form-control form-control-sm" name="med-may-prod" minlength="1" maxlength="3" pattern="[0-9]{1,3}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Min 0 unidades</div>
                    <label class="bmd-label-floating">Mayoreo a partir de:</label>
                    <input type="text" class="form-control form-control-sm" name="may-prod" minlength="1" maxlength="3" pattern="[0-9]{1,3}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Min 0 unidades</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Minimo Unidad</label>
                    <input type="text" class="form-control form-control-sm" name="min-uni-prod" minlength="1" maxlength="3" pattern="[0-9]{1,3}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Min 0 unidades</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check bottomed">
                    <input class="form-check-input" type="checkbox" value="" id="cant-frac-prod" name="cant-frac-prod">
                    <label class="form-check-label" for="cant-frac-prod">Vender Cantidades fraccionadas</label>
                </div>
            </div>
        </div>
        <h4>IMPUESTOS</h4>
        <div class="row backgrounded">
                <div class="col-md-4">
                    <div class="form-group">
                    <textarea name="imp-prod" id="imp-prod" rows="3" class="form-control form-control-sm"></textarea>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <button type="button" style="border: none;"><img class="enviar" src="assets/img/enviar.svg" alt=""></button>
                </div>
                <div class="col-md-4">
                    <table class="table table-bordered" style="background-color: #fff;" >
                        <thead>
                            <tr>
                             <th></th>
                             <th></th>
                             <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3" style="height: 60px;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding-top: 15px;">
              <div class="form-group">
                    <label class="bmd-label-floating">Precio Compra C/Impuestos</label>
                    <input type="text" class="form-control form-control-sm" name="pc-prod-cimp" minlength="5" maxlength="5" pattern="[0-9]{5}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Solo Caracteres Numericos</div>
                </div>
                <div class="form-group">
                        <label class="bmd-label-floating">Departamento</label>
                        <input type="text" class="form-control form-control-sm" name="dep" minlength="5" maxlength="5" pattern="[a-zA-z]{15}" required>
                        <div class="valid-feedback">Valido!</div>
                        <div class="invalid-feedback">Hasta 15 letras</div>
                </div>
                <div class="form-group">
                    <label class="bmd-label-floating">Anaquel</label>
                    <input type="text" class="form-control form-control-sm" name="ana-prod" maxlength="15" pattern="[a-zA-z0-9]{15}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Hasta 15 letras</div>
                </div>
            </div>
            <div class="col-md-6" style="background: #f3f3f3; padding-top:15px;">
            <h4>PORCENTAJE A APLICAR</h4>
                <div class="form-group">
                
                    <div class="row">
                    <label class="bmd-label-floating padded">Menudeo:</label>
                        <input type="text" style="width: 20%; " class="form-control form-control-sm padded" name="menud-prod-1" required>
                        <input type="text" style="width: 60%; " class="form-control form-control-sm padded" name="menud-prod-2"required>
                    </div>
                    <div class="row">
                    <label class="bmd-label-floating padded">M Mayoreo:</label>
                        <input type="text" style="width: 20%; " class="form-control form-control-sm padded" name="med-may-prod-1" required>
                        <input type="text" style="width: 60%; " class="form-control form-control-sm padded" name="med-may-prod-2"required>
                    </div>
                    <div class="row">
                    <label class="bmd-label-floating padded">Mayoreo:</label>
                        <input type="text" style="width: 20%; " class="form-control form-control-sm padded" name="may-prod-1" required>
                        <input type="text" style="width: 60%; " class="form-control form-control-sm padded" name="may-prod-2"required>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="" class="bmd-label-floating" >Estado:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input " type="checkbox" value="" id="activo" name="activo">
                        <label class="form-check-label"  for="activo">Activo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input"  type="checkbox" value="" id="inactivo" name="inactivo">
                        <label class="checkbox-inline"   for="inactivo">Inactivo</label>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="mr-2" for="obs-prov">Observaciones:</label>
                    <textarea class="form-control form-control-sm" name="depto-obs" id="prod-obs" rows="3"></textarea>
                </div>
            </div>
        </div>    
    
        <div class="guardar">
            <button type="submit" style="border: none;"><img src="assets/img/guardar.svg" alt="" style="width: 100px;"></button>
            <button type="button" style="border: none;"><img src="assets/img/nuevo.svg" alt="" style="width: 100px;"></button>
        </div>
    
    </div>
   
    </form>
    </div>
  </div>
</div>