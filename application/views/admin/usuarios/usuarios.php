

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
              <li class="breadcrumb-item"><a href="#">Ver</a></li>
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
          <a href="<?php echo base_url();?>Usuarios/add" 
            class="btn btn-outline-primary btn-sm">
            <i class="fas fa-plus"></i> Nuevo usuario
          </a>

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
                  <th>Primer apellido</th>
                  <th>Segundo apellido</th>
                  <th>Usuario</th>
                  <th>Rol</th>
                  <th>Opciones</th>
              </tr>
          </thead>
          <tbody>
            <?php if(!empty($usuarios)):?>
              <?php foreach ($usuarios as $user):?>
              <tr>
                  <td><?php echo $user->id;?></td>
                  <td><?php echo $user->nombres;?></td>
                  <td><?php echo $user->papellido;?></td>
                  <td><?php echo $user->sapellido;?></td>
                  <td><?php echo $user->username;?></td>
                  <td><?php echo $user->rol;?></td>
                  <td>  
                    <div class="btn-group">
                      <a href="" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pencil-alt"></i></a>
                      <a href="" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                    </div>
                  </td>
              </tr>
            <?php endforeach;?> 
            <?php endif;?> 
          </tbody>
        </table>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->