
<!-- JS -->
<!-- quixlab js -->
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/common/common.min.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/js/custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/js/settings.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/js/gleek.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/js/styleSwitcher.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/tables/js/jquery.dataTables.min.js"></script>
<!-- datatable js -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.23/datatables.min.js"></script> -->
<!-- bootstrap -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

<script type="text/javascript">
    $(".dataTable").DataTable({
        "order": [[0,"desc"]] // array[1] (public date Desc)
    });
</script>
<!-- <script type="text/javascript">
            $(document).ready(function() {
                $('#empTable').DataTable({
                    'processing': true,
                    'serverSide': true,
                    'serverMethod': 'post',
                    'ajax': {
                        'url': '<?= base_url() ?>Welcome/open_job_list'
                    },
                    'column': [{
                            data: 'public_date'
                        },
                        {
                            data: 'end_date'
                        },
                        {
                            data: 'type_name'
                        },
                        {
                            data: 'position_name'
                        },
                        {
                            data: 'ward_name'
                        },
                        {
                            data: 'n_open'
                        },
                        {
                            data: 'salary'
                        },
                        {
                            data: 'status_id'
                        },
                        {
                            data: 'remark'
                        },
                        {
                            data: 'view_count'
                        },
                    ]
                });
            })
        </script> -->