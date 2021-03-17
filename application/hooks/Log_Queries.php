<?php

class Log_Queries {

public function log_queries_n()
{
    $CI = & get_instance();

    $filepath = APPPATH . 'logs/Query-log-' . date('Y-m-d') . '.php';
    // $handle = @fopen($filepath, "a+");
	if(($handle = @fopen($filepath, "a+")) !== FALSE){

		$times = $CI->db->query_times;
		foreach ($CI->db->queries as $key => $query)
		{
			$type=strtok($query, " ");
			if($type!="SELECT")
			{
			$sql = $query . " \n Execution Time:" . $times[$key]." , executed time=".date('d-m-y h:i:a'); // Generating SQL file alongwith execution time
			fwrite($handle, $sql . "\n\n");

			//
			}
		}

		fclose($handle);
	}
}

public function readable_query()
{
	$CI = & get_instance();

	$filepath = APPPATH . 'logs/readable/Query-log-' . date('Y-m-d') . '.php';
//	$handle = fopen($filepath, "a+");
	if(($handle = @fopen($filepath, "a+")) !== FALSE){
		$userid=0;
		if(isset($_SESSION['userid']))   {
			$userid = $_SESSION['userid'];
		}
		if(isset($_SESSION['username']))
		$user = $_SESSION['username'];
		else {
			$user = "Anonymus";
		}
		$times = $CI->db->query_times;
		foreach ($CI->db->queries as $key => $query)
		{
				$type=strtok($query, " ");

				
			
				if(strtolower($type)=="update")
				{
					$str = strtolower($query);
					$str = str_replace("\n",' ',$query);
					$value = explode('set',strtolower($str))[1];
					$table = '';
					if (preg_match('/update(.*?)set/is', $str, $match) == 1) {
						$table =  $match[1];
					}

					// km updated
					if(str_replace('"', '', trim($table)) =="sessions"){
					
						continue;
					}

				

					if(str_replace('"', '', trim($table)) == 'api_transactions'){
						$data['external_type'] = 1;
					}
					
						// km updated
					$sql = 'TIMESTAMP-'.date('d-m-y h:i:a').'  EXETIME-'.$times[$key]."\n" ;// Generating SQL file alongwith execution time
					$sql .= "LOG:  $user Updated $table to ".$value ;// Generating SQL file alongwith execution time
					fwrite($handle, $sql . "\n\n");
					$data['log_datetime'] = date('Y-m-d h:i:s');
					$data['exetime'] = $times[$key];
					$data['type'] = 'update';
					$data['userid'] = $userid;
					$data['logs'] = "$user Updated $table to ".$value;
					// $data['logs'] =str_replace('"', '', trim($table));


					$CI->db->insert('query_logs',$data);
					

					//
				} else if(strtolower($type)=="delete")
				{
					$str = strtolower($query);
					$value = explode('where',$str)[1];
					$table = '';
					if (preg_match('/from(.*?)where/is', $str, $match) == 1) {
						$table =  $match[1];
					}

					if($table=='api_transactions'){
						$data['external_type'] = 1;
					}
					$sql = 'TIMESTAMP-'.date('d-m-y h:i:a').'  EXETIME-'.$times[$key]."\n" ;// Generating SQL file alongwith execution time
					$sql .= "LOG:  $user Deleted entry from $table  where".$value ;// Generating SQL file alongwith execution time
					fwrite($handle, $sql . "\n\n");
					$data['log_datetime'] = date('Y-m-d h:i:s');
					$data['exetime'] = $times[$key];
					$data['type'] = 'delete';
					$data['userid'] = $userid;
					$data['logs'] = "$user Deleted entry from $table  where".$value;
					$CI->db->insert('query_logs',$data);

					//
				} else if(strtolower($type)=="insert")
				{
						$str = strtolower($query);
						$value = explode('values',$str)[1];
						$table = '';
						if (preg_match('/into(.*?)\(/is', $str, $match) == 1) {
							$table =  $match[1];
						}

						if($table=='api_transactions'){
							$data['external_type'] = 1;
						}

					$sql = 'TIMESTAMP-'.date('d-m-y h:i:a').'  EXETIME-'.$times[$key]."\n" ;// Generating SQL file alongwith execution time
					$sql .= "LOG: $user added new entry to $table with values $value" ;// Generating SQL file alongwith execution time
					fwrite($handle, $sql . "\n\n");
					$data['log_datetime'] = date('Y-m-d h:i:s');
					$data['exetime'] = $times[$key];
					$data['type'] = 'insert';
					$data['userid'] = $userid;
					$data['logs'] = " $user added new entry to $table with values $value";
					$CI->db->insert('query_logs',$data);

						//
				}
		}

		fclose($handle);
	}
	//exit;
}
}
?>
