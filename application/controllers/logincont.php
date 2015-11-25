<!--
  Name   : logincont.php
  Detail : เป็นหน้า Controller ใน ส่วน ของ bookin
  Uodate : สร้างไฟย์ 04/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Logincont extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function login()
  {
    if($this->session->userdata('logged_in'))
    {
      redirect('');
    }
    else
    {
      //If no session, redirect to login page
      redirect('');
    }
  }
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('');
  }

}

?>

