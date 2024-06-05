var div_res = document.getElementById("res");

function check_username_and_password() {
    var username = form.username.value;
    var password = form.password.value;
    var symbols_in_password = password.length;
    var s = ""

    if (username == "") {
        s += "Имя не должно быть пустым";
    }

    if (password == "") {
        s += "Пароль не должен быть пустым";
    }

    if (symbols_in_password <= 6) {
        s += "Пароль должен быть больше шести символов";
    }

    if (!hasUppercase(password)) {
        s += "Пароль должен содержать хотя бы одну заглавную букву";
    }

    is_number_in_string(password);

    div_res.innerHTML
}

function hasUppercase(password) {
    for (var i = 0; i < password.length; i++) {
        var ch = password.charAt(i);
        if (ch == ch.toUpperCase() && ch != ch.toLowerCase()) {
            return true;
        }
    }
    return false;
}