<?php $this->load->view('template/header'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Daftar Matakuliah</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <?php 
                    $no = 1;
                    $nim= $this->session->userdata('nim');
                    $sql = $this->db->get_where('_v2_krs20181', array('NIM'=>$nim))->result_array();
                    foreach($sql as $s) :
                ?>    
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                    <div class="icon"><i class="fa fa-book"></i></div>
                    <div class="count"> <?php echo $no++;?> </div>
                    <h3> <?php echo anchor('mahasiswa/list_tugas_mahasiswa/'.$s['KodeMK'],$s['NamaMK'] ); ?></h3>
                    <p> <?php echo $s['SKS']; ?> Sks</p>
                    </div>
                </div>
                <?php endforeach; ?>
                
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        

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
  </body>
</html>
