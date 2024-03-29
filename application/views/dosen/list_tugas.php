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
                    <h2>Mahasiswa Mengikuti Matakuliah 
                      <?php 

                      ?> 
                    </h2>
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
                          <th>id_upload</th>
                          <th>Nip</th>
                          <th>Kodemk</th>
                          <th>Title Tugas</th>
                          <th>Path</th>
                          <th>Jam</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php
                          
                          $no = 1;
                          foreach($tugas as $tgs) : ?>
                            <tr> 
                              <th scope="row"> <?php echo $no++; ?> </th>
                              <td> <?php echo $tgs['id_upload']; ?> </td>
                              <td> <?php echo $tgs['nip']; ?> </td>
                              <td> <?php echo $tgs['title_tugas']; ?> </td>
                              <td> <?php echo $tgs['kodemk']; ?> </td>
                              <td> <?php echo $tgs['path']; ?> </td>
                              <td> <?php echo $tgs['jam']; ?> </td>
                              <td> <?php echo $tgs['tanggal']; ?> </td>
                              <td> <?php echo $tgs['keterangan']; ?> </td>
                              <td> <?php echo anchor('jadwal/list_tugas_mahasiswa/'.$tgs['kodemk'].'/'.$tgs['id_upload'],'<i class="fa fa-eye"> detail</i>', array('class' => 'btn btn-primary btn-sm')); ?> </td>
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