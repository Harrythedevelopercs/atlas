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

  AOS.init();

  var swiper = new Swiper(".servicesSwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    speed: 700,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      1200: {
        slidesPerView: 4
      },
      992: {
        slidesPerView: 3
      },
      576: {
        slidesPerView: 2
      },
      320: {
        slidesPerView: 1
      },
    },
  });
});