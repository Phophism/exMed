<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/logo/CMEx.png">

  <title><?php echo $title; ?></title>
  <!-- Favicon icon -->
  <link href="<?php echo base_url(); ?>assets/quixlab/css/style.css" rel="stylesheet">
  <style>
    #username-error {
      color: #ff5e5e;
      font-size: 95%;
    }

    #password-error {
      color: #ff5e5e;
      font-size: 95%;
    }

    #invalid-error {
      color: #ff5e5e;
      font-size: 95%;
    }
  </style>
</head>

<body class="h-100">
  <div id="preloader">
    <div class="loader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
      </svg>
    </div>
  </div>
  <div class="login-form-bg h-100">
    <div class="container h-100">
      <div class="row justify-content-center h-100">
        <div class="col-xl-6">
          <div class="form-input-content">
            <div class="card login-form mb-0">
              <div class="card-body pt-5">
                <h4 class="text-center">LOGIN</h4>
                <form action="<?php echo base_url(); ?>Login/u_login" method="post" enctype="multipart/form-data" class="mt-5 mb-5 login-input form-validate">
                  <div class="form-group">
                    <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                  </div>
                  <?php
                  if ($status == "0") {
                  ?>
                    <p id="invalid-error">Invalid username or password</p>
                  <?php }
                  ?>
                  <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                </form>
                <p class="text-center">เยี่ยมชม <a href="<?php echo base_url(); ?>" class="text-primary">เว็บไซต์</a> สำหรับบุคคลภายนอก</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $this->load->view('layouts/_script');
  ?>

  <script type="text/javascript">
    $(".form-validate").validate({
      rules: {
        "username": {
          required: !0,
        },
        "password": {
          required: !0,
        }
      },
      messages: {
        "username": "กรุณาระบุ Username",
        "password": "กรุณาระบุ Password",
      },
    });
  </script>

</body>

</html>