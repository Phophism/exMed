<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Content-type: text/html; charset=utf-8');

class Add_job extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
        $this->load->model('job_list_model');
        $this->load->helper('url');
        if (!$this->session->userdata('is_logged_in')) {
            redirect(base_url() . 'login');
        }
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
        $cur_date = date('Y-m-d');

        // Set variable for store form data 
        $val = array();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $val['view_count'] = "0";
            $val['is_exam'] = "0";
            $val['is_interview'] = "0";
            foreach ($_POST as $key => $post) {
                if ($key == 'submit') {
                } else
                if ($post == null) {
                    $val[$key] = null;
                } else {
                    $val[$key] = $post;
                }
            }

            // set related date to null if no (exam) test or interview 
            if ($val['is_exam'] == "0") {
                $val['exam_date'] = null;
                $val['exam_result_date'] = null;
            } else {
                $val['is_exam'] = "1";
            }
            if ($val['is_interview'] == "0") {
                $val['interview_date'] = null;
                $val['interview_result_date'] = null;
            } else {
                $val['is_interview'] == "1";
            }


            // Convert date format to mysql date format
            $val['public_date'] = date('Y-m-d', strtotime($val['public_date']));
            if (isset($val['end_date']) && $val['end_date'] != null) {
                $val['end_date'] = date('Y-m-d', strtotime($val['end_date']));
            }
            if (isset($val['exam_date']) && $val['exam_date'] != null) {
                $val['exam_date'] = date('Y-m-d', strtotime($val['exam_date']));
            }
            if (isset($val['exam_result_date']) && $val['exam_result_date'] != null) {
                $val['exam_result_date'] = date('Y-m-d', strtotime($val['exam_result_date']));
            }
            if (isset($val['interview_date']) && $val['interview_date'] != null) {
                $val['interview_date'] = date('Y-m-d', strtotime($val['interview_date']));
            }
            if (isset($val['interview_result_date']) && $val['interview_result_date'] != null) {
                $val['interview_result_date'] = date('Y-m-d', strtotime($val['interview_result_date']));
            }
            if (isset($val['announce_name_date']) && $val['announce_name_date'] != null) {
                $val['announce_name_date'] = date('Y-m-d', strtotime($val['announce_name_date']));
            }


            // Set job status
            if (isset($val['interview_result_date']) && $cur_date >= $val['interview_result_date']) {
                $val['status_id'] = "04";
            } else if (isset($val['exam_result_date']) && $cur_date >= $val['exam_result_date']) {
                $val['status_id'] = "03";
            } else if (isset($val['announce_name_date']) && $cur_date >= $val['announce_name_date']) {
                $val['status_id'] = "02";
            } else if (isset($val['public_date']) && $cur_date >= $val['public_date']) {
                $val['status_id'] = "01";
            } else {
                $val['status_id'] = "00";
            }
        }

        $val['last_update_by'] = $this->session->userdata('username');

        // echo "<pre>";
        // var_dump($val);
        // echo "</pre>";

        $this->job_list_model->add_job($val);
        $job_id = $this->job_list_model->get_latest_job();

        // File upload
        // $info = pathinfo($_FILES["fileupload"]['name']);
        if (isset($_FILES["file"]['name'])) {
            $tmp_path = array();
            $new_path = array();
            $file_name = array();
            $total = count($_FILES["file"]['name']);
            for ($i = 0; $i < $total; $i++) {
                $file_name[$i] = $val['pos_num'] . "_" . $_FILES["file"]['name'][$i];
                $tmp_path[$i] = $_FILES['file']['tmp_name'][$i];
                if ($tmp_path[$i] != "") {
                    $new_path[$i] = "files/" . $val['pos_num'] . "_" . $_FILES['file']['name'][$i];
                    //Upload the file into the temp dir
                    move_uploaded_file($tmp_path[$i], $new_path[$i]);
                    $this->job_list_model->upload_file($file_name[$i], $new_path[$i], $job_id);
                }
            }
        }


        redirect('Job_detail/index/' . $job_id);
    }
}
