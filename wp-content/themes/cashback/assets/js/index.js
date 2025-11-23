$(document).ready(function () {
    const $menu = $(".menu-custom");
    const $btn_close = $(".btn-close");

    $(".btn_menu").on("click", function () {
        $menu.toggleClass("active");
    });

    $btn_close.on("click", function () {
        $menu.removeClass("active");
    });


    $(".nav-item.has-sub").each(function () {
        if ($(this).find(".sub-menu").length > 0) {
            $(this).addClass("has-arrow");
        }
    });

    $(".toggle-sub").on("click", function (e) {
        const $parent = $(this).closest(".nav-item");

        if ($parent.find(".sub-menu").length) {
            e.preventDefault();

            const $submenu = $parent.find(".sub-menu").first();

            $(".nav-item.has-sub").not($parent).removeClass("open").find(".sub-menu").slideUp(300);

            $parent.toggleClass("open");
            $submenu.stop(true, true).slideToggle(300);
        }
    });

    $(document).on("click", ".copy-btn", function () {
        const $value = $(this).closest(".value");
        const textToCopy = $value.clone().children(".copy-btn").remove().end().text().trim();

        navigator.clipboard.writeText(textToCopy).then(() => {
            $(this).addClass("copied");
        });
    });


    const swiper = new Swiper(".swiper", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        slidesPerView: 1,
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });

    var $modal = $("#video-detail");
    var $iframe = $modal.find("iframe");
    var originalSrc = $iframe.attr("src");

    $modal.on("hidden.bs.modal", function () {
        $iframe.attr("src", "");
        $iframe.attr("src", originalSrc);
    });


    $('.banner-video .banner-image').on('click', function () {
        const wrapper = $(this).closest('.banner-video');
        const iframe = wrapper.find('iframe')[0];

        wrapper.addClass('playing');

        iframe.contentWindow.postMessage(
            JSON.stringify({
                event: "command",
                func: "playVideo",
                args: []
            }),
            "*"
        );
    });
});
