$(document).ready(function(){
	var color1 = $("#color1").val();
	var color2  = $("#color2").val();
		console.log(color2);
		
		
	$("#btn").click(function(){
		$('#body').css({
    background: "-webkit-gradient(linear, left top, left bottom, from("+color1+"), to("+color2+"))" 
});
	});
});