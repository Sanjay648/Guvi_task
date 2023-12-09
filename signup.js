function signup() {
    var username = $("#username").val();
    var password = $("#password").val();

    $.ajax({
        type: "POST",
        url: "signup.php",
        data: { username: username, password: password },
        success: function (response) {
            alert(response);
            window.location.href = "login.html";
        }
    });
}
