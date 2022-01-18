s<div class="content-wrapper" style="min-height: 1761.5px;">
  
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Proveedores</h1>
              </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>

  <!-- Contenido -->
  <section class="content">
      <div class="container-fluid">
            <div class="row">
                <button class="btn btn-flat btn-fuchsia" data-toggle="modal" data-target="#proveedores-modal">Agregar Proveedor</button>
            </div>
                  <div class="card-body table-full-width table-responsive">
                    <table class="table table-striped table-sm text-center" id="table-default">
                        <thead>
                            <tr>
                                <th>Id Proveedor</th>
                                <th>Nombre Proveedor</th>
                                <th>RFC</th>
                                <th>Direccion</th>
                                <th>Codigo Postal</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th>Telefono</th>
                                <th>Articulos</th>
                                <th>Observaciones</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Blancos San Pedro</td>
                                <td>BSP9909988</td>
                                <td>Av. Del Tanque S/N </td>
                                <td>39810</td>
                                <td>Acapulco</td>
                                <td>Guerrero</td>
                                <td>7445873277</td>
                                <td>Sin Articulos</td>
                                <td>Sin Observcaciones</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                    <button class="btn btn-flat btn-warning">Editar</button>
                                    <!-- <button class="btn btn-flat btn-danger">Eliminar</button> -->
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
          <h4 class="modal-title text-center">Sistema de Ventas</h4>
          <button type="button" class="close float-left" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h6>Datos del proveedor</h6>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="bmd-label-floating">Id proveedor.</label>
                    <input type="text" class="form-control form-control-sm" name="id-prov" id="id-prov" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="bmd-label-floating">Nombre Proveedor.</label>
                    <input type="text" class="form-control form-control-sm" name="nom-prov" minlength="4" maxlength="35" pattern="[A-Za-z ]{4,35}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">El nombre debe terner minimo 4 caracteres sin numeros.</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="bmd-label-floating">RFC</label>
                    <input type="text" class="form-control form-control-sm" name="rfc-prov" maxlength="10" pattern="[A-Za-z0-9]{,10}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Maximo 10 caracteres se permiten.</div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label class="bmd-label-floating">Direccion</label>
                    <input type="text" class="form-control form-control-sm" name="dir-prov" minlength="4" maxlength="60" pattern="[A-Za-z0-9-/_.]{4,60}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">La direccion debe tener minimo 4 caracteres y hasta 60</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="bmd-label-floating">Codigo Postal</label>
                    <input type="text" class="form-control form-control-sm" name="cp-prov" minlength="5" maxlength="5" pattern="[0-9]{5,5}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Maximo 5 caracteres se permiten.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="bmd-label-floating">Ciudad</label>
                    <input type="text" class="form-control form-control-sm" name="ciudad-prov" minlength="4" maxlength="15" pattern="[A-Za-z0-9]{4,15}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Minimo 4 y Maximo 15 caracteres se permiten.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="bmd-label-floating">Estado</label>
                    <input type="text" class="form-control form-control-sm" name="estado-prov" minlength="4" maxlength="15" pattern="[A-Za-z0-9]{4,15}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Minimo 4 y Maximo 15 caracteres se permiten.</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                    <div class="form-group">
                    <label class="bmd-label-floating">Telefono</label>
                    <input type="text" class="form-control form-control-sm" name="tel-prov" maxlength="10" pattern="[0-9]{10}"required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Maximo 10 caracteres se permiten.</div>
                    </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label class="bmd-label-floating">Articulos</label>
                    <input type="text" class="form-control form-control-sm" name="dir-prov" minlength="4" maxlength="60" pattern="[A-Za-z0-9-/_.]{4,60}" required>
                    <div class="valid-feedback">Valido!</div>
                    <div class="invalid-feedback">Los articulos debe tener minimo 4 caracteres y hasta 60</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-gorup">
                    <label class="mr-2" for="obs-prov">Observaciones:</label>
                    <textarea class="form-control form-control-sm" name="depto-obs" id="depto-obs" rows="3"></textarea>
                </div>
            </div>
        </div>    
    
        <div class="guardar">
            <button type="submit"><img src="assets/img/guardar.svg" alt="" style="width: 100px;"></button>
            <a type="button"><img src="assets/img/nuevo.svg" alt="" style="width: 100px;">
        </div>
    
    </div>
   
    </form>
    </div>
  </div>
</div>

