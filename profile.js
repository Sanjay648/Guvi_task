$(document).ready(function () {
    // Fetch user profile details from the server and display on the profile page
    $.ajax({
        type: "GET",
        url: "profile.php",
        success: function (response) {
            $("#profileDetails").html(response);
        }
    });
});
