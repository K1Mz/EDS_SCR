<!--
  Name   : bookoutcont.php
  Detail : เป็นหน้า Controller ใน ส่วน ของ bookout
  Uodate : สร้างไฟย์ 26/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bookoutcont extends CI_Controller {
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
//  Book OUT
  public function bookOut()
  {

    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['userid'] = $session_data['use_id'];
          $data['status'] = $session_data['use_status'];
          $data['depcode'] = $session_data['dep_code'];

          $this->load->view('main',$data);

          $this->load->model('bookout_models');
          $bookSdt['bit'] = $this->bookout_models->bookoutSel();
          $this->load->view('bookout_view',$bookSdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
// Search Book In
  public function bookoutSearch()
  {
    if($session_data = $this->session->userdata('logged_in'))
        {
          $bookSdt['username'] = $session_data['use_user'];
          $bookSdt['userid'] = $session_data['use_id'];
          $bookSdt['status'] = $session_data['use_status'];
          $bookSdt['depcode'] = $session_data['dep_code'];
    $searchID = $this->input->post("searchID");
    
    $this->load->model('bookout_models');
    $bookSdt['bout'] = $this->bookout_models->bookoutSearch($searchID);
        
    $this->load->view('searchbookout_div_view',$bookSdt);
    }
      else
        {
          $this->load->view('login_view');
        }
  }
// New Book Out
  public function newbookOut()
  {
    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['userid'] = $session_data['use_id'];
          $data['status'] = $session_data['use_status'];
          $data['depcode'] = $session_data['dep_code'];
          $this->load->view('main',$data);

          $this->load->view('bookout_add_view');
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
// Insert Book Out
  public function addbookOut()
  {
    $this->load->model('bookout_models');

    if( $this->input->post('addbookOutBtn')!=null)
    {
      $config['upload_path']='./book/bookout/doc/';
      $config['allowed_types']='doc|docx';
      $config['max_size']='0';

      $this->load->library('upload');
      $this->upload->initialize($config);
      if(isset($_POST['addbookOutBtn']))
      {
        if($this->upload->do_upload('uploadOut'))
        {
          $docbook = $this->upload->data();
          $this->bookout_models->addbookDB($_POST['depBook'], $_POST['noBook'], $_POST['dateSig'], $_POST['title'], $_POST['from'], $_POST['userId'], $docbook['file_name']);
        }
      }

      if(!$this->upload->do_upload('uploadOut'))
      {
        echo '<script type="text/javascript"> alert("plessInPut File") </script>';
              redirect('bookoutcont/newbookOut','refresh');
      }
      else
      {
        $this->bookout_models->addbookDB();
        $data = array('upload_data' => $this->upload->data());
      }
    }
  }
// Delete
  public function bookoutDel($out_id)
  {
    $this->db->delete('bookout',array('out_id' =>$out_id));
    redirect('/bookoutcont/bookOut');
  }
// Update
  public function bookoutupdate($out_id)
  {

    $this->load->view('header');
      if($session_data = $this->session->userdata('logged_in'))
        {
          $data['username'] = $session_data['use_user'];
          $data['userid'] = $session_data['use_id'];
          $data['status'] = $session_data['use_status'];
          $data['depcode'] = $session_data['dep_code'];

          $this->load->view('main',$data);

          $this->load->model('bookout_models');
          $bookSdt['upq'] = $this->bookout_models->bookoutedit($out_id);

          $this->load->view('bookout_update_view',$bookSdt);
        }
      else
        {
          $this->load->view('login_view');
        }
    $this->load->view('footer');
  }
  public function updateOut($out_id)
  {
    $this->load->model('bookout_models');
    if( $this->input->post('update1bookOutBtn')!=null)
      {
        $this->bookout_models->updateBookout1DB($out_id);
      }
    else if( $this->input->post('update2bookOutBtn')!=null)
      {
        $config['upload_path']='./book/bookout/pdf/';
        $config['allowed_types']='pdf';
        $config['max_size']='0';

        $this->load->library('upload');
        $this->upload->initialize($config);
        if(isset($_POST['update2bookOutBtn']))
        {
          if($this->upload->do_upload('uploadOutp'))
          {
            $pdfbook = $this->upload->data();
            $this->bookout_models->updateBookout2DB($out_id, $_POST['dateAcc'], $_POST['status'], $pdfbook['file_name']);
          }
        }

        if( ! $this->upload->do_upload('uploadOutp'))
        {
          echo '<script type="text/javascript"> alert("กรุณาเลือกเป็น pdf doc docx") </script>';
                redirect('bookoutcont/bookoutupdate/'.$this->uri->segment(3),'refresh');
        }
        else
        {
          $this->bookout_models->updateBookout2DB($out_id);
          $data = array('upload_data' => $this->upload->data());
        }
      }
  }
}

?>