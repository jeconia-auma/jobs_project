const form = document.getElementById('validation-form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const user_error = document.getElementById('user_error');
const pass_error = document.getElementById('pass_error');

form.addEventListener('submit', (e) => {
    if(email.value == ""){
        e.preventDefault();
        user_error.innerText = "Field must not be empty!!!";
    }else {
        if(/[a-zA-Z0-9]+@+[a-zA-Z0-9]+\.+[a-zA-Z0-9]+/.test(email.value)){
            // alert('true');
            user_error.innerText = "";
        }else {
            e.preventDefault();
            user_error.innerText = "This must be an email";
        }
    }

    if(password.value == ""){
        e.preventDefault();
        pass_error.innerText = "Field must not be empty!!!";
    }else {
        pass_error.innerText = "";
    }
});