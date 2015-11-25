<!--
  Name   : bookincont.php
  Detail : เป็นหน้า view แสดง ข้อมูล ใน ส่วน ของ bookin
  Uodate : สร้างไฟย์ 26/09/2556
  Credit : นวกร คุณาสวัสดิ์
-->			
		<div class="dataBookin">
			<?php echo form_open_multipart('/bookincont/checkbox/');?>
			
			<table class="table table-bordered" style="width:100%; border-spacing:0;">
				<thead>
					<tr>
						<th style="width:5%;">ปีการศึกษา</th>
						<th style="width:5%;">เลขหนังสือ</th>
						<th style="width:5%;">วันที่รับเอกสาร</th>
						<th style="width:30%;">เรื่อง</th>
						<th style="width:15%;">จาก</th>
						<th style="width:5%;">วันที่ทำเอกสาร</th>
						<th style="width:15%;">ผู้รับผิดชอบ</th>
						<th style="width:20%;">กำหนดการ</th>
						<th style="width:5%;">วันที่ดำเนินงานก่อน</th>
						<th style="width:20%;">หมายเหตุ</th>
				<?php if($depcode=="205999"){
					echo"<th style=''width:15%;''><input type='submit' name='sentBtn' value='ส่ง' class='btn btn-inverse'/></th>";
					//echo"<th>Edit</th>";
					echo"<th style=''width:15%;''><input type='submit' name='delBtn' value='ลบ' class='btn btn-inverse'/></th>";
					}?>
					</tr>
				</thead>
				<tbody>
					<?php
					if(count($rs)==0)
					{
						echo"<tr><td colspan='12'>--ไม่มีข้อมูล--</td></tr>";
					}
					else
					{
				 		foreach ($rs as $bi)
						{
							$dateA = $bi['in_date_approved'];
								$dateMA = substr($dateA,4,6);
								$textA = substr($dateA,0,4);
								$yearA = $textA+543;
								$dateTypeA = $yearA."".$dateMA;
								$datetimeA = DateTime::createFromFormat('Y-m-d',$dateTypeA);
								$dateApp = $datetimeA->format('d/m/Y');
							$dateS = $bi['in_date_signed'];
								$dateMS = substr($dateS,4,6);
								$textS = substr($dateS,0,4);
								$yearS = $textA+543;
								$dateTypeS = $yearS."".$dateMS;
								$datetimeS = DateTime::createFromFormat('Y-m-d',$dateTypeS);
								$dateSig = $datetimeS->format('d/m/Y');
							$dateO = $bi['in_date_operated'];
								$dateMO = substr($dateO,4,6);
								$textO = substr($dateO,0,4);
								$yearO = $textO+543;
								$dateTypeO = $yearO."".$dateMO;
								$datetimeO = DateTime::createFromFormat('Y-m-d',$dateTypeO);
								$dateOpe = $datetimeO->format('d/m/Y');

							echo "<tr>";
							echo "<td>".$bi['in_book_year']."</td>";
							echo "<td>".$bi['in_dep']."/".$bi['in_no']."</td>";
							echo "<td>".$dateApp."</td>";
							?>
							<td><a href="<?php echo base_url(); ?>book/bookin/<?php echo $bi['in_doc'] ?>"><?php echo $bi['in_title'] ?></a></td>
							<?php
							echo "<td>".$bi['in_from']."</td>";
							echo "<td>".$dateSig."</td>";
							echo "<td>".$bi['in_adminter']."</td>";
							echo "<td>".$bi['in_schedule']."</td>";
							echo "<td>".$dateOpe."</td>";
							echo "<td>".$bi['in_sta']."</td>";
							if($depcode=="205999"){
							echo "<td>";
							echo "<input type='checkbox' name='sens[]' id='sen' value=".$bi['in_id']." />";
								//anchor("/bookincont/bookinMail/".$bi['in_id'],"ส่ง");
							echo "</td>";
							/*echo "<td>";
							echo anchor("/bookincont/editBookin/".$bi['in_id'],"Edit",array("onclick"=>"javascript:return confirm('คุณต้องการแก้ไขหรือไม่?');"));
							echo "</td>";*/
							echo "<td align='center'>";
							echo "<input type='checkbox' name='dels[]' id='del' value=".$bi['in_id']." />";
							//anchor("/bookincont/bookinDel/".$bi['in_id'],"ลบ",array("onclick"=>"javascript:return confirm('คุณต้องการลบหรือไม่?');"));
							echo "</td>";
							echo "</tr>";
						}
						}
					}
					?>
				</tbody>
			</table>
			<p></p>
      </div>