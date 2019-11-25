<?php

class M_vote extends CI_Model {
	public $mem_id;
	public $mem_number;
	public $mem_fname;
	public $mem_lname;
	public $log_ch_id;
	public $tp_status;
	public $log_status;
	function __construct() {
		parent::__construct();
	}

	function get_member(){
		$sql = "SELECT *
		FROM member
		WHERE mem_number = ?";
		$query = $this->db->query($sql, array($this->mem_number));	
		return $query;
	}

	function get_member_all(){
		$sql = "SELECT *
		FROM member";
		$query = $this->db->query($sql);
		return $query;
	}

	function get_topic(){
		$sql = "SELECT *
		FROM topic
		WHERE tp_id = '1'";
		$query = $this->db->query($sql);	
		return $query;
	}
	
	function get_choice(){
		$sql = "SELECT *
		FROM choice
		WHERE ch_status = 1";
		$query = $this->db->query($sql);	
		return $query;
	}

	function get_log1(){
		$sql = "SELECT *
		FROM log 
		WHERE log_status = 1";
		$query = $this->db->query($sql);	
		return $query;
	}

	function get_log2(){
		$sql = "SELECT *
		FROM log
		WHERE log_status = 2";
		$query = $this->db->query($sql);	
		return $query;
	}

	function add_log(){
		$sql = "INSERT INTO log (log_id,log_mem_id,log_ch_id,log_status)
		VALUES(?,?,?,?)";
		$this->db->query($sql, array('',$this->mem_number,$this->log_ch_id,'1'));
	}

	function add_log2(){
		$sql = "INSERT INTO log (log_id,log_mem_id,log_ch_id,log_status)
		VALUES(?,?,?,?)";
		$this->db->query($sql, array('',$this->mem_number,$this->log_ch_id,'2'));
	}
	


	function admin_ch(){
		$sql = "UPDATE topic 
				SET	tp_status = ?
				WHERE tp_id = 1";	
		$this->db->query($sql, array($this->tp_status));
	}

	function admin_sum(){
		$sql = "SELECT log_ch_id,ch_name,COUNT(log_mem_id)  as sum
				FROM log
				LEFT JOIN choice
				ON log_ch_id = ch_id
				WHERE log_status = ?
				GROUP BY log_ch_id
				ORDER BY sum DESC
				";
		$query = $this->db->query($sql, array($this->log_status));
		return $query;
	}
} 

?>
