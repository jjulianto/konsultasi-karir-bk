function scrollFunction() {
    let e = document.getElementById("el1");
    e.scrollIntoView({
        block: 'start',
        behavior: 'smooth',
        inline: 'start'
    });
}

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