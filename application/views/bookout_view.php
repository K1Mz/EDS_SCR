<!--
	Name   : bookout_view.php
	Detail : เป็นหน้า view ใน ส่วน ของ bookout
	Uodate : สร้างไฟย์ 04/09/2556
		   : แสดง ข้อมูล 05/09/2556
		   : แก้ไข ข้อมูล 14/09/2556
		   : สร้าง Method ค้นหา 26/09/2556
	Credit : นวกร คุณาสวัสดิ์
-->
<body>
    <div id="site_content">

      <div id="content" style="overflow:auto;"><!-- work Area -->
        <h3>หนังสือออก</h3>
        		<a href="<?php echo site_url('bookoutcont/newbookOut'); ?>"><button class="btn btn-inverse" id="newBookin"><i class="icon-star icon-white"></i>สร้างหนังสือออก</button></a>
				<p />
			<div class="setSearch">
				<span class="right">
					<div class="form-search">
							<div class="input-append">
								<label>
								ค้นหาโดย เลขหนังสือ | วันที่ทำหนังสือ | เรื่อง | ปีการศึกษา:
								<input type="text" name="search" id="search" class="input-medium" placeholder="Search" onkeydown="bookoutSearch();">
								</label>
								<button type="submit" class="btn btn-inverse"><i class="icon-search icon-white"></i></button>
								<p />
							</div>
					</div>
				</span>
			</div>
				<table class="table table-bordered" style="width:10%;">
					<tr class='info'><td>หนังสือใหม่</td></tr>
					<tr class='warning'><td>รอการตอบรับ</td></tr>
					<tr class='success'><td>ดำเนินการแล้ว</td></tr>
				</table>
			<div class="showsearchout"></div>
      </div>

    </div>
</body>
<script>
function bookoutSearch()
{
	var searchID = $("#search").val();
		$(".showsearchout").load("<?php echo site_url();?>/bookoutcont/bookoutSearch/",{"searchID" : searchID})
}
$(function()
{
	bookoutSearch();
});
</script>