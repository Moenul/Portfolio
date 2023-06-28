$(document).ready(function(){

$("#message").click(function(){
	$("#message > .sub_dropdown").toggle();
	$("#notification > .sub_dropdown").hide();
	$("#profile > .sub_dropdown").hide();
});

$("#notification").click(function(){
	$("#notification > .sub_dropdown").toggle();
	$("#message > .sub_dropdown").hide();
	$("#profile > .sub_dropdown").hide();
});

$("#profile").click(function(){
	$("#profile > .sub_dropdown").toggle();
	$("#message > .sub_dropdown").hide();
	$("#notification > .sub_dropdown").hide();
});

$(".dropdown_btn").click(function(){
	$(".side_nav").toggleClass("side_nav_collaps");
	$(".content_section").toggleClass("side_nav_collaps_content");
	$(this).toggleClass("dropdown_btn_active");
});




});