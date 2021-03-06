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



$("#bookNow").click(function(){
		var submit = $(this).val();
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var address = $("#address").val();
	var city = $("#city").val();
	var state = $("#state").val();
	var postcode = $("#postcode").val();
	var bedroom = $('#bedroom:checked').val();
	var bathroom = $('#bathroom:checked').val();
	var extras = $("#extras").val();
	var customerComments = $("#detail").val();
	console.log("name: ", name);
	console.log("email: ", email);
	console.log("phone: ", phone);
	console.log("address: ", address);
	console.log("city: ", city);
	console.log("state: ", state);
	console.log("postcode: ", postcode);
	console.log("bedrrom: ", bedroom);
	console.log("bathroom: ", bathroom);
	console.log("customerComments: ", customerComments);

	var services = '';
	var service = $('#service:checked').val()?true:false;
	if(service==true){
		services = $('#service').val();
	}
	var service1 = $('#service1:checked').val()?true:false;
	if(service1==true){
		if(services=="")
			services = $('#service1').val();
		else
		services = services+ ", "+ $('#service1').val();
	}
	var service2 = $('#service2:checked').val()?true:false;
	if(service2==true){
		if(services=="")
			services = $('#service2').val();
		else
		services = services+ ", "+ $('#service2').val();
	}
	var service3 = $('#service3:checked').val()?true:false;
	if(service3==true){
		if(services=="")
			services = $('#service3').val();
		else
		services = services+ ", "+ $('#service3').val();
	}
	var service4 = $('#service4:checked').val()?true:false;
	if(service4==true){
		if(services=="")
			services = $('#service4').val();
		else
		services = services+ ", "+ $('#service4').val();
	}


	var extras = '';
	var extras0 = $('#extras0:checked').val()?true:false;
	if(extras0==true){
		extras = $('#extras0').val();
	}
	var extras1 = $('#extras1:checked').val()?true:false;
	if(extras1==true){
		if(extras=="")
			extras = $('#extras1').val();
		else
		extras = extras+ ", "+ $('#extras1').val();
	}
	var extras2 = $('#extras2:checked').val()?true:false;
	if(extras2==true){
		if(extras=="")
			extras = $('#extras2').val();
		else
		extras = extras+ ", "+ $('#extras2').val();
	}
	console.log("services: ", services);
	console.log("extras: ", extras);


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
	else if(address == ""){
		alert('Please enter your address');
	}
	else if(city == ""){
		alert('Please enter your city');
	}
	else if(state == ""){
		alert('Please enter your state');
	}
	else if(postcode == ""){
		alert('Please enter your postcode');
	}
	else if(services == ""){
		alert('Please select your service');
	}
	else if(bedroom == ""){
		alert('Please select no. of bedroom');
	}
	else if(bathroom == ""){
		alert('Please select no. of bathroom');
	}
	else if(extras == ""){
		alert('Please select extra service');
	}
	else if(customerComments == ""){
		alert('Please write your comments');
	}
	else {
		$.ajax({
        url: 'php_pages/book-service.php',
        type: 'POST',
        data: {
            name:name,
             email:email,
             phone:phone,
             address:address,
             city:city,
             state:state,
             postcode:postcode,
             services:services,
             bedroom:bedroom,
             bathroom:bathroom,
             extras:extras,
             customerComments:customerComments,
             submit:submit

        },
        success: function(msg) {
        	$('.popform')[0].reset();
            alert (msg);
        },
        error: function(err) {
        	alert(err);
        }           
    });
		
	}
});






	$("#quote").click(function(){
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



