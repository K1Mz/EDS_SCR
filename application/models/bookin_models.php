<!--
  Name   : bookin_models.php
  Detail : เป็นหน้า Models ใน ส่วน ของ bookin
  Uodate : สร้างไฟย์ 04/09/2556
         : สร้าง Method 05/09/2556
         : แก้ไข Method 28/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php
Class Bookin_models extends CI_Model
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
//Show Book In
  function bookinSel()
  {
    $this->db->select('in_id, in_book_year, in_dep, in_no, in_date_approved, in_title, in_from, in_date_signed, in_adminter, in_schedule, in_date_operated, in_sta, in_doc');
    $this->db->from('bookin');
    $this->db->order_by('in_date_signed','asc');
    $bin=$this->db->get();
    return $bin->result_array();
  }
//Search Book In
  function bookinSearch($searchID)
  {
    $this->db->select('in_id, in_book_year, in_dep, in_no, in_date_approved, in_title, in_from, in_date_signed, in_adminter, in_schedule, in_date_operated, in_sta, in_doc');
    $this->db->from('bookin');
    $this->db->order_by('in_date_signed','asc');
    $result = array('in_title' => $searchID, 'in_dep' => $searchID, 'in_no' => $searchID, 'in_date_signed' => $searchID, 'in_book_year' => $searchID);
    $this->db->or_like($result);
    $rs=$this->db->get();
    return $rs->result_array();
  }
//Sent Email
  function bookinSen($in_id)
  {
    $this->db->select('in_id, in_book_year, in_dep, in_no, in_date_approved, in_title, in_from, in_date_signed, in_adminter, in_schedule, in_date_operated, in_sta, in_doc');
    $this->db->from('bookin');
    $this->db->where('in_id',$in_id);
    //$binsen = array('in_id' => $in_id);
    //$this->db->where($binsen);
    $bins=$this->db->get();
    return $bins->result_array($in_id);
  }
//Insert Book In
  function addbookDB($in_dep, $in_no, $in_date_approved, $in_title, $in_from, $in_date_signed, $in_adminter, $in_schedule, $in_date_operated, $in_sta, $in_doc)
  {

    $dmA=substr($in_date_approved,0,6);
    $yA=substr($in_date_approved,6,4);
    $yearA = $yA-543;
    $dateTypeA = $dmA."".$yearA;
    $datetimeA = DateTime::createFromFormat('d/m/yy',$dateTypeA);

    $dateApp = $datetimeA->format('Y-m-d');

    $dmS=substr($in_date_signed,0,6);
    $yS=substr($in_date_signed,6,4);
    $yearS = $yS-543;
    $mS = substr($in_date_signed,3,2);
    $dateTypeS = $dmS."".$yearS;
    $datetimeS = DateTime::createFromFormat('d/m/yy',$dateTypeS);
    $dateSig = $datetimeS->format('Y-m-d');

    $dmO=substr($in_date_operated,0,6);
    $yO=substr($in_date_operated,6,4);
    $yearO = $yO-543;
    $dateTypeO = $dmO."".$yearO;
    $datetimeO = DateTime::createFromFormat('d/m/yy',$dateTypeO);
    $dateOpe = $datetimeO->format('Y-m-d');

    $text2 = substr($in_date_signed,6,4);

    if($mS>=6&&$mS<=12){
      $text2++;
    }

    $newBook=array(
      'in_book_year'=>$text2,
      'in_dep'=>$in_dep,
      'in_no'=>$in_no,
      'in_date_approved'=>$dateApp,
      'in_title'=>$in_title,
      'in_from'=>$in_from,
      'in_date_signed'=>$dateSig,
      'in_adminter'=>$in_adminter,
      'in_schedule'=>$in_schedule,
      'in_date_operated'=>$dateOpe,
      'in_doc'=>$in_doc,
      'in_sta'=>$in_sta
    );
    $this->db->insert('bookin',$newBook);
    redirect('/bookincont/bookIn');
  }
//Edit Book In
  function editbookDB($in_dep, $in_no, $in_date_approved, $in_title, $in_from, $in_date_signed, $in_adminter, $in_schedule, $in_date_operated, $in_sta, $in_doc)
  {

    $dmA=substr($in_date_approved,0,6);
    $yA=substr($in_date_approved,6,4);
    $yearA = $yA-543;
    $dateTypeA = $dmA."".$yearA;
    $datetimeA = DateTime::createFromFormat('d/m/yy',$dateTypeA);

    $dateApp = $datetimeA->format('Y-m-d');

    $dmS=substr($in_date_signed,0,6);
    $yS=substr($in_date_signed,6,4);
    $yearS = $yS-543;
    $mS = substr($in_date_signed,3,2);
    $dateTypeS = $dmS."".$yearS;
    $datetimeS = DateTime::createFromFormat('d/m/yy',$dateTypeS);
    $dateSig = $datetimeS->format('Y-m-d');

    $dmO=substr($in_date_operated,0,6);
    $yO=substr($in_date_operated,6,4);
    $yearO = $yO-543;
    $dateTypeO = $dmO."".$yearO;
    $datetimeO = DateTime::createFromFormat('d/m/yy',$dateTypeO);
    $dateOpe = $datetimeO->format('Y-m-d');

    $text2 = substr($in_date_signed,6,4);

    if($mS>=6&&$mS<=12){
      $text2++;
    }

    $editBook=array(
      'in_book_year'=>$text2,
      'in_dep'=>$in_dep,
      'in_no'=>$in_no,
      'in_date_approved'=>$dateApp,
      'in_title'=>$in_title,
      'in_from'=>$in_from,
      'in_date_signed'=>$dateSig,
      'in_adminter'=>$in_adminter,
      'in_schedule'=>$in_schedule,
      'in_date_operated'=>$dateOpe,
      'in_doc'=>$in_doc,
      'in_sta'=>$in_sta
    );
    $this->db->update('bookin',$editBook);
    redirect('/bookincont/bookIn');
  }
//Delete Book In
  function deletebookin($in_id)
  {
    $this->db->delete('bookin',array('in_id' => $in_id));
  }
}
?>
