$( document ).ready(function() {
	$('.bond-faq-ans').hide();
});

function setVisibility(id) {
	if(id=="bond-faq-btn1") {
if(document.getElementById('bond-faq-btn1').value=='+'){
document.getElementById('bond-faq-btn1').value = '-';
$('#bond-faq-ans1').show();
}else{
document.getElementById('bond-faq-btn1').value = '+';
$('#bond-faq-ans1').hide();
}
}

else if(id=="bond-faq-btn2"){
if(document.getElementById('bond-faq-btn2').value=='+'){
document.getElementById('bond-faq-btn2').value = '-';
$('#bond-faq-ans2').show();
}else{
document.getElementById(id).value = '+';
$('#bond-faq-ans2').hide();
}
}

else if(id=="bond-faq-btn3"){
if(document.getElementById('bond-faq-btn3').value=='+'){
	console.log('3');
document.getElementById('bond-faq-btn3').value = '-';
$('#bond-faq-ans3').show();
}else{
document.getElementById('bond-faq-btn3').value = '+';
$('#bond-faq-ans3').hide();
}
}

else if(id=="bond-faq-btn4"){
if(document.getElementById('bond-faq-btn4').value=='+'){
document.getElementById('bond-faq-btn4').value = '-';
$('#bond-faq-ans4').show();
}else{
document.getElementById('bond-faq-btn4').value = '+';
$('#bond-faq-ans4').hide();
}
}

else if(id=="bond-faq-btn5"){
if(document.getElementById('bond-faq-btn5').value=='+'){
document.getElementById('bond-faq-btn5').value = '-';
$('#bond-faq-ans5').show();
}else{
document.getElementById('bond-faq-btn5').value = '+';
$('#bond-faq-ans5').hide();
}
}

else if(id=="bond-faq-btn6"){
if(document.getElementById('bond-faq-btn6').value=='+'){
document.getElementById('bond-faq-btn6').value = '-';
$('#bond-faq-ans6').show();
}else{
document.getElementById('bond-faq-btn6').value = '+';
$('#bond-faq-ans6').hide();
}
}
}