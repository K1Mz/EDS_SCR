<!--
  Name   : admin.php
  Detail : เป็นหน้า Models ใน ส่วน ของ ผู้ใช้ทั้งหมด
  Uodate : สร้างไฟย์ 04/09/2556
         : สร้าง Method 05/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<?php
Class User extends CI_Model
{
 function login($username, $password)
  {
    $this->db->select('use_id, use_user, use_pass, use_dep_id, use_fname, use_lname, use_email, use_status, dep_name, dep_code, grp_name');
    $this->db->from('user u');
    $this->db->join('department d','d.dep_id=u.use_dep_id');
    $this->db->join('grops g','g.grp_id=u.use_grp_id');
    $this->db->where('use_user', $username);
    $this->db->where('use_pass', $password);
    $this->db->limit(1);

    $query = $this -> db -> get();

    if($query -> num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }
}
?>
