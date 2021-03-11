$(document).ready(function () {
    $nav = $('nav');
    $picto = $('header div svg:last-child');
    $a = $('nav ul li a');

    $picto.click(function () {
        $nav.toggleClass('actif');
        $picto.toggleClass('actif');
    });

    $a.click(function () {
        $('nav ul li.actif').removeClass('actif');
        $(this).parent().addClass('actif');
        $(this).addClass('actif');
    });
});