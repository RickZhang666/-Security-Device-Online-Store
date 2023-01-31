let chaInput=document.querySelector("#email");
let chaPassInput=document.querySelector("#opwd");
let chaPass2Input=document.querySelector("#npwd");


let changeError=document.createElement('p');
changeError.setAttribute("class","warning");
document.getElementById("emailLabel").append(changeError);
let passCha=document.createElement('p');
passCha.setAttribute("class","warning");
document.getElementById("opwdLabel").append(passCha);
let chaPass2=document.createElement('p');
chaPass2.setAttribute("class","warning");
document.getElementById("npwdLabel").append(chaPass2);


let emailErrorMsg="\u2716 Email address should be no-empty with the format xyz@xyz.xyz.";
let passErrorMSg="\u2716 Password should be at least 6 characters: include letter and number";
let pass2ErrorMSg="\u2716 Please retype password";
let defaultMSg="";


function validateChaEmail(){
    let email = chaInput.value; 
    let regexp=/^\w+@\w+\.\w+$/; 
    var error;
    if(regexp.test(email)){ 
    error = defaultMSg;}
    else {
    error = emailErrorMsg;
    }
    return error;
}
function validatePassCha(){
    let pass = chaPassInput.value; 
    let regexp = /(?=.*[a-z]).{6,}/; 
    var error;
    if(regexp.test(pass)){ 
    error = defaultMSg;}
    else{
    error = passErrorMSg;}
    return error;
}
function validateChaPass2Cha(){
    let pass = chaPass2Input.value; 
    let regexp = /(?=.*[a-z]).{6,}/; 
    var error;
    if(regexp.test(pass)){ 
    error = defaultMSg;}
    else{
    error = passErrorMSg;}
    return error;
}


function validateCha(){
    let valid = true; 
    let emailValidation=validateChaEmail();
    let passValidation=validatePassCha();
    let pass2Validation=validateChaPass2Cha();
    if(emailValidation !==defaultMSg){
        changeError.textContent = emailValidation;
        valid = false;
    }
    if(passValidation !==defaultMSg){
        passCha.textContent = passValidation;
        valid = false;
    }
    if(pass2Validation !==defaultMSg){
        chaPass2.textContent = pass2Validation;
        valid = false;
    }
    return valid;
};


chaInput.addEventListener("blur",()=>{
    let x=validateCha();
    if(x == defaultMSg){
        changeError.textContent=defaultMSg;
    }
    });
chaPassInput.addEventListener("blur",()=>{
    let x=validatePassCha();
    if(x == defaultMSg){
        passCha.textContent=defaultMSg;
    }
    });
chaPass2Input.addEventListener("blur",()=>{
    let x=validateChaPass2Cha();
    if(x == defaultMSg){
        chaPass2.textContent=defaultMSg;
    }
    });
