<!--
  Name   : bookoutcont.php
  Detail : เป็นหน้า Controller ใน ส่วน ของ bookout
  Uodate : สร้างไฟย์ 5/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php
Class Bookout_models extends CI_Model
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
//Selete User
  function useSel()
  {
    $this->db->select('use_id, use_user, use_pass, use_fname, use_lname, use_email, use_status, dep_name ,dep_code');
    $this->db->from('user u');
    $this->db->join('department d','d.dep_id=u.use_dep_id');
    $this->db->limit(1);
    $useq=$this->db->get();
    return $useq->result_array();
  }
//Show Book Out
  function bookoutSel()
  {
    $this->db->select('out_id, out_book_year, out_dep, out_no, out_date_signed, out_title, out_from, out_date_receive, out_date_accept, out_sta, out_doc_w, out_doc_p, out_user_id');
    $this->db->from('bookout');
    $this->db->order_by('out_book_year','asc');
    $bin=$this->db->get();
    return $bin->result_array();
  }
//Search Book Out
  function bookoutSearch($searchID)
  {
    $this->db->select('out_id, out_book_year, out_dep, out_no, out_date_signed, out_title, out_from, out_date_receive, out_date_accept, out_sta, out_doc_w, out_doc_p, out_user_id');
    $this->db->from('bookout');
    $this->db->order_by('out_book_year, out_no','asc');
    $result = array('out_title' => $searchID, 'out_dep' => $searchID, 'out_no' => $searchID, 'out_date_signed' => $searchID, 'out_book_year' => $searchID);
    $this->db->or_like($result);
    $bout=$this->db->get();
    return $bout->result_array();
  }
//Insert Book Out
  function addbookDB($out_dep, $out_no, $out_date_signed, $out_title, $out_from, $out_user_id, $out_doc_w)
  {
    $dmS=substr($out_date_signed,0,6);
    $yS=substr($out_date_signed,6,4);
    $yearS = $yS-543;
    $mS = substr($out_date_signed,3,2);
    $dateTypeS = $dmS."".$yearS;
    $datetimeS = DateTime::createFromFormat('d/m/yy',$dateTypeS);
    $dateSig = $datetimeS->format('Y-m-d');

    $text2 = substr($out_date_signed,6,4);

    if($mS>=6&&$mS<=12){
      $text2++;
    }

    $newBook=array(
      'out_book_year'=>$text2,
      'out_dep'=>$out_dep,
      'out_no'=>$out_no,
      'out_title'=>$out_title,
      'out_from'=>$out_from,
      'out_date_signed'=>$dateSig,
      'out_user_id'=>$out_user_id,
      'out_doc_w'=>$out_doc_w

    );
    $this->db->insert('bookout',$newBook);
    redirect('/bookoutcont/bookOut');
  }
//Edit Book Out
  function bookoutedit($out_id)
  {
    $this->db->select('out_id, out_book_year, out_dep, out_no, out_date_signed, out_title, out_from, out_date_receive, out_date_accept, out_sta, out_doc_w, out_doc_p, out_user_id');
    $this->db->from('bookout');
    $this->db->where('out_id',$out_id);
    $upq=$this->db->get();
    return $upq->result_array($out_id);
  }
//Update Book out 1st
  function updateBookout1DB($out_id)
  {
    $out_date_receive=$this->input->post('dateRec');

    $dmS=substr($out_date_receive,0,6);
    $yS=substr($out_date_receive,6,4);
    $yearS = $yS-543;
    $dateTypeS = $dmS."".$yearS;
    $datetimeS = DateTime::createFromFormat('d/m/yy',$dateTypeS);
    $dateSig = $datetimeS->format('Y-m-d');

    $depUp1=array(
      'out_date_receive'=>$dateSig,
    );
    $this->db->where('out_id',$out_id);
    $this->db->update('bookout',$depUp1);
    redirect('/bookoutcont/bookOut');
  }
//Upgate Book out 2rd
  function updateBookout2DB($out_id, $out_date_accept, $out_sta, $out_doc_p)
  {

    $dmS=substr($out_date_accept,0,6);
    $yS=substr($out_date_accept,6,4);
    $yearS = $yS-543;
    $dateTypeS = $dmS."".$yearS;
    $datetimeS = DateTime::createFromFormat('d/m/yy',$dateTypeS);
    $dateSig = $datetimeS->format('Y-m-d');

    $depUp2=array(
      'out_date_accept'=>$dateSig,
      'out_sta'=>$out_sta,
      'out_doc_p'=>$out_doc_p
    );
    $this->db->where('out_id',$out_id);
    $this->db->update('bookout',$depUp2);
    redirect('/bookoutcont/bookOut');
  }
}
?>
