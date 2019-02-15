<?php $this->load->view('template/header');?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

          <?php if(isset($_SESSION['success'])) {?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="icon fa fa-check"></i> 
              <?php echo $_SESSION['success']; ?>
            </div>
          <?php } ?>


            <div class="page-title">
              <div class="title_left">
                <h3>Kumpulan Tugas</h3>
              </div>

              <div class="title_right">
                <?php echo anchor('dosen/add','Tambah Tugas',array('class'=>'btn bg-green pull-right'));?>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Tugas </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="example" class="table table-striped table-bordered example">
                      <thead>
                        <tr>
                        <th>No</th>
									      
									      <th>Matakuliah</th>
                        <th>Title File</th>
                        <th>Jam</th>
                        <th>Tanggal</th>
                        <th>File</th>
                        <th>Keterangan</th>
                        <th>Tanggal Upload</th>
                        <th>Aksi</th>
                        </tr>
                      </thead>

                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src=" <?php echo base_url('assets/vendors/jquery/dist/jquery.min.js'); ?> "></script>
    <!-- Bootstrap -->
    <script src=" <?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js'); ?> "></script>
    
    <!-- NProgress -->
    <script src=" <?php echo base_url('assets/vendors/nprogress/nprogress.js'); ?> "></script>
    <!-- iCheck -->
    <script src=" <?php echo base_url('assets/vendors/iCheck/icheck.min.js'); ?> "></script>
    <!-- Datatables -->
    <script src=" <?php echo base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/jszip/dist/jszip.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/pdfmake/build/pdfmake.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/vendors/pdfmake/build/vfs_fonts.js'); ?> "></script>

    <!-- Custom Theme Scripts -->
    <script src=" <?php echo base_url('assets/build/js/custom.min.js'); ?> "></script>


  </body>
</html>

<script>

    $(document).ready(function () {
        
        var t = $('.example').DataTable({
					"ajax" : '<?php echo site_url('dosen/data'); ?>',
					"order" : [[2,'asc']],
					"scrollX": true,
					"columns" : [
						{
							"data" : null,
							"width" : '30px',
							"sClass" : 'text-center',
							"orderable" : false,
						},
						// {   "data" : 'id' },
						
						{
							"data" : 'matakuliah',
							"width" : '120px',
							"sClass" : 'text-center'
						},
						{   "data" : 'title_file',"width" : '180px' },
						{   "data" : 'jam',"sClass" : 'text-center',"width" : '50px' },
						{   "data" : 'tanggal',"width" : '50px' },
						{   "data" : 'path',"width" : '50px' },
						{   "data" : 'keterangan',"width" : '180px' },
						{   "data" : 'tgl_upload',"width" : '50px' },
						{   "data" : 'aksi',"width" : '50px' },
					]

                    
                });

                t.on('order.dt search.dt', function(){
                    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i){
                        cell.innerHTML = i+1;
                    });
                }).draw();
                
                $.fn.dataTable.ext.errMode = 'throw';
    });

	function test() {
		var x=confirm("Apakah anda yakin ingin menghapus data ini ?")
		if (x) {
			return true;
		} else {
			return false;
		}
	}
    

</script>