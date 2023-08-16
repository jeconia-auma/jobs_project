const form = document.getElementById('validation-form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const user_error = document.getElementById('user_error');
const pass_error = document.getElementById('pass_error');

form.addEventListener('submit', (e) => {
    if(password.value == ""){
        e.preventDefault();
        pass_error.innerText = "Field must not be empty!!!";
    }else {
        pass_error.innerText = "";
    }
    if(email.value == ""){
        e.preventDefault();
        user_error.innerText = "Field must not be empty!!!";
    }else {
        user_error.innerText = "";
    }

    if(password.value == ""){
        e.preventDefault();
        pass_error.innerText = "Field must not be empty!!!";
    }else {
        pass_error.innerText = "";
    }

    if(password.value == ""){
        e.preventDefault();
        pass_error.innerText = "Field must not be empty!!!";
    }else {
        pass_error.innerText = "";
    }

    if(password.value == ""){
        e.preventDefault();
        pass_error.innerText = "Field must not be empty!!!";
    }else {
        pass_error.innerText = "";
    }
});