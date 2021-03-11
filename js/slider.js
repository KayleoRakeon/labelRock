$(document).ready(function () {
    $concert = $('.controller div:first-child');
    $sortie = $('.controller div:nth-child(2)');
    $nouveaute = $('.controller div:nth-child(3)');
    $like = $('.controller div:last-child');
    $slider = $('.slider');

    $concert.click(function () {
        $('.controller div.actif').removeClass('actif');
        $concert.addClass('actif');
        $slider.css({ "transform": "translateX(0)" });
    });

    $sortie.click(function () {
        $('.controller div.actif').removeClass('actif');
        $sortie.addClass('actif');
        $slider.css({ "transform": "translateX(-25%)" });
    });

    $nouveaute.click(function () {
        $('.controller div.actif').removeClass('actif');
        $nouveaute.addClass('actif');
        $slider.css({ "transform": "translateX(-50%)" });
    });

    $like.click(function () {
        $('.controller div.actif').removeClass('actif');
        $like.addClass('actif');
        $slider.css({ "transform": "translateX(-75%)" });
    });
});