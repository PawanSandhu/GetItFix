$(document).ready(function() {
	$('#request-button').click(function(){
$('html, body').animate({scrollTop: $('.request-form').offset().top}, 'slow');
return false;
});


$('#footer-request').click(function(){
$('html, body').animate({scrollTop: $('.request-form').offset().top}, 'slow');
return false;
});


	$("#submit").click(function(){
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var subject = $("#subject").val();
	var message = $("#detail").val();
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
	else if(subject == ""){
		alert('Please enter the subject');
	}
	else {
		$.ajax({
        url: 'php_pages/index.php',
        type: 'POST',
        data: {
            postname:name,
             postemail:email,
             postcontact:phone,
             postsubject:subject,
             postmessage:message
        },
        success: function(msg) {
        	$('#myform')[0].reset();
            alert(msg);
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

