 <?php $this->load->view('template/header'); ?>
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                <div class="x_panel">

          <?php if(isset($_SESSION['danger'])) {?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="icon fa fa-close"></i> 
              <?php echo $_SESSION['danger']; ?>
            </div>
          <?php } ?>

                  <div class="x_title">
                    <h2>Form Upload Tugas <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <?php 
                      echo validation_errors('<div class="alert alert-danger alert-dismissible fade in" role="alert"> <strong>', '</strong></div>'); 
                      echo form_open_multipart('dosen/add','class="form-horizontal form-label-left"');  
                    ?>
                    <!-- <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate=""> -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title" name="title"  class="form-control col-md-7 col-xs-12" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matakuliah">Matakuliah </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="text" id="matakuliah" name="matakuliah"  class="form-control col-md-7 col-xs-12"> -->

                          <select class="select2_single form-control" id ="kodemk" name="kodemk">
                            <?php 
                              foreach ($sql as $s) : 
                            ?>
                              <option value=" <?php echo $s['KodeMK']; ?> "> <?php echo $s['NamaMK'];?> </option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="jam" class="control-label col-md-3 col-sm-3 col-xs-12" >Jam</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="input-group date" id="myDatepicker3">
                                <input type="text" class="form-control" id="jam" name="jam" autocomplete="off">
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tanggal" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <!-- <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name"> -->
 
                                <div class="input-group date" id="myDatepicker2">
                                    <input type="text" class="form-control" id="tanggal" name="tanggal" autocomplete="off">
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="upload">Upload Tugas </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="upload_file" name="upload_file" class="date-picker form-control col-md-7 col-xs-12"  type="file">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="ket" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="keterangan" class="form-control col-md-7 col-xs-12" type="text" name="keterangan"> -->
                          <textarea id="keterangan" rows="8" class="form-control col-md-7 col-xs-12" type="text" name="keterangan"></textarea>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <?php 
                          echo anchor('jadwal','Cancel',array('class'=>'btn btn-danger'));
                          echo anchor('dosen/add','Reset',array('class'=>'btn btn-primary'));
                          ?>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                      <?php echo form_close(); ?>
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
    <script src=" <?php echo base_url ('assets/vendors/jquery/dist/jquery.min.js'); ?> "></script>
    <!-- Bootstrap -->
    <script src=" <?php echo base_url ('assets/vendors/bootstrap/dist/js/bootstrap.min.js'); ?> "></script>
    <!-- FastClick -->
    <script src=" <?php echo base_url ('assets/vendors/fastclick/lib/fastclick.js'); ?> "></script>
    <!-- NProgress -->
    <script src=" <?php echo base_url ('assets/vendors/nprogress/nprogress.js'); ?> "></script>
    <!-- bootstrap-daterangepicker -->
    <script src=" <?php echo base_url ('assets/vendors/moment/min/moment.min.js'); ?> "></script>
    <script src=" <?php echo base_url ('assets/vendors/bootstrap-daterangepicker/daterangepicker.js'); ?> "></script>
    <!-- bootstrap-datetimepicker -->    
    <script src=" <?php echo base_url ('assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'); ?> "></script>
    <!-- Ion.RangeSlider -->
    <script src=" <?php echo base_url ('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js'); ?> "></script>
    <!-- Bootstrap Colorpicker -->
    <script src=" <?php echo base_url ('assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'); ?> "></script>
    <!-- jquery.inputmask -->
    <script src=" <?php echo base_url ('assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js'); ?> "></script>
    <!-- jQuery Knob -->
    <script src=" <?php echo base_url ('assets/vendors/jquery-knob/dist/jquery.knob.min.js'); ?> "></script>
    <!-- Cropper -->
    <script src=" <?php echo base_url ('assets/vendors/cropper/dist/cropper.min.js'); ?> "></script>

    <!-- Custom Theme Scripts -->
    <script src=" <?php echo base_url ('assets/build/js/custom.min.js'); ?> "></script>

    <!-- sweetalert -->
    <script src=" <?php echo base_url('assets/sweetalert/sweetalert2.all.min.js'); ?> "> </script>
    
    <!-- Initialize datetimepicker -->
    <script>
        $('#myDatepicker').datetimepicker();
        
        $('#myDatepicker2').datetimepicker({
            format: 'YYYY.MM.DD'
        });
        
        $('#myDatepicker3').datetimepicker({
            format: 'hh:mm A'
        });
        
        $('#myDatepicker4').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });

        $('#datetimepicker6').datetimepicker();
        
        $('#datetimepicker7').datetimepicker({
            useCurrent: false
        });
        
        $("#datetimepicker6").on("dp.change", function(e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        
        $("#datetimepicker7").on("dp.change", function(e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    </script>
  </body>
</html>
