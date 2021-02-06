<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pos_list_model extends CI_Model
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
        OP.public_date,
        OP.end_date,
        JT.type_name,
        P.position_name,
        L.ward_name,
        OP.n_open,
        OP.salary,
        JS.job_status_name,
        OP.remark,
        OP.view_count
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
        JS.job_status_name,
        OP.remark,
        OP.view_count
        from open_position as OP
        inner join tb_job_type as JT
        on OP.job_type_id = JT.id
        inner join tb_position as P
        on OP.pos_id = P.position_code
        inner join tb_location1 as L
        on OP.unit_id = L.Ward_code
        inner join tb_job_status as JS
        on OP.status_id = JS.id
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

    public function get_open_position_ajax($post_data){
        $response = array();

        // read data
        $draw = $post_data['draw'];
        $start = $post_data['start']; // start index
        $nrow = $post_data['length']; // number of row per page
        $col_index = $post_data['order'][0]['column'];
        $col_name = $post_data['column'][$col_index]['data'];
        $col_order = $post_data['order'][0]['dir'];
        $search_val = $post_data['search']['value'];

        // search
        $search_query = "";
        if($search_val !=''){
            $search_query = "
                (P.position_name like '%".$search_val."%' or
                L.ward_name like '%".$search_val."%' or
                OP.salary like '%".$search_val."%' or
                JS.job_status_name like '%".$search_val."%')
            ";
        }

        //total records
        $this->db->like('id');
        $this->db->from('open_position');
        $total_records = $this->db->count_all_results();

        //total record with filter
        if($search_query!=''){
            $total_records_filter = $this->db->query("select 
                count(*)
                from open_position as OP
                inner join tb_job_type as JT
                on OP.job_type_id = JT.id
                inner join tb_position as P
                on OP.pos_id = P.position_code
                inner join tb_location1 as L
                on OP.unit_id = L.Ward_code
                inner join tb_job_status as JS
                on OP.status_id = JS.id
                where
                ".$search_query."
                ")->result();
        }else{
            $total_records_filter = $total_records ;
        }

         // fetch records
         $fetch_data = $this->db->query("select 
         OP.public_date,
         OP.end_date,
         JT.type_name,
         P.position_name,
         L.ward_name,
         OP.n_open,
         OP.salary,
         JS.job_status_name,
         OP.remark,
         OP.view_count
         from open_position as OP
         inner join tb_job_type as JT
         on OP.job_type_id = JT.id
         inner join tb_position as P
         on OP.pos_id = P.position_code
         inner join tb_location1 as L
         on OP.unit_id = L.Ward_code
         inner join tb_job_status as JS
         on OP.status_id = JS.id
         where ".$search_query/"
         order by OP.public_date DESC
         limit " . $nrow . "," . $start)->result();
         
        $data = array();

        foreach($fetch_data as $record){
            $data[] = array(
                "public_date" => $fetch_data->public_date,
                "end_date" => $fetch_data->end_date,
                "type_name" => $fetch_data->type_name,
                "position_name" => $fetch_data->position_name,
                "ward_name" => $fetch_data->ward_name,
                "n_open" => $fetch_data->n_open,
                "salary" => $fetch_data->salary,
                "status_id" => $fetch_data->status_id,
                "remark" => $fetch_data->remark,
                "view_count" => $fetch_data->view_count,
            );
        }

        // response
        $response = array(
            "draw" => intval($draw),
            "i_total_records" => $total_records,
            "i_total_filtered_records" => $total_records_filter,
            "aa_data" => $data
        );

        echo '<pre>';
        var_dump($response);
        echo '</pre>';
        return $response;
    }

}
