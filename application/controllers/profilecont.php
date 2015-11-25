<!--
  Name   : bookincont.php
  Detail : เป็นหน้า Controller ใน ส่วน ของ bookin
  Uodate : สร้าง Class 18/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profilecont extends CI_Controller {
function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
      $this->load->helper('html');
      $this->load->helper('url');
      $this->load->helper('download');
      $this->load->database();
      $this->load->helper(array('form'));
      $this->load->library('form_validation');
      $this->load->library('upload');

  }
//  Profile
  public function profile()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['id'] = $session_data['use_id'];
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $data['fname'] = $session_data['use_fname'];
          $data['lname'] = $session_data['use_lname'];
          $data['email'] = $session_data['use_email'];
          $data['depname'] = $session_data['dep_name'];
          $data['grpname'] = $session_data['grp_name'];

          $this->load->view('main',$data);

          $this->load->model('profile_models');
          $proSdt['proq'] = $this->profile_models->proSel();

          $this->load->view('profile_view',$proSdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
// Edit Profile
  public function editprofile($use_id)
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['id'] = $session_data['use_id'];
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $data['fname'] = $session_data['use_fname'];
          $data['lname'] = $session_data['use_lname'];
          $data['email'] = $session_data['use_email'];
          $data['depname'] = $session_data['dep_name'];
          $data['depcode'] = $session_data['dep_code'];
          $data['grpname'] = $session_data['grp_name'];
          $this->load->view('main',$data);

          $this->load->model('profile_models');
          $proSdt['useE'] = $this->profile_models->proEditSel($use_id);
          $this->load->model('management_models');
          $proSdt['depq'] = $this->management_models->listdep();

          $this->load->view('profile_edit_view',$proSdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
  public function updatePro($use_id)
  {
    $this->load->model('profile_models');
    if( $this->input->post('editproBtn')!=null)
      {
        $this->profile_models->editproDB($use_id);
      }
  }
}

?>