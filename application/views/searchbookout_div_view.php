<!--
  Name   : searchbookout_div_view.php
  Detail : เป็นหน้า view แสดงข้อมูล ใน ส่วน ของ bookout
  Uodate : สร้างไฟย์ 26/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<div class="dataBookin">
	<table class="table table-bordered" style="width:100%; border-spacing:0;">
				<thead>
					<tr>
						<th style="width:5%;">ปีการศึกษา</th>
						<th style="width:5%;">เลขหนังสือ</th>
						<th style="width:5%;">วันที่ทำหนังสือ</th>
						<th style="width:30%;">เรื่อง</th>
						<th style="width:10%;">จาก</th>
						<th style="width:5%;">วันที่รับหนังสือ</th>
						<th style="width:5%;">วันที่ตอบรับหนังสือ</th>
						<th style="width:5%;">ไฟล์ DOC</th>
						<th style="width:5%;">ไฟล์ PDF</th>
						<th style="width:20%;">หมายเหตุ</th>
						<!-- <th style="width:5%;">แก้ไขหนังสือ</th> -->
						<th style="width:5%;">ลบ</th>
					<?php 
					if($depcode=="205999")
					{
						echo"<th>อัพเดท</th>";
					}
					?>
					</tr>
				</thead>
				<tbody>
					<?php

					if(count($bout)==0)
					{
						echo"<tr><td colspan='13'>--ไม่มีข้อมูล--</td></tr>";
					}
					else
					{
				 		foreach ($bout as $bo)
						{
							$dateS = $bo['out_date_signed'];
								$dateMS = substr($dateS,4,6);
								$textS = substr($dateS,0,4);
								$yearS = $textS+543;
								$dateTypeS = $yearS."".$dateMS;
								$datetimeS = DateTime::createFromFormat('Y-m-d',$dateTypeS);
								$dateSig = $datetimeS->format('d/m/Y');

							$dr = $bo['out_date_receive'];
							$da = $bo['out_date_accept'];
							
						if ($dr!="0000-00-00")
							{	
							$dateR = $bo['out_date_receive'];
								$dateMR = substr($dateR,4,6);
								$textR = substr($dateR,0,4);
								$yearR = $textR+543;
								$dateTypeR = $yearR."".$dateMR;
								$datetimeR = DateTime::createFromFormat('Y-m-d',$dateTypeR);
								$dateRrc = $datetimeR->format('d/m/Y');
							}
							else
							{
								$dateRrc = "รอรับหนังสือ";
							}
						if ($da!="0000-00-00")
							{
							$dateA = $bo['out_date_accept'];
								$dateMA = substr($dateA,4,6);
								$textA = substr($dateA,0,4);
								$yearA = $textA+543;
								$dateTypeA = $yearA."".$dateMA;
								$datetimeA = DateTime::createFromFormat('Y-m-d',$dateTypeA);
								$dateAcc = $datetimeA->format('d/m/Y');
							}
							else
							{
								$dateAcc = "รอตอบกลับ";
							}

							$uid = $bo['out_user_id'];
							$pdf = $bo['out_doc_p'];

							if($dateRrc=="รอรับหนังสือ"){
							echo "<tr class='info'>";
							}else if($dateAcc=="รอตอบกลับ"){
							echo "<tr class='warning'>";
							}else{
							echo "<tr class='success'>";
							}
							echo "<td>".$bo['out_book_year']."</td>";
							echo "<td>".$bo['out_dep']."/".$bo['out_no']."</td>";
							echo "<td>".$dateSig."</td>";
							echo "<td>".$bo['out_title']."</td>";
							echo "<td>".$bo['out_from']."</td>";
							echo "<td>".$dateRrc."</td>";
							echo "<td>".$dateAcc."</td>";
							?>
							<td><a href="<?php echo base_url(); ?>book/bookout/doc/<?php echo $bo['out_doc_w'] ?>"><?php echo('Download'); ?></a></td>
							<?php
							if($pdf!=null)
							{
							?>
							<td><a href="<?php echo base_url(); ?>book/bookout/pdf/<?php echo $bo['out_doc_p'] ?>"><?php echo('Download'); ?></a></td>
							<?php
							}
							else
							{
							echo "<td>".$bo['out_doc_p']."</td>";
							}
							echo "<td>".$bo['out_sta']."</td>";
							echo "<td >";
							if($userid==$uid)
							{
							//echo anchor("/bookoutcont/bookoutedit/".$bo['out_id'],"แก้ไข"));
							//echo "</td>";
							//echo "<td>";
							echo anchor("/bookoutcont/bookoutDel/".$bo['out_id'],"ลบ",array("onclick"=>"javascript:return confirm('คุณต้องการลบหรือไม่?');"));
							echo "</td>";
								if($depcode=="205999")
								{
								echo "<td>";
								echo anchor("/bookoutcont/bookoutupdate/".$bo['out_id'],"อัพเดท");
								echo "</td>";
								}
							}
							else if($depcode=="205999")
							{
							echo "<td>";
							echo "</td >";
							echo "<td>";
							echo anchor("/bookoutcont/bookoutupdate/".$bo['out_id'],"อัพเดท");
							echo "</td>";
							}
							else
							{
							echo "</td >";
							echo "<td>";
							}
						}
					}
					?>
				</tbody>
			</table>
			<p></p>

</div>