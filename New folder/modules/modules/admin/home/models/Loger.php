<?php
class Loger extends CI_Model
{
  public function view_log($from_date,$to_date)
  {
    $qry="SELECT * FROM query_logs WHERE date(log_datetime)>='$from_date' AND date(log_datetime)<='$to_date' order by log_id desc";
    return $this->db->query($qry);
  }
}

 ?>
