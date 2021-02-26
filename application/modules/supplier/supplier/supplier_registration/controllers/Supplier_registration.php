<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_registration extends SP_Controller {
public function __construct()
{
	parent::__construct();
}
	public function step_4()
	{
  	$data['page'] = 'step_4';
    $data['title'] = 'Supplier Dashboard';
		$this->template->make('supplier_registration/step_4',$data);
  }
	public function step_5()
	{
  	$data['page'] = 'step_5';
    $data['title'] = 'Supplier Dashboard';
		$this->template->make('supplier_registration/step_5',$data);
  }
	public function step_6()
	{
  	$data['page'] = 'step_6';
    $data['title'] = 'Supplier Dashboard';
		$this->template->make('supplier_registration/step_6',$data);
  }



}
