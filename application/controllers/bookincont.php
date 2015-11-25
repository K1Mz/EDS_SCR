<!--
  Name   : bookincont.php
  Detail : เป็นหน้า Controller ใน ส่วน ของ bookin
  Uodate : สร้างไฟย์ 04/09/2556
         : สร้าง Class 05/09/2556
         : แก้ไข Method 14/09/2556
         : แก้ไข Method 17/09/2556
         : แก้ไข Method 22/09/2556
         : แก้ไข Method 28/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bookincont extends CI_Controller {
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
      $this->load->library('email');
  }
// Book IN
  public function bookIn()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $data['depcode'] = $session_data['dep_code'];
          $this->load->view('main',$data);

          $this->load->model('bookin_models');
          $bookSdt['bin'] = $this->bookin_models->bookinSel();
          $this->load->view('bookin_view',$bookSdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
// Search Book In
  public function bookinSearch()
  {
    if($session_data = $this->session->userdata('logged_in'))
        {
          $bookSdt['username'] = $session_data['use_user'];
          $bookSdt['status'] = $session_data['use_status'];
          $bookSdt['depcode'] = $session_data['dep_code'];
    $searchID = $this->input->post("searchID");
    
    $this->load->model('bookin_models');
    $bookSdt['rs'] = $this->bookin_models->bookinSearch($searchID);
    
    $this->load->view('searchbookin_div_view',$bookSdt);
    }
      else
        {
          $this->load->view('login_view');
        }
  }
// Show Book In
  public function bookinshowMail()
  {
    if($session_data = $this->session->userdata('logged_in'))
        {
          $bookSdt['username'] = $session_data['use_user'];
          $bookSdt['status'] = $session_data['use_status'];
          $bookSdt['depcode'] = $session_data['dep_code'];
    $searchID = $this->input->post("searchID");
    
    $this->load->model('bookin_models');
    $bookSdt['rs'] = $this->bookin_models->bookinSearch($searchID);
    
    $this->load->view('mailbookin_div_view',$bookSdt);
    }
      else
        {
          $this->load->view('login_view');
        }
  }
// New Book In
  public function newbookIn()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $data['depcode'] = $session_data['dep_code'];
          $this->load->view('main',$data);

          $this->load->view('bookin_add_view');
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
// Insert Book In
  public function addbookIn()
  {
    sleep(3);
    $this->load->model('bookin_models');

    if( $this->input->post('addbookInBtn')!=null)
    {
      $config['upload_path']='./book/bookin/';
      $config['allowed_types']='pdf';
      $config['max_size']='0';

      $this->load->library('upload');
      $this->upload->initialize($config);
      if(isset($_POST['addbookInBtn']))
      {
        if($this->upload->do_upload('uploadIN'))
        {
          $docbook = $this->upload->data();
          $this->bookin_models->addbookDB($_POST['depBook'], $_POST['noBook'], $_POST['dateApp'], $_POST['title'], $_POST['from'], $_POST['dateSig'],
                                          $_POST['adminter'], $_POST['schedule'], $_POST['dateOper'], $_POST['status'], $docbook['file_name']);
        }
      }

      if( ! $this->upload->do_upload('uploadIN'))
      {
        echo '<script type="text/javascript"> alert("กรุณาเลือกไฟล์ pdf") </script>';
        echo '<script>window.top.window.showResult("2");</script>';      
      }
      else
      {
        $this->bookin_models->addbookDB();
        $data = array('upload_data' => $this->upload->data());
        echo '<script type="text/javascript"> alert("Success") </script>';
        echo '<script>window.top.window.showResult("1");</script>';  
      }
    }
  }
// Edit Book In
  public function editBook()
  {
    $this->load->model('bookin_models');

    if( $this->input->post('editbookInBtn')!=null)
    {
      $config['upload_path']='./book/bookin/';
      $config['allowed_types']='pdf';
      $config['max_size']='0';

      $this->load->library('upload');
      $this->upload->initialize($config);
      if(isset($_POST['editbookInBtn']))
      {
        if($this->upload->do_upload('uploadIN'))
        {
          $docbook = $this->upload->data();
          $this->bookin_models->addbookDB($_POST['depBook'], $_POST['noBook'], $_POST['dateApp'], $_POST['title'], $_POST['from'], $_POST['dateSig'],
                                          $_POST['adminter'], $_POST['schedule'], $_POST['dateOper'], $_POST['status'], $docbook['file_name']);
        }
      }

      if( ! $this->upload->do_upload('uploadIN'))
      {
        echo '<script type="text/javascript"> alert("กรุณาเลือกไฟล์ pdf") </script>';
              redirect('bookincont/newbookIn','refresh');
      }
      else
      {
        $this->bookin_models->addbookDB();
        $data = array('upload_data' => $this->upload->data());
      }
    }
  }
// Checkbox Function
  public function checkbox()
  {
    if( $this->input->post('sentBtn'))
    {
      $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $data['depcode'] = $session_data['dep_code'];
          $this->load->view('main',$data);

          $sents=$this->input->post('sens');
          for($i=0;$i<sizeof($sents);$i++)
          {
          $this->load->model('management_models');
          $bookSent['grpq'] = $this->management_models->listgrp();
          $this->load->model('bookin_models');
          $bookSent['bins'] = $this->bookin_models->bookinSen($sents[$i]);
          $this->load->view('bookin_sent_view',$bookSent);
          }
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
    }
    if( $this->input->post('delBtn'))
    {
      $dat=$this->input->post('dels');
      for($i=0;$i<sizeof($dat);$i++)
      {
        //printf($dat[$i]);
        $this->load->model('bookin_models');
        $this->bookin_models->deletebookin($dat[$i]);
      }
      redirect('/bookincont/bookIn');
    }
  }
// Delete
  public function chackbookinDel()
  {
    $dat=$this->input->post('dels');
    for($i=0;$i<sizeof($dat);$i++)
    {
      //printf($dat[$i]);
      $this->load->model('bookin_models');
      $this->bookin_models->deletebookin($dat[$i]);
    }
    redirect('/bookincont/bookIn');
  }
// Mail
  public function chackbookinSent()
  { 
          $sents=$this->input->post('sens');
          for($i=0;$i<sizeof($sents);$i++)
          {
            printf($sents[$i]);
            $this->load->model('bookin_models');
            $this->bookin_models->bookinSen($sents[$i]);
          }
  }
// Sent Mail
  public function bookinMail()
  {
      $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['status'] = $session_data['use_status'];
          $data['depcode'] = $session_data['dep_code'];
          $this->load->view('main',$data);

          $sents=$this->input->post('sens');
          for($i=0;$i<sizeof($sents);$i++)
          {
          $this->load->model('management_models');
          $bookSent['grpq'] = $this->management_models->listgrp();
          $this->load->model('bookin_models');
          $bookSent['bins'] = $this->bookin_models->bookinSen($sents[$i]);
          $this->load->view('bookin_sent_view',$bookSent);
          }
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  } 
  public function bookinSent($in_id)
  {
    if( $this->input->post('sentBtn'))
    {
    //$this->load->model('bookin_models');
    //$maillist['mail'] = $this->bookin_models->bookinSel();
    $this->load->model('bookin_models');
    $bookSents['bins'] = $this->bookin_models->bookinSen($in_id);
    $msg = $this->load->view('bookin_mail_view',$bookSents,true);

    $this->email->from('edoc.sicent@sicent.com','Science and technology'); // ชื่อผู้ส่ง
    $this->email->to('nawakornkunasawat@gmail.com'); // ชื่อผู้รับ
    $this->email->subject('ระบบสารบรรณอิเล็กทรอนิกส์ สำหรับคณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยนอร์ท-เชียงใหม่'); // หัวข้อจดหมาย
    $this->email->set_mailtype("html");
    $this->email->message($msg); // ข้อความของจดหมาย
    $this->email->send(); //ส่งอีเมล์
    echo $this->email->print_debugger(); //แสดงข้อความหรือ log การส่งอีเมล์ออกทางเบราเซอร์
    }    
  }
}

?>