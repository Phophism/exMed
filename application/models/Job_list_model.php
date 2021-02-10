<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Job_list_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Get all data from "open_position"
    // including all fields and records
    public function get_open_position()
    {
        $data = $this->db->get('open_position')->result();
        return $data;
    }

    // Get all data from "open_position"
    // including fields that required in List page
    public function get_open_position_list()
    {
        $data = $this->db->query("select 
        OP.id,
        OP.public_date,
        OP.end_date,
        JT.type_name,
        P.position_name,
        L.ward_name,
        OP.n_open,
        OP.salary,
        JS.job_status_name,
        OP.remark,
        OP.view_count,
        OP.pos_num
        from open_position as OP
        inner join tb_job_type as JT
        on OP.job_type_id = JT.id
        inner join tb_position as P
        on OP.pos_id = P.position_code
        inner join tb_location1 as L
        on OP.unit_id = L.Ward_code
        inner join tb_job_status as JS
        on OP.status_id = JS.id
            ")->result();
        return $data;

        // ต้องดักงานที่ยังไม่ถึงเวลา Public ด้วย
    }

    public function get_job_detail($job_id)
    {
        $query = $this->db->query(
            "select
                OP.id,
                JS.job_status_name,
                P.position_name,
                OP.pos_num,
                L.ward_name1,
                JT.type_name,
                OP.n_open,
                OP.salary,
                OP.end_date,
                OP.announce_name_date,
                OP.is_exam,
                OP.exam_date,
                OP.exam_result_date,
                OP.is_interview,
                OP.interview_date,
                OP.interview_result_date,
                OP.remark,
                OP.view_count,
                OP.public_date
            from open_position as OP
            inner join tb_job_type as JT
            on OP.job_type_id = JT.id
            inner join tb_position as P
            on OP.pos_id = P.position_code
            inner join tb_location1 as L
            on OP.unit_id = L.Ward_code
            inner join tb_job_status as JS
            on OP.status_id = JS.id
            where OP.id = '" . $job_id . "'"
        )->result_array();

        foreach ($query as $key => $value) {
            $data['id'] = $value['id'];
            $data['job_status_name'] = $value['job_status_name'];
            $data['position_name'] = $value['position_name'];
            $data['pos_num'] = $value['pos_num'];
            $data['ward_name1'] = $value['ward_name1'];
            $data['type_name'] = $value['type_name'];
            $data['n_open'] = $value['n_open'];
            $data['salary'] = $value['salary'];
            $data['end_date'] = $value['end_date'];
            $data['announce_name_date'] = $value['announce_name_date'];
            $data['is_exam'] = $value['is_exam'];
            $data['exam_date'] = $value['exam_date'];
            $data['exam_result_date'] = $value['exam_result_date'];
            $data['is_interview'] = $value['is_interview'];
            $data['interview_date'] = $value['interview_date'];
            $data['interview_result_date'] = $value['interview_result_date'];
            $data['remark'] = $value['remark'];
            $data['view_count'] = $value['view_count'];
            $data['public_date'] = $value['public_date'];
        }
        // echo "<pre>";
        //     var_dump($data);
        //     echo "</pre>";

        // echo "<pre>" ;
        // var_dump($data);
        // echo "</pre>";

        return $data;
    }

    public function update_view_count($job_id)
    {
        // $this->db->query(
        //     "update open_position
        //     set view_count = view_count+1
        //     where id='".$job_id."'"
        // )->result();
        $this->db->set('view_count', 'view_count+1', FALSE);
        $this->db->where('id', $job_id);
        $update = $this->db->update('open_position');
        return $update;
    }

    public function get_job_type()
    {
        $this->db->select('*');
        $this->db->from('tb_job_type');
        $data = $this->db->get();
        return $data->result();
    }

    public function get_job_position()
    {
        $this->db->select('position_code, position_name');
        $this->db->from('tb_position');
        $this->db->order_by('position_code');
        $data = $this->db->get();
        return $data->result();
    }

    public function get_ward()
    {
        $this->db->select('ward_code, ward_name1');
        $this->db->from('tb_location1');
        $this->db->order_by('ward_code');
        $data = $this->db->get();
        return $data->result();
    }

    public function add_job($data)
    {
        return $this->db->insert('open_position', $data);
    }

    public function update_job($id, $data)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('open_position');
    }

    public function get_latest_job()
    {
        $id = $this->db->query("
            select id
            from open_position
            order by id desc
            limit 1
        ")->result_array();

        $job_id = 0;
        foreach ($id as $key) {
            foreach ($key as $value) {
                $job_id = (int) $value;
            }
        }
        return $job_id;
    }

    public function delete_job($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('open_position');
    }

    public function upload_file($name, $path, $id)
    {
        $data = array (
            'file_name' => $name,
            'file_path' => $path,
            'pos_num' => $id,
        );
           echo "<pre>";
        var_dump($data);
        echo "</pre>";
        return $this->db->insert('open_position_files',$data);
    }
}
