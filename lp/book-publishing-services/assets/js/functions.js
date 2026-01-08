$(document).ready(function () {
    $(".menu-bottom").on("click", function () {
        $("html").toggleClass("menu-open")
    });
    $(".menu-bottom").click(function () {
        $(this).toggleClass("click")
    });
    AOS.init({
        disable: 'mobile'
    });
    $(".validate-popupform").validate();
    $(".app_contact_form").validate();
    $(".validate-autopopupform").validate({});
    $('.lazy').lazy();
    $('.owl-testimonial').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 20,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 3,
            },
            360: {
                items: 1
            }
        }
    });
    $('.owl-book').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 800,
        navigation: true,
        navigationText: ["<img src='http://localhost/assets/images/prev.png'>", "<img src='../../localhost/assets/images/next.png'>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
            360: {
                items: 1,
            }
        }
    });
});
$('.logo-slider .owl-carousel').owlCarousel({
    items: 5,
    loop: true,
    margin: 10,
    autoplay: true,
    nav: false,
    dots: false,
    autoplayTimeout: 1500,
    responsive: {
        0: {
            items: 2
        },
        500: {
            items: 4
        },
        1000: {
            items: 6
        }
    }
})
let portfoliotabs = document.querySelectorAll('.portfoliotab');
let portfoliocontent = document.querySelectorAll('.portfoliocontent-item');
for (let i = 0; i < portfoliotabs.length; i++) {
    portfoliotabs[i].addEventListener('click', () => tabClick(i));
}
function tabClick(currentTab) {
    removeActive();
    portfoliotabs[currentTab].classList.add('active');
    portfoliocontent[currentTab].classList.add('active');
    console.log(currentTab);
}
function removeActive() {
    for (let i = 0; i < portfoliotabs.length; i++) {
        portfoliotabs[i].classList.remove('active');
        portfoliocontent[i].classList.remove('active');
    }
}