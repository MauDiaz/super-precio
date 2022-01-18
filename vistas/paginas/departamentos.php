s<div class="content-wrapper" style="min-height: 1761.5px;">
  
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Departamentos</h1>
              </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>

  <!-- Contenido -->
  <section class="content">
      <div class="container-fluid">
            <div class="row">
                <button class="btn btn-flat btn-fuchsia" data-toggle="modal" data-target="#departamento-modal">Agregar Departamento</button>
            </div>
                  <div class="card-body table-full-width table-responsive">
                    <table class="table table-striped table-sm text-center" id="table-default">
                        <thead>
                            <tr>
                                <th>Id Departamento</th>
                                <th>Nombre Departamento</th>
                                <th>Observaciones</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dulces y confitados</td>
                                <td>Sin observaciones</td>
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

<!-- Modal -->
<div class="modal fade" id="departamento-modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Sistema de Ventas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
        <h6>Datos del Departamento</h6>
        <div class="row">
            <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group input-group-sm col-sm-12">
                <label class="mr-2"for=depto-id">Id Depto:</label>
                <input type="text" style="width: 100%;" class="form-control form-control-sm" id="depto-id" name="depto-id" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-sm col-sm-12">
                <label class="mr-2"for=depto-nombre">Nombre Depto:</label>
                <input type="text" style="width: 100%;" class="form-control form-control-sm" id="depto-nombre" name="depto-nombre" >
                </div>
            </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="form-gorup">
                    <label class="mr-2" for="depto-obs">Observaciones:</label>
                    <textarea class="form-control form-control-sm" name="depto-obs" id="depto-obs" rows="3"></textarea>
                </div>
            </div>
        </div>

      </div>
        <div class="guardar">
        <a  type="button"><img src="assets/img/guardar.svg" alt="" style="width: 100px;">
        <a type="button"><img src="assets/img/nuevo.svg" alt="" style="width: 100px;">
        </div>
    </div>
  </div>
</div>