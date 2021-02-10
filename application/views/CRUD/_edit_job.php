<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('layouts/header');
// $this->load->view('layouts/menu');
?>

<!-- Part1 -->

<body class="sidebar-fixed topnav-fixed dashboard">
    <?php date_default_timezone_set("Asia/Bangkok"); ?>

    <!-- part2 -->


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
                                <form class="form-validate" action="<?php echo base_url('CRUD/Edit_job/update_job/') . $data['id'] ?>" method="post" enctype="multipart/form-data">
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
                                                        <input name="pos_num" id="pos_num" type="text" class="form-control input-default" placeholder="ตำแหน่งเลขที่" value="<?php echo $data['pos_num'] ?>">
                                                    </div>
                                                    <div class="col-2">
                                                        <label>ประเภท:</label> <span class="text-danger">*</span>
                                                        <div class="form-group row">
                                                            <div class="col-lg-12">
                                                                <select class="form-control input-default" id="job_type_id" name="job_type_id">
                                                                    <option value="">กรุณาเลือกประเภท</option>
                                                                    <?php
                                                                    foreach ($job_type as $key) {
                                                                        if ($key->type_name == $data['type_name']) {
                                                                            echo "<option value='" . $key->id . "' selected='selected'>" . $key->type_name . "</option>";
                                                                        } else {
                                                                            echo "<option value='" . $key->id . "'>" . $key->type_name . "</option>";
                                                                        }
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
                                                                <select class="form-control input-default" id="pos_id" name="pos_id">
                                                                    <option value="">กรุณาเลือกตำแหน่ง</option>
                                                                    <?php
                                                                    foreach ($job_position as $key) {
                                                                        if ($key->position_name == $data['position_name']) {
                                                                            echo "<option value='" . $key->position_code . "' selected='selected'> " . $key->position_code . " - " . $key->position_name . "</option>";
                                                                        } else {
                                                                            echo "<option value='" . $key->position_code . "'> " . $key->position_code . " - " . $key->position_name . "</option>";
                                                                        }
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
                                                                <select class="form-control input-default" id="unit_id" name="unit_id">
                                                                    <option value="">กรุณาเลือกหน่วยงาน</option>
                                                                    <?php
                                                                    foreach ($ward as $key) {
                                                                        if ($key->ward_name1 == $data['ward_name1']) {
                                                                            echo "<option value='" . $key->ward_code . "' selected='selected'> " . $key->ward_code . " - " . $key->ward_name1 . "</option>";
                                                                        } else {
                                                                            echo "<option value='" . $key->ward_code . "'> " . $key->ward_code . " - " . $key->ward_name1 . "</option>";
                                                                        }
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
                                                        <label>อัตราจ้าง:</label> <span class="text-danger">*</span>
                                                        <input id="salary" name="salary" type="number" min="1" class="form-control input-default" placeholder="อัตราจ้าง" value="<?php echo $data['salary'] ?>">
                                                    </div>
                                                    <div class="col-2">
                                                        <label>จำนวนที่ว่าง:</label> <span class="text-danger">*</span>
                                                        <input name="n_open" id="n_open" type="number" min="1" class="form-control input-default" placeholder="จำนวนที่ว่าง" value="<?php echo $data['n_open'] ?>">
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
                                                <div class="row">
                                                    <div class="col-1"></div>
                                                    <div class="col-5" style="padding-left: 0px">
                                                        <div classs="row">
                                                            <!-- สมัครถึงวันที่ -->
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label>รับสมัครถึงวันที่:</label>
                                                                    <div class="input-group">
                                                                        <input name="end_date" id="end_date" type="text" class="form-control complex-colorpicker datepicker-autoclose" id="end_date" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label>วันประกาศรายชื่อผู้เข้าสอบ:</label>
                                                                    <div class="input-group">
                                                                        <input name="announce_name_date" id="announce_name_date" type="text" class="form-control complex-colorpicker datepicker-autoclose" id="end_date" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <!-- สอบ -->
                                                            <div class="row">
                                                                <div class="col-4" style=" align-items: center ; display: flex;">
                                                                    <div class="col-sm-2">
                                                                        <input onclick="is_exam_change(this)" <?php if ($data['is_exam'] != 0) echo "checked"; ?> name="is_exam" id="is_exam" type="checkbox" class="form-check-input" id="is_exam" style="outline: 1px solid #1e5180">
                                                                    </div>
                                                                    <div class="col-sm-10" style="padding-top:23px">
                                                                        <lable>มีการสอบข้อเขียน</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <label>วันที่สอบ:</label>
                                                                    <div class="input-group">
                                                                        <input name="exam_date" id="exam_date" type="text" class="form-control complex-colorpicker datepicker-autoclose" placeholder="mm/dd/yyyy" <?php if ($data['is_exam'] == 0) echo "disabled"; ?>> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <label>วันที่ประกาศผล:</label>
                                                                    <div class="input-group">
                                                                        <input name="exam_result_date" id="exam_result_date" type="text" class="form-control complex-colorpicker datepicker-autoclose" placeholder="mm/dd/yyyy" <?php if ($data['is_exam'] == 0) echo "disabled"; ?>> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <!-- สัมภาษณ์  -->
                                                            <div class="row">
                                                                <div class="col-4" style=" align-items: center ; display: flex;">
                                                                    <div class="col-sm-2">
                                                                        <input onclick="is_interview_change(this)" <?php if ($data['is_interview'] != 0) echo "checked"; ?> name="is_interview" id="is_interview" type="checkbox" class="form-check-input" style="outline: 1px solid #1e5180">
                                                                    </div>
                                                                    <div class="col-sm-10" style="padding-top:23px">
                                                                        <lable>มีการสอบสัมภาษณ์</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <label>วันที่สอบ:</label>
                                                                    <div class="input-group">
                                                                        <input name="interview_date" id="interview_date" type="text" class="form-control complex-colorpicker datepicker-autoclose" placeholder="mm/dd/yyyy" <?php if ($data['is_interview'] == 0) echo "disabled"; ?>> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <label>วันที่ประกาศผล:</label>
                                                                    <div class="input-group">
                                                                        <input name="interview_result_date" id="interview_result_date" type="text" class="form-control complex-colorpicker datepicker-autoclose" placeholder="mm/dd/yyyy" <?php if ($data['is_interview'] == 0) echo "disabled"; ?>> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- หมายเหตุ -->
                                                    <div class="col-5">
                                                        <label>หมายเหตุ:</label>
                                                        <textarea name="remark" id="remark" class="form-control h-150px" rows="11"><?php echo $data['remark']; ?></textarea>
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4"></div>
                                                <div class="col-4">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-hover" style="font-size: 95%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">ชื่อเอกสาร</th>
                                                                    <th class="text-center">วันที่ประกาศ</th>
                                                                    <th class="text-center">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach ($files as $file) {
                                                                ?>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="text-center">
                                                                                <?php echo $file->file_name; ?>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="text-center">
                                                                                <?php echo date('d/m/Y', strtotime($file->upload_date)); ?>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="text-center">
                                                                                <svg data-toggle="modal" data-target="#basicModal" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                                                </svg>
                                                                                <div class="modal fade" id="basicModal">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title">ยืนยันการลบ</h5>
                                                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">คุณต้องการลบไฟล์ " <?php echo $file->file_name;?> " ใช่หรือไม่?</div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-light" data-dismiss="modal">ยกเลิก</button>
                                                                                                <button type="button" id="clicker" onclick="location.href = '<?php echo base_url() ?>CRUD/Edit_job/delete_file/<?php echo $file->id ?>'" class="btn btn-danger" data-hid="<?php echo $file->id; ?>">ยืนยัน</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-4"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4"></div>
                                                <div class="col-4">
                                                    <div class="custom-file">
                                                        <input onchange="javascript:updateFile1()" type="file" class="custom-file-input fileupload" name="file[]" id="fileupload-1">
                                                        <label class="custom-file-label filepath" name="filepath" id="filepath-1">เลือกไฟล์</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <button type="button" name="add_file" class="btn mb-1 btn-outline-info add_more">เพิ่มไฟล์</button>
                                                </div>
                                            </div>
                                            <div id='newFile'></div>
                                            <br>
                                            <hr>
                                            <br>
                                            <div class="row">
                                                <div class="col-1"></div>
                                                <div class="col-11">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="row">
                                                                <div class="col-5" style="justify-content: center ; align-items: center ; display: flex;">
                                                                    <label>วันที่เผยแพร่:</label>
                                                                </div>
                                                                <div class="col-7" style="padding-left:0px; ">
                                                                    <div class="input-group">
                                                                        <input name="public_date" id="public_date" type="text" class="form-control complex-colorpicker datepicker-autoclose" placeholder="mm/dd/yyyy" value="<?php echo date("m-d-Y"); ?>"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
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
                                                                    <button type="submit" name="submit" class="btn mb-1 btn-outline-info">บันทึก</button>
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
    $this->load->view('layouts/forms/_edit_job_form');
    ?>
</body>

</html>