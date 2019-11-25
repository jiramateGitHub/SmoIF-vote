<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($id)
    {
        $data['errorlog'] = $id;
        $this->load->view('vote/admin', $data);
	}

	public function vote($id)
    {
		$data['errorlog'] = $id;

		$this->load->view('vote/admin', $data);
		

	}
	
	public function admin_ch($id){
		$this->load->model('/M_vote', 'v');
		$this->v->tp_status = $id;
		$result = $this->v->admin_ch();
	}

	public function score($id)
    {
		$data['errorlog'] = "";
		$this->load->model('/M_vote', 'v');
		$this->v->log_status = $id;
		$data['admin_sum'] = $this->v->admin_sum()->result();
	
		$this->load->view('vote/score', $data);
		

	}

}
