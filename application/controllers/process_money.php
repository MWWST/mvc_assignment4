<?php
class Process_money extends CI_Controller {

	public function process(){
			// var_dump($this->input->post('action','farmgold'));
			$activities = array();
			
			if($this->session->userdata('counter'))
			{
				if ($this->input->post('farmgold')){
				$counter =$this->session->userdata('counter');
				$this->session->set_userdata('counter',$counter+rand(0,10));
				$this->session->set_userdata($activities,"You entered a cave and earned"." ".$counter."  "."golds on". date('m-d-Y'));
				$viewdata = $this->session->all_userdata();
				// var_dump($this->session->all_userdata());
				$this->load->view('ninja',$viewdata);

			}if ($this->input->post('cavemgold')){
				$counter =$this->session->userdata('counter');
				$this->session->set_userdata('counter',$counter+rand(5,10));
				$this->session->set_userdata('activities',"You entered a cave and earned"." ".$counter."  "."golds on". date('m-d-Y'));
				$viewdata = $this->session->all_userdata();
				$this->load->view('ninja',$viewdata);

			}if ($this->input->post('housemgold')){
				$counter =$this->session->userdata('counter');
				$this->session->set_userdata('counter',$counter+rand(2,5));
				$this->session->set_userdata('activities',"You entered a house and earned"." ".$counter." "."golds on".date('m-d-Y'));
				$viewdata = $this->session->all_userdata();
				$this->load->view('ninja',$viewdata);

			}if ($this->input->post('casinomgold')){
				$counter =$this->session->userdata('counter');
				$this->session->set_userdata('counter',$counter+rand(-50,50));
				$this->session->set_userdata('activities',"You entered a casino and earned"." ".$counter." "."golds on".date('m-d-Y'));
				$viewdata = $this->session->all_userdata();
				$this->load->view('ninja',$viewdata);
			}
		}
		else {
				
				$this->session->set_userdata('counter',1);
				$activity = array();
				array_push($activity, "test");
				// var_dump($this->session->all_userdata());
			}
		}
	}

?>
