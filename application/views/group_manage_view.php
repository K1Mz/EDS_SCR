<!--
  Name   : group_manage_view.php
  Detail : เป็นหน้า View ใน ส่วน ของ Group
  Uodate : สร้างไฟย์ 24/08/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>จัดการ ฝ่ายการทำงาน</h3>

			<a href="<?php echo site_url('admincont/addGrp'); ?>"><button class="btn btn-inverse" id="newGrop"><i class="icon-star icon-white"></i>เพิ่ม ฝ่ายการทำงาน</button></a>
			<a href="<?php echo site_url('admincont/manageMent'); ?>"><button class="btn btn-inverse" id="backBtn">ย้อนกลับ</button></a>
			<br />
			<br />
		
			<table class="table table-bordered " style="width:50%; border-spacing:0; margin-left: 230px;">
				<thead>
				<tr>
					<th style="width:15%;">ลำดับที่</th>
					<th>ชื่อฝ่ายการทำงาน</th>
					<th style="width:18%;">แก้ไขฝ่าย</th>
					<th style="width:15%;">ลบฝ่าย</th>
				</tr>
				</thead>
				<tbody>
					<?php
					if(count($grp)==0)
					{
						echo"<tr><td colspan='5'>--no data--</td></tr>";
					}
					else
					{
						$no=1;
				 		foreach ($grp as $gr)
						{
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td style=''>".$gr['grp_name']."</td>";
							echo "<td>";
							echo anchor("/admincont/editGrp/".$gr['grp_id'],"แก้ไข");
							echo "</td>";
							echo "<td align='center'>";
							echo anchor("/admincont/deleteGrp/".$gr['grp_id'],"ลบ",array("onclick"=>"javascript:return confirm('คุณต้องการลบหรือไม่?');"));
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
