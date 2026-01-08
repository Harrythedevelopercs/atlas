<footer class="footer_wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                <div class="footer_logo">
                    <a href="/lp/book-marketing">
                        <img src="assets/images/logo.webp" class="img-fluid footer_logo_img" alt="Loading Logo...">
                    </a>
                    <a href="javascript:;">
                        <img src="assets/images/barklogo-png.webp" class="img-fluid footer_icon_img"
                            alt="Loading Image...">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                <div class="footer_nav">
                    <ul>
                        <li>
                            <a href="tel:<?php echo $phone;?>">
                                <i class="fa-solid fa-phone"></i> <?php echo $phone;?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto: <?php echo $email;?>">
                                <i class="fa-solid fa-envelope"></i> <?php echo $email;?>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa-solid fa-location-dot"></i> <?php echo $address;?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright_flex">
                <div class="copyright_text">
                    <p>
                        © <script type="text/javascript">
                            document.write(new Date().getFullYear());
                        </script> Atlas Publishing Group. All Rights Reserved.
                        <a href="https://www.atlaspublishinggroup.com/privacy-policy">Privacy Policy</a>
                    </p>
                </div>
                <!-- <div class="copyright_nav">
                    <ul>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms & Conditions</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</footer>
<div id="myModal" class="modal fade" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-cont-close">
                <span data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="modal-body">
                <div class="modal-body-flex">
                    <form action="mail" method="post" class="custom-modal-contact-form">
                        <div class="index-banner-ct-text">
                            <h6 class="heading">Your Book Deserves Attention</h6>
                            <p class="desc">Fill Out the Form to Begin Your Book Marketing Journey.</p>
                        </div>
                        <div class="row gy-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="index-banner-box-input">
                                    <input type="text" class="required" placeholder="Full Name *" name="name"
                                        required="required">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="index-banner-box-input">
                                    <input type="email" class="required email" placeholder="Email Address *"
                                        name="email" required="required">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="index-banner-box-input">
                                    <input type="tel" class="required number" minlength="10" placeholder="Phone No. *"
                                        name="phone" required="required">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="index-banner-box-input">
                                    <textarea name="msg" class="required" required="required"
                                        placeholder="To help us understand better enter a brief description of your project."></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-4">
                                <div class="index-banner-ct-btn">
                                    <input type="submit" name="cta" value="Submit">
                                    <input type="hidden" name="pageurl" value="<?php echo $actual_link;?>">
                                    <input type="hidden" name="ip2loc_ip" value="">
                                    <input type="hidden" name="ip2loc_isp" value="">
                                    <input type="hidden" name="ip2loc_org" value="">
                                    <input type="hidden" name="ip2loc_country" value="">
                                    <input type="hidden" name="ip2loc_region" value="">
                                    <input type="hidden" name="ip2loc_city" value="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
    const endTime = new Date();
    endTime.setHours(endTime.getHours() + 1);
    endTime.setMinutes(endTime.getMinutes() + 31);
    endTime.setSeconds(endTime.getSeconds() + 23);

    function updateCountdown() {
        const now = new Date();
        const diff = endTime - now;
        const totalSeconds = Math.floor(diff / 1000);
        const hours = Math.floor(totalSeconds / 3600);
        const minutes = Math.floor((totalSeconds % 3600) / 60);
        const seconds = totalSeconds % 60;
        const hourPercent = (hours / 12) * 100;
        const minutePercent = (minutes / 60) * 100;
        const secondPercent = (seconds / 60) * 100;
        const hourOffset = 314 - (314 * hourPercent) / 100;
        const minuteOffset = 314 - (314 * minutePercent) / 100;
        const secondOffset = 314 - (314 * secondPercent) / 100;
        document.getElementById('hours').textContent = hours;
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;
        document.querySelector('.progress.hours').style.strokeDashoffset = hourOffset;
        document.querySelector('.progress.minutes').style.strokeDashoffset = minuteOffset;
        document.querySelector('.progress.seconds').style.strokeDashoffset = secondOffset;
        if (diff <= 0) clearInterval(timer);
    }
    updateCountdown();
    const timer = setInterval(updateCountdown, 1000);
</script>
<script>
    var swiper = new Swiper(".work_slider", {
        slidesPerView: 2,
        spaceBetween: 10,
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 4
            },
            1200: {
                slidesPerView: 5
            },
            1400: {
                slidesPerView: 6
            }
        }
    });
</script>
<!--Start of Chat Script-->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=239dfa05-01f6-4362-bfb9-4f75a7455e10">
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
    $(".chat").click((function () {
        $zopim.livechat.window.toggle();
    }))
</script>
<!--End of Chat Script-->
</body>

</html>