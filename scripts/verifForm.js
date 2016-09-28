console.log('lol');

var pw1 = document.querySelector('#password');
pw1.oninput = function(){
	var pwdContent = pw1.value;
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

	document.querySelector('.progress-bar').style.width = percentage+"%";
	document.querySelector('.progress-bar').textContent = percentage+"%";
	if(percentage > 50){
		document.querySelector('input[type="submit"]').classList.remove('disabled');
		document.querySelector('input[type="submit"]').removeAttribute('disabled');
		document.querySelector('.weakness').style.visibility = 'hidden';
		document.querySelector('.progress-bar').classList.remove('progress-bar-danger');
		document.querySelector('.progress-bar').classList.add('progress-bar-warning');
		if(percentage > 75){
			document.querySelector('.progress-bar').classList.remove('progress-bar-warning');
			document.querySelector('.progress-bar').classList.add('progress-bar-info');	
		}
		if(percentage == 100){
			document.querySelector('.progress-bar').classList.remove('progress-bar-info');	
			document.querySelector('.progress-bar').classList.add('progress-bar-success');	
		}
	} else {
		document.querySelector('input[type="submit"]').classList.add('disabled');
		document.querySelector('input[type="submit"]').setAttribute('disabled', 'disabled');
		document.querySelector('.weakness').style.visibility = 'visible';
		document.querySelector('.progress-bar').classList.add('progress-bar-danger');	
		document.querySelector('.progress-bar').classList.remove('progress-bar-info');	
		document.querySelector('.progress-bar').classList.remove('progress-bar-success');	
		document.querySelector('.progress-bar').classList.remove('progress-bar-warning');	
	}
}

var pw2 = document.querySelector('#password2');
pw2.oninput = function(){
	if(pw2.value == document.querySelector('#password').value){
		console.log('ok');
		document.querySelector('input[type="submit"]').classList.remove('disabled');
		document.querySelector('input[type="submit"]').removeAttribute('disabled');
	} else {
		document.querySelector('input[type="submit"]').classList.add('disabled');
		document.querySelector('input[type="submit"]').setAttribute('disabled', 'disabled');
		console.log('nok');
	}

}