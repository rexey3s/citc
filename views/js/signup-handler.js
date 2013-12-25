// JavaScript Document
$(document).ready(function(){
	function checkAccepted()
	{
		if (!$('#accept-license').is(":checked"))
		{
			alert("Vui lòng chấp nhận chính sách cua chúng tôi trước khi đăng ký");
			return false;
		}
		else
			return true;
	}
	
	/*
		Check some neccessary fields condition
	*/
	function checkFields(form)
	{
		//---------- Check confirm email
		if (form.find('.pass1').val() != form.find('.pass2').val())
		{
			alert("Mật khẩu không trùng khớp");
		}
		
		//---------- Validate Email;
		
		
	}
	
	function startQuickSignup(form)
	{
		
		var brandname = form.find('.brand-name').val();
		var companyname = form.find('.company-name').val();
		var email = form.find('.email').val();
		var pass1 = form.find('.pass1').val();
		var pass2 = form.find('.pass2').val();
		var Url = form.attr('data-url');
		if (checkAccepted(form))
		{
			$.ajax({
				url: Url,
				type: "POST",
				data: {companyName: companyname, brandName: brandname, Email: email, Pass1: pass1, Pass2: pass2},
				success: function(data){
					if (data == '1')
					{
						alert("Bạn đã đăng ký thành công tài khoản");
					}
					else
						alert(data);
				},
				fail: function() {
					alert("Thực hiện việc đăng ký thất bại");
				}
			});
		}
	}
	
	/*
		signup button CLICK event
	*/
	$('.quick-sign-up-form .signup-button').click(function(e){
		e.preventDefault();
		startQuickSignup($('.quick-sign-up-form'));
	})
})