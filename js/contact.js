$(document).ready(function() {
	$("#contact-button").click(function(){
	var name = $("#username").val();
	var mobile = $("#usermobile").val();
	if(name == ""){
		alert('Please enter your name');
	}
	else if(mobile == ""){
		alert('Please enter your contact number');
	}
	else{
		$.ajax({
        url: 'php_pages/contact.php',
        type: 'POST',
        data: {
            postusername:name,
            postuserphone:mobile
        },
        success: function(msg) {
        	$('#username').val('');
        	$('#usermobile').val('');
            alert('We will contact you soon.');
        }               
    });
	}
});


function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}

$("#contact-submit").click(function(){
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
		// $("#mycontactform").submit(function( e ) {
		// e.preventDefault();
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
        	$('#mycontactform')[0].reset();
            alert('Your query has been sent.');
        }               
    });
		// });
	}
});

});



