<!--
  Name   : management_models.php
  Detail : เป็นหน้า Models ใน ส่วน ของ management
  Uodate : สร้างไฟย์ 04/09/2556
         : สร้าง Method 05/09/2556
         : แก้ไข Method 15/09/2556
         : แก้ไข Method 20/09/2556
         : แก้ไข Method 28/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php
Class Management_models extends CI_Model
{
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
//Department
  function depSel()
  {
    $this->db->select('dep_id, dep_name, dep_code');
    $this->db->from('department');
    $this->db->order_by('dep_code','asc');
    $dep=$this->db->get();
    return $dep->result_array();
  }
  function addDepDB()
  {
    $dep_id=$this->input->post('dep_id');
    $dep_name=$this->input->post('departmentName');
    $dep_code=$this->input->post('departmentCode');
    $depAdd=array(
      'dep_name'=>$dep_name,
      'dep_code'=>$dep_code
    );
    $this->db->insert('department',$depAdd);
    redirect('/admincont/manageDepartent');
  }
  function editSel($dep_id)
  {
    $this->db->select('dep_id, dep_name, dep_code');
    $this->db->from('department');
    $this->db->where('dep_id',$dep_id);
    $depE=$this->db->get();
    return $depE->result_array($dep_id);    
  }
  function editDepDB($dep_id)
  {
    $dep_name=$this->input->post('departmentName');
    $dep_code=$this->input->post('departmentCode');
    $depEdit=array(
      'dep_name'=>$dep_name,
      'dep_code'=>$dep_code
    );
    $this->db->where('dep_id',$dep_id);
    $this->db->update('department',$depEdit);
    redirect('/admincont/manageDepartent');
  }
//Grops
  function grpSel()
  {
    $this->db->select('grp_id, grp_name');
    $this->db->from('grops');
    $grp=$this->db->get();
    return $grp->result_array();
  }
  function addGrpDB()
  {
    $grp_id=$this->input->post('grp_id');
    $grp_name=$this->input->post('gropName');
    $grpAdd=array(
      'grp_name'=>$grp_name
    );
    $this->db->insert('grops',$grpAdd);
    redirect('/admincont/manageGrop');
  }
 function editGepSel($grp_id)
  {
    $this->db->select('grp_id, grp_name');
    $this->db->from('grops');
    $this->db->where('grp_id',$grp_id);
    $grpE=$this->db->get();
    return $grpE->result_array($grp_id);    
  }
  function editGrpDB($grp_id)
  {
    $grp_name=$this->input->post('gropName');
    $grpEdit=array(
      'grp_name'=>$grp_name
    );
    $this->db->where('grp_id',$grp_id);
    $this->db->update('grops',$grpEdit);
    redirect('/admincont/manageGrop');
  }
//User
  function useSel()
  {
    $this->db->select('use_id, use_user, use_pass, use_fname, use_lname, use_email, use_status, dep_name ,dep_code ,grp_name');
    $this->db->from('user u');
    $this->db->join('department d','d.dep_id=u.use_dep_id');
    $this->db->join('grops g','g.grp_id=u.use_grp_id');
    $this->db->order_by('use_status','asc');
    $useq=$this->db->get();
    return $useq->result_array();
  }
  function listdep()
  {
    $this->db->select('dep_id, dep_name, dep_code');
    $this->db->from('department');
    $listq = $this->db->get();
    $option = array();
    $option[] = 'PLEASE SELECT DEPARTMENT'; 
    foreach ($listq->result_array() as $row) 
    {
      $option[$row['dep_id']]=$row['dep_name'];
    }
    return $option;
  }
  function listdepE($dep_id)
  {
    $this->db->select('dep_id, dep_name, dep_code');
    $this->db->from('department');
    $listq = $this->db->get();
    $option = array();
    $option[] = 'PLEASE SELECT DEPARTMENT'; 
    foreach ($listq->result_array() as $row) 
    {
      $option[$row['dep_id']]=$row['dep_name'];
    }
    return $option;
  }
  function listgrp()
  {
    $this->db->select('grp_id, grp_name');
    $this->db->from('grops');
    $listgq = $this->db->get();
    $option1 = array();
    $option1[0] = 'PLEASE SELECT GROP'; 
    foreach ($listgq->result_array() as $rowg) 
    {
      $option1[$rowg['grp_id']]=$rowg['grp_name'];
    }
    return $option1;
  }
  function addUseDB()
  {
    $use_id=$this->input->post('use_id');
    $use_user=$this->input->post('userName');
    $use_pass=$this->input->post(('userPass'));
    $use_dep_id=$this->input->post('depq');
    $use_grp_id=$this->input->post('grpq');
    $use_fname=$this->input->post('firstName');
    $use_lname=$this->input->post('lastName');
    $use_email=$this->input->post('email');
    $use_status=$this->input->post('status');

    $md5 = md5($use_pass);

    $useAdd=array(
      'use_id'=>$use_id,
      'use_user'=>$use_user,
      'use_pass'=>$md5,
      'use_dep_id'=>$use_dep_id,
      'use_grp_id'=>$use_grp_id,
      'use_fname'=>$use_fname,
      'use_lname'=>$use_lname,
      'use_email'=>$use_email,
      'use_status'=>$use_status
    );
    $this->db->insert('user',$useAdd);
    redirect('/admincont/manageUser');
  }
  function editSelUse($use_id)
  {
    $this->db->select('use_id, use_user, use_pass, use_dep_id, use_grp_id, use_fname, use_lname, use_email, use_status, dep_id, dep_name, grp_id, grp_name');
    $this->db->from('user u');
    $this->db->join('department d','d.dep_id=u.use_dep_id');
    $this->db->join('grops g','g.grp_id=u.use_grp_id');
    $this->db->where('use_id',$use_id);
    $useE=$this->db->get();
    return $useE->result_array($use_id);    
  }
  function editUseDB($use_id)
  {
    $use_user=$this->input->post('userName');
    $use_dep_id=$this->input->post('depq');
    $use_grp_id=$this->input->post('grpq');
    $use_fname=$this->input->post('firstName');
    $use_lname=$this->input->post('lastName');
    $use_email=$this->input->post('email');
    $use_status=$this->input->post('status');

    $useEdit=array(
      'use_user'=>$this->input->post('userName'),
      'use_dep_id'=>$this->input->post('depq'),
      'use_grp_id'=>$this->input->post('grpq'),
      'use_fname'=>$this->input->post('firstName'),
      'use_lname'=>$this->input->post('lastName'),
      'use_email'=>$this->input->post('email'),
      'use_status'=>$this->input->post('status')
    );
    $this->db->where('use_id',$use_id);
    $this->db->update('user',$useEdit);
    redirect('/admincont/manageUser');
  }
}
?>
