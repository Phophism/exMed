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
                                <div class="col-8" style="justify-content: center ; align-items: center ; display: flex;">
                                    <h2><?php echo $data['pos_num']; ?>&ensp; - </h2>
                                    <h3> &ensp; <?php  echo $data['position_name']; ?></h3>
                                </div>
                                <div class="col-2">
                                    <button onclick="location.href = '<?php echo base_url() ?>Job_detail/Edit_id/<?php echo $data['id'] ?>'" type="button" class="btn mb-1 btn-rounded btn-outline-warning" style="margin-right:10px">แก้ไข</button>
                                    <button type="button" class="btn mb-1 btn-rounded btn-outline-danger">ลบ</button>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <lable>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="" style="text-align:right">
                                            <b>สถานะ</b>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:left">
                                            <p>ประกาศผลการคัดลือก</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="" style="text-align:right">
                                            <b>ตำแหน่ง</b>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:left">
                                            <p>พนักงานช่าง</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:right">
                                            <b>ตำแหน่งเลขที่</b>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="" style="text-align:left">
                                            <p><?php echo $data['pos_num']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="" style="text-align:right">
                                            <b>หน่วยงาน</b>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:left">
                                            <p>หน่วยงาน</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:right">
                                            <b>ประเภท</b>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="" style="text-align:left">
                                            <p>ประเภท</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="" style="text-align:right">
                                            <p>จำนวน</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:left">
                                            <p>จำนวน</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:right">
                                            <p>อัตราจ้าง</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="" style="text-align:left">
                                            <p>อัตราจ้าง</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="" style="text-align:right">
                                            <p>รับสมัครถึงวันที่</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:left">
                                            <p>รับสมัครถึงวันที่</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:right">
                                            <p>วันที่ประกาศ</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="" style="text-align:left">
                                            <p>วันที่ประกาศ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="" style="text-align:right">
                                            <p>สอบข้อเขียน</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:left">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="" style="text-align:right">
                                            <p>วันที่สอบ</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:left">
                                            <p>วันที่สอบ</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:right">
                                            <p>วันที่ประกาศ</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="" style="text-align:left">
                                            <p>วันที่ประกาศ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="" style="text-align:right">
                                            <p>สอบสัมภาษณ์</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:left">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="" style="text-align:right">
                                            <p>วันที่สอบ</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:left">
                                            <p>วันที่สอบ</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:right">
                                            <p>วันที่ประกาศ</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="" style="text-align:left">
                                            <p>วันที่ประกาศ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="" style="text-align:right">
                                            <p>หมายเหตุ</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="" style="text-align:left">
                                            <p>หมายเหตุ</p>
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