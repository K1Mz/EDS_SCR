<!--
  Name   : user_edit_view.php
  Detail : เป็นหน้า View แก้ไข ใน ส่วน ของ user
  Uodate : สร้างไฟย์ 15/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="Dialog-User"></div>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>แก้ไข ข้อมูลผู้ใช้</h3>
			<br />
			<table class="table table-bordered" style="width:60%; border-spacing:0; margin-left: 225px;">
				<form action="<?php echo site_url('/admincont/updateUse/'.$this->uri->segment(3)); ?>" name="frmMain" method="post" enctype="multipart/form-data" target="iframe_target" onSubmit="return ChkEdituser();">
				<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
				<?php
					if(count($useE)==0)
					{
						
					}
					else
					{
				 		foreach ($useE as $ue)
						{
				echo 	"<tr>
							<th>
								<label>ชื่อผู้ใช้&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
								<input type='text' name='userName' id='userName' class='text ui-widget-content ui-corner-all' value=".$ue['use_user']." maxlength='20'><span class='help-inline'>* ชื่อเข้าใช้งาน</span></label>
							</th>
						</tr>
						<tr>
							<th>
								<label>สาขาวิชา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
								echo form_dropdown('depq', $depq, $ue['use_dep_id'], 'id="depq"'); 
								echo "<span class='help-inline'>* สาขาวิชา</span></label>
							</th>
						</tr>
						<tr>
							<th>
								<label>ฝ่ายการทำงาน&nbsp;&nbsp;: ";
								echo form_dropdown('grpq', $grpq, $ue['use_grp_id'], 'id="grpq"'); 
								echo "<span class='help-inline'>* ฝ่ายการทำงาน</span></label>
							</th>
						</tr>
						<tr>
							<th>
								<label>ชื่อ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
								<input type='text' name='firstName' id='firstName' value=".$ue['use_fname']." class='text ui-widget-content ui-corner-all' maxlength='20'><span class='help-inline'>* ชื่อ</span></label>
							</th>
						</tr>
						<tr>
							<th>
								<label>นามสกุล&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
								<input type='text' name='lastName' id='lastName' value=".$ue['use_lname']." class='text ui-widget-content ui-corner-all' maxlength='20'/><span class='help-inline'>* นามสกุล</span></label>
							</th>
						</tr>
						<tr>
							<th>
								<label>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
								<input type='text' name='email' id='email' value=".$ue['use_email']." class='text ui-widget-content ui-corner-all' maxlength='50'/><span class='help-inline'>* E-mail</span></label>
							</th>
						</tr>
						<tr>
							<th>
							<label >สถานะ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:"
							?>
							<?php
								if($ue['use_status'] == "admin"){
									echo "<label class='radio' style='margin-left: 100px;'><input type='radio' name='status' id='optionsRadios1' value='user'>User</label>
									<label class='radio' style='margin-left: 100px;'><input type='radio' name='status' id='optionsRadios2' value='admin' checked>Admin</label>";
								}
								elseif ($ue['use_status'] == "user") {
									echo "<label class='radio' style='margin-left: 100px;'><input type='radio' name='status' id='optionsRadios1' value='user' checked>User</label>
									<label class='radio' style='margin-left: 100px;'><input type='radio' name='status' id='optionsRadios2' value='admin'>Admin</label>";
								}
							?>
							<?php
								echo "</label>
							</th>
						</tr>";
						}
					}
					?>
				<tr>
					<td>

					<p class="text-right">
						<input type="submit" name="edituseBtn" class="btn btn-inverse" value="แก้ไข">
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
