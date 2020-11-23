$(function() {
    var navbar = $('.navbar');

    $(window).scroll(function() {
        if ($(window).scrollTop() <= 40) {
            navbar.removeClass('add-shadow');
        } else {
            navbar.addClass('add-shadow');
        }
    });
});