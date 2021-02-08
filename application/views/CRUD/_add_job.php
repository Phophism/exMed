<!-- head -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('layouts/header');
// $this->load->view('layouts/menu');
?>

<!-- Part1 -->

<body class="sidebar-fixed topnav-fixed dashboard">
    <?php date_default_timezone_set("Asia/Bangkok"); ?>

    <!-- part2 -->

    <!--*******************
        Preloader start
    ********************-->

    <div id="preloader" style="display: none;">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"></circle>
            </svg>
        </div>
    </div>

    <!-- nav bar -->
    <?php
    $this->load->view('layouts/nav');
    ?>

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide" action="#" method="post">
                                    <div class="form-group">
                                        <h4 class="card-title">รายละเอียดงาน</h4>
                                        <br>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-1">
                                                    </div>
                                                    <div class="col-2" style="padding-left: 0px">
                                                        <label>ตำแหน่งเลขที่:</label> <span class="text-danger">*</span>
                                                        <input type="text" class="form-control input-default" placeholder="Input Default">
                                                    </div>
                                                    <div class="col-2">
                                                        <label>ประเภท:</label> <span class="text-danger">*</span>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12">
                                                                <select class="form-control input-default" id="val-skill" name="job_type">
                                                                    <option value="">Please select</option>
                                                                    <?php
                                                                    foreach ($job_type as $key) {
                                                                        echo "<option value='" . $key->id . "'>" . $key->type_name . "</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>ตำแหน่ง:</label> <span class="text-danger">*</span>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12">
                                                                <select class="form-control input-default" id="val-skill" name="job_name">
                                                                    <option value="">Please select</option>
                                                                    <?php
                                                                    foreach ($job_position as $key) {
                                                                        echo "<option value='" . $key->position_code . "'> ".$key->position_code." - ". $key->position_name . "</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>หน่วยงาน:</label> <span class="text-danger">*</span>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12">
                                                                <select class="form-control input-default" id="val-skill" name="job_name">
                                                                    <option value="">Please select</option>
                                                                    <?php
                                                                    foreach ($ward as $key) {
                                                                        echo "<option value='" . $key->ward_code . "'> ".$key->ward_code." - ". $key->ward_name1 . "</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-1">
                                                    </div>
                                                    <div class="col-2" style="padding-left: 0px">
                                                        <label>อัตราจ้าง:</label> <input type="text" class="form-control input-default" placeholder="Input Default">
                                                    </div>
                                                    <div class="col-2">
                                                        <label>จำนวนที่ว่าง:</label>
                                                        <input type="text" class="form-control input-default" placeholder="Input Default">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <h4 class="card-title">รายละเอียดการรับสมัคร</h4>
                                        <br>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- รับสมัครถึงวันที่ -->
                                                <div class="row">
                                                    <div class="col-1"></div>
                                                    <div class="col-10" style="padding-left: 0px">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label>รับสมัครถึงวันที่:</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control complex-colorpicker" id="datepicker-autoclose" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <div class="col-1"></div>
                                                    <div class="col-5" style="padding-left: 0px">
                                                        <div classs="row">
                                                            <!-- สอบ -->
                                                            <div class="row">
                                                                <div class="col-4" style=" align-items: center ; display: flex;">
                                                                    <div class="col-sm-2">
                                                                        <input type="checkbox" class="form-check-input" style="outline: 1px solid #1e5180" value="">
                                                                    </div>
                                                                    <div class="col-sm-10" style="padding-top:23px">
                                                                        <lable>มีการสอบข้อเขียน</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <label>วันที่สอบ:</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control complex-colorpicker" id="datepicker-autoclose" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <label>วันที่ประกาศผล:</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control complex-colorpicker " id="datepicker-autoclose" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <!-- สัมภาษณ์  -->
                                                            <div class="row">
                                                                <div class="col-4" style=" align-items: center ; display: flex;">
                                                                    <div class="col-sm-2">
                                                                        <input type="checkbox" class="form-check-input" style="outline: 1px solid #1e5180" value="">
                                                                    </div>
                                                                    <div class="col-sm-10" style="padding-top:23px">
                                                                        <lable>มีการสอบสัมภาษณ์</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <label>วันที่สอบ:</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control complex-colorpicker" id="datepicker-autoclose" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <label>วันที่ประกาศผล:</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control complex-colorpicker" id="datepicker-autoclose" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- หมายเหตุ -->
                                                    <div class="col-5">
                                                        <label>หมายเหตุ:</label>
                                                        <textarea class="form-control h-150px" rows="6" id="comment"></textarea>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <h4 class="card-title">เอกสารที่เกี่ยวข้อง</h4>
                                        <br>
                                        <div class="row">
                                            <div class="col-4"></div>
                                            <div class="col-4">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="col-4"></div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col" style="justify-content: center ; align-items: center ; display: flex;">
                                                <button type="button" class="btn mb-1 btn-success">Add File</button>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-11">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="row">
                                                            <div class="col-4" style="justify-content: center ; align-items: center ; display: flex;">
                                                                <label>วันที่เผยแพร่:</label>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control complex-colorpicker" id="datepicker-autoclose" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                    </div>
                                                    <div class="col-3" style="align-items: center ; display: flex; padding-left: 4rem">
                                                        <div class="row">
                                                            <div style="margin-right:15px">
                                                                <button onclick=" location.href='<?php echo base_url(); ?>job_list/index'" type="button" class="btn mb-1 btn-outline-light">ยกเลิก</button>
                                                            </div>
                                                            <div>
                                                                <button type="button" class="btn mb-1 btn-outline-info">บันทึก</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>

    <?php
    $this->load->view('layouts/_script');
    ?>
</body>

</html>