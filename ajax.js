(function() {

    console.log("Main function happened.");

    var xmlHttpRequest;
    var signUpID = document.querySelector("#sign-up-id");

    signUpID.addEventListener("click", request);

    function request() {

        var xmlHttpRequest;
        var signUpID = document.querySelector("#sign-up-id");

        console.log("Request function happened.");

        var name = document.querySelector("#name-id").value;
        var surname = document.querySelector("#surname-id").value;
        var email = document.querySelector("#email-id").value;

        var info = "Name=" + name + "&Surname=" + surname + "&Email=" + email;
        console.log(info);

        xmlHttpRequest = new XMLHttpRequest();

        if (!xmlHttpRequest) {

            console.log("Can't create an XML, HTTP request.");
            return false;

        }

        xmlHttpRequest.onreadystatechange = function() {

            if (xmlHttpRequest.readyState === XMLHttpRequest.DONE) {
                if (xmlHttpRequest.status === 200) {
    
                    alert("Alert: " + xmlHttpRequest.responseText);
                    console.log("Log: " + xmlHttpRequest.responseText);
    
                } else {
    
                    alert("Alert: The request failed.");
    
                }
            }

        };

        xmlHttpRequest.open("POST", "post.php", true);
        xmlHttpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttpRequest.send(info);
        
        document.querySelector("#name-id").value = "";
        document.querySelector("#name-id").placeholder = "First name";
        document.querySelector("#surname-id").value = "";
        document.querySelector("#surname-id").placeholder = "Last name";
        document.querySelector("#email-id").value = "";
        document.querySelector("#email-id").placeholder = "Email address";

    }

})();