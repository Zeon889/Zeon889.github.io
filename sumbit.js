var noEmpty = false;

function submitForm() {
    var nameIn = document.getElementById("name");
    var nameLabel = document.getElementById("nameLabel");
    var email = document.getElementById("email");
    var emailLabel = document.getElementById("emailLabel");
    var message = document.getElementById("message");
    var messageLabel = document.getElementById("messageLabel");

    const inputs = [nameIn, email, message];
    const labels = [nameLabel, emailLabel, messageLabel];

    inputs.forEach((input, index) => {
        checkFill(input, labels[index]);
    });

    if (!noEmpty) {
        alert("Please finish filling out the fields");
    } else if (noEmpty) {
        if (confirm("Are you ready to send the message?")) {
            document.forms["messageForm"].submit();
        }
    }
}

function checkFill(input, label) {
    if (!input.value) {
        label.style.color = "red";
        noEmpty = false;
    } else if (input.value) {
        label.style.color = "black";
        noEmpty = true;
    }
}