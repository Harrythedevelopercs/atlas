<footer>
    <div class="upr-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text">
                        <a href="/">
                            <img src="assets/images/site-logo.png" alt="">
                        </a>
                        <p>Atlas Publishing Group stands as the pinnacle of excellence in the world of publishing
                            services, renowned for its unparalleled commitment to author success. With a dedicated team
                            of industry experts and innovative resources at their disposal, Atlas Publishing Group goes
                            above and beyond.</p>
                        <p>Don't hesitate to reach out and take the first step towards literary success with one of the
                            finest publishers in the industry.</p>
                    </div>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/atlaspublishinggroup/" target="_blank"><img
                                src="assets/images/fb-icon.png" alt=""></a>

                        <a href="https://www.instagram.com/atlaspublishing.group/" target="_blank"><img
                                src="assets/images/insta-icon.png" alt=""></a>
                        <a href="https://x.com/AtlasPubli26701" target="_blank"><img src="assets/images/x-icon.png"
                                alt=""></a>
                        <a href="https://www.linkedin.com/company/atlas-publishing-group-official/" target="_blank"><i
                                class="fa fa-linkedin" style="font-size: 15px;color: black;"></i></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="linkbox">
                                <h6>Quick Links</h6>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="blogs.php">Blogs</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="linkbox">
                                <h6>Our Services</h6>
                                <ul>
                                    <li><a href="book-publishing.php">Book Publishing</a></li>
                                    <li><a href="digital-book-publishing.php">Digital Book Publishing</a></li>
                                    <li><a href="amazon-publishing.php">Amazon Publishing</a></li>
                                    <li><a href="self-publishing.php">Self Publishing</a></li>
                                    <li><a href="children-illustration.php">Children Illustration</a></li>
                                    <li><a href="amazaon-book-publishing.php">Amazon Book Publishing</a></li>
                                    <li><a href="ebook-publishing.php">Ebook Publishing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="linkbox">
                                <h6>Contact Us</h6>
                                <ul class="maxlineheight">
                                    <li>
                                        <a href="mailto:<?php echo $email;?>">
                                            <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $email;?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:<?php echo $phone;?>">
                                            <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $phone;?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://maps.app.goo.gl/QWezEoiTFTBnZrUn6" target="_blank">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                            <?php echo $address;?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="linkbox">
                                <img src="assets/images/footerimg-02.png" alt="">
                                <img src="assets/images/footerimg-01.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="divider-text">
                        <span>Awards</span>
                        <span class="divider"></span>
                    </div>
                    <div class="footer-logos">
                        <img src="assets/images/footerlogo01.png" alt="">
                        <img src="assets/images/footerlogo02.png" alt="">
                        <img src="assets/images/footerlogo03.png" alt="">
                        <img src="assets/images/footerlogo04.png" alt="">
                        <img src="assets/images/footerlogo05.png" alt="">
                        <img src="assets/images/footerlogo06.png" alt="">
                        <img src="assets/images/footerlogo07.png" alt="">
                        <img src="assets/images/footerlogo08.png" alt="">
                        <img src="assets/images/footerlogo09.png" alt="">
                        <img src="assets/images/footerlogo10.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="down-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text">
                        <p>© <?php echo date("Y"); ?> Atlas Publishing Group - All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--modal form-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include("include/form.php"); ?>
            </div>
        </div>
    </div>
</div>
<!--modal form end-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="assets/js/lib.js"></script>
<script src="assets/js/wow-animate.js"></script>
<script src="assets/js/custom.js"></script>
<!-- Start Wow Animation Script : -->
<script type="text/javascript">
    $(document).on('ready', function () {
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function (box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();
    });
</script>
<!-- End Wow Animation Script : -->
<!-- Start Header Menu Responsive -->
<script>
    function toggleMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.style.right = (menu.style.right === '0px') ? '-300px' : '0px';
    }

    function toggleDropdown(e) {
        e.preventDefault();
        const parent = e.target.closest('.has-dropdown');
        parent.classList.toggle('open');
    }
</script>
<!-- End Header Menu Responsive -->
<!--Start of Chat Script-->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=239dfa05-01f6-4362-bfb9-4f75a7455e10"></script>
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
<?php include "include/timer.php" ?>
</body>

</html>