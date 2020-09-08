$(function () {
    $(".case-study__carousel").owlCarousel({
        items: 1,
        navText: [
            "<i class='icon icon-angle-left'></i>",
            "<i class='icon icon-angle-right'></i>",
        ],
        dots: false,
        margin: 60,
        stagePadding: 30,
        center: true,
        nav: false,
        responsive: {
            1140: {
                nav: true,
            },
        },
    });

    $("[rel='modal:open']").click(function(event) {
        $(this).modal({
          fadeDuration: 250
        });
        return false;
      });

    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, "") ==
                    this.pathname.replace(/^\//, "") &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length
                    ? target
                    : $("[name=" + this.hash.slice(1) + "]");
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $("html, body").animate(
                        {
                            scrollTop: target.offset().top,
                        },
                        1000
                    );
                }
            }
        });

    $header = $('header');
    $navTrigger = $('.nav__trigger');
    $navClose = $('.nav__close');
    $navContent = $('.navbar__content');

    $navTrigger.on('click', function() {
        $navContent.addClass('open');
    });

    $navClose.on('click', function() {
        $navContent.removeClass('open');
    });

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 1) {
            $header.addClass("header-sticky");
        } else {
            $header.removeClass("header-sticky");
        }
    });
});
