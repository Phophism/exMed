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
                            <h4 class="card-title" style="justify-content: center ; align-items: center ; display: flex;">ประกาศรับสมัครพนักงาน</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration" id="mydatatable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">วันที่ประกาศ</th>
                                            <th class="text-center">วันที่สิ้นสุด</th>
                                            <th class="text-center">ประเภท</th>
                                            <th class="text-center">ตำแหน่ง</th>
                                            <th class="text-center">หน่วยงาน</th>
                                            <th class="text-center">จำนวน</th>
                                            <th class="text-center">อัตราจ้าง</th>
                                            <th class="text-center">สถานะ</th>
                                            <th class="text-center">หมายเหตุ</th>
                                            <th class="text-center">Ref.</th>
                                            <!-- <th style="display:none" >หมายเลขสมัครงาน</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        foreach ($result as $detail) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div onclick="location.href = '<?php echo base_url() ?>job_detail/counter/<?php echo $detail->id ?>'">
                                                        <?php echo $detail->public_date; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div onclick="location.href = '<?php echo base_url() ?>job_detail/counter/<?php echo $detail->id ?>'">
                                                        <?php echo $detail->end_date; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div onclick="location.href = '<?php echo base_url() ?>job_detail/counter/<?php echo $detail->id ?>'">
                                                        <?php echo $detail->type_name; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div onclick="location.href = '<?php echo base_url() ?>job_detail/counter/<?php echo $detail->id ?>'">
                                                        <?php echo $detail->position_name; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div onclick="location.href = '<?php echo base_url() ?>job_detail/counter/<?php echo $detail->id ?>'">
                                                        <?php echo $detail->ward_name; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div onclick="location.href = '<?php echo base_url() ?>job_detail/counter/<?php echo $detail->id ?>'">
                                                        <?php echo $detail->n_open; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div onclick="location.href = '<?php echo base_url() ?>job_detail/counter/<?php echo $detail->id ?>'">
                                                        <?php echo $detail->salary; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div onclick="location.href = '<?php echo base_url() ?>job_detail/counter/<?php echo $detail->id ?>'">
                                                        <?php echo $detail->job_status_name; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div onclick="location.href = '<?php echo base_url() ?>job_detail/counter/<?php echo $detail->id ?>'">
                                                        <?php echo $detail->remark; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div onclick="location.href = '<?php echo base_url() ?>job_detail/counter/<?php echo $detail->id ?>'">
                                                        <?php echo $detail->view_count; ?>
                                                    </div>
                                                </td>
                                                <!-- <td style="display:none" >
                                                    <?php echo $detail->pos_num; ?>
                                                </td> -->
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
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