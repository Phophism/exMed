<style>
    .error {
        color: #ff5e5e;
    }
</style>

<script type="text/javascript">
    $(document).ready(function() {
        // end date
        $(function() {
            $('#end_date').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            $("#end_date").datepicker("setDate", '<?php echo $data['end_date']; ?>');
        });

        // announce name date
        $(function() {
            $('#announce_name_date').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            $("#announce_name_date").datepicker("setDate", '<?php echo $data['announce_name_date']; ?>');
        });

        // exam date
        $(function() {
            $('#exam_date').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            $("#exam_date").datepicker("setDate", '<?php echo $data['exam_date']; ?>');
        });

        // exam_announce_date
        $(function() {
            $('#exam_announce_date').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            $("#exam_announce_date").datepicker("setDate", '<?php echo $data['exam_result_date']; ?>');
        });

        // interview_date
        $(function() {
            $('#interview_date').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            $("#interview_date").datepicker("setDate", '<?php echo $data['interview_date']; ?>');
        });

        //announce_interview_date
        $(function() {
            $('#announce_interview_date').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            $("#announce_interview_date").datepicker("setDate", '<?php echo $data['interview_result_date']; ?>');
        });

        //public date
        $(function() {
            $('#public_date').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            $("#public_date").datepicker("setDate", '<?php echo $data['public_date']; ?>');
        });

        // $(function() {
        //     $('.datepicker-autoclose').datepicker({
        //         autoclose: true,
        //         todayHighlight: true
        //     });
        // });
    });
</script>


<script type="text/javascript">
    $(".form-validate").validate({
        rules: {
            "pos_num": {
                required: !0,
                // minlength: 7,
                // maxlength: 7
            },
            "job_type": {
                required: !0,
            },
            "job_name": {
                required: !0,
            },
            "ward": {
                required: !0,
            },
            "salary": {
                required: !0,
            },
            "avialable": {
                required: !0,
            },
        },
        messages: {
            "pos_num": {
                required: "กรุณาระบุเลขที่ตำแหน่ง",
                // minlength: "กรุณาระบุให้ครบ 7 ตัวอักษร",
                // maxlength: "กรุณาระบุเลขที่ตำแหน่ง 7 ตัวอักษร",
            },
            "job_type": "กรุณาระบุประเภทการจ้าง",
            "job_name": "กรุณาระบุตำแหน่ง",
            "ward": "กรุณาระบุหน่วยงาน",
            "salary": "กรุณาระบุอัตราจ้าง",
            "avialable": "กรุณาระบุจำนวนที่ว่าง",
        },
    });
</script>

<script>
    showFileName = function() {
        var fil = document.getElementById("fileupload");
        console.log(fil.value);
    }

    is_exam_change = function(termsCheckBox) {
        //If the checkbox has been checked
        if (termsCheckBox.checked) {
            //Set the disabled property to FALSE and enable the button.
            document.getElementById("exam_date").disabled = false;
            document.getElementById("exam_announce_date").disabled = false;
        } else {
            //Otherwise, disable the submit button.
            document.getElementById("exam_date").disabled = true;
            document.getElementById("exam_announce_date").disabled = true;
            document.getElementById("exam_date").value = "";
            document.getElementById("exam_announce_date").value = "";
        }
    }

    is_interview_change = function(termsCheckBox) {
        //If the checkbox has been checked
        if (termsCheckBox.checked) {
            //Set the disabled property to FALSE and enable the button.
            document.getElementById("interview_date").disabled = false;
            document.getElementById("announce_interview_date").disabled = false;
        } else {
            //Otherwise, disable the submit button.
            document.getElementById("interview_date").disabled = true;
            document.getElementById("announce_interview_date").disabled = true;
            document.getElementById("interview_date").value = "";
            document.getElementById("announce_interview_date").value = "";
        }
    }
</script>