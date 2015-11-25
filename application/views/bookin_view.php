<!--
	Name   : bookin_view.php
	Detail : เป็นหน้า view ใน ส่วน ของ bookin
	Uodate : สร้างไฟย์ 04/09/2556
		   : แสดง ข้อมูล 05/09/2556
		   : แก้ไข ข้อมูล 14/09/2556
		   : สร้าง Method ค้นหา 26/09/2556
	Credit : นวกร คุณาสวัสดิ์
-->
<body>
	<div id="site_content">

	<div id="content" style="overflow:auto;"><!-- work Area -->
	<h3>หนังสือเข้า</h3>
		<?php if($depcode=="205999"){?>
			<a href="<?php echo site_url('bookincont/newbookIn'); ?>"><button class="btn btn-inverse" id="newBookin"><i class="icon-star icon-white"></i>สร้าง เอกสาร</button></a>
		<?php }?>
			<p />
			<div class="setSearch">
				<span class="right">
					<div class="form-search">
							<div class="input-append">
								<label>
								ค้นหาโดย เลขหนังสือ | วันที่ทำเอกสาร | เรื่อง | ปีการศึกษา:
								<input type="text" name="search" id="search" class="input-medium" placeholder="ค้นหา" onkeydown="bookinSearch();">
								</label>
								<button type="submit" class="btn btn-inverse"><i class="icon-search icon-white"></i></button>

								<p />
							</div>
					</div>
				</span>
			</div>
			<div class="showsearch"></div>
    </div>
	</div>
</body>
<script>
function bookinSearch()
{
	var searchID = $("#search").val();
		$(".showsearch").load("<?php echo site_url();?>/bookincont/bookinSearch/",{"searchID" : searchID})
}
$(function()
{
	bookinSearch();
});
</script>