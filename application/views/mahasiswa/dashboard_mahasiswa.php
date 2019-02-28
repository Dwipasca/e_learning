<?php $this->load->view('template/header'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Daftar Matakuliah</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
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
