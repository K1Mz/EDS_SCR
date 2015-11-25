<!--
  Name   : group_add_view.php
  Detail : เป็นหน้า View เพิ่ม ใน ส่วน ของ group
  Uodate : สร้างไฟย์ 28/08/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="Dialog-Group"></div>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>เพิ่ม ฝ่ายการทำงาน</h3>
			<br />
			<table class="table table-bordered" style="width:55%; border-spacing:0; margin-left: 220px;">
				<form action="<?php echo site_url('/admincont/insertGrp'); ?>" name="frmMain" method="post" enctype="multipart/form-data" target="iframe_target" onSubmit="return Chkgroup();">
				<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
				<tr>
					<th>
						<label>ฝ่ายการทำงาน</label>
						<input type="text" name="gropName" id="gropName" value="" class="text ui-widget-content ui-corner-all" maxlength="50" /><span class="help-inline"></span>
					</th>
				</tr>
				<tr>
					<td>
					<p class="text-right">
						<input type="submit" name="addgrpBtn" class="btn btn-inverse" value="เพิ่ม">
						<?php echo form_close(); ?>
						<a href="<?php echo site_url('/admincont/manageGrop'); ?>"><button class="btn btn-inverse" Name="backBtn">ย้อนกลับ</button></a>
					</p>
					</td>
				</tr>
				
			</table>

			<p></p>
		</div>

	</div>
</body>
