 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2019 </strong> - Todos los derechos reservados
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>vendors/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>vendors/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>vendors/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>vendors/dist/js/demo.js"></script>
<!-- Datatable responsive -->
<script src="<?php echo base_url();?>vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>vendors/datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>vendors/datatable/js/responsive.bootstrap4.min.js"></script>
<!-- Datatables  inicio-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
        });
    } );
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>


</body>
</html>
