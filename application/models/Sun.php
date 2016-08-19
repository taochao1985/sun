<?php
class Sun extends CI_Model {

    function select_count_where($table,$cond='',$like='',$or_like=''){
        if ($cond){
           $this->db->where($cond);
        }
        if (!empty($like)){
            $this->db->like($like);
        }
        if (!empty($or_like)){
            $this->db->or_like($or_like);
        }

        $query = $this->db->from($table);
        $result= $query->count_all_results();

        return $result;
    }

    function personal_select($sql){
        $query = $this->db->query($sql);
        $result= $query->result();
        return $result;
    }

    function personal_query($sql){
        $query = $this->db->query($sql);
        return $query;
    }


    function translate_begin(){
        $this->db->trans_begin();
    }

    function translate_commit(){
        $this->db->trans_commit();
    }

    function translate_rollback(){
        $this->db->trans_rollback();
    }

    function select_sum_avg($table,$cond,$field,$type='avg'){
        if ($type == "sum"){
            $this->db->select_sum($field);
        }else{
           $this->db->select_avg($field);
        }
        $this->db->where($cond);
        $query = $this->db->get($table);
        $result= $query->result();
        return $result;
    }


    function insert($table,$data){
       $result = $this->db->insert($table,$data);
       $id = $this->db->insert_id();
       return $id;
    }

    function login($table,$array){
        $this->db->where($array);
        $query = $this->db->get($table);
        $result= $query->result();
        return $result;
    }


    function select_in($table,$select_field,$field,$a){
        $this->db->select($select_field);
        $this->db->where_in($field,$a);
        $query = $this->db->get($table);
        $result = $query->result();
        return $result;
    }


   function select($table,$fields="*",$cond="",$num="",$offset="",$order='',$like='',$or_like=''){

        $this->db->select($fields);

        if($num!=''){
            $this->db->limit($num,$offset);
        }
        if ($cond){
            $this->db->where($cond);
        }

       if (!empty($like)){
            $this->db->like($like);
        }
        if (!empty($or_like)){
            $this->db->or_like($or_like);
        }

        if($order){
            foreach($order as $key=>$val){
                $this->db->order_by($key,$val);
            }
        }

        $query = $this->db->get($table);
        $result = $query->result();
        return $result;
    }


    function update($table,$data,$cond){
       $result = $this->db->update($table,$data,$cond);
       return $result;
    }

    function delete($table,$cond){
       $result = $this->db->delete($table,$cond);
       return $result;
    }
}
?>