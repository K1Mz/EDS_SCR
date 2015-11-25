<body>
	<div id="Dialog-Bookin"></div>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>เพิ่ม ข้อมลหนังสือเข้า</h3>
			<br />
			<table class="table table-bordered" style="width:60%; border-spacing:0; margin-left: 225px;">
				<form action="<?php echo site_url('/bookincont/addbookIn'); ?>" name="frmMain" method="post" enctype="multipart/form-data" target="iframe_target" onSubmit="return ChkSubmit();">
				<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
				<tr>
					<th>
						<label>เลขหนังสือ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						นมช.&nbsp;<input type="hidden" name="depBook" id="depBook" class="text ui-widget-content ui-corner-all input-mini"  maxlength="6" value="<?php echo(''.$depcode.'');?>"/><?php echo(''.$depcode.'');?>&nbsp;/&nbsp;<input type="text" name="noBook" id="noBook" class="text ui-widget-content ui-corner-all input-mini" maxlength="3" value=""/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>วันที่รับเอกสาร&nbsp;&nbsp;&nbsp;:
						<input type="text" name="dateApp" id="dateApp" class="text ui-widget-content ui-corner-all" maxlength="10"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>เรื่อง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="title" id="title" class="text ui-widget-content ui-corner-all" maxlength="20"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>จาก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="from" id="from" class="text ui-widget-content ui-corner-all" maxlength="20"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>วันที่ทำเอกสาร&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="dateSig" id="dateSig" class="text ui-widget-content ui-corner-all" maxlength="10"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>ผู้รับผิดชอบ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="adminter" id="adminter" class="text ui-widget-content ui-corner-all" maxlength="20"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>กำหนดการ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<textarea rows="3" type="text" name="schedule" id="schedule" class="text ui-widget-content ui-corner-all" resizable:false/></textarea></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>วันที่ดำเนินงานก่อน&nbsp;&nbsp;:
						<input type="text" name="dateOper" id="dateOper" class="text ui-widget-content ui-corner-all" maxlength="10"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>หมายเหตุ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<textarea rows="3" type="text" name="status" id="status" class="text ui-widget-content ui-corner-all" /></textarea></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>อัพโหลด ไฟล์&nbsp;&nbsp;&nbsp;:
						<input type="file" name="uploadIN" size="20"/></label>
					</th>
				</tr>
				<tr>
					<td>
					<p class="text-right">
						<input type="submit" name="addbookInBtn" class="btn btn-inverse" value="เพิ่ม">
						<?php echo form_close(); ?>
						<a href="<?php echo site_url('/bookincont/bookIn'); ?>"><button class="btn btn-inverse" Name="backBtn">ย้อนกลับ</button></a>
					</p>
					</td>
				</tr>
				
			</table>

			<p></p>
		</div>

	</div>

</body>
