<?php
class Loger extends CI_Model
{
  public function view_log($from_date,$to_date,$type=1)
  {
      $qry="SELECT * FROM query_logs WHERE date(log_datetime)>='$from_date' AND date(log_datetime)<='$to_date' AND external_type = '$type' order by log_id desc";
      return   $this->db->query($qry);
      //$this->db->last_query();
  }

  public function view_log_api($from_date,$to_date){

    $qry="SELECT * FROM api_transactions WHERE date(log_datetime)>='$from_date' AND date(log_datetime)<='$to_date' order by id desc";
    return $this->db->query($qry);

  }
}

 ?>
