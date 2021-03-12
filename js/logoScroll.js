$(document).ready(function () {
    $logo = $('header div svg:first-child');

    $logo.click(function () {
        $(window).scrollTop(0);
    });
});