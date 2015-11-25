<!--
  Name   : user_add_view.php
  Detail : เป็นหน้า View เพิ่มข้อมูล ใน ส่วน ของ user
  Uodate : สร้างไฟย์ 15/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="Dialog-User"></div>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>เพิ่ม ข้อมูลผู้ใช้</h3>
			<br />
			<table class="table table-bordered" style="width:60%; border-spacing:0; margin-left: 225px;">
				<form action="<?php echo site_url('/admincont/insertUse'); ?>" name="frmMain" method="post" enctype="multipart/form-data" target="iframe_target" onSubmit="return Chkuser();">
				<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
				<tr>
					<th>
						<label>ชื่อผู้ใช้&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="userName" id="userName" class="text ui-widget-content ui-corner-all" maxlength="20"/><span class="help-inline">* ชื่อเข้าใช้งาน</span></label>
					</th>
				</tr>
				<tr>	
					<th>
						<label>รหัสผู้ใช้&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="password" name="userPass" id="userPass" value="" class="text ui-widget-content ui-corner-all" maxlength="20"/><span class="help-inline">* รหัสเข้าใช้งาน</span></label>
					</th>
				</tr>
				<tr>
					<th>
						<?php 
						echo "<label>สาขาวิชา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
						echo form_dropdown('depq', $depq, '', 'id="depq"');
						echo "<span class='help-inline'>* สาขาวิชา</span></label>";
						 ?>
					</th>
				</tr>
				<tr>
					<th>
						<?php 
						echo "<label>ฝ่ายการทำงาน&nbsp;: ";
						echo form_dropdown('grpq', $grpq, '', 'id="grpq"'); 
						echo "<span class='help-inline'>* ฝ่ายการทำงาน</span></label>";
						 ?>
					</th>
				</tr>
				<tr>
					<th>
						<label>ชื่อ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="firstName" id="firstName" value="" class="text ui-widget-content ui-corner-all" maxlength="20"/><span class="help-inline">* ชื่อ</span></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>นามสกุล&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="lastName" id="lastName" value="" class="text ui-widget-content ui-corner-all" maxlength="20"/><span class="help-inline">* นามสกุล</span></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all"  maxlength=""/><span class="help-inline">* E-mail</span></label>
					</th>
				</tr>
				<tr>
					<th>
						<label >สถานะ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:	
							<label class="radio" style="margin-left: 100px;"><input type="radio" name="status" id="optionsRadios1" value="user" checked>User</label>
							<label class="radio" style="margin-left: 100px;"><input type="radio" name="status" id="optionsRadios2" value="admin">Admin</label>
						</label>
					</th>
				</tr>
				<tr>
					<td>
					<p class="text-right">
						<input type="submit" name="adduseBtn" class="btn btn-inverse" value="เพิ่ม">
						<?php echo form_close(); ?>
						<a href="<?php echo site_url('/admincont/manageUser'); ?>"><button class="btn btn-inverse" Name="backBtn">ย้อนกลับ</button></a>
					</p>
					</td>
				</tr>
				
			</table>

			<p></p>
		</div>

	</div>

</body>
