$(document).ready(function() {

	$( "#tabs" ).tabs();
	$("#click-left").click(function() {
		if($("#menu-gauche").attr("ouvert") == "pasok"){
			$("#menu-gauche").attr("ouvert","ok");
			$("#menu-gauche").animate({left:"0"});
			if($("#menu-droite").attr("ouvert") == "ok"){
				$("#menu-droite").attr("ouvert","pasok");
				$("#menu-droite").animate({right:"-360"});
				$("#chevron_right_rightvolet").css("display","none");
				$("#chevron_left_rightvolet").css("display","block");
			}
			$("#chevron_right_leftvolet").css("display","none");
			$("#chevron_left_leftvolet").css("display","block");
		}
		else{
			$("#menu-gauche").attr("ouvert","pasok");
			$("#menu-gauche").animate({left:"-360"});
			$("#chevron_right_leftvolet").css("display","block");
			$("#chevron_left_leftvolet").css("display","none");
		}
		
	});
	$("#click-right").click(function() {
		if($("#menu-droite").attr("ouvert") == "pasok"){
			$("#menu-droite").attr("ouvert","ok");
			$("#menu-droite").animate({right:"0"});
			if($("#menu-gauche").attr("ouvert") == "ok"){
				$("#menu-gauche").attr("ouvert","pasok");
				$("#menu-gauche").animate({left:"-360"});
				$("#chevron_right_leftvolet").css("display","block");
				$("#chevron_left_leftvolet").css("display","none");
			}
			$("#chevron_right_rightvolet").css("display","block");
			$("#chevron_left_rightvolet").css("display","none");
		}
		else{
			$("#menu-droite").attr("ouvert","pasok");
			$("#menu-droite").animate({right:"-360"});
			$("#chevron_right_rightvolet").css("display","none");
			$("#chevron_left_rightvolet").css("display","block");
		}
		
	});
	

	$( "#accordion" ).accordion({
		heightStyle: "content"
	});
	
	$( "#accordion2" ).accordion({
		heightStyle: "content"
	});
	
	$( "#tabsA, #tabsB, #tabsC, #tabsD" ).tabs();
});