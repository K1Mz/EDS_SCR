<!--
  Name   : department_edit_view.php
  Detail : เป็นหน้า View เพอ่ม ใน ส่วน ของ department
  Uodate : สร้างไฟย์ 10/08/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="Dialog-Department"></div>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>แก้ไข ข้อมูลสาขา</h3>
			<br />
			<table class="table table-bordered" style="width:50%; border-spacing:0; margin-left: 225px;">
				<form action="<?php echo site_url('/admincont/updateDep/'.$this->uri->segment(3)); ?>" name="frmMain" method="post" enctype="multipart/form-data" target="iframe_target" onSubmit="return ChkEditdepartment();">
				<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
				<tr>
				<?php
					if(count($depE)!=0)
					{
				 		foreach ($depE as $de)
						{
							echo"<th>";
							echo"<label>ชื่อสาขา</label>";
							echo"<input type='text' name='departmentName' id='departmentName' value=".$de['dep_name']." class='text ui-widget-content ui-corner-all' maxlength='50' /><span class='help-inline'>* ป.ตรีสาขาวิศวกรรมซอฟต์แวร์</span>";
							echo"</th>";
							echo"</tr>";
							echo"<tr>";
							echo"<th>";
							echo"<label>รหัสสาขา</label>";
							echo"<input type='text' name='departmentCode' id='departmentCode' value=".$de['dep_code']." class='text ui-widget-content ui-corner-all' maxlength='6' /><span class='help-inline'>* 205101</span>";
							echo"</th>";
						}
					}
					?>
				</tr>
				<tr>
					<td>
					<p class="text-right">
						<input type="submit" name="editdepBtn" class="btn btn-inverse" value="แก้ไข">
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
