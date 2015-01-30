<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }

	public function index()
	{
		$viewdata=$this->session->all_userdata();
		$this->load->view('ninja',$viewdata);

	}
}

//end of main controller