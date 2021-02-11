<!-- main wrapper -->
</div>

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

<!-- form validation -->
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/quixlab/plugins/validation/jquery.validate-init.js"></script>

<!-- Datatable script -->
<script type="text/javascript">
    $("#mydatatable").DataTable({
        "order": [
            [0, "desc"]
        ], // array[0] (public date Desc)
        language: {
            searchPlaceholder: "[กรอกข้อความเพื่อค้นหา]"
        }
    });

    $('input[type="checkbox"]').change(function() {
        this.value = (Number(this.checked));
    });
</script>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $(".delete").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>/CRUD/Edit_job/delete_file",
                cache: false,
                data: {
                    id_post: $(this).attr("id")
                }, // since, you need to delete post of particular id
                success: function(reaksi) {
                    if (reaksi) {
                        alert("Success");
                    } else {
                        alert("ERROR");
                    }
                }
            });
        });
    });
</script> -->

<script type="text/javascript">
    updateFile1 = function() {
        var input = document.getElementById('fileupload-1');
        var output = document.getElementById('filepath-1');
        var children = "";
        for (var i = 0; i < input.files.length; ++i) {
            children += '<li>' + input.files.item(i).name + '</li>';
        }
        output.innerHTML = '<ul>' + children + '</ul>';
    }
    updateFile2 = function() {
        var input = document.getElementById('fileupload-2');
        var output = document.getElementById('filepath-2');
        var children = "";
        for (var i = 0; i < input.files.length; ++i) {
            children += '<li>' + input.files.item(i).name + '</li>';
        }
        output.innerHTML = '<ul>' + children + '</ul>';
    }
    updateFile3 = function() {
        var input = document.getElementById('fileupload-3');
        var output = document.getElementById('filepath-3');
        var children = "";
        for (var i = 0; i < input.files.length; ++i) {
            children += '<li>' + input.files.item(i).name + '</li>';
        }
        output.innerHTML = '<ul>' + children + '</ul>';
    }
    updateFile4 = function() {
        var input = document.getElementById('fileupload-4');
        var output = document.getElementById('filepath-4');
        var children = "";
        for (var i = 0; i < input.files.length; ++i) {
            children += '<li>' + input.files.item(i).name + '</li>';
        }
        output.innerHTML = '<ul>' + children + '</ul>';
    }
    updateFile5 = function() {
        var input = document.getElementById('fileupload-5');
        var output = document.getElementById('filepath-5');
        var children = "";
        for (var i = 0; i < input.files.length; ++i) {
            children += '<li>' + input.files.item(i).name + '</li>';
        }
        output.innerHTML = '<ul>' + children + '</ul>';
    }
</script>



<!-- Redirect to detail script -->