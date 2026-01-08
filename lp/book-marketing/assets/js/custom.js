$(document).ready(function () {
  //var currentIP;
  var key = '5XpThOAEkfgOvEJ';
  var currentIP = $("meta[name=ip2loc]").attr('content');
  var pgurl = $("meta[name=page_url]").attr('content');
  $.ajax({
    method: 'get',
    url: '//pro.ip-api.com/json/' + currentIP,
    data: {
      key: key
    },
    success: function (data) {
      if (data) {
        $('input[name=ip2loc_ip]').val(data.query);
        $('input[name=ip2loc_isp]').val(data.isp);
        $('input[name=ip2loc_org]').val(data.org);
        $('input[name=ip2loc_country]').val(data.country);
        $('input[name=ip2loc_region]').val(data.regionName);
        $('input[name=ip2loc_city]').val(data.city);
        $('input[name=pageurl]').val(pageurl);
      }
    }
  });
});

var swiper2 = new Swiper(".sixth_slider", {
  speed: 1000,
  slidesPerView: 1,
  spaceBetween: 10,
  centeredSlide: true,
  loop: true,
  navigation: {
    nextEl: ".sixth_slider-next",
    prevEl: ".sixth_slider-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    1200: {
      slidesPerView: 3.5,
    },
    1400: {
      slidesPerView: 4.2,
    },
  },
});

var swiper = new Swiper(".index_third_slider", {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});
