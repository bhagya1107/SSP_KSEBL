<?php
class AD_Controller extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        // session_destroy();

        foreach ($_POST as $key => $value) {
            $_POST[$key]=remove_invisible_characters($this->security->xss_clean($value));
          }
          foreach ($_GET as $key => $value) {
            $_GET[$key]=remove_invisible_characters($this->security->xss_clean($value));
          }
  

        $user = $this->session->userdata('admin');
        if (!$user) {
            $redirects = admin_url();
            redirect($redirects);
        }
        $this->load->module('template');
       // $this->load->module('api');
    }
}

class SP_Controller extends MX_Controller
{
    public function __construct()
    {

        foreach ($_POST as $key => $value) {
            $_POST[$key]=remove_invisible_characters($this->security->xss_clean($value));
          }
          foreach ($_GET as $key => $value) {
            $_GET[$key]=remove_invisible_characters($this->security->xss_clean($value));
          }
  
          
				$module = $this->router->fetch_module();
        parent::__construct();
				$user = $this->session->userdata('supplier');
        if (!$user) {
						$redirects = supplier_url();
            redirect($redirects);
        }
        $this->load->module('template');
        $this->load->module('api');
    }
}
