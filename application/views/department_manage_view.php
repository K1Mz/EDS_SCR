<!--
  Name   : department_manage_view.php
  Detail : เป็นหน้า View ใน ส่วน ของ department
  Uodate : สร้างไฟย์ 10/08/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>จัดการข้อมูลสาขา</h3>

			<a href="<?php echo site_url('admincont/addDep'); ?>"><button class="btn btn-inverse" id="newDepartment"><i class="icon-star icon-white"></i>เพิ่ม ข้อมูลสาขา</button></a>
			<a href="<?php echo site_url('admincont/manageMent'); ?>"><button class="btn btn-inverse" id="backBtn">ย้อนกลับ</button></a>
			<br />
			<br />
		
			<table class="table table-bordered " style="width:50%; border-spacing:0; margin-left: 250px;">
				<thead>
				<tr><th>ลำดับที่</th><th>ชื่อสาขา</th><th>รหัสสาขา</th><th>แก้ไขสาขา</th><th>ลบสาขา</th></tr>
				</thead>
				<tbody>
					<?php
					if(count($dep)==0)
					{
						echo"<tr><td colspan='5'>--no data--</td></tr>";
					}
					else
					{
						$no=1;
				 		foreach ($dep as $dr)
						{
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$dr['dep_name']."</td>";
							echo "<td>".$dr['dep_code']."</td>";
							echo "<td>";
							echo anchor("/admincont/editDep/".$dr['dep_id'],"แก้ไข");
							echo "</td>";
							echo "<td align='center'>";
							echo anchor("/admincont/deleteDep/".$dr['dep_id'],"ลบ",array("onclick"=>"javascript:return confirm('คุณต้องการลบหรือไม่?');"));
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
