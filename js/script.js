$(document).ready(function () {
    $("#loginForm").submit(function (e) {
        const username = $("#username").val();
        const password = $("#password").val();

        if (username === "" || password === "") {
            e.preventDefault();
            alert("Both fields are required!");
        }
    });

    $(".navbar a").on("click", function () {
        $(".navbar a").removeClass("active");
        $(this).addClass("active");
    });
});
