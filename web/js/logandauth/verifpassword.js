function verifPassword() {
    var pass1 = document.getElementById("pwd").value;
    var pass2 = document.getElementById("pwdc").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementById("pwd").style.borderColor = "#E34234";
        document.getElementById("pwdc").style.borderColor = "#E34234";
        ok = false;
    }
    else {
        alert("Passwords Match!!!");
    }
    return ok;
}