<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ssp_model extends CI_Model {


 	public function Login($email,$password) {

		$q = $this->db->query("SELECT  suppliers.name, suppliers.username, suppliers.name
		   FROM suppliers  
		   where suppliers.name='$email' AND suppliers.password='$password' AND suppliers.isdeleted='false' ");
        if ($q->num_rows() > 0) {

            foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	public function checkUserEmail($email){
		$q = $this->db->query("SELECT  suppliers.name,suppliers.username, suppliers.email
		   FROM suppliers  where suppliers.name='$email' AND suppliers.isdeleted='false' ");
		 if ($q->num_rows() > 0) {

			 foreach (($q->result()) as $row) {
				 $data[] = $row;
			 }
			 return $data;
		 }
		 return false;
	}
	
	public function CreateToken(){
            $token = $this->random_num(5);
             return $token;

    }

	public function random_num($size) {
		$alpha_key = '';
		$keys = range('A', 'Z');

		for ($i = 0; $i < 5; $i++) {
			$alpha_key .= $keys[array_rand($keys)];
		}

		$length = $size - 2;

		$key = '';
		$keys = range(0, 9);

		for ($i = 0; $i < $length; $i++) {
			$key .= $keys[array_rand($keys)];
		}

		return $alpha_key . $key;
	}


	public function update($table,$data, $where)
    {
        $query=$this->db->update($table,$data,$where);
        return $query;
    }
	
		public function CheckDeviceDetails($userid){
		$Query=$this->db->query("select count(*) as count FROM devicedetails where uid=$userid");
		return $Query->row();
	}
	
		public function insertData($data,$tableName)
	{
			$query=$this->db->insert($tableName,$data);
			if($query)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}

	}
	
	public function token_exit($token)
	{
		$Query= $this->db->query("select * from suppliers where token='$token' and suppliers.isdeleted=false");
		return $Query->result();
	}

	
}

