<!--
  Name   : login_view.php
  Detail : เป็นหน้า View ใน ส่วน ของ login
  Uodate : สร้างไฟย์ 28/08/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
<!-- Work area -->
<div id="dialog"></div>

  <div id="login_content">

      <div id="login_from">
          <br/>
            <?php echo validation_errors(); ?>
            <?php echo form_open('chackuser'); ?>
            <label for="username">ชื่อผู้ใช้:<input type="text" size="20" id="username" name="username"/></label>
            <label for="password">รหัสผ่าน:<input type="password" size="20" id="passowrd" name="password"/></label>
        <button class="btn btn-info" align="center" id="login">Login</button>
      </div>
  </div>
</body>
