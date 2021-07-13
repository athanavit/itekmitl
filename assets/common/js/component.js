//Get reusable components for webpage
//example navbar, footer

$(document).ready(function () {
    //Get navbar component
    $.get("component/navbar.php", function (data) {
        $("#navbar-placeholder").replaceWith(data);
    });

    //Get footer component
    $.get("component/footer.php", function (data) {
        $("#footer-placeholder").replaceWith(data);
    });
});