<!-- Nav -->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>

<!--**********************************
            Top right icon
***********************************-->
<div id="main-wrapper">
    <div class="nav-header" style="background-color: #c3f7ffc7;justify-content: center ; align-items: center ; display: flex;">
        <div class="brand-logo">
            <a style="margin:0px ; padding:0px" href="http://excellent.med.cmu.ac.th/">
                <!-- <b class="logo-abbr"><img src="<?php echo base_url(); ?>/assets/images/logo/CMEx.png" alt=""> </b> -->
                <span class="logo-compact"><img src="<?php echo base_url(); ?>/assets/images/logo/CMEx.png" alt=""></span>
                <span class="brand-title" style="justify-content: center ; align-items: center ; display: flex;">
                    <img class="title-img" src="<?php echo base_url(); ?>/assets/images/logo/CMEx.png" alt="">
                </span>
            </a>
        </div>
    </div>


    <!--**********************************
              Nav Header
***********************************-->
    <div class="header">
        <div class="header-content clearfix">
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
            <div class="header-left">
                <div class="input-group icons" style="margin-top:0px">
                    <div class="input-prepend" style="margin-top:10px">
                        <a href="https://www.cmu.ac.th/">
                            <img src="http://localhost/exMed/assets/images/logo/cmu.png" style="max-height:100%;" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <ul class="clearfix">
                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                            <span class="active"></span>
                            <img src="http://localhost/exMed/assets/images/icon/user.png" height="40" width="40" alt="">
                        </div>
                        <div class="drop-down dropdown-profile   dropdown-menu">
                            <div class="dropdown-content-body">
                                <?php if (!$this->session->userdata('is_logged_in')) { ?>
                                    <ul onclick="location.href = '<?php echo base_url() ?>Login/index'">
                                        <li><i class="icon-key"></i> <span>Login</span></li>
                                    </ul>
                                <?php } ?>
                                <?php if ($this->session->userdata('is_logged_in')) { ?>
                                    <ul onclick="location.href = '<?php echo base_url() ?>Login/u_logout'">
                                       <li onmouseover="" style="cursor: pointer;"><i class="icon-lock"></i> <span>Logout</span></li>
                                    </ul>
                                <?php } ?>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    $this->load->view('layouts/_side_bar')
    ?>