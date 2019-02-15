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
                <h3>Jadwal</h3>
              </div>

              <div class="title_right">
                <?php echo anchor('jadwal/add','Tambah Tugas',array('class'=>'btn bg-green pull-right'));?>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jadwal Mengajar Matakuliah </h2>
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
                      <!-- <thead>
                        <tr>
                          <th>id</th>
                          <th>kodemk</th>
                          <th>namamk</th>
                          <th>sks</th>
                          <th>tahun</th>
                          <th>jammulai</th>
                          <th>jamselesai</th>
                          <th>hari</th> 
                        </tr>
                      </thead>
                      <tbody>
                      </tbody> -->
                      <thead>
                          <tr><th>ID</th><th>KODEMK</th></tr>
                      </thead>
                      <tbody>
                      </tbody>

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

      var save_method; //for save method string
      var table;
        //datatables
        var t = $('.example').DataTable({
        
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": '<?php echo site_url('jadwal/json'); ?>',
                        "type": "POST"
                    },
                    //Set column definition initialisation properties.
                    
                    "columns" : [
                      { "data": 'id' },
                      {"data" : "kodemk"},
                      // {"data" : "namamk"},
                      // {"data" : "sks"},
                      // {"data" : "tahun"},
                      // {"data" : "jammulai"},
                      // {"data" : "jamselesai"},
                      // {"data" : "hari"}
                    ],

                });
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