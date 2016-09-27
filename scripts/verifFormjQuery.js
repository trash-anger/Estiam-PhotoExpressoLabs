console.log('lol');

var pw1 = $('#password');
pw1.keyup('change', function(){
	var pwdContent = pw1.val();
	console.log(pwdContent);
	var infosPwd = {
		length : 0,
		nbOfNb : 0,
		specialChar : 0,
		uppercase : 0
	}
	pwdContent = pwdContent.split('');
	infosPwd.length = pwdContent.length;
	var regExNumber = new RegExp('^[0-9]$');
	var regExSpecial = new RegExp('^[A-Za-z0-9]$');
	var regExUppercase = new RegExp('^[A-Z]$');
	for(var i = 0; i < pwdContent.length; i++){
		if(regExNumber.test(pwdContent[i])){
			infosPwd.nbOfNb++;
		} else if(!regExSpecial.test(pwdContent[i])){
			infosPwd.specialChar++;
		}
		if(regExUppercase.test(pwdContent[i])){
			infosPwd.uppercase++;
		}
	}
	var percentage = 0;
	if(infosPwd.length > 0){
		percentage += infosPwd.length * 2;
		percentage += infosPwd.nbOfNb * 4;
		percentage += infosPwd.specialChar * 7;
		percentage += infosPwd.uppercase * 3;
	} else {
		percentage = 0;
	}
	if(percentage > 100)
	  percentage = 100;

	$('.progress-bar').css('width',percentage+"%");
	$('.progress-bar').text(percentage+"%");
	if(percentage > 50){
		$('input[type="submit"]').removeClass('disabled');
		$('input[type="submit"]').removeAttr('disabled');
		$('.weakness').css('visibility','hidden');
		$('.progress-bar').removeClass('progress-bar-danger');
		$('.progress-bar').addClass('progress-bar-warning');
		if(percentage > 75){
			$('.progress-bar').removeClass('progress-bar-warning');
			$('.progress-bar').addClass('progress-bar-info');	
		}
		if(percentage == 100){
			$('.progress-bar').removeClass('progress-bar-info');	
			$('.progress-bar').addClass('progress-bar-success');	
		}
	} else {
		$('input[type="submit"]').addClass('disabled');
		$('input[type="submit"]').attr('disabled', 'disabled');
		$('.weakness').css('visibility','visible')
		$('.progress-bar').addClass('progress-bar-danger');	
		$('.progress-bar').removeClass('progress-bar-info');	
		$('.progress-bar').removeClass('progress-bar-success');	
		$('.progress-bar').removeClass('progress-bar-warning');	
	}
});

var pw2 = $('#password2');
pw2.oninput = function(){
	if(pw2.val() == $('#password').val()){
		console.log('ok');
		$('input[type="submit"]').removeClass('disabled');
		$('input[type="submit"]').removeAttr('disabled');
	} else {
		$('input[type="submit"]').addClass('disabled');
		$('input[type="submit"]').setAttribute('disabled', 'disabled');
		console.log('nok');
	}

}