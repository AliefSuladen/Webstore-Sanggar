 <!-- /.col-md-6 -->
 </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- DataTables  & Plugins -->
<script src="<?= base_url(); ?>template/back_end/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>template/back_end/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>



<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  window.setTimeout(function(){
    $(".alert").fadeTo(500,0).slideUp(500,function(){
       $(this).remove();
    });
  }, 3000)
</script>
</body>
</html>
