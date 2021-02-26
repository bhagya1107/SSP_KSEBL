<?php
class tender_model extends CI_Model
{ 

   
     public function update($table,$data, $where)
    { 
        $query=$this->db->update($table,$data,$where);
        return $query;
    }
	
	 public function insert($table,$data)
    { 
        $this->db->insert($table,$data);
        return $this->db->insert_id();

    }



    
}
