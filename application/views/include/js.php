<!-- jQuery 3 -->
<script src="<?php echo base_url('asset/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('asset/'); ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('asset/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('asset/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('asset/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('asset/custom/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('asset/custom/js/buttons.flash.min.js') ?>"></script>
<script src="<?php echo base_url('asset/custom/js/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('asset/custom/js/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('asset/custom/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('asset/custom/js/buttons.print.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('asset/'); ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('asset/'); ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('asset/'); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('asset/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('asset/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('asset/'); ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('asset/'); ?>dist/js/demo.js"></script>
<script>

$(function () {
	$('#example1').DataTable({
    dom: 'Bfrtip',
    buttons: [
    // 'copy', 'csv', 'excel', 'pdf', 'print'
    'excel'
        ]
  })
	$('.select2').select2()
})
</script>
<script>
/** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
  return this.href == url;
}).parent().addClass('active');

// for treeview
$('ul.treeview-menu a').filter(function() {
  return this.href == url;
}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
$('body').layout('fixSidebar');
</script>