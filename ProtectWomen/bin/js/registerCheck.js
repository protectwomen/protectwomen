var userNameRegister = document.querySelector('.userName');
var userPasswordRegister = document.querySelector('.userPassword');
var userEmailRegister = document.querySelector('.userEmail');
var flag1 = false;
var flag2 = false;
var flag3 = false;

userNameRegister.addEventListener('focusout', checkUserName);
userPasswordRegister.addEventListener('focusout', checkPasswordFocus);
userEmailRegister.addEventListener('focusout', checkEmailRegister);

function checkUserName() {
    if (userNameRegister.value.length < 3) {
        flag1 = false;
        document.querySelector('.userNameError').className = 'userNameError errorActive';
        this.style.transition = "0.3s ease"
        this.style.border = ' 2px solid red';

        userNameRegister.addEventListener('focus', function () {
            this.style.boxShadow = '0 0 0 0.2rem pink';
        });

        userNameRegister.addEventListener('focusout', function () {
            this.style.boxShadow = '';
        });

    } else {
        flag1 = true;
        document.querySelector('.userNameError').className = 'userNameError errorDeactive';
        this.style.border = '';

        userNameRegister.addEventListener('focus', function () {
            this.style.boxShadow = '';
        });
    }
    lastCheck();
}

function checkPasswordFocus() {
    if (userPasswordRegister.value.length < 6) {
        flag2 = false;
        document.querySelector('.userPasswordError').className = 'userPasswordError errorActive';
        this.style.transition = "0.3s ease"
        this.style.border = ' 2px solid red';

        userPasswordRegister.addEventListener('focus', function () {
            this.style.boxShadow = '0 0 0 0.2rem pink';
        });

        userPasswordRegister.addEventListener('focusout', function () {
            this.style.boxShadow = '';
        });

    } else {
        flag2 = true;
        document.querySelector('.userPasswordError').className = 'userPasswordError errorDeactive';
        this.style.border = '';

        userPasswordRegister.addEventListener('focus', function () {
            this.style.boxShadow = '';
        });
    }
    lastCheck();
}

function checkEmailRegister() {
    var string = userEmailRegister.value.indexOf('@');
    if (string < 0) {
        flag3 = false;
        document.querySelector('.userEmailError').className = 'userEmailError errorActive';
        this.style.transition = "0.3s ease"
        this.style.border = ' 2px solid red';

        userEmailRegister.addEventListener('focus', function () {
            this.style.boxShadow = '0 0 0 0.2rem pink';
        });

        userEmailRegister.addEventListener('focusout', function () {
            this.style.boxShadow = '';
        });


    } else {
        flag3 = true;
        document.querySelector('.userEmailError').className = 'userEmailError errorDeactive';
        this.style.border = '';

        userPasswordRegister.addEventListener('focus', function () {
            this.style.boxShadow = '';
        });

    }
    lastCheck();
}

function lastCheck() {
    if (flag1 == true && flag2 == true && flag3 == true) {
        document.querySelector('.btn').className = 'btn btn-lg btn-primary btn-block';
        document.querySelector('.btn').removeAttribute('disabled');
    } else {
        document.querySelector('.btn').className = 'btn btn-lg btn-secondary btn-block';
        document.querySelector('.btn').disabled = true;
    }
}
