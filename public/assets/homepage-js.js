$(document).ready(function(){
	$("#newest-container, #article-container").hide();
	$("#trending-container").show();
	$("#trending-option").css("color", "#FF6200");
	$("#trending-option").css("border-bottom", "5px solid #FF6200");
	$(".navbar-brand").hide();

	$("#trending-option").click(function(){
		$("#newest-container, #article-container").hide();
		$("#trending-container").show();
		$(this).css("color", "#FF6200");
		$(this).css("border-bottom", "5px solid #FF6200");
		$("#newest-option, #article-option").css("color", "black");
		$("#newest-option, #article-option").css("border-bottom", "none");
	});

	$("#newest-option").click(function(){
		$("#newest-container").show();
		$("#article-container, #trending-container").hide();
		$(this).css("color", "#FF6200");
		$(this).css("border-bottom", "5px solid #FF6200");
		$("#trending-option, #article-option").css("color", "black");
		$("#trending-option, #article-option").css("border-bottom", "none");
	});

	$("#article-option").click(function(){
		$("#article-container").show();
		$("#trending-container, #newest-container").hide();
		$(this).css("color", "#FF6200");
		$(this).css("border-bottom", "5px solid #FF6200");
		$("#trending-option, #newest-option").css("color", "black");
		$("#trending-option, #newest-option").css("border-bottom", "none");
	});

});

$(window).scroll(function(){
	if($(this).scrollTop() < 50){
		$(".navbar").css("background-color","transparent");
		$("#navbarArea").css("margin-right","20vw");
		$(".navbar-brand").hide();
	}

	if($(this).scrollTop() > 50){
		$(".navbar").css("background-color","#FF6200");
		$("#navbarArea").css("margin-right","0vh");
		$(".navbar-brand").show();
	}
});