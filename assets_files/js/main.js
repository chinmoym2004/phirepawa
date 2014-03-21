$(document).ready(function(){
	
	$('#coin-slider').coinslider({ 
			width: 1170, 
			navigation: true, 
			delay: 5000 
		});

});

$(document).on("click","#from-clr",function(){
	$('#blogPostFrom')[0].reset();
	$("#blog_body").text("");
	editor.destroy();
	$('#blogPostFrom').hide();
	window.location.assign(linkOnCancle);
});
$(document).on("click","#from-view",function(){
	$("#view_content_id").html($("#blogPostFrom").attr("data-id"));
	$("#view_content_title").html($("#input_content_title").val());
	$("#view_content_body").html($("#blog_body").text());
	$("#view_content_tags").html($("#input_content_tags").val());
	$("#view_content_uid").html($("#content_uid").text());
	$("#view_content_created_at").html($("#content_created_at").text());
	$("#view_content_updated_at").html($("#content_updated_at").text());
});
$(document).on("click",".resetPreviewModel",function(){
	$("#view_content_id").html("");
	$("#view_content_title").html("");
	$("#view_content_body").html("");
	$("#view_content_tags").html("");
	$("#view_content_uid").html("");
	$("#view_content_created_at").html("");
	$("#view_content_updated_at").html("");
});
$("#sbuscrbeForm").submit(function(event){
	event.preventDefault();
	if($("#getSubscriberEmail").val()!='' && $("#getSubscriberEmail").val()!=null)
	{
		$.post(linkPath+'/users/subscribe',{'ubscribe_email':$("#getSubscriberEmail").val()},function(data){
			$("#getSubscriberEmail").attr('value',"");
			alertify.success("Thank you !");

		});
	}
});

$("#userCreate").submit(function(event){
	if($("#firstname").val()=="" && $("#firstname").val()!==null)
	{
		alertify.error("Enter Your Firstname please");
		event.preventDefault();
	}
	else if($("#lastname").val()=="" && $("#lastname").val()!==null)
	{
		alertify.error("Enter Your Lastname please");
		event.preventDefault();
	}
	else if($("#signupEmail").val()=="" && $("#signupEmail").val()!==null)
	{

		alertify.error("Enter Your Email please");
		event.preventDefault();
	}
	else if($("#signupPassword").val()=="" && $("#signupPassword").val()!==null)
	{
		alertify.error("Enter a password please");
		event.preventDefault();
	}
	else
	{
		
	}		
});

$(document).on("click",".ImPosting",function(){
	if($(".myPostNote").val()){
		$("#commentByUser").prepend("<div>"+$(".myPostNote").val()+"</div>");
		$.post(linkPath+"/users/comments",{"postbody":$(".myPostNote").val(),"forPostId":$(".myPostNote").attr("data-id")});
		alertify.success("Thank you !");
	}
	else{
		alertify.error("Nothing to post");
	}
	
});


$(document).on("click","#editme",function(){
	$("#saveHome").text($("#about").html());
	$("#about").hide();
	$("#showAboutus").css("display","inline");
});
$(document).on("click","#edithome",function(){
	$("#saveHome").text($("#home").html());
	$("#home").hide();
	$("#showHome").css("display","inline");
});

$(document).on("click","#clear",function(){
	$("#saveAboutus").text("");
	$("#about").show();
	$("#showAboutus").css("display","none");
});

$(document).on("submit","#postComment",function(event){
	event.preventDefault();
	$.post($(this).attr('action'),{'forid':$(this).attr('data-postid'),'postcomment':$("#postcomment").val(),'context': $(this).attr('data-context')},function(data){
		$("#postcomment").val("");
		alertify.error("comment posted for varification");
	});
});

$(document).on("click",'.commentverify',function(event){
	event.preventDefault();
	$.post(globalpath+"/admin/verifycomment/"+$(this).attr('data-id'),function(){
		window.location.reload();
	});
});
$(document).on("click",'.commentdelete',function(event){
	event.preventDefault();
	$.post(globalpath+"/admin/deletecomment/"+$(this).attr('data-id'),function(){
		window.location.reload();
	});
});

$(document).on("focus","#eventdate",function(){
	$(this).datepicker();
});

$(document).on("focus","#newsdate",function(){
	$(this).datepicker();
});
$(document).on("focus","#eventsdate",function(){
	$(this).datepicker();
});

$(document).on("click",'.userverify',function(event){
	event.preventDefault();
	$.post(globalpath+"/admin/userverify/"+$(this).attr('data-id'),function(){
		alertify.error("success ! User verified");
		window.location.reload();
	});
});
