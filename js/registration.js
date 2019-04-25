$(document).ready(function() {
	$("#submit").click(function(){
		var submit = $(this).val();
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var password = $("#password").val();
	var confirm_password = $("#confirm_password").val();
	if(name == ""){
		alert('Please enter your name');
	}
	else if(email == ""){
		alert('Please enter your email address');
	}
	else if(IsEmail(email) == false){
		alert('Please enter a valid email address');
	}
	else if(phone == ""){
		alert('Please enter your contact number');
	}
	else if(password == ""){
		alert('Please enter the password');
	}
	else if(password.length < 6){
		alert('Password should be at least 6 characters long');
	}
	else if(confirm_password == ""){
		alert('Please confirm the password');
	}
	else if(confirm_password != password){
		alert('Password did not match. Please re-enter.');
	}
	else {
		$.ajax({
        url: 'php_pages/registration.php',
        type: 'POST',
        data: {
            postname:name,
             postemail:email,
             postcontact:phone,
             postpassword:password,
             postconfirmpassword:confirm_password,
             postsubmit:submit
        },
        success: function(msg) {
        	$('#loginform')[0].reset();
            alert('Your have been registered.');
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