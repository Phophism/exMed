<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Add_job extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        $this->load->model('job_list_model');
    }

    public function index()
    {

        $job_type = $this->job_list_model->get_job_type();
        $job_position = $this->job_list_model->get_job_position();
        $ward_list = $this->job_list_model->get_ward();
        // echo "<pre>";
        // var_dump($job_type);
        // echo "</pre>";

        $this->load->view(
            'CRUD/_add_job',
            array(
                'job_type' => $job_type,
                'job_position' => $job_position,
                'ward' => $ward_list,
                'title' => "Edit job detail"
            )
        );
    }

    public function form_submit()
    {
        $val = array();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $val['is_exam'] = "0";
            $val['is_interview'] = "0";
            foreach ($_POST as $key => $post) {
                if ($post == null) {
                    $val[$key] = null;
                } else {
                    $val[$key] = $post;
                }
            }

            // $info = pathinfo($_FILES["fileupload"]['name']);
            if (isset($_FILES["fileupload"]['name'])) {
                $target = "files/";
                $file_name = $val['pos_num'] . "_" . $_FILES["fileupload"]['name'];
                $temp = $_FILES["fileupload"]['tmp_name'];

                // move_uploaded_file($_FILES['userFile']['tmp_name'], $target);

                if (move_uploaded_file($temp, $target . $file_name)) {
                    echo "<script type='text/javascript'> alert('success') </script> ";
                } else {
                    echo "<script type='text/javascript'> alert('fail') </script> ";
                }
            }
            if ($val['is_exam'] == "0"){
                $val['exam_date'] = null;
                $val['exam_announce_date'] = null;
            }
            if ($val['is_interview'] == "0"){
                $val['interview_date'] = null;
                $val['announce_interview_date'] = null;
            }
        }
        echo "<pre>";
        var_dump($val);
        echo "</pre>";
    }
}
