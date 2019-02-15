
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href=" <?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?> " rel="stylesheet">
  <!-- Font Awesome -->
  <link href=" <?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css'); ?> " rel="stylesheet">
 

  <!-- Custom Theme Style -->
  <link href=" <?php echo base_url('assets/build/css/custom.min.css'); ?> " rel="stylesheet">
</head>

<body class="login">
  <div>

    <div class="login_wrapper">
      <div class="">
        <section class="login_content">
          <?php echo form_open('auth/chek_login'); ?>
            <h1>Login Form</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" name="username" id="username" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
            </div>
            <div>
              <button type="submit" class="btn btn-primary fa fa-unlock" name="submit"> Login</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-book"></i> E-Learning</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
          <?php echo form_close(); ?>
        </section>
      </div>

      
    </div>
  </div>
</body>

</html>