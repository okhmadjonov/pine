const email = document.querySelector(".email");
const icon1 = document.querySelector(".icon1");
const icon2 = document.querySelector(".icon2");
const error_text = document.querySelector(".error_text");
const submit = document.querySelector(".form_submit");
const subscribe_title_paragraph = document.querySelector(".subscribe_title_paragraph");
const subscribe_email = document.querySelector(".subscribe_email");
const successPage = document.querySelector(".success_page");
const form_check = document.querySelector(".form_check");
let regExp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;


const  emailValidate = () => {


    if (email.value.match(regExp)) {
                 email.style.borderColor = "#27ae60";
                 icon1.style.display = "none";
                 icon2.style.display = "block";
                 error_text.style.display = "none";
                 submit.style.display = "block";


    } else {
        email.style.borderColor = "#e74c3c";
        icon1.style.display = "block";
        icon2.style.display = "none";
        error_text.style.display = "block";
        submit.style.display = "none";
    }
    if (email.value === "") {
        email.style.borderColor = "#4066A5";
        icon1.style.display = "none";
        icon2.style.display = "none";
        error_text.style.display = "none";
        submit.style.display = "none";
        alert("Email address is required");
    }else{
        return true;
    }

}







