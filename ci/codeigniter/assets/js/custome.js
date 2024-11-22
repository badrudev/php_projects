$("#validation").submit(function(event) {
	event.preventDefault()
	let form  = $(this)
	let formDate = form.serialize()
	$(this).find('#name-input').find('.error-class').remove();
	if(!($(this).find('#name').val())){
		$(this).find('#name').after('<div class="error-class mt-3 err">This field is required.</div>');
		$("#name").focus();
		return false;
	}
	var mobile = $(this).find('#mobilenumber').val();
	$(this).find('#mobile-input').find('.error-class').remove();
	if(!mobile){
		$(this).find('#mobilenumber').after('<div class="error-class mt-3 err">This field is required.</div>');
		$("#mobilenumber").focus();
		return false;
	}
	if(mobile.length <10){
		$(this).find('#mobilenumber').after('<div class="error-class mt-3 err">Should be 10 digit.</div>');
		$("#mobilenumber").focus();
		return false;
	}
	$(this).find('#email-input').find('.error-class').remove();
	if(!($(this).find('#email').val())){
		$(this).find('#email').after('<div class="error-class mt-3 err">This field is required.</div>');
		$("#email").focus();
		return false;
	}

	$('#myModal').modal('show');
	$.ajax({
		url:form.attr('action'),
		type: "POST",
		data: formDate,
		cache: false,
		success: function(dataResult){
            var res = JSON.parse(dataResult);
			if(res.status){
				$('#myModal').modal('show');
			}
			form[0].reset();
			///
		}
	});
});

