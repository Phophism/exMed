<!-- JS -->
<!-- quixlab js -->
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/common/common.min.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/js/custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/js/settings.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/js/gleek.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/js/styleSwitcher.js"></script>

<script src="<?php echo base_url(); ?>assets/quixlab/plugins/moment/moment.js"></script>

<!-- <script src="<?php echo base_url(); ?>assets/quixlab/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> -->

<!-- datepicker plugin -->
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<!-- Color Picker Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>

<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/quixlab/js/plugins-init/bs-date-picker-init.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/quixlab/js/plugins-init/form-pickers-init.js"></script> -->

<!-- datatable -->
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

<!-- Datatable script -->
<script type="text/javascript">
    $("#mydatatable").DataTable({
        "order": [
            [0, "desc"]
        ], // array[1] (public date Desc)
        language: {
            searchPlaceholder: "[กรอกข้อความเพื่อค้นหา]"
        }
    });
</script>

<!-- Redirect to detail script -->
<script type="text/javascript">
    function trigger_counter(id) {
        var id = id;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>Job_detail/index",
            data: {
                'id': id
            },
            success: function(response) {
                console.log(response);
            }
        });
    }
</script>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            $('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });

        });
    });
</script> -->

<!-- Redirect to detail script -->