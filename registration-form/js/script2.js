function regfo(){
	var name=$('#name').val();
	var username=$('#username').val();
	var email=$('#email').val();
	var password=$('#password').val();
	var confirmpassword=$("#confirm-pwd").val();
	var PHONE = $("#phonenumber").val();
	var pattern="[1-9]{1}[0-9]{9}";
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
			
			//this.submit();
			$('#nameError').html("");
		}
		if(!username.match(alphanu))
		{
			username_error="name must contains alphanumeric";
			$('#usernameError').html(username_error);
			return false;
		}
		else
		{
			$('#usernameError').html("");
		}
		if(email==''||email.indexOf('@',0)<0 && email.indexOf('.',0)<0)
		{
			email_error='Enter valid emailaddress';
			$('#emailError').html(email_error);
			return false;
		}
		else
		{
			$('#emailError').html("");
		}
		
		if(PHONE=="") 
        {
             var errormsg="Number is required";
             $('#phoneError').html(errormsg);
              return false;          
        }
        else if(!PHONE.match(pattern))
        {
            var errormsg="Number must contain 10 digits";
             $('#phoneError').html(errormsg);
              return false;          
        }
        else
        {
                 $("#phoneError").html("");

        }
        if(password=="")
         {
             var errormsg="Password should not be empty";
             $('#passwordError').html(errormsg);
             return false;
             
         }

         else if((!password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/)))
         {
            var errormsg="Password must contain atleast one uppercase,lowercase,special characters ,digits and upto 8-15";
              $('#passwordError').html(errormsg);
              return false; 
         }
         else
          {
                  $("#passwordError").html("");
                  
          }

          if(confirmpassword=="")
          {
              var errormsg=" Confirm Password should not be empty";
              $('#confirmpasswordError').html(errormsg);
              return false;
          
          }
          else if(password!=confirmpassword)
          {
            var errormsg="Password and Confirm Password doesn't match";
              $('#confirmpasswordError').html(errormsg);
              return false;
           }
           else
           {
               $("#confirmpasswordError").html("");
           }
}
function registerForm()
{
	window.location.href = "index.php";
}
function datatableForm()
{
	console.log("hello");
}
$(document).ready( function () {
    $('#user-data').DataTable();
} );
