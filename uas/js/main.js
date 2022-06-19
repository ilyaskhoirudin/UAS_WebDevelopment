$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        if ($(this).scrollTop() > $nav.height()) {
            $nav.addClass("scrolled");
            $nav.addClass("navbar-light");
        } else {
            $nav.removeClass("scrolled");
            $nav.removeClass("navbar-light")
        }
    });
} );