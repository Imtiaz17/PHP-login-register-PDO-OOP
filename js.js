
$(document).ready(function(){
	$('#email').blur(function(){
		var uemail=$(this).val();
		$.ajax({
			url: "cheak.php",
			method: "POST",
			data:{email:uemail},
			dataType:"text",
			success: function(html)
			{
				$('#avail').html(html);

			}

		});
	});
});


$(document).ready(function(){
	$('#username').blur(function(){
		var username=$(this).val();
		$.ajax({
			url: "cheak.php",
			method: "POST",
			data:{username:username},
			dataType:"text",
			success: function(html)
			{
				$('#uavail').html(html);

			}

		});
	});
});




