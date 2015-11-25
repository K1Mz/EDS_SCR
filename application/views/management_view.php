<!--
  Name   : management_view.php
  Detail : เป็นหน้า View ใน ส่วน ของ management
  Uodate : สร้างไฟย์ 05/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
    <div id="site_content">

      <div id="content"><!-- work Area -->
        <h3>จัดการข้อมูล</h3>
        <a href="<?php echo site_url('admincont/manageDepartent'); ?>"><button class="btn btn-inverse" id="departmentBtn"><i class="icon-briefcase icon-white"></i>สาขาวิชา</button></a>
        <a href="<?php echo site_url('admincont/manageGrop'); ?>"><button class="btn btn-inverse" id="userBtn"><i class="icon-th-large icon-white"></i>ฝ่ายการทำงาน</button></a>
        <a href="<?php echo site_url('admincont/manageUser'); ?>"><button class="btn btn-inverse" id="userBtn"><i class="icon-user icon-white"></i>ผู้ใช้</button></a>
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
      </div>

    </div>

</body>