var email_inp = document.getElementById("email");
var pass_inp = document.getElementById("password");

var mayko = "sample@gmail.com";
var password = "12345";

function loginFunction() {

    var getemail = email_inp.value;
    var getpass = pass_inp.value;

    if (getemail == mayko && getpass == password) {
        window.location.href = "../card.php";
    } else {
        alert("Login Failed");
        email_inp.style = "border-color: red; color: red";
        pass_inp.style = "border-color: red; color: red";








    }
}
