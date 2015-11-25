<!--
  Name   : group_edit_view.php
  Detail : เป็นหน้า View แก้ไข ใน ส่วน ของ group
  Uodate : สร้างไฟย์ 28/08/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="Dialog-Group"></div>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>แก้ไข ฝ่ายการทำงาน</h3>
			<br />
			<table class="table table-bordered" style="width:50%; border-spacing:0; margin-left: 225px;">
				<form action="<?php echo site_url('/admincont/updateGrp/'.$this->uri->segment(3)); ?>" name="frmMain" method="post" enctype="multipart/form-data" target="iframe_target" onSubmit="return ChkEditgroup();">
				<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
				<tr>
				<?php
					if(count($grpE)!=0)
					{
				 		foreach ($grpE as $ge)
						{
							echo"<th>";
							echo"<label>ฝ่ายการทำงาน :</label>";
							echo"</th>";
							echo"<th>";
							echo"<input type='text' name='gropName' id='gropName' value=".$ge['grp_name']." class='text ui-widget-content ui-corner-all' maxlength='50' />";
							echo"</th>";
						}
					}
					?>
				</tr>
				<tr>
					<td colspan='2'>
					<p class="text-right">
						<input type="submit" name="editgrpBtn" class="btn btn-inverse" value="แก้ไข">
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
