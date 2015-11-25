<!--
  Name   : profile_edit_view.php
  Detail : เป็นหน้า View แก้ไข ใน ส่วน ของ profile
  Uodate : สร้างไฟย์ 23/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>Profile </h3>
			<table class="table table-bordered" style="width:45%; border-spacing:0; margin-left: 240px;">
				<?php echo form_open_multipart('/profilecont/updatePro/'.$this->uri->segment(3)); ?>
				<tr>
					<th style="width:35%;">
						<p>Username :</p>
					</th>
					<th>
						<label><?php echo $username; ?></label>
					</th>
				</tr>
				<tr>
					<th>
						<p>First Name :</p>
					</th>
					<th>
						<label><input type="text" name="firstName" id="firstName" class="text ui-widget-content ui-corner-all"  value="<?php echo $fname; ?>"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<p>Last Name :</p>
					</th>
					<th>
						<label><input type="text" name="lastName" id="lastName" class="text ui-widget-content ui-corner-all"  value="<?php echo $lname; ?>"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<p>E-mail :</p>
					</th>
					<th>
						<label><input type="text" name="email" id="email" class="text ui-widget-content ui-corner-all"  value="<?php echo $email; ?>"/></label>
					</th>
				</tr>

				<tr>
					<td colspan='2'>
					<p class="text-right">
						<input type="submit" name="editproBtn" class="btn btn-inverse" value="Done">
						<?php echo form_close(); ?>
					</p>
					</td>
				</tr>
				
			</table>

			<p></p>
		</div>

	</div>