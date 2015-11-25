<!--
  Name   : admincont.php
  Detail : เป็นหน้า Controller ใน ส่วน ของ admin
  Uodate : สร้างไฟย์ 04/09/2556
         : สร้าง Class 05/09/2556
         : แก้ไข Method 14/09/2556
         : แก้ไข Method 20/09/2556
         : แก้ไข Method 28/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admincont extends CI_Controller {
function __construct()
{
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('html');
    $this->load->helper('url');
    $this->load->database();
    $this->load->helper(array('form'));
    $this->load->library('form_validation');
}
// Management
  public function manageMent()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $this->load->view('main',$data);
          $this->load->view('management_view');
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
// ManagementDepartent
  public function manageDepartent()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $this->load->view('main',$data);
          
          $this->load->model('management_models');
          $depSdt['dep'] = $this->management_models->depSel();

          $this->load->view('department_manage_view',$depSdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
// Add Department
  public function addDep()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $this->load->view('main',$data);

          $this->load->view('department_add_view');
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
  public function insertDep()
  { 
    $this->load->model('management_models');
    if( $this->input->post('adddepBtn')!=null)
    {
      $this->management_models->addDepDB();
    }
  }
// Edit Department
  public function editDep($dep_id)
  { 
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $this->load->view('main',$data);

          $this->load->model('management_models');
          $depEdt['depE'] = $this->management_models->editSel($dep_id);

          $this->load->view('department_edit_view',$depEdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
  public function updateDep($dep_id)
  {
    $this->load->model('management_models');
    if( $this->input->post('editdepBtn')!=null)
      {
        $this->management_models->editDepDB($dep_id);
      }
  }
// Delete Department
  public function deleteDep($dep_id)
  { 
    $this->db->delete('department',array('dep_id' =>$dep_id));
    redirect('/admincont/manageDepartent');
  }
// ManageUser
  public function manageUser()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $this->load->view('main',$data);

          $this->load->model('management_models');
          $useSdt['useq'] = $this->management_models->useSel();
          
          $this->load->view('user_manage_view',$useSdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
// Add User
  public function addUse()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $this->load->view('main',$data);

          $this->load->model('management_models');
          $depS['depq'] = $this->management_models->listdep();
          
          $depS['grpq'] = $this->management_models->listgrp();

          $this->load->view('user_add_view',$depS);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
  public function insertUse()
  { 
    $this->load->model('management_models');

    if( $this->input->post('adduseBtn')!=null)
    {
      $this->management_models->addUseDB();
    }
  }
// Edit User
  public function editUse($use_id)
  { 
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $this->load->view('main',$data);

          $this->load->model('management_models');
          $useEdt['useE'] = $this->management_models->editSelUse($use_id);
          $useEdt['depq'] = $this->management_models->listdep();
          $useEdt['grpq'] = $this->management_models->listgrp();

          $this->load->view('user_edit_view',$useEdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
  public function updateUse($use_id)
  {
    $this->load->model('management_models');
    if( $this->input->post('edituseBtn')!=null)
      {
        $this->management_models->editUseDB($use_id);
      }
  }
// Delete User
  public function deleteUse($use_id)
  { 
    $this->db->delete('user',array('use_id' =>$use_id));
    redirect('/admincont/manageUser');
  }
// ManagementGrop
  public function manageGrop()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $this->load->view('main',$data);
          
          $this->load->model('management_models');
          $gepSdt['grp'] = $this->management_models->grpSel();

          $this->load->view('group_manage_view',$gepSdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
// Add Grop
  public function addGrp()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $this->load->view('main',$data);

          $this->load->view('group_add_view');
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
  public function insertGrp()
  { 
    $this->load->model('management_models');
    if( $this->input->post('addgrpBtn')!=null)
    {
      $this->management_models->addGrpDB();
    }
  }
// Edit Department
  public function editGrp($grp_id)
  { 
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $this->load->view('main',$data);

          $this->load->model('management_models');
          $grpEdt['grpE'] = $this->management_models->editGepSel($grp_id);

          $this->load->view('group_edit_view',$grpEdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
  public function updateGrp($grp_id)
  {
    $this->load->model('management_models');
    if( $this->input->post('editgrpBtn')!=null)
      {
        $this->management_models->editGrpDB($grp_id);
      }
  }
// Delete Department
  public function deleteGrp($grp_id)
  {
    $this->db->delete('grops',array('grp_id' =>$grp_id));
    redirect('/admincont/manageGrop');
  }
}

?>