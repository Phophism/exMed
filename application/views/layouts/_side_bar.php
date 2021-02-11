<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label"></li>
                    <li>
                        <a href="<?php echo base_url(); ?>Job_list" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">ประกาศรับสมัครพนักงาน</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('is_logged_in')) { ?>
                    <li>
                        <a href="<?php echo base_url(); ?>CRUD/Add_job" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">เพิ่มประกาศ</span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>