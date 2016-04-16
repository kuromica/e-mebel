function findPrice(){
	var value = $("#price-location").val();
	$(".price-list").hide();
	$(".price-list[data-lokasi='"+value+"']").show();
	$("#price-container .marquee p").removeClass('active');
	setTimeout(function(){

	$("#price-container .marquee p").addClass('active');
	},100);
}
function alert_div(elmnt, type){
	if(type=='success'){
		$(elmnt).removeClass('alert-danger');
		$(elmnt).addClass('alert-success');	
		$(elmnt+" i").removeClass('fa-ban');	
		$(elmnt+" i").addClass('fa-check');	
	}
	else if(type=='error'){
		$(elmnt).removeClass('alert-success');	
		$(elmnt).addClass('alert-danger');
		$(elmnt+" i").removeClass('fa-check');	
		$(elmnt+" i").addClass('fa-ban');
	}
}

function submit_form(elmnt, reset_form){
    $(elmnt+" .form-msg").removeClass('shake');
    $(elmnt+" .form-msg").removeClass('bounce');
	$("#loading-overlay").fadeIn(200);
	$(elmnt).ajaxForm({ 
		success: function(result){
			$(elmnt+" .form-msg").fadeIn(100);
          	var result = $.parseJSON(result);
			if(!result.redirect || result.redirect==""){
				$("#loading-overlay").fadeOut(200);
			}
            alert_div(elmnt+' .form-msg',result.status);
			if(result.status=="success"){
     			$(elmnt+" .form-msg").addClass('bounce');
     			if(!reset_form)
     				$(elmnt+" .form-control").val('');
     			if(result.redirect && result.redirect!="")
					setTimeout(function(){window.location.replace(result.redirect);},0);
			}
			else{
				if($(elmnt+" .form-msg").length){
     				$(elmnt+" .form-msg").addClass('shake');	
				}
				else{
					alert(result.message);
				}
			}
			if(typeof result.url!="undefined" && result.url!=""){
	            if(result.url=="self")
	              setTimeout(function(){location.reload();},1000);
	            else if(result.url!="")
	              window.location.href = result.url;
	        }
	        else
	          $("#loading-overlay").fadeOut(200);
	        
	        if(typeof result.callFunction!="undefined" && result.callFunction!=""){

	          window[result.callFunction](result);
	        }
			$(elmnt+" .form-msg span").html(result.message);
		} 
	}).submit();

	return true;
}

function comment_form(elmnt, reset_form){
	$("#loading-overlay").fadeIn(200);
	$(elmnt).ajaxForm({ 
		success: function(result){
			alert(result);
			$(elmnt+" .form-msg").fadeIn(100);
          	var result = $.parseJSON(result);
			$("#loading-overlay").fadeOut(200);
            alert_div(elmnt+' .form-msg',result.status);
			if(result.status=="success"){
				$("#image-attachment").val('');
				$("#comment-attachment").hide();
     			$(elmnt+" .form-control").val('');
				$("#comment-content-container").prepend(result.message);
			}
		}
	}).submit();

	return true;
}

function vote_form(elmnt, id){
	$("#loading-overlay").fadeIn(200);
	var base_url = $("#base_url").attr('href');
	$.ajax({type: "POST", url: base_url+"article/vote",data:"id="+id}).done(function(result){
		$("#loading-overlay").fadeOut(200);
        elmnt.addClass('btn-active');
        var likes = parseInt($(".likes-"+id).html())+1;
        $(".likes-"+id).html(likes);
        elmnt.removeAttr('onclick');
	});

}
function readURL(input, container) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            container.attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
        container.parent().show();
    }
    else{
    	container.parent().hide();
    }
}

function chosenImage(elmnt, container){
	readURL(elmnt,container);
}
function deleteImage(input, container){
	input.val('');
	container.hide();
}

function get_city(province){
	var base_url = $("#base_url").attr('href');
	$("#loading-overlay").fadeIn(200);
	$.ajax({
	    url:base_url+'content/getCity',
	    type:'POST',
	    data: 'province=' + province,
	    success: function( result ) {
	    	$("#loading-overlay").fadeOut(200);
			var result = $.parseJSON(result);
	    	$("#city").html('');
	        $.each(result, function(i, value) {
	            $('#city').append($('<option>').text(value).attr('value', value));
	        });
	    }
	});
}

function generate_tag_menu(element){
	var element = element.split("#");
	$.each(element, function(i, item) {
		var html = '<div class="header-menu tagmenu-'+item+'" onclick="menu_filter(\'articles\',\'tags='+encodeURI(item)+'&sortKey=dateSubmitted&sortVal=desc\',$(this))">'+item+'</div>';
		if(item!="" && !$(".header-menu").hasClass('tagmenu-'+item)){
			$("#header-menu").prepend(html);
		}
	});
}

function close_add_question(){
	$("#popup").fadeOut(200);
}
function add_question(){
	$("#popup").fadeIn(200);	
}


function check_voted(userid, article_userid){
	var voted = false;
	$.each(article_userid, function(i, item) {
		if(item[0]==userid){
			voted = true;
		}
	});
	return voted;
}
$("#menu-toggle").click(function(){
	$("#header-fixed").toggleClass('toggle');
	$("#wrapper").toggleClass('toggle');
	$(this).toggleClass('active');
});
$("#setting-btn").click(function(){
	$("#header-menu").toggleClass('active');
	$(this).toggleClass('active');
});
function show_tips(elmnt,type){
	//getContent('#tips-content','id','tips');
	if(type=="weather")
		var contra = 'tips';
	else
		var contra = 'weather';
	$("#"+type+"-container").toggleClass('active');
	$("#"+contra+"-container").removeClass('active');
	$("#"+type+"-btn").toggleClass('active');
	$("#"+contra+"-btn").removeClass('active');
}
function menu_filter(object, filter, elmnt){
	$(".header-menu").removeClass('active');
	elmnt.addClass('active');
	var object = $("#content-container").attr('data-object',object);
	var filter = $("#content-container").attr('data-filter',filter);
	initialize();
}
function char_left(total,length, elmnt){
	var left = total-length;
	$(elmnt).html(left);
}
$(function(){
	setTimeout(function(){$("#tips-container").css('opacity','1');},1);
	setTimeout(function(){$("#weather-container").css('opacity','1');},1);
	$("#tips-container").slideUp(1);
	$("#weather-container").slideUp(1);
	$("#download-app").fadeIn(200);
	findPrice();
});

$("#share-btn").click(function(){
	$(".share-toggle").toggleClass('active');
	$(this).toggleClass('active');
})

$("#header-menu-dropdown").click(function(){
	$("#header-menu-dropdown .option").toggleClass('active');
});
function close_app_popup(){
	var base_url = $("#base_url").attr('href');
	$.ajax({type: "POST", url: base_url+"auth/closeAppPopup"}).done(function(result){
		$("#download-app").fadeOut(200);
	});
}

function close_app_header(){
	var base_url = $("#base_url").attr('href');
	$.ajax({type: "POST", url: base_url+"auth/closeAppHeader"}).done(function(result){
		$("#header-app-download").hide();
		$("#header-separator").css('height','60px');
	});
}

function addShare(id){
	var base_url = $("#base_url").attr('href');
	$.ajax({type: "POST", url: base_url+"conversation/addShare",data:"id="+id}).done(function(result){
		result = $.parseJSON(result);
		if(result.status=="success"){
			var totalVote = parseInt($('.vote-total').html());
			$(".vote-total").html(totalVote+1);
		}
	});
}
