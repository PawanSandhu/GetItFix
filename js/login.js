$(document).ready(function() {
	$("#login-button").click(function(){
		var submit = $(this).val();
	var email = $("#email").val();
	var password = $("#password").val();
	 if(email == ""){
		alert('Please enter your email address');
	}
	else if(IsEmail(email) == false){
		alert('Please enter a valid email address');
	}
	else if(password == ""){
		alert('Please enter the password');
	}
	else if(password.length < 6){
		alert('Password should be at least 6 characters long');
	}
	else {
		$.ajax({
        url: 'php_pages/login.php',
        type: 'POST',
        data: {
             postemail:email,
             postpassword:password,
             postsubmit:submit
        },
        success: function(msg) {
        	$('.signForm')[0].reset();
            // alert (msg);
            if(msg=="welcome") {
            window.location.href = "welcome.php";	
            }
            else{
              alert(msg);
            }
        },
        error: function(err) {
        	alert(err);
        }           
    });
		
	}
});


});


function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}