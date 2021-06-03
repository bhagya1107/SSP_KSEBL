<?php
class Settings_model extends CI_Model
{

    public function checkGlobalExist($name){
        $qry="SELECT * from admin_globals where name='$name'";
        $qrry=$this->db->query($qry);
       return  $resArray = $qrry->num_rows();
    }
    public function getGlobalsdata(){
        $qry="SELECT * from admin_globals";
        $qrry=$this->db->query($qry);
       return  $resArray = $qrry->result();
    }

    public function insert($table,$data)
    { 
        $this->db->insert($table,$data);
        // return $this->db->insert_id();

    }
  

}

 ?>
