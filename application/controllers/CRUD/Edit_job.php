<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Edit_job extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set("Asia/Bangkok");
        $this->load->model('job_list_model');
        $this->load->helper('url');
    }

    public function index()
    {

        //$get_id = $this->input->post('id');

        $job_detail = $this->uri->segment(4);
        $data = $this->job_list_model->get_job_detail($job_detail);
        $job_type = $this->job_list_model->get_job_type();
        $job_position = $this->job_list_model->get_job_position();
        $ward_list = $this->job_list_model->get_ward();

        if ($data['end_date'] != null) {
            $data['end_date'] = date('m/d/Y',  strtotime($data['end_date']));
        }
        if ($data['announce_name_date'] != null) {
            $data['announce_name_date'] = date('m/d/Y',  strtotime($data['announce_name_date']));
        }
        if ($data['exam_date'] != null) {
            $data['exam_date'] = date('m/d/Y',  strtotime($data['exam_date']));
        }
        if ($data['exam_result_date'] != null) {
            $data['exam_result_date'] = date('m/d/Y',  strtotime($data['exam_result_date']));
        }
        if ($data['interview_date'] != null) {
            $data['interview_date'] = date('m/d/Y',  strtotime($data['interview_date']));
        }
        if ($data['interview_result_date'] != null) {
            $data['interview_result_date'] = date('m/d/Y',  strtotime($data['interview_result_date']));
        }
        if ($data['public_date'] != null) {
            $data['public_date'] = date('m/d/Y',  strtotime($data['public_date']));
        }

        // echo "<pre>" ;
        // var_dump($data);
        // echo "</pre>";

        $this->load->view(
            'CRUD/_edit_job',
            array(
                'data' => $data,
                'job_type' => $job_type,
                'job_position' => $job_position,
                'ward' => $ward_list,
                'title' => $data['pos_num'] . " - Edit"
            )
        );
    }

    public function update_job()
    {

        $cur_date = date('Y-m-d');

        $id = $this->uri->segment(4);

        $val = array();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            foreach ($_POST as $key => $post) {
                if ($key == 'submit') {
                } else
                if ($post == null) {
                    $val[$key] = null;
                } else {
                    $val[$key] = $post;
                }
            }


            // File upload
            // $info = pathinfo($_FILES["fileupload"]['name']);
            if (isset($_FILES["file"]['name'])) {
                $tmp_path = array();
                $new_path = array();
                $fileName = array();
                $total = count($_FILES["file"]['name']);
                for ($i = 0; $i < $total; $i++) {
                    $fileName[$i] = $_FILES["file"]['name'];
                    $tmp_path[$i] = $_FILES['file']['tmp_name'][$i];
                    if ($tmp_path[$i] != "") {
                        $new_path[$i] = "files/" . $val['pos_num'] . "_" . $_FILES['file']['name'][$i];
                        //Upload the file into the temp dir
                        move_uploaded_file($tmp_path[$i], $new_path[$i]);
                    }
                }

                // $target = "files/";
                // $file_name = $val['pos_num'] . "_" . $_FILES["fileupload"]['name'];
                // $temp = $_FILES["fileupload"]['tmp_name'];

                // move_uploaded_file($temp, $target . $file_name);

                // if (move_uploaded_file($temp, $target . $file_name)) {
                //     echo "<script type='text/javascript'> alert('success') </script> ";
                // } else {
                //     echo "<script type='text/javascript'> alert('fail') </script> ";
                // }
            }

            if (!isset($val['is_exam'])) {
                $val['is_exam'] = "0";
            }
            if (!isset($val['is_interview'])) {
                $val['is_interview'] = "0";
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
                $val['is_interview'] = "1";
            }

            // echo "<pre>";
            // var_dump($val);
            // echo "</pre>";

            // Convert date format to mysql date format
            if (isset($val['public_date']) && $val['public_date'] != null) {
                $val['public_date'] = date('Y-m-d', strtotime($val['public_date']));
            }
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

        $val['update_date'] = date('Y-m-d H:i:s');

        // // echo "<pre>";
        // // var_dump($val);
        // // echo "</pre>";

        $this->job_list_model->update_job($id, $val);

        redirect('Job_detail/index/' . $id);
    }
}
