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



// Before Upload Preview Image

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#preview_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
        $('.action_field').show();
    }
}

$("#imgInp").change(function() {
    readURL(this);
});

  // --------


});
