<!doctype html>
<html lang="en">

<head>
	<?php include 'include/style.php'; ?>
	<title>Thank You | Atlas Publishing Group</title>
	<meta name="description" content="">
	<style>
		.main-content {
			height: 100vh;
			background: linear-gradient(202deg, rgba(0, 204, 203, 1) 0%, rgba(83, 60, 145, 1) 100%);
			background-size: cover;
			background-position: center;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			gap: 40px;
		}

		.main-content h1 {
			font-size: 80px;
			font-weight: bold;
			color: #fff;
		}

		.main-content p {
			color: #fff;
			font-size: 20px;
		}

		.main-content hr {
			width: 100%;
			color: #fff;
		}

		.main-content .combo_btn {
			display: flex;
			justify-content: center;
		}

		@media screen and (max-width: 1600px) {
			.main-content h1 {
				font-size: 80px;
				line-height: 90px;
			}

			.main-content p {
				font-size: 20px;
				line-height: 30px;
			}
		}

		@media screen and (max-width: 991px) {
			.main-content h1 {
				font-size: 60px;
				line-height: 70px;
			}

			.main-content p {
				font-size: 16px;
				line-height: 26px;
				font-weight: 300;
			}
		}

		@media screen and (max-width: 767px) {
			.main-content h1 {
				font-size: 50px;
				line-height: 60px;
			}

			.main-content p {
				font-size: 14px;
				line-height: 24px;
				margin: 0;
			}
		}

		@media screen and (max-width: 575px) {
			.main-content h1 {
				font-size: 40px;
				line-height: 50px;
			}
		}
	</style>
	
    <!-- Event snippet for Submit lead form conversion -->
    <script>
      gtag('event', 'conversion', {'send_to': 'AW-17495014686/DRWgCJvv7oobEJ76opZB'});
    </script>
    
</head>

<body>
	<div class="main-content text-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h1>THANK YOU!</h1>
					<p>
						Thank you for filling that out. It means a lot to us, just like you do!
						<br>
						We really appreciate your time today — our representative will reach out to you soon.
					</p>
					<hr>
					<div class="combo_btn">
						<a class="btn btn_1" href="/lp/brand-design">Go To Home</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery-3.6.3.min.js"></script>
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