$(document).ready(function(){
    $('.parallax').parallax();
    $('.dropdown-button').dropdown({hover: true});
    $('.materialboxed').materialbox();
    $('.button-collapse').sideNav({
        menuWidth: 300,
        closeOnClick: true,
        draggable: true
    });
});

var $root = $('html, body');
$('a.hsbc-scroll').click(function() {
    var href = $.attr(this, 'href');
    var currentOffset = $('#hsbc-big-navbar').is(":visible") ? 88 : 64;
    $root.animate({
        scrollTop: $(href).offset().top - currentOffset
    }, 500, function () {
        window.location.hash = href;
    });
    return false;
});