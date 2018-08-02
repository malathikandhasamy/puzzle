$('#click-button').click(function(){
	var name=$('#name').val();
	var username=$('#username').val();
	var email=$('#email').val();
	var password=$('#password').val();
	var confirmpassword=$("#confirm-pwd").val();
	var name_error='';
	var username_error='';
	var email_error='';
	var password_error='';
	var confirmpassword_error='';
	var alphabat= /^[a-zA-Z]+$/;
	var alphanu = /^[a-zA-Z0-9]+$/;
	var psw=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/;
	var upper=/[A-Z]/g;
	var lower=/[a-z]/g;
	var num=/[0-9]/g;
	var spl=/[^\w\s]/gi; 
	if(!name.match(alphabat))
	{
		name_error="Enter Alphabets Only!!";
		$('#nameError').html(name_error);
		return false;
	}
	else
	{
		name_error= "";
		this.submit();
		$('#nameError').html(name_error);
	}
	console.log("hello");
	if(!username.match(alphanu))
	{
		username_error="name must contains alphanumeric";
		$('#usernameError').html(username_error);
		return false;
	}
	else
	{
		username_error="";
		$('#usernameError').html(username_error);
	}
	if(email==''||email.indexOf('@',0)<0 && email.indexOf('.',0)<0)
	{
		email_error='Enter valid emailaddress';
		$('#emailError').html(email_error);
		return false;
	}
	else
	{
		email_error= '';
		$('#emailError').html(email_error);
	}
	if(password.length>=8 || (password.length<=15))
	{
		password_error="Your password week";
		$('#passwordError').html(password_error);
		return false;
	}
	//else if($password.match(/[A-z]/) || $password.match(/[A-Z]/) || $password.match(/\d/) || $password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))
	else if(!password.match(upper) && (!password.match(lower)) && (!password.match(num)) && (!password.match(spl)))
	{
		password_error="Enter valid password";
		$('#passwordError').html(password_error);
		return false;
	}
	else
	{
		password_error= '';
		$('#passwordError').html(password_error);
	}
	if(confirmpassword=='')
	{
		confirmpassword_error="Reenter your password";
		$('#confirmpasswordError').html(confirmpassword_error);
		return false;
	}
	else if(confirmpassword.match(password))
	{
		confirmpassword_error= '';
		$('#confirmpasswordError').html(confirmpassword_error);
	}
	else
	{
		$confirmpassword_error='Reenter your password';
		$('#confirmpasswordError').html(confirmpassword_error);
		return false;
	}
});