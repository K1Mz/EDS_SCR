<!--
  Name   : bookout_add_view.php
  Detail : เป็นหน้า View เพืิ่มข้อมูล ใน ส่วน ของ bookout
  Uodate : สร้างไฟย์ 10/08/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="Dialog-Bookiout"></div>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>เพิ่ม หนังสือออก</h3>
			<br />
			<table class="table table-bordered" style="width:60%; border-spacing:0; margin-left: 225px;">

				<form action="<?php echo site_url('/bookoutcont/addbookOut'); ?>" name="frmMain" method="post" enctype="multipart/form-data" target="iframe_target" onSubmit="return Chkbookout();">
				<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
				<tr>
					<th>
						<label>เลขหนังสือ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						นมช.&nbsp;<input type="hidden" name="depBook" id="depBook" class="text ui-widget-content ui-corner-all input-mini"  maxlength="6" value="<?php echo(''.$depcode.'');?>"/><?php echo(''.$depcode.'');?>&nbsp;/&nbsp;<input type="text" name="noBook" id="noBook" class="text ui-widget-content ui-corner-all input-mini" maxlength="3" value=""/></label>
					</th>
				</tr>
				
				<tr>
					<th>
						<label>วันที่ทำหนังสือ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="dateSig" id="dateSig" class="text ui-widget-content ui-corner-all"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>เรื่อง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="title" id="title" class="text ui-widget-content ui-corner-all" maxlength="20"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>จาก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="from" id="from" class="text ui-widget-content ui-corner-all" maxlength="20"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>อัพโหลด ไฟล์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="file" name="uploadOut" size="20"/></label>
					</th>
				</tr>
				<input type="hidden" name="userId" id="userId" class="text ui-widget-content ui-corner-all input-mini" value="<?php echo(''.$userid.'');?>"/>
				<tr>
					<td>
					<p class="text-right">
						<input type="submit" name="addbookOutBtn" class="btn btn-inverse" value="เพิ่ม">
						<?php echo form_close(); ?>
						<a href="<?php echo site_url('/bookoutcont/bookOut'); ?>"><button class="btn btn-inverse" Name="backBtn">ย้อนกลับ</button></a>
					</p>
					</td>
				</tr>
				
			</table>

			<p></p>
		</div>

	</div>

</body>
