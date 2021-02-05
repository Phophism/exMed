<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pos_list_model extends CI_Model
{

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
            OP.public_date,
            OP.end_date,
            JT.type_name,
            P.position_name,
            L.ward_name,
            OP.n_open,
            OP.salary,
            OP.status_id,
            OP.remark,
            OP.view_count
            from open_position as OP
            inner join tb_job_type as JT
            on OP.job_type_id = JT.id
            inner join tb_position as P
            on OP.pos_id = P.position_code
            inner join tb_location1 as L
            on OP.unit_id = L.Ward_code")->result();
        return $data;
    }

    // Get number of data in "open_position"
    public function get_open_position_nrow()
    {
        $this->db->like('id');
        $this->db->from('open_position');
        $data = $this->db->count_all_results();
        return $data;
    }


    public function get_open_position_list_limit($index_start, $limit)
    {
        $data = $this->db->query("select 
        OP.public_date,
        OP.end_date,
        JT.type_name,
        P.position_name,
        L.ward_name,
        OP.n_open,
        OP.salary,
        OP.status_id,
        OP.remark,
        OP.view_count
        from open_position as OP
        inner join tb_job_type as JT
        on OP.job_type_id = JT.id
        inner join tb_position as P
        on OP.pos_id = P.position_code
        inner join tb_location1 as L
        on OP.unit_id = L.Ward_code
        limit " . $index_start . "," . $limit)->result();

        if (count($data) > 0) {
            // foreach ($data as $record) {
            //     $list[] = $record;
            // }
            return $data;
        } else {
            return FALSE;
        }

    }
}
