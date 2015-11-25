<body>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>ระบบสารบรรณอิเล็กทรอนิกส์ สำหรับคณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยนอร์ท-เชียงใหม่</h3>
			<br />
			<table border=1>
				<thead>
					<tr>
						<th>เลขเอกสาร</th>
						<th>วันที่รับเอกสาร</th>
						<th>เรื่อง</th>
						<th>จาก</th>
						<th>วันที่ทำเอกสาร</th>
						<th>ผู้รับผิดชอบ</th>
						<th>กำหนดการ</th>
						<th>วันกำหนดเสร็จงาน</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<?php
					if(count($bins)==0)
					{}
					else
					{
				 		foreach ($bins as $bi)
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
							echo "</tr>";
						}
						}

					?>
				</tbody>
			</table>

			<p></p>
		</div>

	</div>
</body>

