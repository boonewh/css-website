"use strict";

// Function to validate email format
function validEmail(email) {
    var re =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validPhone(phoneNumber) {
    var re = /^(?:\+?1[-.\s]?)?(?:\(?([2-9]\d{2})\)?[\s-]?)?([2-9]\d{2})[\s-]?(\d{4})(?: *x(\d+))?$/
    ;
    return re.test(phoneNumber);
}

function clearForm() {
    $('#name').val('');
    $('#from').val('');
    $('#confirm').val('');
    $('#phone').val('');
    $('#whoChoice').val('');
    $('#childAge').val('')
    $('#message').val('')
    $('#msg').html('<br>');
    $('.radio-group input[type="radio"]').prop('checked', false);
}

function sendData(name, email, confirmEmail, phone, selectedCounselor, whoChoice, childAge, message) {
    let msgArea = $("#msg");

    $.ajax({
        url: 'Ajax/processnames',
        type: 'POST',
        data: {
            name: name,
            email: email,
            confirmEmail: confirmEmail,
            phone: phone,
            counselor: selectedCounselor,
            whoChoice: whoChoice,
            childAge: childAge,
            message: message
        },
        success: function (val) {
            console.log(val);
            if (val === 'okay') {
                clearForm();
                msgArea.html("Your message was sent!");
            } else {
                msgArea.html("Processing Error, your email was not sent");
            }
        },
        error: function () {
            msgArea.html("Server Error");
        }
    });
}

function validate() {
    var message = "";

    let msgArea = $("#msg");

    var name = $('#name').val().trim();
    var email = $('#from').val().trim();
    var confirmEmail = $('#confirm').val().trim();
    var phone = $('#phone').val().trim();
    var whoChoice = $('#whoChoice').val().trim();
    var childAge = $('#childAge').val().trim(); 
    var msg = $('#message').val().trim();
    var selectedCounselor = $('.radio-group input[type="radio"]:checked').val();
    

    $('#name').val(name);
    $('#from').val(email);
    $('#confirm').val(confirmEmail);
    $('#phone').val(phone);
    $('#whoChoice').val(whoChoice);
    $('#childAge').val(childAge);
    $('#message').val(msg);

    if (name === "") {
        message += "Name cannot be empty.<br>";
    }

    if (email === "") {
        message += "Email cannot be empty.<br>";
    } else if (!validEmail(email)) {
        message += "Invalid email format.<br>";
    } else if (email !== confirmEmail) {
        message += "Email and Confirm Email do not match.<br>";
    }

    if (phone === "") {
        message += "Phone cannot be empty.<br>";
    } else if (!validPhone(phone)) {
        message += "Invalid phone format. Format should be 123-456-7890.<br>";
        }
    
    if (!selectedCounselor) {
        message += "Please select a counselor.<br>";
    }

    if (msg === "") {
        message += "Message cannot be empty.<br>";
    }

    if (message === "") {
        sendData(name, email, confirmEmail, phone, selectedCounselor, whoChoice, childAge, msg);
    } else {
        msgArea.html(message);
    }
}

$(document).ready(function () {
    $("#names-clear").click(function () {
        clearForm();
    });

    $("#names-send").click(function () {
        validate();
    });
});