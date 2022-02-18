$(function () {
 $('.toggle-menu').click(function(){
  $('.exo-menu').toggleClass('display');
  
 });
  $('.slider-banner').slick({
  infinite: true,
  dots: true,
  arrows:true,
  nextArrow: '<span class="btn-next-banner"><i class="fa fa-chevron-right"></i></span>',
  prevArrow:'<span class="btn-prev-banner"><i class="fa fa-chevron-left"></i></span>',
  autoplay: false,
  autoplaySpeed: 3000,
  fade: true,
  fadeSpeed: 1000
});

  $('.slider-flash-sale').slick({
  dots: false,
  infinite: false,
  speed: 1000,
  slidesToShow: 5,
  slidesToScroll: 3,
  arrows:true,
  nextArrow: $('.flash-sale .next-slick'),
  prevArrow:$('.flash-sale .prev-slick'),
  autoplay: false,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
   $('.slider-new-product').slick({
  dots: false,
  infinite: false,
  speed: 2000,
  slidesToShow: 5,
  slidesToScroll: 2,
  arrows:true,
  nextArrow: $('.new-product .next-slick'),
  prevArrow:$('.new-product .prev-slick'),
  autoplay: false,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    $('.slider-new-product2').slick({
  dots: false,
  infinite: false,
  speed: 2000,
  slidesToShow: 5,
  slidesToScroll: 2,
  arrows:true,
  nextArrow: $('.new-product2 .next-slick'),
  prevArrow:$('.new-product2 .prev-slick'),
  autoplay: false,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  $('.slider-category').slick({
  dots: true,
  infinite: false,
  speed: 2000,
  slidesToShow: 6,
  slidesToScroll: 2,
  arrows:true,
  // nextArrow: $('.new-product2 .next-slick'),
  // prevArrow:$('.new-product2 .prev-slick'),
  autoplay: false,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



// // to create more flakes decrease 100
$( ".banner-bottom" )
  .on( "mouseenter", function() {
    // $( "p", this ).first().text( "mouse enter" );
    $(this).addClass('gradient-border');
    $('.container-banner').removeClass('gradient-border');
  })
  .on( "mouseleave", function() {
    $(this).removeClass('gradient-border');
    $('.container-banner').addClass('gradient-border');
  });
  


  // typing text
  var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    // end
    /////////////////////////////////////////

    // Product Main img Slick
    $('#product-main-img').slick({
      infinite: true,
      speed: 300,
      dots: false,
      arrows: true,
      fade: true,
      asNavFor: '#product-imgs',
    });

    // Product imgs Slick
     $('#product-imgs').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: 0,
    vertical: false,
    asNavFor: '#product-main-img',
    responsive: [{
        breakpoint: 991,
        settings: {
          vertical: false,
          arrows: false,
          dots: true,
        }
      },
      ]
    });

});


