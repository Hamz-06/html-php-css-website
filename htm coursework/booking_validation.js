function $(id) {
    return document.getElementById(id);
}

var allowSubmit = false;

$("booking-form").addEventListener("submit", (e) => {
    if (!allowSubmit) {
        e.preventDefault();
        checkRegData();

    } else { }
});

function checkRegData() {
    const email = $("email-booking").value.trim();
    const date = $("date").value.trim();
    const time = $("time").value.trim();

    //EMAIL
    var emailValid = false;
    if (email == "") {
        $("emailError").style.display = "inline";
        $("emailError").innerHTML = "Please fill in";
    } else {

        $("emailError").style.display = "none";
        emailValid = true;
    }
    //date valid
    var dateValid = false;
    if (date == "") {
        $("dateerror").style.display = "inline";
        $("dateerror").innerHTML = "Please fill in";
    } else {

        $("dateerror").style.display = "none";
        dateValid = true;
    }
    //time valid 

    var timeValid = false;
    if (time == "") {
        $("timeerror").style.display = "inline";
        $("timeerror").innerHTML = "Please fill in";
    } else {

        $("timeerror").style.display = "none";
        timeValid = true;
    }

    function isValid() {
       
        if (timeValid && dateValid && emailValid) {
            allowSubmit = true;
        }
    }

    isValid();




}