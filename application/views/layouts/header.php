<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/logo/CMEx.png">

    <!--Responsive meta tag-->
    <title><?php echo $title; ?></title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- for multiple file (add button) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

    <!-- CSS -->
    <!-- quixlab css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/quixlab/plugins/tables/css/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/quixlab/css/style.css">
    <!-- data table css -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.23/datatables.min.css" /> -->
    <!-- datepicker -->
    <link href="<?php echo base_url(); ?>assets/quixlab/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">



    <!-- style -->
    <style>
        /* .header {
            margin: 0px 0px 0px 0px;
        } */
        /* [data-sidebar-style="full"] .header{
            width : calc(100%);
        }
        [data-sidebar-style="overlay"] .header{
            width : calc(100%);
        }
        [data-sidebar-style="mini"] .header{
            width : calc(100%);
        } */

        /* .content-body {
            margin-left: 0px;
            z-index: 0;
        } */

        /* .logo_img {
            width: 30%;
            height: 30%;
        } */
        img {
            max-width: 100%;
            max-height: 100%;
            display: block;
            /* remove extra space below image */
        }

        .download-icon {
            background: url('<?php echo base_url(); ?>/assets/images/icon/download-button.png');
            height: 20px;
            width: 20px;
            display: block;

        }

        .overflow-prevent {
            width: 120px;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .title-img {
            max-width: 23%;
            max-height: 23%;
        }

        @media screen and (max-width: 768px) {
            .title-img {
                width: 50%;
                height: 50%;
            }
        }

        @media (max-width: 992px) {
            .title-img {
                max-width: 30%;
                max-height: 30%;
            }
        }

        @media (max-width: 1200px) {
            .title-img {
                max-width: 23%;
                max-height: 23%;
            }
        }
    </style>

    <script type="text/javascript">
        var count = 2;
        $(document).ready(function() {
            $('.add_more').click(function(e) {
                var newFile = document.getElementById('newFile');
                if (count < 6) {
                    newFile.innerHTML += '<div class="row" style="padding-bottom: 6px;">' +
                        '<div class="col-4"></div>' +
                        '<div class="col-4">' +
                        '<div class="custom-file">' +
                        '<input onchange="javascript:updateFile' + count + '()" type="file" class="custom-file-input" name="file[]"  id="fileupload-' + count + '">' +
                        '<label class="custom-file-label filepath" name="filepath-' + count + '"  id="filepath-' + count + '" >เลือกไฟล์</label>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    count++;
                } else if (count < 7) {
                    newFile.innerHTML += '<div class="row" style="padding-bottom: 6px;">' +
                        '<div class="col-4"></div>' +
                        '<div class="col-4">' +
                        '<div class="alert alert-danger alert-dismissible fade show">' +
                        ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>' +
                        ' </button> Upload field has reached maximum amount' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    count++;
                }
            });
        });
    </script>

</head>