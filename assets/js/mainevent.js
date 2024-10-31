var widthWD;
var heightWD;

$(document).ready(function () {
  widthWD = jQuery(window).width();
  heightWD = jQuery(document).height();
  new Swiper('.banner-slider', {
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
    }
    
  });



  /*---- Top Button -----*/
  jQuery('.top').click(function () {
    jQuery('html, body').animate({ scrollTop: 0 }, 300);
  });
  /*---- End Top Button -----*/

  jQuery(document).on('click', '.giftcode', function (event) {
    showPopup(jQuery(this).attr('data-rel'));
  })

  /*- Fancy box -*/
  jQuery(".fancybox").fancybox({
    type: "iframe",
    padding: 0,
    fitToView: false,
    width: '100%',
    height: '100%',
    openEffect: 'true',
    closeEffect: 'true',
    autoplay: 'true'
  });

  $.js = function (el) {
    return $('[data-js=' + el + ']')
  };
  
  // if (jQuery('select').length > 0) {
  //   jQuery('select').niceSelect();
  //   jQuery(".list").niceScroll({
  //     cursorcolor: "#4a5f7c",
  //     cursorwidth: "5px",
  //     autohidemode: "scroll"
  //   });
  // }

  // $("body").niceScroll({
  //   cursorcolor: "#8a510b",
  //   cursorwidth: "10px"
  // });


  // new Swiper('.server-slider', {
  //   slidesPerView: 1,
  //   // navigation: {
  //   //   nextEl: '.server-next',
  //   //   prevEl: '.server-prev',
  //   // },
  //   loop: true,
  //   thumbs: {
  //     swiper: {
  //       el: '.server-slider-tabs',
  //       spaceBetween: 0,
  //       slidesPerView: 3,
  //       watchSlidesVisibility: true,
  //       watchSlidesProgress: true,
  //       navigation: {
  //         nextEl: '.server-next',
  //         prevEl: '.server-prev',
  //       }
  //     }
  //   }
  // });

  /* List server */
  var serverTab = new Swiper('.server-slider-tabs', {
    spaceBetween: 0,
    slidesPerView: 4,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: '.server-button-next',
      prevEl: '.server-button-prev',
    }
  });
  
  var serverSlider = new Swiper('.server-slider', {
    slidesPerView: 1,
    navigation: {
      nextEl: '.server-next',
      prevEl: '.server-prev',
    },
    thumbs: {
      swiper: serverTab
    }
  });

  /*--- Dac sac slider ---*/

for (let i = 1; i <= jQuery('.dacsac-swiper-large').length; i++) {
  new Swiper('.dacsac-swiper-large-'+i, {
    spaceBetween: 0,
    navigation: {
      nextEl: '.char-button-next',
      prevEl: '.char-button-prev'
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: true
    },
    thumbs: {
      swiper: {
        el: '.dacsac-swiper-nav-'+i,
        navigation: {
          nextEl: '.nav-button-next',
          prevEl: '.nav-button-prev'
        },
        slidesPerView: 4,
        spaceBetween: 0,
        slidesPerColumn: 1,
        slidesPerColumnFill: 'row',
        direction: 'horizontal',
        observer: true,
        observeParents: true
      }
    },
    observer: true,
    observeParents: true
  });
}

  /*---- Accordion Slider ---*/
  accordion.init({
    id: 'accordion',
    autoPlay: false,
    itemWidth: 51,
    expandWidth: 440,
  });
  /*---- Accordion Slider Dac sac ---*/
  accordion.init({
    id: 'accordion-screenshot',
    autoPlay: true,
    itemWidth: 96,
    expandWidth: 800,
  });
})

function showPopup(object) {
  jQuery('body').append('<div class="bgover"></div>')
  // jQuery('.bgover').css({ 'width': widthWD, 'height': heightWD });
  jQuery("." + object).addClass('active').removeClass('hidden');
  jQuery(document).on('click', '.bgover,.popup-close', function (event) {
    event.preventDefault();
    jQuery(".bgover").remove();
    jQuery("." + object).removeClass('active').addClass('hidden');
  });
}

jQuery(window).on('load', function () {

});