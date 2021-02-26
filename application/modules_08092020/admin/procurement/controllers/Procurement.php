<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Procurement extends AD_Controller {
  public function __construct()
  {
  	parent::__construct();

  }
  public function tenders()
  {
    $data['page'] = 'Teders';
    $data['title'] = 'Tender';
    $this->template->make('procurement/tenders',$data);
  }
  public function applied_suppliers()
  {
    $data['page'] = 'Teders';
    $data['title'] = 'Applied suppliers';
    $this->template->make('procurement/applied_suppliers',$data);
  }
  public function tender_application()
  {
    $data['page'] = 'Teders';
    $data['title'] = 'Applied suppliers';
    $this->template->make('procurement/tender_application',$data);
  }
  public function pq_list()
  {
    $data['page'] = 'Teders';
    $data['title'] = 'PQ List';
    $this->template->make('procurement/pq_list',$data);
  }

}
