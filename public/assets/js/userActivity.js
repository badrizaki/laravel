userActivity = {
    url : "",
    login : function()
    {
		$.LoadingOverlay("show");
		txtEmail = $("#email");
		txtPassword = $("#password");
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		if (txtEmail.val() == '')
		{
			txtEmail.focus();
			functions.ShowDialogBox('Warning','Please fill Email.','Ok','');
			$.LoadingOverlay("hide");
			return false;
		};

		if (txtPassword.val() == '')
		{
			txtPassword.focus();
			functions.ShowDialogBox('Warning','Please fill Email.');
			$.LoadingOverlay("hide");
			return false;
		};
		
		$.ajax({
			type:"POST",
			url:userActivity.url,
			data:"email="+txtEmail.val()+"&password="+txtPassword.val(),
			dataType:"JSON",
			headers: {
				'X-CSRF-TOKEN': CSRF_TOKEN
			},
			success:function(resp)
			{
				try {
					if(resp.statusCode == "200")
					{
						// functions.ShowDialogBox('Success',resp.message);
						location.reload();
					} else {
						functions.ShowDialogBox('Warning', resp.message);
					}
				} catch(e) {
					functions.ShowDialogBox('Warning', 'Maaf terjadi kesalahan, silahkan hubungi administrator');
				}
				$.LoadingOverlay("hide");
			},
			error:function()
			{
				functions.ShowDialogBox('Warning', 'Maaf terjadi kesalahan, silahkan hubungi administrator');
				$.LoadingOverlay("hide");
			}
		});
    },

    signup : function()
    {
		$.LoadingOverlay("show");
		var data = $("#frm_signup").serialize();
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		$.ajax({
			type:"POST",
			url:userActivity.url,
			data:data,
			dataType:"JSON",
			headers: {
				'X-CSRF-TOKEN': CSRF_TOKEN
			},
			success:function(resp)
			{
				try {
					if(resp.statusCode == "200")
					{
						// functions.ShowDialogBox('Success',resp.message);
						location.reload();
					} else {
						functions.ShowDialogBox('Warning', resp.message);
					}
				} catch(e) {
					functions.ShowDialogBox('Warning', 'Maaf terjadi kesalahan, silahkan hubungi administrator');
				}
				$.LoadingOverlay("hide");
			},
			error:function()
			{
				functions.ShowDialogBox('Warning', 'Maaf terjadi kesalahan, silahkan hubungi administrator');
				$.LoadingOverlay("hide");
			}
		});
    }
}