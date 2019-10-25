var textArea = document.querySelector('.forum-text-area');

textArea.addEventListener('focusout', checkTextArea);

function checkTextArea() {
    if (textArea.value.length < 1) {
        document.querySelector('.textAreaError').innerHTML = 'Po co wstawiać pusty komentarz?';
        document.querySelector('.btnComment').className= 'btn btn-secondary btnComment';
        document.querySelector('.btnComment').setAttribute(disabled)= 'true';
        this.style.border = ' 2px solid red';
    }else if (textArea.value.length < 20){
        document.querySelector('.textAreaError').innerHTML = 'Komentarz powinien mieć minimum 20 znaków';
        document.querySelector('.btnComment').className= 'btn btn-secondary btnComment';
        document.querySelector('.btnComment').setAttribute(disabled)= 'true';
        this.style.border = ' 2px solid red';
        this.style.border = '';
    } else {
        document.querySelector('.textAreaError').innerHTML = '';
        document.querySelector('.btnComment').className= 'btn btn-primary btnComment';
        document.querySelector('.btnComment').removeAttribute('disabled');
        this.style.border = '';
    }
}











