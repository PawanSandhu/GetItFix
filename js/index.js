$(document).ready(function() {
	// alert('hmmm');
});

$('#page-index').on('pageshow', function() {
  alert('hello');
  console.log("hiiiii");
 });

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}

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
		alert('Please enter your query');
	}
	else {
		// alert('will contact you soon.');
		// var data = $("#myform :input").serializeArray();
		// console.log("data is: " + JSON.stringify(data));
		// $.post($("myform")).attr("action"), data, function(info){$("#result").html(info);};
		// var result = "<?php php_func(); ?>";
		// alert("result is" + result);
		$("#myform").submit(function( e ) {
		e.preventDefault();
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
            alert('Your query has been sent.');
        }               
    });
		});

		// $.post('php_pages/index.php', {postname:name, postemail:email, postcontact:phone, postsubject:subject, postmessage:message},
		//  function(data){
		//  	// $("result").html(data);
		//  	alert("data is: " + data);
		//  	$('#myform')[0].reset();
		// });
	}
});

