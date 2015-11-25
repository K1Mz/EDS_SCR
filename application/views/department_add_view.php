<!--
  Name   : department_เพิ่ม_view.php
  Detail : เป็นหน้า View ใน ส่วน ของ department
  Uodate : สร้างไฟย์ 10/08/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="Dialog-Department"></div>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>เพิ่ม ข้อมูลสาขา</h3>
			<br />
			<table class="table table-bordered" style="width:55%; border-spacing:0; margin-left: 220px;">
				<form action="<?php echo site_url('/admincont/insertDep'); ?>" name="frmMain" method="post" enctype="multipart/form-data" target="iframe_target" onSubmit="return Chkdepartment();">
				<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
				<tr>
					<th>
						<label>ชื่อสาขา</label>
						<input type="text" name="departmentName" id="departmentName" value="" class="text ui-widget-content ui-corner-all" maxlength="50" /><span class="help-inline">* ป.ตรีสาขาวิศวกรรมซอฟต์แวร์</span>
					</th>
				</tr>
				<tr>	
					<th>
						<label>รหัสสาขา</label>
					 	<input type="text" name="departmentCode" id="departmentCode" value="" class="text ui-widget-content ui-corner-all" maxlength="6" /><span class="help-inline">* 205101</span>
					</th>
				</tr>
				<tr>
					<td>
					<p class="text-right">
						<input type="submit" name="adddepBtn" class="btn btn-inverse" value="เพิ่ม">
						<?php echo form_close(); ?>
						<a href="<?php echo site_url('/admincont/manageDepartent'); ?>"><button class="btn btn-inverse" Name="backBtn">ย้อนกลับ</button></a>
					</p>
					</td>
				</tr>
				
			</table>

			<p></p>
		</div>

	</div>
</body>
