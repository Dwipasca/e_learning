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
                <h3>List Mahasiswa</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mahasiswa Mengikuti Matakuliah </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                  <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Stambuk</th>
                          <th>Mahasiswa</th>
                          <th>Status Tugas</th>
                          <th>Nilai</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php
                          
                        $no = 1;
                        foreach($mahasiswa as $mhs) : ?>
                          <tr> 
                          <th scope="row"> <?php echo $no++; ?> </th>
                          <td> <?php echo $mhs['NIM']; ?> </td>
                          <td> <?php echo $mhs['Name']; ?> </td>
                          <td> </td>
                          <td> </td>
                          </tr>
                        <?php endforeach; ?>
                        
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
  

	function test() {
		var x=confirm("Apakah anda yakin ingin menghapus data ini ?")
		if (x) {
			return true;
		} else {
			return false;
		}
	}
    

</script>