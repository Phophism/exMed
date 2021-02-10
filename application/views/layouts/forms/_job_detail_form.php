<style>
    .error {
        color: #ff5e5e;
    }
</style>

<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            $('.datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
        });
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
            "job_type_id": {
                required: !0,
            },
            "pos_id": {
                required: !0,
            },
            "unit_id": {
                required: !0,
            },
            "salary": {
                required: !0,
            },
            "n_open": {
                required: !0,
            },
        },
        messages: {
            "pos_num": {
                required: "กรุณาระบุเลขที่ตำแหน่ง",
                // minlength: "กรุณาระบุให้ครบ 7 ตัวอักษร",
                // maxlength: "กรุณาระบุเลขที่ตำแหน่ง 7 ตัวอักษร",
            },
            "job_type_id": "กรุณาระบุประเภทการจ้าง",
            "pos_id": "กรุณาระบุตำแหน่ง",
            "unit_id": "กรุณาระบุหน่วยงาน",
            "salary": "กรุณาระบุอัตราจ้าง",
            "n_open": "กรุณาระบุจำนวนที่ว่าง",
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
            document.getElementById("exam_result_date").disabled = false;
        } else {
            //Otherwise, disable the submit button.
            document.getElementById("exam_date").disabled = true;
            document.getElementById("exam_result_date").disabled = true;
            document.getElementById("exam_date").value = "";
            document.getElementById("exam_result_date").value = "";
        }
    }

    is_interview_change = function(termsCheckBox) {
        //If the checkbox has been checked
        if (termsCheckBox.checked) {
            //Set the disabled property to FALSE and enable the button.
            document.getElementById("interview_date").disabled = false;
            document.getElementById("interview_result_date").disabled = false;
        } else {
            //Otherwise, disable the submit button.
            document.getElementById("interview_date").disabled = true;
            document.getElementById("interview_result_date").disabled = true;
            document.getElementById("interview_date").value = "";
            document.getElementById("interview_result_date").value = "";
        }
    }
</script>