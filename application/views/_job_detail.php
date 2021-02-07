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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <br>
                                <hr>
                                <br>
                            </div>
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
                                            <p>E1700066</p>
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
                                <button onclick="location.href='<?php echo base_url();?>job_list/index'" type="button" class="btn mb-1 btn-rounded btn-info">กลับหน้าหลัก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </html>