<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vote extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['errorlog'] = "";
        $this->load->view('vote/index', $data);
	}
	
	public function vote($id)
    {
		$data['mem_number'] = $id;

		$this->load->model('/M_vote', 'v');
		$this->v->mem_number = $id;
		$data['get_topic'] = $this->v->get_topic()->result();
		$data['get_member'] = $this->v->get_member_all()->result();
		

        $this->load->view('vote/vote', $data);
	}

	public function topic1($id)
    {
		$data['mem_number'] = $id;
		$this->load->model('/M_vote', 'v');
		$data['get_topic'] = $this->v->get_topic()->result();
		$data['get_member'] = $this->v->get_member_all()->result();
		$data['get_choice'] = $this->v->get_choice()->result();
		$data['get_log'] = $this->v->get_log1()->result();
        $this->load->view('vote/topic1', $data);
	}

	public function topic2($id)
    {
		$data['mem_number'] = $id;
		$this->load->model('/M_vote', 'v');
		$data['get_topic'] = $this->v->get_topic()->result();
		$data['get_member'] = $this->v->get_member_all()->result();
		$data['get_choice'] = $this->v->get_choice()->result();
		$data['get_log'] = $this->v->get_log2()->result();
        $this->load->view('vote/topic2', $data);
	}


	public function select_choice($id,$id_log)
    {
		$data['mem_number'] = $id;
		$this->load->model('/M_vote', 'v');
		$this->v->mem_number = $id;
		$this->v->log_ch_id = $id_log;
		$result = $this->v->add_log();
	}

	public function select_choice2($id,$id_log)
    {
		$data['mem_number'] = $id;
		$this->load->model('/M_vote', 'v');
		$this->v->mem_number = $id;
		$this->v->log_ch_id = $id_log;
		$result = $this->v->add_log2();
	}
	
    public function login()
    {
		$id = $this->input->post('id');
        $this->load->model('/M_vote', 'v');
		$this->v->mem_number = $id;
		$result = $this->v->get_member()->result();

		$check = false;
		foreach($result as $row){
			if($id == $row->mem_number){
				$check = true;
				break;
			}
		}
		if($check == true){
			echo json_encode($result);
		}else{
			//$arr = array('mem_id' => 'false', 'mem_number' => 'false', 'mem_fname' => 'false', 'mem_lname' => 'false');
			$arr[0]['mem_number'] = "false";
			echo json_encode($arr);
		}
		
    }

}
