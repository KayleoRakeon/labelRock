$(document).ready(function () {
    $nav = $('nav');
    $picto = $('header div svg:last-child');

    $picto.click(function () {
        $nav.toggleClass('actif');
        $picto.toggleClass('actif');
    });
});