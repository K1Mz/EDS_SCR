<!--
  Name   : chackuser.php
  Detail : เป็นหน้า Controller ใน ส่วน ของ chackuser
  Uodate : สร้างไฟย์ 04/09/2556
         : สร้าง Class 05/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chackuser extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);//ตลวดสวบ DB
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == "")
   {
     //Field validation failed.  User redirected to login page
     redirect('', 'refresh');//ทำกลับไปหน้า login
     
   }
   else
   {
     //Go to private area
     redirect('/logincont/login', 'refresh');
   }
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, md5($password));
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'use_id' => $row->use_id,
         'use_user' => $row->use_user,
         'use_pass' => $row->use_pass,
         'use_dep_id' => $row->use_dep_id,
         'use_fname' => $row->use_fname,
         'use_lname' => $row->use_lname,
         'use_email' => $row->use_email,
         'use_status' => $row->use_status,
         'dep_name'=> $row->dep_name,
         'dep_code'=> $row->dep_code,
         'grp_name'=> $row->grp_name
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     echo '<script type="text/javascript"> alert("Username หรือ Password ไม่ถูกต้อง!") </script>';
     return false;
   }
 }
}
