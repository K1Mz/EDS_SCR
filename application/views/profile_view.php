<!--
  Name   : profile_view.php
  Detail : เป็นหน้า View ใน ส่วน ของ profile
  Uodate : สร้างไฟย์ 23/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>Profile </h3>
			<table class="table table-bordered" style="width:45%; border-spacing:0; margin-left: 230px;">
				<tr>
					<th>
						<p>ชื่อผู้ใช้ :</p>
					</th>
					<th>
						<label><?php echo $username; ?></label>
					</th>
				</tr>
				<tr>
					<th>
						<p>ชื่อ :</p>
					</th>
					<th>
						<label><?php echo $fname; ?></label>
					</th>
				</tr>
				<tr>
					<th>
						<p>นามสกุล :</p>
					</th>
					<th>
						<label><?php echo $lname; ?></label>
					</th>
				</tr>
				<tr>
					<th>
						<p>E-mail :</p>
					</th>
					<th>
						<label><?php echo $email; ?></label>
					</th>
				</tr>
				<tr>
					<th>
						<p>สาขาวิชา :</p>
					</th>
					<th>
						<label><?php echo $depname; ?></label>
					</th>
				</tr>
				<tr>
					<th>
						<p>ฝ่ายการทำงาน :</p>
					</th>
					<th>
						<label><?php echo $grpname; ?></label>
					</th>
				</tr>


				<tr>
					<td colspan='2'>
					<p class="text-right">
						<button class="btn btn-inverse">
						<?php
							echo anchor("/profilecont/editprofile/".$id,"Edit Profile",array("onclick"=>"javascript:return confirm('คุณต้องการแก้ไขหรือไม่?');"));
						?>
						</button>

					</p>
					</td>
				</tr>
				
			</table>

			<p></p>
		</div>

	</div>