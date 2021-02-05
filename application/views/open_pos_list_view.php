<!-- head -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('layout/header');
// $this->load->view('layouts/menu');
?>

<!-- Part1 -->

<body class="sidebar-fixed topnav-fixed dashboard">
    <?php date_default_timezone_set("Asia/Bangkok"); ?>

    <!-- part2 -->

    <!-- nav bar -->
    <?php
    $this->load->view('layout/nav');
    ?>
    <div class="content-body" style="min-height: 1100px;">

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
                            <h4 class="card-title">Data Table</h4>
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="DataTables_Table_0_length">
                                                <label>
                                                    <div class="row">
                                                        <div class="col-sm-4" style="margin-top:12px">Show</div>
                                                        <div class="col-sm-4">
                                                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4" style="margin-top:12px">entries</div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                <label>Search:
                                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row" class="text-center">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 44px;">วันที่ประกาศ</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 44px;">วันที่สิ้นสุด</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">ประเภท</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 44px;">ตำแหน่ง</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 93px;">หน่วยงาน</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 44px;">จำนวน</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 44px;">อัตราจ้าง</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 44px;">สถานะ</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 44px;">หมายเหตุ</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 44px;">Ref.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($job_list as $detail) {
                                                    ?>
                                                        <tr role="row" class="text-center">
                                                            <td class="text-center">
                                                                <?php echo $detail->public_date; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $detail->end_date; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $detail->type_name; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $detail->position_name; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $detail->ward_name; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $detail->n_open; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $detail->salary; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $detail->status_id; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $detail->remark; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $detail->view_count; ?>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                                Showing  <?php echo /* $page* */$start_index+1; ?> to 
                                                <?php   
                                                    if($nrow > $limit)
                                                        echo /* page* */$limit; 
                                                    else
                                                        echo $nrow
                                                ?> of <?php echo $nrow; ?> entries
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>




    <!--details
    <div class="col-lg-12">
        <div class="row">
            <div class="container">
                <div class="widget widget-table">
                    <div class="widget-header">
                        <h2>open position list</h2>
                    </div>
                    <div class="widget-content">
                        <div class="row-fluid">
                            <div class="col-lg-12">
                                <a>Today : </a>
                                <?php echo date("d M Y"); ?>
                                <table class="table" width="100%">
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
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                        foreach ($job_list as $detail) {
                                        ?>
                                            <tr role="row" class="text-center">
                                                <td class="text-center">
                                                    <?php echo $detail->public_date; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $detail->end_date; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $detail->type_name; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $detail->position_name; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $detail->ward_name; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $detail->n_open; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $detail->salary; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $detail->status_id; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $detail->remark; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $detail->view_count; ?>
                                                </td>
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
    </div>
    </div>
-->
    <!-- last part  -->
</body>

</html>