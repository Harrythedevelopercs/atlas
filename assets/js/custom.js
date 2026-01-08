$(document).ready(function() {
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
success: function(data) {
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

document.addEventListener("DOMContentLoaded", function() {
  const accordionButtons = document.querySelectorAll(".eqd-accordion__button");

  accordionButtons.forEach(button => {
    button.addEventListener("click", function() {
      const isExpanded = button.getAttribute("aria-expanded") === "true";
      const contentId = button.getAttribute("aria-controls");
      const content = document.getElementById(contentId);

      // Collapse all accordions
      accordionButtons.forEach(btn => {
        const contentToHide = document.getElementById(btn.getAttribute("aria-controls"));
        btn.setAttribute("aria-expanded", "false");
        if (contentToHide) {
          contentToHide.setAttribute("hidden", "");
        }
      });

      // If the clicked accordion was not expanded, expand it
      if (!isExpanded) {
        button.setAttribute("aria-expanded", "true");
        content.removeAttribute("hidden");
      }
    });
  });
});  


// blogslider start
$(".blogslid").slick({
    dots: true,
    arrows: true,
    autoplay: true,
    infinite: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 4,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});
$(".logoslider").slick({
    dots: false,
    arrows: false,
    autoplay: true,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            },
        },
    ],
});


$(".trustpilotslider").slick({
    dots: true,
    arrows: false,
    autoplay: true,
    infinite: true,
    centerPadding: '10px',
     centerMode: true,
     
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});


$(".autors-slider-main").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    infinite: true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});


$(".about-slider-main").slick({
    dots: true,
    arrows: true,
    autoplay: false,
    infinite: true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 5,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                 slidesToScroll: 1,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                 slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});


$(".book-cover-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    infinite: false,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});


 const cols = document.querySelectorAll('.image-col');

    // Duplicate content for looping
    cols.forEach(col => {
      const original = Array.from(col.children);
      for (let i = 0; i < 6; i++) {
        original.forEach(child => col.appendChild(child.cloneNode(true)));
      }
    });

    let velocity = 0;
    let lastScrollY = window.scrollY;
    let lastTime = performance.now();
    const baseSpeed = 0.5;

    const positions = Array.from(cols).map(() => 0);
    const directions = Array.from(cols).map(col =>
      col.getAttribute('data-direction') === 'up' ? -1 : 1
    );

    function update() {
      const now = performance.now();
      const delta = now - lastTime;
      lastTime = now;

      const currentScroll = window.scrollY;
      const scrollDiff = currentScroll - lastScrollY;
      lastScrollY = currentScroll;

      velocity += scrollDiff * 0.5;
      velocity *= 0.9; // Friction decay

      cols.forEach((col, i) => {
        const dir = directions[i];
        const speed = (baseSpeed + velocity * 0.1) * dir;
        positions[i] += speed;

        col.style.transform = `translateY(${positions[i]}px)`;

        const firstImg = col.querySelector("img");
        if (!firstImg) return;

        const imgHeight = firstImg.offsetHeight + 20;
        const totalHeight = imgHeight * col.children.length;

        if (dir === 1 && positions[i] >= totalHeight / 2) {
          positions[i] -= totalHeight / 2;
        } else if (dir === -1 && Math.abs(positions[i]) >= totalHeight / 2) {
          positions[i] += totalHeight / 2;
        }
      });

      requestAnimationFrame(update);
    }

    window.addEventListener('load', () => {
      requestAnimationFrame(update);
    });


    $(document).ready(function () {
  $('.tab-box').each(function () {
    const $box = $(this);
    const tabPrefix = $box.attr('class').match(/tabs-\d+/)[0]; // e.g., tabs-1

    const $navLinks = $box.find(`.${tabPrefix}-nav a`);
    const $panes = $box.find(`.${tabPrefix}-pane`);

    // Init: Hide all panes, show first
    $panes.hide();
    $panes.first().show();
    $box.find(`.${tabPrefix}-nav li`).removeClass('tab-active');
    $box.find(`.${tabPrefix}-nav li`).first().addClass('tab-active');

    // Click handler
    $navLinks.on('click', function (e) {
      e.preventDefault();
      const targetClass = $(this).data('tab');

      $box.find(`.${tabPrefix}-nav li`).removeClass('tab-active');
      $(this).parent().addClass('tab-active');

      $panes.hide();
      $box.find(`.${tabPrefix}-pane.${targetClass}`).show();
    });
  });
});

