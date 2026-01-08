<header class="Dextopheader">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="header-box">
					<div class="img-box">
						<a href="/">
							<img src="assets/images/site-logo.png" alt="Loading Logo...">
						</a>
					</div>
					<div class="header-menu">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="javascript:void(0)">Writing Services <i class="fa fa-chevron-down"
										aria-hidden="true"></i></a>
								<div class="services-hover">
									<div class="menu-hovers">
										<p>The Suite</p>
										<ul>
											<li>
												<a href="seo-services.php">
													<img src="assets/images/SEOWriting.webp" alt="">SEO Writing
												</a>
											</li>
											<li>
												<a href="article-writing.php">
													<img src="assets/images/ArticleWriting.webp" alt="">Article
													Writing
												</a>
											</li>
											<li>
												<a href="magazine.php">
													<img src="assets/images/MagazineWriting.webp" alt="">Magazine
													Writing
												</a>
											</li>
											<li>
												<a href="book.php">
													<img src="assets/images/BookEditing.svg" alt="">Book
													Editing
												</a>
											</li>
										</ul>
									</div>
									<div class="menu-hovers">
										<p>Extensions</p>
										<ul>
											<li>
												<a href="web-copy.php">
													<img src="assets/images/WebCopyWriting.webp" alt="">Web Copy Writing
												</a>
											</li>
											<li>
												<a href="press.php">
													<img src="assets/images/PressRelease.webp" alt="">Press Release
												</a>
											</li>
											<li>
												<a href="script-writing.php">
													<img src="assets/images/Script-Writing.webp" alt="">Script
													Writing
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="genre.php">Genre</a></li>
							<li><a href="marketing.php">Marketing</a></li>
							<li><a href="publication.php">Publication</a></li>
							<li><a href="printing.php">Printing</a></li>
							<li><a href="cover-design.php">Cover Design</a></li>
							<li><a href="case-studies.php">Case Studies</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<li>
								<a href="tel:<?php echo $phone;?>" class="btn t-btn">
									<i class="fa fa-phone" aria-hidden="true"></i><?php echo $phone;?>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<header class="mobileHeader">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="mobile-menu-main-box">
					<div class="img-box">
						<a href="/"><img src="assets/images/site-logo.png" alt=""></a>
					</div>
					<div class="hamburger" onclick="toggleMenu()">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
			<div class="mobile-menu" id="mobileMenu">
				<div class="hamburger" onclick="toggleMenu()">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<ul class="main-mobile-ul">
					<li><a href="/">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li class="has-dropdown">
						<a href="#" onclick="toggleDropdown(event)">Writing Services <i class="fa fa-chevron-down"
								aria-hidden="true"></i></a>
						<ul class="dropdown">
							<ul>
								<li><a href="seo-services.php">SEO Writing</a></li>
								<li><a href="article-writing.php">Article Writing</a></li>
								<li><a href="magazine.php">Magazine Writing</a></li>
								<li><a href="book.php">Book Editing</a></li>
								<li><a href="web-copy.php">Web Copy Writing</a></li>
								<li><a href="press.php">Press Release</a></li>
								<li><a href="script-writing.php">Script Writing</a></li>
							</ul>
						</ul>
					</li>
					<li><a href="genre.php">Genre</a></li>
					<li><a href="marketing.php">Marketing</a></li>
					<li><a href="publication.php">Publication</a></li>
					<li><a href="printing.php">Printing</a></li>
					<li><a href="cover-design.php">Cover Design</a></li>
					<li><a href="case-studies.php">Case Studies</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>