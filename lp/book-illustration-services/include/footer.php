<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/accordian-jquery-ui.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.fittext.js"></script>
<script type="text/javascript" src="assets/js/pdf.combined.min.js"></script>
<script type="text/javascript" src="assets/js/wow_book.min.js"></script>
<script src="assets/js/custom.js"></script>
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
    $(".btn-chat").click((function () {
        $zopim.livechat.window.show();
    }))
</script>
<script>
    $(document).ready(function () {
        $(".close-btn").click(function () {
            $(".new-popupform-main").fadeOut();
        });
        $('.poupBtn').click(function () {
            $(".new-popupform-main").css("display", "block").fadeIn();
        })
    })
    const myTimeout = setTimeout(showForm, 10000);

    function showForm() {
        $(".new-popupform-main").css("display", "block").fadeIn();
    }
</script>