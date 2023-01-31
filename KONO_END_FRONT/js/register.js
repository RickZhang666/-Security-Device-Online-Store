let emailInput=document.querySelector("#email");
let passInput=document.querySelector("#rpwd");
let pass2Input=document.querySelector("#rpwd2");

let emailError=document.createElement('p');
emailError.setAttribute("class","warning");
document.getElementById("emailLabel").append(emailError);
let passError=document.createElement('p');
passError.setAttribute("class","warning");
document.getElementById("rpwdLabel").append(passError);
let pass2Error=document.createElement('p');
pass2Error.setAttribute("class","warning");
document.getElementById("rpwd2Label").append(pass2Error);


let emailErrorMsg="\u2716 Email address should be no-empty with the format xyz@xyz.xyz.";
let passErrorMSg="\u2716 Password should be at least 6 characters: include letter and number";
let pass2ErrorMSg="\u2716 Please retype password";
let defaultMSg="";


function vaildateEmail(){
    let email = emailInput.value; 
    let regexp=/^\w+@\w+\.\w+$/; 
    var error;
    if(regexp.test(email)){ 
    error = defaultMSg;}
    else {
    error = emailErrorMsg;
    }
    return error;
}
function vaildatePass(){
    let pass = passInput.value; 
    let regexp = /(?=.*[a-z]).{6,}/; 
    var error;
    if(regexp.test(pass)){ 
    error = defaultMSg;}
    else{
    error = passErrorMSg;}
    return error;
}
function vaildatePass2(){
    var error
    if((passInput.value == pass2Input.value)&pass2Input.value !==""){ 
    error = defaultMSg;}
    else {
    error = pass2ErrorMSg;}
    return error;
}



function validateReg(){
    let valid = true; 
    let emailValidation=vaildateEmail();
    let passValidation=vaildatePass();
    let pass2Validation=vaildatePass2();
    if(emailValidation !==defaultMSg){
        emailError.textContent = emailValidation;
        valid = false;
    }
    if(passValidation !==defaultMSg){
        passError.textContent = passValidation;
        valid = false;
    }
    if(pass2Validation !==defaultMSg){
        pass2Error.textContent = pass2Validation;
        valid = false;
    }
    return valid;
};



emailInput.addEventListener("blur",()=>{
    let x=vaildateEmail();
    if(x == defaultMSg){
        emailError.textContent = defaultMSg;
    }
    });
passInput.addEventListener("blur",()=>{
    let x=vaildatePass();
    if(x == defaultMSg){
        passError.textContent=defaultMSg;
    }
    });
pass2Input.addEventListener("blur",()=>{
    let x=vaildatePass2();
    if(x == defaultMSg){
        pass2Error.textContent=defaultMSg;
    }
    });
