<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Job_detail extends CI_Controller
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

        $job_detail = $this->uri->segment(3);
        $data = $this->job_list_model->get_job_detail($job_detail);
        $files = $this->job_list_model->get_files($job_detail);


        if ($data['end_date'] != null) {
            $data['end_date'] = date('d/m/Y',  strtotime($data['end_date']));
        } else {
            $data['end_date'] = " - ";
        }
        if ($data['announce_name_date'] != null) {
            $data['announce_name_date'] = date('d/m/Y',  strtotime($data['announce_name_date']));
        } else {
            $data['announce_name_date'] = " - ";
        }
        if ($data['exam_date'] != null) {
            $data['exam_date'] = date('d/m/Y',  strtotime($data['exam_date']));
        } else {
            $data['exam_date'] = " - ";
        }
        if ($data['exam_result_date'] != null) {
            $data['exam_result_date'] = date('d/m/Y',  strtotime($data['exam_result_date']));
        } else {
            $data['exam_result_date'] = " - ";
        }
        if ($data['interview_date'] != null) {
            $data['interview_date'] = date('d/m/Y',  strtotime($data['interview_date']));
        } else {
            $data['interview_date'] = " - ";
        }
        if ($data['interview_result_date'] != null) {
            $data['interview_result_date'] = date('d/m/Y',  strtotime($data['interview_result_date']));
        } else {
            $data['interview_result_date'] = " - ";
        }
        if ($data['public_date'] != null) {
            $data['public_date'] = date('d/m/Y',  strtotime($data['public_date']));
        } else {
            $data['public_date'] = " - ";
        }
        if ($data['remark'] == null) {
            $data['remark'] = " - ";
        }

        // echo "<pre>";
        // var_dump($files);
        // echo "</pre>";

        $this->load->view(
            '_job_detail',
            array(
                'data' => $data,
                'files' => $files,
                'title' => $data['pos_num'] . " - " . $data['position_name']
            )
        );
    }

    public function counter()
    {
        $job_id = $this->uri->segment(3);
        $this->job_list_model->update_view_count($job_id);
        redirect('Job_detail/index/' . $job_id);
    }

    public function Edit_id()
    {
        $job_id = $this->uri->segment(3);
        redirect('CRUD/Edit_job/index/' . $job_id);
    }
}
