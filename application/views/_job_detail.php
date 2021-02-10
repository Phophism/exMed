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

    <!-- nav bar -->
    <?php
    $this->load->view('layouts/nav');
    ?>

    <!-- content body -->

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-12" style="justify-content: center ; align-items: center ; display: flex;">
                                            <h1>รายละเอียดงาน</h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12" style="justify-content: center ; align-items: center ; display: flex;">
                                            <h5><?php echo $data['pos_num']; ?>&ensp; - </h5>
                                            <h5> &ensp; <?php echo $data['position_name']; ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button type="button" onclick="location.href = '<?php echo base_url() ?>Job_detail/Edit_id/<?php echo $data['id'] ?>'" class="btn mb-1 btn-rounded btn-outline-warning" style="margin-right:10px">แก้ไข</button>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn mb-1 btn-rounded btn-outline-danger" data-toggle="modal" data-target="#basicModal">ลบ</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="basicModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">ยืนยันการลบ</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">คุณต้องการลบประกาศของตำแหน่ง " <?php echo $data['pos_num'] . " - " . $data['position_name'] ?> " ใช่หรือไม่?</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">ยกเลิก</button>
                                                    <button type="button" onclick="location.href = '<?php echo base_url() ?>CRUD/Delete_job/index/<?php echo $data['id'] ?>'" class="btn btn-danger">ยืนยัน</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <lable>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>สถานะ</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['job_status_name']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>ตำแหน่ง</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['position_name']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>ตำแหน่งเลขที่</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['pos_num']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>หน่วยงาน</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['ward_name1']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>ประเภท</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['type_name']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>จำนวน</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['n_open']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>อัตราจ้าง</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['salary']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>รับสมัครถึงวันที่</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['end_date']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>วันที่ประกาศ</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['announce_name_date']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>สอบข้อเขียน</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <?php
                                            if ($data['is_exam'] == "1") {
                                                echo "<p><span>&#10003;</span></p>";
                                            } else {
                                                echo "<p> - </p>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>วันที่สอบ</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['exam_date']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>วันที่ประกาศ</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['exam_result_date']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>สอบสัมภาษณ์</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <?php
                                            if ($data['is_interview'] == "1") {
                                                echo "<p><span>&#10003;</span></p>";
                                            } else {
                                                echo "<p> - </p>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>วันที่สอบ</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['interview_date']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>วันที่ประกาศ</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['interview_result_date']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="text-align:right">
                                            <b>หมายเหตุ</b>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['remark']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </lable>
                            <div class="col-12">
                                <br>
                                <hr>
                                <br>
                            </div>

                            <div class="col-12">
                                <br>
                                <hr>
                                <br>
                            </div>

                            <div class="col-12" style="justify-content: center ; align-items: center ; display: flex;">
                                <button onclick="location.href='<?php echo base_url(); ?>job_list/index'" type="button" class="btn mb-1 btn-rounded btn-info">กลับหน้าหลัก</button>
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
</body>

</html>