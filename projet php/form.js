$(document).ready(function() {
    const form = $("#form-signup"),
        namefield = form.find(".name-field"),
        nameInput = namefield.find(".input_name"),
        emailField = form.find(".email-field"),
        emailInput = emailField.find(".email"),
        passField = form.find(".create-password"),
        passInput = passField.find(".password"),
        cPassField = form.find(".confirm-password"),
        cPassInput = cPassField.find(".cPassword"),
        addressField = form.find(".address-field"),
        addressInput = addressField.find(".address"),
        phoneField = form.find(".phone-field"),
        phoneInput = phoneField.find(".phone"),
        cPassBtn = $(".button");
    function chekcname(){
        if(nameInput.val().trim() === ""){
           return namefield.addClass("invalid");
        }
        namefield.removeClass("invalid");

    }
    function checkEmail() {
        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!emailInput.val().match(emailPattern)) {
            return emailField.addClass("invalid");
        }
        emailField.removeClass("invalid");
    }

    const eyeIcons = $(".show-hide");
    eyeIcons.each(function() {
        $(this).on("click", function() {
            const pInput = $(this).parent().find("input");
            if (pInput.attr("type") === "password") {
                $(this).removeClass("bx-hide").addClass("bx-show");
                return pInput.attr("type", "text");
            }
            $(this).removeClass("bx-show").addClass("bx-hide");
            pInput.attr("type", "password");
        });
    });

    function createPass() {
        const passPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if (!passInput.val().match(passPattern)) {
            return passField.addClass("invalid");
        }
        passField.removeClass("invalid");
    }

    function confirmPass() {
        if (passInput.val() !== cPassInput.val() || cPassInput.val() === "") {
            return cPassField.addClass("invalid");
        }
        cPassField.removeClass("invalid");
    }

    function checkAddress() {
        if (addressInput.val().trim() === "") {
            return addressField.addClass("invalid");
        }
        addressField.removeClass("invalid");
    }

    function checkPhone() {
        const phonePattern = /^\d{10}$/;
        if (!phoneInput.val().match(phonePattern)) {
            return phoneField.addClass("invalid");
        }
        phoneField.removeClass("invalid");
    }

    form.on("submit", function(e) {
        e.preventDefault();
        chekcname();
        checkEmail();
        createPass();
        confirmPass();
        checkAddress();
        checkPhone();
        nameInput.on("keyup", chekcname);
        emailInput.on("keyup", checkEmail);
        passInput.on("keyup", createPass);
        cPassInput.on("keyup", confirmPass);
        addressInput.on("keyup", checkAddress);
        phoneInput.on("keyup", checkPhone);

        if (
            !namefield.hasClass("invalid") &&
            !emailField.hasClass("invalid") &&
            !passField.hasClass("invalid") &&
            !cPassField.hasClass("invalid") &&
            !addressField.hasClass("invalid") &&
            !phoneField.hasClass("invalid")
        ) {
            form.off('submit');
            form.submit();
        }
         
    });

    $('#switch-to-login').click(function() {
        $('#login-form').show();
        $('#switch-to-login').hide();
        $('#switch-to-signup').show();
        $('form:first').hide();
        $('#form-header').text('Login')
    });

    $('#switch-to-signup').click(function() {
        $('#login-form').hide();
        $('#switch-to-login').show();
        $('#switch-to-signup').hide();
        $('form:first').show();
        $('#form-header').text('Sign-up');
    });
});
