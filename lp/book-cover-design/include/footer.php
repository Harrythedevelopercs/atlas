<script src="assets/js/jquery-3.7.1.js"></script>
<script src="assets/js/xJquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/accordian-jquery-ui.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>
<!-- <script src="assets/js/jquery.min.js"></script> -->
<script src="assets/js/jquery.validate.min.js"></script>
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=239dfa05-01f6-4362-bfb9-4f75a7455e10"></script>
<script>
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
</script>
<script>
    window.$zopim || function (a, d) {
            var b = $zopim = function (a) {
                    b._.push(a)
                },
                c = b.s = a.createElement(d);
            a = a.getElementsByTagName(d)[0];
            b.set = function (a) {
                b.set._.push(a)
            };
            b._ = [];
            b.set._ = [];
            c.async = !0;
            c.setAttribute("charset", "utf-8");
            c.src = "";
            b.t = +new Date;
            c.type = "text/javascript";
            a.parentNode.insertBefore(c, a)
        }
        (document, "script");

    $zopim(function () {
        function a(a) {
            1 <= a && $zopim.livechat.window.show()
        }
        $zopim.livechat.setOnUnreadMsgs(a)
    });
</script>
<script>
    function setButtonURL() {
        $zopim.livechat.window.show();
    }

    function toggleChat() {
        $zopim.livechat.window.toggle();
    }
</script>
<script type="text/javascript">
    $(".chat-popup").click((function () {
        $zopim.livechat.window.toggle();
    }))
</script>
<script>
    $('.port-img a').attr('data-fancybox', 'gallery');
</script>
<script>
    $('.myHover').mouseenter(function () {
        $('.bgGround').css("background-image", "url(assets/images/" + $(this).data('img') + ")");
    });
    $('.illus-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.illus-slider-nav'
    });
    $('.illus-slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.illus-slider-for',
        dots: false,
        focusOnSelect: true
    });
    $('.price-slidr').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $('.illus-tab-slider-for').slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        fade: true,
        asNavFor: '.illus-tab-slider-nav'
    });
    $('.illus-tab-slider-nav').slick({
        slidesToShow: 3,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToScroll: 1,
        asNavFor: '.illus-tab-slider-for',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true
    });
    $('.testi-side-slider').slick({
        infinite: true,
        vertical: true,
        slidesToShow: 3,
        autoplay: true,
        centerMode: true,
        autoplaySpeed: 2000,
        arrows: false,
        autoplaySpeed: 0,
        arrows: false,
        speed: 15000,
        cssEase: 'linear',
        Swiping: true,
        verticalSwiping: true,
        cssEase: 'ease-in-out',
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
                dots: false
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                arrows: false,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    var newsletter_p = setInterval(function () {
        $(".popupform-main-auto").css("display", "block")
        clearInterval(newsletter_p);
    }, 4000);
    $('.close-btn').click(function () {
        $('.popupform-main-auto').attr('class', 'popupform-main-auto');
        setTimeout(function () {
            $('.popupform-main-auto').css('display', 'none')
        }, 0);
    });
    $('.poupBtn').on('click', function () {
  $('.new-popupform-main').addClass('active');
  $('body').addClass('o-hidden');
  $('.overlay-bg').fadeIn(500);
});

$('.close-btn, .overlay-bg').on('click', function () {
  $('.new-popupform-main').removeClass('active');
  $('body').removeClass('o-hidden');
  $('.overlay-bg').fadeOut(500);
});

    $('#service-category-tabs li a').click(function () {
        $('#service-category-tabs li a').find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        if ($(this).next('.contant_box_acc').css('display') == 'block') {
            $(this).next('.contant_box_acc').slideUp('slow');
        } else {
            $('#service-category-tabs .contant_box_acc').css('display', 'none');
            $(this).next('.contant_box_acc').slideDown('slow');
            $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
        }
    });
</script>
<script type="text/javascript">
    $(function () {
        function fullscreenErrorHandler() {
            if (self != top)
                return "The frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
        }
        var optionsBook1 = {
            height: 1024,
            width: 725 * 2,
            pageNumbers: false,
            pdf: "assets/images/pdf/book1.pdf",
            pdfFind: true,
            pdfTextSelectable: true,
            lightbox: "#book1-trigger",
            lightboxClass: "lightbox-pdf",
            centeredWhenClosed: true,
            hardcovers: true,
            curl: false,
            toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails",
            thumbnailsPosition: 'bottom',
            responsiveHandleWidth: 50,
            onFullscreenError: fullscreenErrorHandler
        };
        var optionsBook2 = {
            height: 1024,
            width: 725 * 2,
            pageNumbers: false,
            pdf: "assets/images/pdf/book2.pdf",
            pdfFind: true,
            pdfTextSelectable: true,
            lightbox: "#book2-trigger",
            lightboxClass: "lightbox-pdf",
            centeredWhenClosed: true,
            hardcovers: true,
            curl: false,
            toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails",
            thumbnailsPosition: 'bottom',
            responsiveHandleWidth: 50,
            onFullscreenError: fullscreenErrorHandler
        };
        var optionsBook3 = {
            height: 1024,
            width: 725 * 2,
            pageNumbers: false,
            pdf: "assets/images/pdf/book3.pdf",
            pdfFind: true,
            pdfTextSelectable: true,
            lightbox: "#book3-trigger",
            lightboxClass: "lightbox-pdf",
            centeredWhenClosed: true,
            hardcovers: true,
            curl: false,
            toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails",
            thumbnailsPosition: 'bottom',
            responsiveHandleWidth: 50,
            onFullscreenError: fullscreenErrorHandler
        };
        var books = {
            "#book1": optionsBook1,
            "#book2": optionsBook2,
            "#book3": optionsBook3
        };
        $("#book1-trigger, #book2-trigger, #book3-trigger").on("click", function () {
            buildBook("#" + this.id.replace("-trigger", ""));
        })

        function buildBook(elem) {
            var book = $.wowBook(elem);
            if (!book) {
                $(elem).wowBook(books[elem]);
                book = $.wowBook(elem);
            }
            book.showLightbox();
        }
    });
</script>
<script>
    mobileOnlySlider(".autoplay3", true, false, 767);

    function mobileOnlySlider($slidername, $dots, $arrows, $breakpoint) {
        var slider = $($slidername);
        var settings = {
            mobileFirst: true,
            dots: false,
            slidesToShow: 1,
            autoplay: true,
            arrows: $arrows,
            responsive: [{
                breakpoint: $breakpoint,
                settings: "unslick"
            }, ]
        };
        slider.slick(settings);
        $(window).on("resize", function () {
            if ($(window).width() > $breakpoint) {
                return;
            }
            if (!slider.hasClass("slick-initialized")) {
                return slider.slick(settings);
            }
        });
    }
</script>
<script>
    mobileOnlySlider(".autoplay4", true, false, 767);

    function mobileOnlySlider($slidername, $dots, $arrows, $breakpoint) {
        var slider = $($slidername);
        var settings = {
            mobileFirst: true,
            dots: true,
            slidesToShow: 1,
            autoplay: true,
            arrows: $arrows,
            responsive: [{
                breakpoint: $breakpoint,
                settings: "unslick"
            }, ]
        };
        slider.slick(settings);
        $(window).on("resize", function () {
            if ($(window).width() > $breakpoint) {
                return;
            }
            if (!slider.hasClass("slick-initialized")) {
                return slider.slick(settings);
            }
        });
    }
</script>