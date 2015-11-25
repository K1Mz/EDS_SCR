$(function() {
	var MyDate = new Date();
	var MyDateString;
		MyDate.setDate(MyDate.getDate());
		MyDateString = ('0' + MyDate.getDate()).slice(-2) + '/'
						+ ('0' + (MyDate.getMonth()+1)).slice(-2) + '/'
						+ (MyDate.getFullYear()+543);
	$( "#dateApp" ).val(MyDateString);

	$( "#dateApp" ).datepicker({
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true,
		onChangeMonthYear: function(){
			setTimeout(function(){
				$.each($(".ui-datepicker-year option"),function(j,k){
					var textYear=parseInt($(".ui-datepicker-year option").eq(j).val());
					$(".ui-datepicker-year option").eq(j).text(textYear);
				});
			},50);
		},
		onClose:function(){
			if($(this).val()!="" && $(this).val()==dateBefore){
				var arrayDate=dateBefore.split("/");
				arrayDate[2]=parseInt(arrayDate[2]);
				$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
			}
		},
		onSelect: function(dateText, inst){
			dateBefore=$(this).val();
			var arrayDate=dateText.split("/");
			arrayDate[2]=parseInt(arrayDate[2]);
			$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
		}
	});
});

$(function(){
	var MyDate = new Date();
	var MyDateString;
		MyDate.setDate(MyDate.getDate());
		MyDateString = ('0' + MyDate.getDate()).slice(-2) + '/'
						+ ('0' + (MyDate.getMonth()+1)).slice(-2) + '/'
						+ (MyDate.getFullYear()+543);
	$( "#dateSig" ).val(MyDateString);
	
	$( "#dateSig" ).datepicker({
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true,
		onChangeMonthYear: function(){
			setTimeout(function(){
				$.each($(".ui-datepicker-year option"),function(j,k){
					var textYear=parseInt($(".ui-datepicker-year option").eq(j).val());
					$(".ui-datepicker-year option").eq(j).text(textYear);
				});
			},50);
		},
		onClose:function(){
			if($(this).val()!="" && $(this).val()==dateBefore){
				var arrayDate=dateBefore.split("/");
				arrayDate[2]=parseInt(arrayDate[2]);
				$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
			}
		},
		onSelect: function(dateText, inst){
			dateBefore=$(this).val();
			var arrayDate=dateText.split("/");
			arrayDate[2]=parseInt(arrayDate[2]);
			$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
		}
	});
});
  
$(function(){
	var MyDate = new Date();
	var MyDateString;
		MyDate.setDate(MyDate.getDate());
		MyDateString = ('0' + MyDate.getDate()).slice(-2) + '/'
						+ ('0' + (MyDate.getMonth()+1)).slice(-2) + '/'
						+ (MyDate.getFullYear()+543);
	$( "#dateOper" ).val(MyDateString);
	
	$( "#dateOper" ).datepicker({
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true,
		onChangeMonthYear: function(){
			setTimeout(function(){
				$.each($(".ui-datepicker-year option"),function(j,k){
					var textYear=parseInt($(".ui-datepicker-year option").eq(j).val());
					$(".ui-datepicker-year option").eq(j).text(textYear);
				});
			},50);
		},
		onClose:function(){
			if($(this).val()!="" && $(this).val()==dateBefore){
				var arrayDate=dateBefore.split("/");
				arrayDate[2]=parseInt(arrayDate[2]);
				$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
			}
		},
		onSelect: function(dateText, inst){
			dateBefore=$(this).val();
			var arrayDate=dateText.split("/");
			arrayDate[2]=parseInt(arrayDate[2]);
			$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
		}
	});
});

$(function(){
	var MyDate = new Date();
	var MyDateString;
		MyDate.setDate(MyDate.getDate());
		MyDateString = ('0' + MyDate.getDate()).slice(-2) + '/'
						+ ('0' + (MyDate.getMonth()+1)).slice(-2) + '/'
						+ (MyDate.getFullYear()+543);
	$( "#dateRec" ).val(MyDateString);
	
	$( "#dateRec" ).datepicker({
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true,
		onChangeMonthYear: function(){
			setTimeout(function(){
				$.each($(".ui-datepicker-year option"),function(j,k){
					var textYear=parseInt($(".ui-datepicker-year option").eq(j).val());
					$(".ui-datepicker-year option").eq(j).text(textYear);
				});
			},50);
		},
		onClose:function(){
			if($(this).val()!="" && $(this).val()==dateBefore){
				var arrayDate=dateBefore.split("/");
				arrayDate[2]=parseInt(arrayDate[2]);
				$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
			}
		},
		onSelect: function(dateText, inst){
			dateBefore=$(this).val();
			var arrayDate=dateText.split("/");
			arrayDate[2]=parseInt(arrayDate[2]);
			$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
		}
	});
});

$(function(){
	var MyDate = new Date();
	var MyDateString;
		MyDate.setDate(MyDate.getDate());
		MyDateString = ('0' + MyDate.getDate()).slice(-2) + '/'
						+ ('0' + (MyDate.getMonth()+1)).slice(-2) + '/'
						+ (MyDate.getFullYear()+543);
	$( "#dateAcc" ).val(MyDateString);
	
	$( "#dateAcc" ).datepicker({
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true,
		onChangeMonthYear: function(){
			setTimeout(function(){
				$.each($(".ui-datepicker-year option"),function(j,k){
					var textYear=parseInt($(".ui-datepicker-year option").eq(j).val());
					$(".ui-datepicker-year option").eq(j).text(textYear);
				});
			},50);
		},
		onClose:function(){
			if($(this).val()!="" && $(this).val()==dateBefore){
				var arrayDate=dateBefore.split("/");
				arrayDate[2]=parseInt(arrayDate[2]);
				$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
			}
		},
		onSelect: function(dateText, inst){
			dateBefore=$(this).val();
			var arrayDate=dateText.split("/");
			arrayDate[2]=parseInt(arrayDate[2]);
			$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
		}
	});
});


function ChkSubmit()
{
	var noBook = $("#noBook").val();
	var dateApp = $("#dateApp").val();
	var title = $("#title").val();
	var from = $("#from").val();
	var dateSig = $("#dateSig").val();
	var adminter = $("#adminter").val();
	var schedule = $("#schedule").val();
	var dateOper = $("#dateOper").val();
	var status = $("#status").val();
	var chkNumber = /^[0-9]*$/;
	var chkDate = /^(\d{1,2})(\/|\/)(\d{1,2})(\/|\/)(\d{4})$/;

	if(noBook=="")
	{
			$('#Dialog-Bookin').html('กรุณากรอกเลขหนังสือ');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(noBook.length<3)
	{
			$('#Dialog-Bookin').html('เลขหนังสือต้องมี 3 ตัว');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(noBook.length>3)
	{
			$('#Dialog-Bookin').html('เลขหนังสือต้องไม่เกิน 3 ตัว');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkNumber.test(noBook)==false)
	{
			$('#Dialog-Bookin').html('เลขหนังสือ ไม่ถูกต้อง');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(dateApp=="")
	{
			$('#Dialog-Bookin').html('กรุณากรอกวันที่รับหนังสือ');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkDate.test(dateApp)==false)
	{
			$('#Dialog-Bookin').html('กรุณากรอกวันที่รับ "dd/mm/yyyy" ')
			$('#Dialog-Bookin').dialog({'title':'Warning',draggable: false});
			$( "#Dialog-Bookin" ).dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(title=="")
	{
			$('#Dialog-Bookin').html('กรุณากรอกเรื่อง');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(from=="")
	{
			$('#Dialog-Bookin').html('กรุณากรอกจาก');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(dateSig=="")
	{
			$('#Dialog-Bookin').html('กรุณากรอกวันที่ทำหนังสือ');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkDate.test(dateSig) == false)
	{
			$('#Dialog-Bookin').html('กรุณากรอกวันที่ทำหนังสือตาม "dd/mm/yyyy" ')
			$('#Dialog-Bookin').dialog({'title':'Warning',draggable: false});
			$("#Dialog-Bookin" ).dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(adminter=="")
	{
			$('#Dialog-Bookin').html('กรุณากรอกผู้รับผิดชอบ');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(schedule=="")
	{
			$('#Dialog-Bookin').html('กรุณากรอกกำหนดการ');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(dateOper=="")
	{
			$('#Dialog-Bookin').html('กรุณากรอกวันที่ดำเนินงานก่อน');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkDate.test(dateOper) == false)
	{
			$('#Dialog-Bookin').html('กรุณากรอกวันที่ดำเนินงานก่อน "dd/mm/yyyy" ')
			$('#Dialog-Bookin').dialog({'title':'Warning',draggable: false});
			$("#Dialog-Bookin" ).dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(status=="")
	{
			$('#Dialog-Bookin').html('กรุณากรอกหมายเหยุ');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
			$('#Dialog-Bookin').html('บันทึกข้อมูลเรียนร้อย');
			$('#Dialog-Bookin').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookin").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); window.location.href='bookIn';} } ] });
	return true;
}

function Chkbookout()
{
	var noBook = $("#noBook").val();
	var dateSig = $("#dateSig").val();
	var title = $("#title").val();
	var from = $("#from").val();
	var chkNumber = /^[0-9]*$/;
	var chkDate = /^(\d{1,2})(\/|\/)(\d{1,2})(\/|\/)(\d{4})$/;

	if(noBook=="")
	{
			$('#Dialog-Bookiout').html('กรุณากรอกเลขหนังสือ');
			$('#Dialog-Bookiout').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookiout").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkNumber.test(noBook)== false)
	{
			$('#Dialog-Bookiout').html('เลขหนังสือต้องเป็นตัวเลข');
			$('#Dialog-Bookiout').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookiout").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(noBook.length<3)
	{
			$('#Dialog-Bookiout').html('เลขหนังสือต้องมี 3 ตัว');
			$('#Dialog-Bookiout').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookiout").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(noBook.length>3)
	{
			$('#Dialog-Bookiout').html('เลขหนังสือต้องไม่เกิน 3 ตัว');
			$('#Dialog-Bookiout').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookiout").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(dateSig=="")
	{
			$('#Dialog-Bookiout').html('กรุณากรอกวันที่รับหนังสือ');
			$('#Dialog-Bookiout').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookiout").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkDate.test(dateSig) == false)
	{
			$('#Dialog-Bookiout').html('กรุณากรอกวันที่รับหนังสือ "dd/mm/yyyy" ')
			$('#Dialog-Bookiout').dialog({'title':'Warning',draggable: false});
			$("#Dialog-Bookiout" ).dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(title=="")
	{
			$('#Dialog-Bookiout').html('กรุณากรอกชื่อหนังสือ');
			$('#Dialog-Bookiout').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookiout").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(from=="")
	{
			$('#Dialog-Bookiout').html('กรุณากรอกจาก');
			$('#Dialog-Bookiout').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookiout").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
			$('#Dialog-Bookiout').html('บันทึกข้อมูลเรียนร้อย');
			$('#Dialog-Bookiout').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Bookiout").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); window.location.href='bookOut';} } ] });
	return true;
}
//Department
function Chkdepartment()
{
	var departmentName = $("#departmentName").val();
	var departmentCode = $("#departmentCode").val();
	var chkNumber = /^[0-9]*$/;

	if((departmentName=="")&&(departmentCode==""))
	{
			$('#Dialog-Department').html('กรุณากรอก ข้อมูล');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(departmentName=="")
	{
			$('#Dialog-Department').html('กรุณากรอกชื่อสาขา');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(departmentCode=="")
	{
			$('#Dialog-Department').html('กรุณากรอกรหัสสาขา');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(departmentCode.length<6)
	{
			$('#Dialog-Department').html('เลขหนังสือต้องมี 6 ตัว');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(departmentCode.length>6)
	{
			$('#Dialog-Department').html('เลขหนังสือต้องไม่เกิน 6 ตัว');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkNumber.test(departmentCode)== false)
	{
			$('#Dialog-Department').html('รหัสสาขาต้องเป็นตัวเลข');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
			$('#Dialog-Department').html('บันทึกข้อมูลสาขาเรียนร้อย');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); window.location.href='manageDepartent';} } ] });
			return true;
}
function ChkEditdepartment()
{
	var departmentName = $("#departmentName").val();
	var departmentCode = $("#departmentCode").val();
	var chkNumber = /^[0-9]*$/;

	if((departmentName=="")&&(departmentCode==""))
	{
			$('#Dialog-Department').html('กรุณากรอก ข้อมูล');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(departmentName=="")
	{
			$('#Dialog-Department').html('กรุณากรอกชื่อสาขา');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(departmentCode=="")
	{
			$('#Dialog-Department').html('กรุณากรอกรหัสสาขา');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(departmentCode.length<6)
	{
			$('#Dialog-Department').html('เลขหนังสือต้องมี 6 ตัว');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(departmentCode.length>6)
	{
			$('#Dialog-Department').html('เลขหนังสือต้องไม่เกิน 6 ตัว');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkNumber.test(departmentCode)== false)
	{
			$('#Dialog-Department').html('รหัสสาขาต้องเป็นตัวเลข');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
			$('#Dialog-Department').html('แก้ไขข้อมูลเรียนร้อยแล้ว');
			$('#Dialog-Department').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Department").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); window.location.href='http://110.164.78.161/~b531610007/b531610007.com/Project/index.php/admincont/manageDepartent';} } ] });
			return true;
}
//Group
function Chkgroup()
{
	var gropName = $("#gropName").val();
	var chkChr = /^[ก-๙a-zA-Z]*$/;
	if(gropName=="")
	{
			$('#Dialog-Group').html('กรุณากรอกชื่อฝ่าย');
			$('#Dialog-Group').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Group").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkChr.test(gropName)== false)
	{
			$('#Dialog-Group').html('ชื่อต้องเป็นตัวอักษร');
			$('#Dialog-Group').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Group").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
			$('#Dialog-Group').html('บันทึกข้อมูลเรียนร้อย');
			$('#Dialog-Group').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Group").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); window.location.href='manageGrop';} } ] });
	return true;
}
function ChkEditgroup()
{
	var gropName = $("#gropName").val();
	var chkChr = /^[ก-๙a-zA-Z]*$/;	
	if(gropName=="")
	{
			$('#Dialog-Group').html('กรุณากรอกชื่อฝ่ายการทำงาน');
			$('#Dialog-Group').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Group").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkChr.test(gropName)== false)
	{
			$('#Dialog-Group').html('ชื่อต้องเป็นตัวอักษร');
			$('#Dialog-Group').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Group").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
			$('#Dialog-Group').html('แก้ไขข้อมูลเรียนร้อยแล้ว');
			$('#Dialog-Group').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-Group").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); window.location.href='http://110.164.78.161/~b531610007/b531610007.com/Project/index.php/admincont/manageGrop';} } ] });
	return true;
}
//User
function Chkuser()
{
	var userName = $("#userName").val();
	var userPass = $("#userPass").val();
	var depq = $("#depq").val();
	var grpq = $("#grpq").val();
	var firstName = $("#firstName").val();
	var lastName = $("#lastName").val();
	var email = $("#email").val();
	var chkEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if((userName=="")&&(userPass=="")&&(depq=="0")&&(grpq=="0")&&(firstName=="")&&(lastName=="")&&(email==""))
	{
			$('#Dialog-User').html('กรุณากรอก ข้อมูล');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(userName=="")
	{
			$('#Dialog-User').html('กรุณากรอกชื่อใช้งาน');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(userPass=="")
	{
			$('#Dialog-User').html('กรุณากรอกรหัสผ่าน');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(depq=="0")
	{
			$('#Dialog-User').html('กรุณาเลือกสาขาวิชา');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(grpq=="0")
	{
			$('#Dialog-User').html('กรุณาเลือกฝ่ายการทำงาน');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(firstName=="")
	{
			$('#Dialog-User').html('กรุณากรอกชื่อ');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(lastName=="")
	{
			$('#Dialog-User').html('กรุณากรอกนามสกุล');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(email=="")
	{
			$('#Dialog-User').html('กรุณากรอกอีเมล');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkEmail.test(email)==false)
	{
			$('#Dialog-User').html('รูปแบบอีเมลไม่ถูกต้อง');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
			$('#Dialog-User').html('บันทึกข้อมูลสาขาเรียนร้อย');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); window.location.href='manageUser';} } ] });
	return true;
}
function ChkEdituser()
{
	var userName = $("#userName").val();
	var userPass = $("#userPass").val();
	var depq = $("#depq").val();
	var grpq = $("#grpq").val();
	var firstName = $("#firstName").val();
	var lastName = $("#lastName").val();
	var email = $("#email").val();
	var chkEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if((userName=="")&&(userPass=="")&&(depq=="0")&&(grpq=="0")&&(firstName=="")&&(lastName=="")&&(email==""))
	{
			$('#Dialog-User').html('กรุณากรอก ข้อมูล');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(userName=="")
	{
			$('#Dialog-User').html('กรุณากรอกชื่อใช้งาน');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(userPass=="")
	{
			$('#Dialog-User').html('กรุณากรอกรหัสผ่าน');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(depq=="0")
	{
			$('#Dialog-User').html('กรุณาเลือกสาขาวิชา');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(grpq=="0")
	{
			$('#Dialog-User').html('กรุณาเลือกฝ่ายการทำงาน');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(firstName=="")
	{
			$('#Dialog-User').html('กรุณากรอกชื่อ');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(lastName=="")
	{
			$('#Dialog-User').html('กรุณากรอกนามสกุล');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(email=="")
	{
			$('#Dialog-User').html('กรุณากรอกอีเมล');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
	else if(chkEmail.test(email)==false)
	{
			$('#Dialog-User').html('รูปแบบอีเมลไม่ถูกต้อง');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
			$('#Dialog-User').html('แก้ไขข้อมูลเรียนร้อยแล้ว');
			$('#Dialog-User').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-User").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); window.location.href='http://110.164.78.161/~b531610007/b531610007.com/Project/index.php/admincont/manageUser';} } ] });
	return true;
}
function Chkmail()
{
	var grpq = $("#grpq").val();
	var chkChr = /^[ก-๙a-zA-Z]*$/;
	if(grpq=="0")
	{
			$('#Dialog-mail').html('เลือกฝ่ายการทำงาน');
			$('#Dialog-mail').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-mail").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); } } ] });
			return false;
	}
			$('#Dialog-mail').html('ส่งเมลเเรียนร้อย');
			$('#Dialog-mail').dialog({'title':'คำเตือน!',draggable: false});
			$("#Dialog-mail").dialog({ buttons: [ { text: "ตกลง", click: function() { $( this ).dialog( "close" ); window.location.href='manageGrop';} } ] });
	return true;
}