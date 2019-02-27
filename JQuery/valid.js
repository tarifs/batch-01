// First Name
function checkFirstName() {
    var firstNamevalue = $('#firstName').val().length;
    if(firstNamevalue >= 6 && firstNamevalue <=15){
        $('#fsError').text('OK');
    }else{
        $('#fsError').text('First Name Should be 6 to 15 characters');
    }
}


$('#firstName').blur(function () {
    checkFirstName();
})

$('#firstName').keyup(function () {
    checkFirstName();

})

// Last Name
function checkLastName() {
    var lastNamevalue = $('#lastName').val().length;
    if(lastNamevalue >= 6 && lastNamevalue <=15){
        $('#lsError').text('OK');
    }else{
        $('#lsError').text('Last Name Should be 6 to 15 characters');
    }
}


$('#lastName').blur(function () {
    checkLastName();
})

$('#lastName').keyup(function () {
    checkLastName();

})

// Email Validation
function checkEmailAddress() {
    var pattern = /^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/
    if(pattern.test($('#emailAddress').val())){
        $('#eError').text('Valid');
    }else{
        $('#eError').text('This Email is not Valid');
    }
}
$('#emailAddress').blur(function () {
    checkEmailAddress();
})

$('#emailAddress').keyup(function () {
    checkEmailAddress();

})

// Password Validation
function checkPassword(){
    var password = $('#password').val();
    var pattern = /^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/

    if(pattern.test(password)){
        $('#pError').text('Valid');
    }else{
        $('#pError').text('Password must contain at least one letter, at least one number, and be longer than six charaters.');
    }
}
$('#password').blur(function () {
    checkPassword();
})

$('#password').keyup(function () {
    checkPassword();

})

// Confirm Password
function checkConfirmPassword() {
    var confirmPassword = $('#confirmPassword').val();
    var password        = $('#password').val();
    if(password == confirmPassword){
        $('#cpError').text('Match');
    }else{
        $('#cpError').text('Doest Not Match');
    }
}
$('#confirmPassword').blur(function () {
    checkConfirmPassword();
})

$('#confirmPassword').keyup(function () {
    checkConfirmPassword();

})

// Show Password

function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}




