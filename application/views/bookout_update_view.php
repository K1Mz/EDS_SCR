<!--
  Name   : bookout_update_view.php
  Detail : เป็นหน้า View เปลี่ยนสถานะ ใน ส่วน ของ bookout
  Uodate : สร้างไฟย์ 10/08/2556
  Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="site_content">

		<div id="content"><!-- work Area -->
			<h3>อัพเดท หนังสือ</h3>
			<br />
			<table class="table table-bordered" style="width:60%; border-spacing:0; margin-left: 225px;">
				<?php echo form_open_multipart('/bookoutcont/updateOut/'.$this->uri->segment(3)); ?>
				<?php
				if(count($upq)==0){}
					else
					{
				 		foreach ($upq as $bo)
						{
							$dr = $bo['out_date_receive'];
							if($dr=="0000-00-00")
							{
								?>
								<tr>
									<th>
										<label>เรื่อง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo(''.$bo['out_title'].'');?>
										</label>
									</th>
								</tr>
								<tr>
									<th>
										<label>วันที่รับหนังสือ&nbsp;&nbsp;&nbsp;&nbsp;:
										<input type="text" name="dateRec" id="dateRec" class="text ui-widget-content ui-corner-all"></label>
									</th>
								</tr>
								<tr>
									<td>
									<p class="text-right">
										<input type="submit" name="update1bookOutBtn" class="btn btn-inverse" value="อัพเดท">
										<?php echo form_close(); ?>
									</p>
									</td>
								</tr>
								<?php
							}
							else
							{
				?>
				<tr>
					<th>
						<label>เรื่อง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo(''.$bo['out_title'].'');?>
						</label>
					</th>
				</tr>
				<tr>
					<th>
						<label>วันที่ตอบรับหนังสือ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="text" name="dateAcc" id="dateAcc" class="text ui-widget-content ui-corner-all"/></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>หมายเหตุ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<textarea row="5" type="text" class="text ui-widget-content ui-corner-all" value=""></textarea></label>
					</th>
				</tr>
				<tr>
					<th>
						<label>อัพโหลด ไฟล์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
						<input type="file" name="uploadOutp" size="20"/></label>
					</th>
				</tr>
				<tr>
					<td>
					<p class="text-right">
						<input type="submit" name="update2bookOutBtn" class="btn btn-inverse" value="อัพเดท">
						<?php echo form_close(); ?>
						<a href="<?php echo site_url('/bookoutcont/bookOut'); ?>"><button class="btn btn-inverse" Name="backBtn">ย้อนกลับ</button></a>
					</p>
					</td>
				</tr>
				<?php }
				}
			} ?>		
			</table>

			<p></p>
		</div>

	</div>

</body>