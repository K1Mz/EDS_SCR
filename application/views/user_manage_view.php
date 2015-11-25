<!--
  Name   : user_manage_view.php
  Detail : เป็นหน้า View ใน ส่วน ของ user
  Uodate : สร้างไฟย์ 5/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="site_content">

		<div id="content" style="overflow:auto;"><!-- work Area -->
			<h3>จัดการข้อมูลผู้ใช้</h3>

			<a href="<?php echo site_url('admincont/addUse'); ?>"><button class="btn btn-inverse" id="newDepartment"><i class="icon-star icon-white"></i>เพิ่ม ข้อมูลผู้ใช้</button></a>
			<a href="<?php echo site_url('/admincont/manageMent'); ?>"><button class="btn btn-inverse" id="backBtn">ย้อนกลับ</button></a>
			<br />
			<br />
			<table class="table table-bordered" style="width:100%; border-spacing:0;">
				<thead>
					<tr>
						<th>ลำดับที่</th>
						<th>ชื่อผู้ใช้</th>
						<th>สาขาวิชา</th>
						<th>ฝ่ายการทำงาน</th>
						<th>ชื่อ</th>
						<th>นามสกุล</th>
						<th>E-mail</th>
						<th>สถานะ</th>
						<th>แก้ไขผู้ใช้</th>
						<th>ลบผู้ใช้</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if(count($useq)==0)
					{
						echo"<tr><td align='right' colspan='10'>--no data--</td></tr>";
					}
					else
					{
						$no=1;
				 		foreach ($useq as $ur)
						{
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$ur['use_user']."</td>";
							echo "<td>".$ur['dep_name']."</td>";
							echo "<td>".$ur['grp_name']."</td>";
							echo "<td>".$ur['use_fname']."</td>";
							echo "<td>".$ur['use_lname']."</td>";
							echo "<td>".$ur['use_email']."</td>";
							echo "<td>".$ur['use_status']."</td>";
							echo "<td align='center'>";
							echo anchor("/admincont/editUse/".$ur['use_id'],'แก้ไข');
							echo "</td>";
							echo "<td align='center'>";
							echo anchor("/admincont/deleteUse/".$ur['use_id'],"ลบ",array("onclick"=>"javascript:return confirm('คุณต้องการลบหรือไม่?');"));
							echo "</td>";
							echo "</tr>";
							$no++;
						}
					}
					?>
				</tbody>
			</table>
			<p></p>
		</div>

	</div>	
</body>
