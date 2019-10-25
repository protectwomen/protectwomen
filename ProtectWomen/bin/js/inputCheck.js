var userNameInput = document.querySelector('.userName');
var userPasswordInput = document.querySelector('.userPassword');
var flag1 = false;
var flag2 = false;

userNameInput.addEventListener('focusout', checkNameFocus);
userPasswordInput.addEventListener('focusout', checkPasswordFocus);

function checkNameFocus() {
    if (userNameInput.value.length < 3) {
        flag1 = false;
        document.querySelector('.userNameError').innerHTML = 'Wpisana nazwa użytkownika musi mieć conajmniej 3 znaki';
		this.style.transition = "0.3s ease"
        this.style.border = ' 2px solid red';
		
		 userNameInput.addEventListener('focus', function () {
            this.style.boxShadow = '0 0 0 0.2rem pink';
        });
		
		userNameInput.addEventListener('focusout', function () {
            this.style.boxShadow = '';
        });
		
		
    }else {
        flag1 = true;
        document.querySelector('.userNameError').innerHTML = '';
        this.style.border = '';
		
		userNameInput.addEventListener('focus', function () {
            this.style.boxShadow = '';
        });
		
    }
    lastCheck();
}

function checkPasswordFocus() {
    if (userPasswordInput.value.length < 6) {
        flag2 = false;
        document.querySelector('.userPasswordError').innerHTML = 'Wpisane hasło musi mieć conajmniej 6 znaków';
		this.style.transition = "0.3s ease"
        this.style.border = ' 2px solid red';
		
		userPasswordInput.addEventListener('focus', function () {
            this.style.boxShadow = '0 0 0 0.2rem pink';
        });

        userPasswordInput.addEventListener('focusout', function () {
            this.style.boxShadow = '';
        });
		
    }else {
        flag2 = true;
        document.querySelector('.userPasswordError').innerHTML = '';
        this.style.border = '';
		
		userPasswordInput.addEventListener('focus', function () {
            this.style.boxShadow = '';
        });
    }
    lastCheck();
}

function lastCheck() {
    if(flag1 == true && flag2 == true) {
        document.querySelector('.btn').className= 'btn btn-lg btn-primary btn-block';
        document.querySelector('.btn').removeAttribute('disabled');
    }else {
        document.querySelector('.btn').className= 'btn btn-lg btn-secondary btn-block';
        document.querySelector('.btn').disabled=true;
    }
}









