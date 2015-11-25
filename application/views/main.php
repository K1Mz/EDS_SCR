<!--
  Name   : main.php
  Detail : เป็นหน้า View ใน ส่วน ของ main
           ทำหน้าที่ในการแยก การทำงานของผู้ใช้
  Uodate : สร้างไฟย์ 15/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
    <div id="menu_content">
      <div id="menu_site">
        <h3>เมนู</h3>
          <h5>ยินดีต้อนรับ  <?php echo $username; ?></h5>
        <?php
          if($status=="admin")
          {
        ?>
          <ul id="menu_select">
            <li><a href="<?php echo site_url('/profilecont/profile'); ?>">ข้อมูลส่วนตัว</a></li>
            <li><a href="<?php echo site_url('/admincont/manageMent'); ?>">จัดการข้อมูลพื้นฐาน</a></li>
            <li><a href="<?php echo site_url('/bookincont/bookIn'); ?>">หนังสือเข้า</a></li>
            <li><a href="<?php echo site_url('/bookoutcont/bookOut'); ?>">หนังสือออก</a></li>
            <li><a href="<?php echo site_url('/logincont/logOut'); ?>">ออกจากระบบ</a></li>
          </ul>
        <?php
          }
          else if($status=="user")
          {
        ?>
          <ul id="menu_select">
            <li><a href="<?php echo site_url('/profilecont/profile'); ?>">ข้อมูลส่วนตัว</a></li>
            <li><a href="<?php echo site_url('/bookincont/bookIn'); ?>">หนังสือเข้า</a></li>
            <li><a href="<?php echo site_url('/bookoutcont/bookOut'); ?>">หนังสือออก</a></li>
            <li><a href="<?php echo site_url('/logincont/logOut'); ?>">ออกจากระบบ</a></li>
          </ul>
        <?php
          }
          ?>      
          
      </div>
    </div>

</body>
