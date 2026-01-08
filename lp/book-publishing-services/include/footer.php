<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="/lp/book-publishing-services" class="ftr-logo">
                    <img src="assets/images/site-logo.png" alt="">
                </a>
                <p>Atlas Publishing Group operates independently and is not affiliated with any of the brands or
                    entities referenced above.
                </p>
            </div>
            <div class="col-md-2">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="javascript:;">Home</a></li>
                    <li><a href="https://www.atlaspublishinggroup.com/about">About</a></li>
                    <li><a href="https://www.atlaspublishinggroup.com/contact">Contact </a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4>Services</h4>
                <ul>
                    <li><a href="https://www.atlaspublishinggroup.com/book">Editing </a></li>
                    <li><a href="https://www.atlaspublishinggroup.com/publication">Publishing </a></li>
                    <li><a href="https://www.atlaspublishinggroup.com/cover-design">Cover design </a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>
                    Connect with us
                </h4>
                <ul class="info">
                    <li>
                        <img src="assets/images/footer-chat.png" alt="">
                        <a href="javascript:;" class="chat">Live Chat</a>
                    </li>
                    <li>
                        <img src="assets/images/footer-tel.webp" alt="">
                        <div><a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2025 - Atlas Publishing Group All Right Reserved. </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div style="display: none;" class="popupform" id="popupform" data-touch="false">
    <div class="modal-body">
        <div class="popup-content">
            <h3>
                We have the best limited offer.
            </h3>
            <h2>
                Biggest Sale
            </h2>
            <h5>Avail it today before it’s too late.</h5>
            <h4>
                <span>50% off</span> on our Services
            </h4>
            <form method="post" action="mail">
                <div class="row gap-4">
                    <div class="col-md-12">
                        <input class="form-control" type="text" required="" name="name" placeholder="Full Name" />
                        <div class="name text-left color-white" style="font-size: 13px;color: black;"></div>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" type="email" required="" name="email" placeholder="Your Email" />
                        <div class="email text-left color-white" style="font-size: 13px;color: black;"></div>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" type="tel" required="" name="phone" placeholder="Your Number" />
                        <div class="phone text-left" style="font-size: 13px;color: black;"></div>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="msg" placeholder="Tell Us About Your Book">
                        <div class="msg text-left color-white" style="font-size: 13px;color: black;"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="mr-md:col-span-5 col-span-12" style="display: none;">
                            <div class="flex items-center gap-x-2">
                                <input type="checkbox" name="agree" id="agree" checked />
                                <label for="agree" class="mr-sm:text-sm text-xs">By checking this box, you agree to
                                    allow us to contact you by phone,email and/or SMS.</label>
                            </div>
                            <div class="terms text-left color-white"></div>
                        </div>
                        <div class="c">
                            <button type="submit" class="btn btn-black " name="submit">Activate Now</button>
                            <input type="hidden" name="pageurl" value="<?php echo $actual_link;?>">
                            <input type="hidden" name="ip2loc_ip" value="">
                            <input type="hidden" name="ip2loc_isp" value="">
                            <input type="hidden" name="ip2loc_org" value="">
                            <input type="hidden" name="ip2loc_country" value="">
                            <input type="hidden" name="ip2loc_region" value="">
                            <input type="hidden" name="ip2loc_city" value="">
                            <input type="hidden" name="service_id" value="" class="">
                        </div>
                    </div>
                </div>
                <div class="form-response"></div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/libs.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=239dfa05-01f6-4362-bfb9-4f75a7455e10">
</script>
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
    $(".chat").click((function () {
        $zopim.livechat.window.toggle();
    }))
</script>