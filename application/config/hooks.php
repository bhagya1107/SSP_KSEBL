<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
$hook['post_controller'] = array(    
    'class' => 'Log_Queries',             
    'function' => 'log_queries_n',     
    'filename' => 'Log_Queries.php',    
    'filepath' => 'hooks'         
	);

	$hook['post_controller'] = array(    
    'class' => 'Log_Queries',             
    'function' => 'readable_query',     
   'filename' => 'Log_Queries.php',    
   'filepath' => 'hooks'         
  );
//   $hook['post_controller_construct'] = array(    
//     'class' => 'Log_Queries',             
//     'function' => 'readable_query',     
//    'filename' => 'Log_Queries.php',    
//    'filepath' => 'hooks'         
//   );