"use strict";

/*************************************
Name: William Boone
ITSE 2302 Int Web Prog - Fall 2023
Purpose: Final Project
**************************************/

// Function to validate email format
function validEmail(email) {
    var re =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function clearForm() {
    $('#name').val('');
    $('#from').val('');
    $('#confirm').val('');
    $('#subject').val('');
    $('#message').val('');
    $('#msg').html('<br>');
}

function sendData(name, email, confirmEmail, subject, message) {
    let msgArea = $("#msg");

    $.ajax({
        url: 'processnames',
        type: 'POST',
        data: {
            name: name,
            email: email,
            confirmEmail: confirmEmail,
            subject: subject,
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
    var subject = $('#subject').val().trim();
    var msg = $('#message').val().trim();

    $('#name').val(name);
    $('#from').val(email);
    $('#confirm').val(confirmEmail);
    $('#subject').val(subject);
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

    if (subject === "") {
        message += "Subject cannot be empty.<br>";
    }

    if (msg === "") {
        message += "Message cannot be empty.<br>";
    }

    if (message === "") {
        sendData(name, email, confirmEmail, subject, msg);
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