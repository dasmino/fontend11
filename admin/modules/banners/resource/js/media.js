$('body').on('change', '.fileUpload', function(event) {
	event.preventDefault(); 
	$('.icon-loading').addClass('display-none'); 
	$('.loading').addClass('animate-loading-center');
	$('.loading').html('<div class="icon-loading"><i class="demo-icon icon-spin4 animate-spin">&#xe834;</i> Đang tải dữ liệu...</div>');
	$('.fade_loading').html('<div class="modal-backdrop fade in"></div>');
	var data = new FormData($("#form-uploads-ajax")[0]);
	$.ajax({
		url: baseUrlcloud+'media/media/uploadImagesView',
		type: 'POST',  
		data: data,
		cache: false,
		contentType: false,
		processData: false,
		dataType:'json',
	})
	.done(function(data) {
		var abc = jQuery.parseJSON(JSON.stringify(data));
		document.getElementById("uploadPreview").src= abc.html;
		$('.modal-image-choose').find('.hidden_thumb_pages').val(abc.html_1);
		$(this).parents('.modal-image-choose').find('.load-img').attr('src', baseUrlcloud+'timthumb.php?src='+baseUrlcloud+'cdn/'+abc.html+'&h=150&w=210&zc=2');
		$('#myModalPages').modal('hide');
		$('.icon-loading').removeClass('display-none'); 
		$('.loading').removeClass('animate-loading-center');
		$('.loading').empty();
		$('.fade_loading').empty();
		if (data.status==true) {
			$('#myModalPages').find('.modal-body').fadeOut(100, function(){
				$('#myModalPages').find('.modal-body').html(data.html123).fadeIn();
			}); 
			toastr["success"](data.mess);

		}else{
			toastr["warning"](data.mess);
		}
	});
});