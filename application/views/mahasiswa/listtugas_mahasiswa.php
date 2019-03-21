<?php $this->load->view('template/header'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>List Tugas Matakuliah</h3>
              </div>

              <?php if(isset($_SESSION['danger'])) {?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="icon fa fa-close"></i> 
                  <?php echo $_SESSION['danger']; ?>
                </div>
              <?php } ?>
              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
              <?php 
              $kodemk= $this->uri->segment('3');
              $sql2 = $this->db->get_where('upload_tugas', array('kodemk'=>$kodemk))->result_array();
              
              if ($sql2) {
                foreach($sql2 as $s) : ?> 
                  <div class="col-md-4">
                      <div class="x_panel fixed_height_390">
                          <div class="x_content">
                              <div class="flex">
                                <ul class="list-inline widget_profile_box">
                                <h2>Nilai : <b> <?php ?> </b></h2>
                                </ul>
                              </div>
                              <br>
                              <h3 class="name" style="text-align:center;"><?php echo $s['title_tugas']; ?></h3>
                              <div class="flex">
                                <ul class="list-inline count2">
                                  <li>
                                    <h4><?php echo $s['jam']; ?></h4>
                                    <span>Jam</span>
                                  </li>
                                  <li></li>
                                  <li>
                                    <h4><?php echo $s['tanggal']; ?></h4>
                                    <span>Tanggal</span>
                                    
                                  </li>
                                </ul>
                                <b>Keterangan :</b>
                                <p> <?php echo $s['keterangan']; ?> </p>
                                <!-- <p> <?php echo $s['id_upload']; ?> </p> -->
                                <br>
                                <p>
                                  <button class="btn btn-success" data-toggle="modal" data-target="#add-menu-modal" id="btn-submit" data-id="<?= $s['id_upload']; ?>" >Submit</button>                  
                                  <?php echo anchor('diskusi','Diskusi','class="btn btn-primary"'); ?>
                                </p>
                              </div>
                          </div>
                      </div>
                  </div>
            <?php endforeach; ?>
              <?php } else { ?>
                <h1 class=" text-center ">Tidak ada Tugas</h1>
              <?php } ?>        
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- add modal -->
        <div class="modal fade" id="add-menu-modal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollmodalLabel">Submit Tugas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

          <form action="<?=base_url('mahasiswa/submitTugas')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                  <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="add-image" class=" form-control-label">Submit Tugas</label>
                    </div>
                    <div class="col-12 col-md-9">
                      <div class="row">
                        <div class="col-md-12">
                            <input type="text" value="" id="id_upload" name="id_upload">
                            <input type="file" name="upload_file" id="upload_file" >
                        </div>
                        <div class="col-md-12">
                          <img class="pt-2" id="img-preview"/>
                        </div>
                      </div>
                    </div>
                </div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<input type="submit" class="btn btn-success" value="Simpan">
							</div>
						</form>
                    </div>
                </div>
            </div>
			<!-- end add modal -->

        <?php $this->load->view('template/footer');?>

    <!-- jQuery -->
    <script src="<?php echo base_url ('assets/vendors/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url ('assets/vendors/bootstrap/dist/js/bootstrap.min.js');?> "></script>
    <!-- FastClick -->
    <script src="<?php echo base_url ('assets/vendors/fastclick/lib/fastclick.js');?> "></script>
    <!-- NProgress -->
    <script src="<?php echo base_url ('assets/vendors/nprogress/nprogress.js');?> "></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url ('assets/build/js/custom.min.js');?> "></script>

    <script type="text/javascript">

      $(document).ready(function() {

        $(document).on('click', '#btn-submit', function () {
          $('#id_upload').val($(this).attr('data-id'));
          
        });
        

      });

	</script>
  </body>
</html>
