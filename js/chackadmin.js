$(function()
{
	$('#username').button().css({'cursor' : 'text','text-align': 'left'});
	$('#password').button().css({'cursor' : 'text','text-align': 'left'});
	$('#submit').button();
});

function doLogin()
{
	
	var username = $('#username').val();
	var password = $('#password').val();
	
	$.get('checkuser.php',{'username':username,'password':password},function(data)
	{

		if(data==1)
		{
			
				
				$('#dialog').html('<center><img src=error.png><br>ไม่สามารถ Login ได้</center>');
				$('#dialog').dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); } } ] });
				$('#dialog').dialog({'title':'เกิดข้อผิดพลาด'});
				$('#dialog').effect( "shake" );
				return false;
			
		}
		else if(data==0)
		{

			
			$.get('main.php',function(data)
			{
				
				
				$('#blockLogin').html(data);
				getdata();
				$('#Add-dialog').dialog({autoOpen: false });
				$('#Del-dialog').dialog({autoOpen: false });
				$('#Edit-dialog').dialog({autoOpen: false });

			});
		}
		else
		{
			
				$('#dialog').html('<center><img src=error.gif><br>กรุณากรอกข้อมูล</center>');
				$('#dialog').dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); } } ] });
				$('#dialog').dialog({'title':'เกิดข้อผิดพลาด'});
				$('#dialog').effect( "shake" );
		}
	});
}