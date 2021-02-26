<?php
class AD_Controller extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        // session_destroy();
        $user = $this->session->userdata('admin');
        if (!$user) {
            $redirects = admin_url();
            redirect($redirects);
        }
        $this->load->module('template');
    }
}

class SP_Controller extends MX_Controller
{
    public function __construct()
    {

				$module = $this->router->fetch_module();
        parent::__construct();
				$user = $this->session->userdata('supplier');
        if (!$user) {
						$redirects = supplier_url();
            redirect($redirects);
        }
        $this->load->module('template');
    }
}
