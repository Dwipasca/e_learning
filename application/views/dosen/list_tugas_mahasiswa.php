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
                    
                  <!-- <table class="table table-bordered table-hover"> -->
                  <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Stambuk</th>
                          <th>Mahasiswa</th>
                          <th>Status Tugas</th>
                          <!-- <th>Path</th> -->
                          <th>Nilai</th>
                          <th>Aksi</th>
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
                          <td> 
                            <?php 
                              $kodemk = $this->uri->segment('3');
                              $nip = $this->session->nip;
                              $idUpload = $this->uri->segment('4');
                              $id_status = $controller->cek_status($mhs['NIM'],$kodemk,$nip,$idUpload);
                              echo $id_status;
                            ?>
                          </td>
                          <td>
                            <?php echo 'nilai'; ?>
                          </td>
                            <!-- <td> </td> -->
                            <td> 
                              <button class="btn btn-primary btn-xs btn-nilai" data-toggle="modal" data-id="<?php echo $mhs['NIM']; ?>" data-target="#add-menu-modal">Nilai</button> 
                            </td>
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
        <!-- add modal -->
        <div class="modal fade" id="add-menu-modal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xs" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollmodalLabel">Menentukan Nilai Mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
              <div class="modal-body">
                  <?php $id_upload = $this->uri->segment('4'); ?>
                  <form action="<?=base_url('dosen/addNilai/'.$idUpload)?>" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                  
                  <div class="row form-group">

                    <div class="col col-md-3"> 
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai</label>
                    </div>
                    <div class="col-4 col-md-4">
                      <div class="row">
                        <div class="col-md-12">
                            <input type="number" name="nilai" id="nilai" class="form-control col-md-3" autocomplete="off" required>
                            <br>
                            <input type="text" name="nim" id="nim" class="form-control col-md-3">
                            
                        </div>
                        
                      
                      </div>
                    </div>

                  </div>
                  <!-- end div row gorm-group -->
              </div>
              
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary " data-dismiss="modal">Batal</button>
								<input type="submit" class="btn btn-success " value="Simpan">
							</div>
						</form>
                    </div>
                </div>
            </div>
			<!-- end add modal -->



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

    $(document).on('click', '.btn-nilai', function () {
      $('#nim').val($(this).attr('data-id'));

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