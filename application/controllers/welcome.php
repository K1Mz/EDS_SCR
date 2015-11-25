<!--
  Name   : bookincont.php
  Detail : เป็นหน้า Controller ใน ส่วน ของ index
  Uodate : สร้างไฟย์ 04/09/2556
         : สร้าง Class 05/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->helper(array('form'));
		$this->load->library('encrypt','form_validation');
	}
	public function index()
	{
		$this->load->view('header');
			if($session_data = $this->session->userdata('logged_in'))
				{
					$data['id'] = $session_data['use_id'];
					$data['username'] = $session_data['use_user'];
					$data['fname'] = $session_data['use_fname'];
					$data['lname'] = $session_data['use_lname'];
					$data['status'] = $session_data['use_status'];

					$this->load->view('main',$data);
					$this->load->view('main_work');
				}
			else
				{
					$this->load->view('login_view');
				}
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */