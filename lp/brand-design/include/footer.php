<footer class="footer_wrapper">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-12 col-md-5">
                <div class="footer_logo">
                    <a href="/lp/brand-design">
                        <img src="assets/images/logo.webp" class="img-fluid footer_logo_img" alt="Loading Logo...">
                    </a>
                    <p class="para">
                        Atlas Publishing Group provides professional brand design services that help authors and
                        businesses create a strong, memorable, and market-ready identity. Our team focuses on
                        high-quality, creative, and reliable solutions that elevate your brand and connect with your
                        audience.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-5">
                <div class="footer_nav">
                    <ul>
                        <li>
                            <a href="tel:<?php echo $phone;?>">
                                <?php echo $phone;?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto: <?php echo $email;?>">
                                <?php echo $email;?>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <?php echo $address;?>
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
                    </p>
                </div>
                <div class="copyright_nav">
                    <ul>
                        <li><a href="https://www.atlaspublishinggroup.com/privacy-policy" target="" _blank>Privacy
                                Policy</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/custom.js"></script>
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
<?php include "include/balti_popup.php" ?>
</body>

</html>