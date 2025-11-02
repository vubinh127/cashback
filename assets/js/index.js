$(document).ready(function () {
  const $menu = $('.menu-custom');
  const $overlay = $('.menu-overlay');
  const $btn_close = $('.btn-close');
  
  $('.btn_menu').on('click', function () {
    $menu.toggleClass('active');
    $overlay.toggleClass('active');
  });

  $btn_close.on('click', function () {
    $menu.removeClass('active');
    $overlay.removeClass('active');
  });


  $overlay.on('click', function () {
    $menu.removeClass('active');
    $overlay.removeClass('active');
  });

  $('.nav-item.has-sub').each(function() {
    if ($(this).find('.sub-menu').length > 0) {
      $(this).addClass('has-arrow');
    }
  });

  $('.toggle-sub').on('click', function(e) {
    const $parent = $(this).closest('.nav-item');

    if ($parent.find('.sub-menu').length) {
      e.preventDefault();

      const $submenu = $parent.find('.sub-menu').first();

      $('.nav-item.has-sub').not($parent).removeClass('open').find('.sub-menu').slideUp(300);

      $parent.toggleClass('open');
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


    const $tableWrapper = $('.block-refund .table-wrapper');
    const $tableBody = $('#scrolling-body');
    const rowHeight = $tableBody.find('tr').first().outerHeight();
    let scrollPosition = 0;

  setInterval(() => {
    scrollPosition += rowHeight;

    if (scrollPosition >= $tableBody.height() - $tableWrapper.height()) {
      scrollPosition = 0;
    }

    $tableWrapper.animate({ scrollTop: scrollPosition }, 800); // mượt hơn
  }, 3000);


  const swiper = new Swiper('.swiper', {
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
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
  })
});