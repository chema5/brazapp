

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Proyectos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Proyectos</a></li>
              <li class="breadcrumb-item"><a href="#">Nuevo</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-outline-primary btn-sm">
            <i class="fas fa-plus"></i> Nuevo proyecto
          </button>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">

          <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <th>fecha inicio</th>
                    <th>Fecha fin</th>
                    <th>Tipo</th>
                    <th>Supervisor</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dupont</td>
                    <td>Av. America</td>
                    <td>23/07/2019</td>
                    <td>25/07/2019</td>
                    <td>Planta Interna</td>
                    <td>Javier Sanchez</td>
                    <td>  
                      <div class="btn-group">
                        <a href="" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </td>
                </tr>

            </tbody>
          </table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer"></div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->