<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="LPK Tjokro Bakti Pertiwi" />
	<meta property="og:title" content="LPK Tjokro Bakti Pertiwi" />
	<meta property="og:description" content="LPK Tjokro Bakti Pertiwi" />
	<meta property="og:image" content="https://lpktjokrobaktipertiwi.id" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" /> -->
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/asset_fr/images/log.png" />

	<!-- PAGE TITLE HERE -->
	<title><?= $title ?> - <?= $lang['nama_yayasan_text'] ?></title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="<?= base_url() ?>assets/asset_fr/js/html5shiv.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/skin/skin-3.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/css/templete.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Google Font -->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
	</style>

	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/css/revolution.min.css">

	<script src="<?= base_url() ?>assets/asset_fr/js/jquery.min.js"></script>

</head>

<body id="bg">
	<div class="page-wraper roboto-condensed">
		<div id="loading-area"></div>
		<!-- header -->
		<header class="site-header mo-left header-transparent box-header header">
			<!-- <header class="site-header mo-left header-transparent header"> -->
			<div class="top-bar text-black">
				<div class="container">
					<div class="row d-flex justify-content-between">
						<div class="dlab-topbar-left">
							<ul>
								<!-- <li><?= anchor('language/change/id', '<span class="flag-icon flag-icon-id">') ?></li>
								<li><?= anchor('language/change/en', '<span class="flag-icon flag-icon-gb-eng">') ?></li>
								<li><?= anchor('language/change/jp', '<span class="flag-icon flag-icon-jp">') ?></li> -->
								<li><?= anchor('language/change/id', 'ID') ?></li>
								<li><?= anchor('language/change/en', 'EN') ?></li>
								<li><?= anchor('language/change/jp', '日本語') ?></li>
							</ul>
						</div>
						<div class="dlab-topbar-right topbar-social">
							<ul>
								<!-- <li>
									<a href="https://wa.me/628176877606" target="_blank" class="site-button-link twitter hover" title="Admin 1">
										<i class="fa fa-whatsapp"></i>
									</a>
								</li>
								<li>
									<a href="https://wa.me/6285714243325" target="_blank" class="site-button-link twitter hover" title="Admin 2">
										<i class="fa fa-whatsapp"></i>
									</a>
								</li>
								<li>
									<a href="https://wa.me/6281227640349" target="_blank" class="site-button-link twitter hover" title="Admin 3">
										<i class="fa fa-whatsapp"></i>
									</a>
								</li>
								<li>
									<a href="https://wa.me/628119401954" target="_blank" class="site-button-link twitter hover" title="Admin 4">
										<i class="fa fa-whatsapp"></i>
									</a>
								</li> -->
								<li>
									<a href="https://www.facebook.com/profile.php?id=61551065793688" class="site-button-link facebook hover" title="Facebook">
										<img src="https://lpktjokrobaktipertiwi.id/assets/images/logo/logo_facebook.png" alt="" style="width: 20px; height: 20px;">
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/lpktjokrobaktipertiwi/" class="site-button-link instagram hover" title="Instagram">
										<img src="https://lpktjokrobaktipertiwi.id/assets/images/logo/logo_instagram.png" alt="" style="width: 20px; height: 20px;">
									</a>
								</li>
								<!-- <li>
									<a href="#" class="site-button-link linkedin hover">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li> -->
								<li>
									<a href="https://www.youtube.com/watch?v=4LqqBQxU-1Q" class="site-button-link youtube hover" title="Youtube">
										<img src="https://lpktjokrobaktipertiwi.id/assets/images/logo/logo_youtube.png" alt="" style="width: 20px; height: 20px;">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- main header -->
			<div class="sticky-header main-bar-wraper navbar-expand-lg">
				<div class="main-bar clearfix ">
					<div class="container clearfix">
						<!-- website logo -->
						<div class="logo-header mostion logo-dark">
							<a href="<?= base_url() ?>">
								<img src="<?= base_url() ?>assets/asset_fr/images/logo_gandeng.png" alt="">
							</a>
						</div>
						<!-- nav toggle button -->
						<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- extra nav -->
						<div class="extra-nav">
							<?php
							if (empty($this->session->userdata('username'))) {
								$url_auth = base_url('auth');
								$url_text = $lang['login_text'];
							} else {
								$url_auth = base_url('dashboard');
								$url_text = $lang['dashboard_text']; ?>
							<?php
							}
							?>
							<a href="<?= $url_auth ?>" class="site-button radius-no"><?= $url_text ?></a>
						</div>
						<!-- Quik search -->
						<div class="dlab-quik-search ">
							<form action="#">
								<input name="search" value="" type="text" class="form-control" placeholder="Type to search">
								<span id="quik-search-remove">
									<i class="ti-close"></i></span>
							</form>
						</div>
						<!-- main nav -->
						<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
							<div class="logo-header d-md-block d-lg-none">
								<a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/asset_fr/images/logo_gandeng.png" alt=""></a>
							</div>
							<ul class="nav navbar-nav">
								<li>
									<a href="<?= base_url('home') ?>"><?= $lang['home_text'] ?></a>
								</li>
								<li>
									<a href="javascript:;"><?= $lang['profile'] ?><i class="fas fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li>
											<a href="<?= base_url('home/visi_misi') ?>"><?= strtoupper($lang['visi_misi']) ?></a>
										</li>
										<li>
											<a href="<?= base_url('program') ?>"><?= strtoupper($lang['program_text']) ?></a>
										</li>
										<li>
											<a href="<?= base_url('home/legality') ?>"><?= strtoupper($lang['our_legality']) ?></a>
										</li>
										<li>
											<a href="<?= base_url('home/facility') ?>"><?= strtoupper($lang['facility']) ?></a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
										<?= $lang['services'] ?>
										<i class="fas fa-chevron-down"></i>
									</a>
									<ul class="sub-menu">
										<?php
										$programs = $this->M_Program->lists($language);

										foreach ($programs as $pr) {
										?>
											<li>
												<a href="<?= base_url('program/detail/') . $pr->slug ?>"><?= $pr->nama_program ?></a>
											</li>
										<?php
										}
										?>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
										<?= $lang['information'] ?>
										<i class="fas fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li>
											<a href="<?= base_url('registrasi/informasi') ?>"><?= $lang['registration_text'] ?></a>
										</li>
										<li>
											<a href="<?= base_url('home/job_vacancy') ?>"><?= $lang['loker_text'] ?></a>
										</li>
										<li>
											<a href="<?= base_url('article') ?>"><?= $lang['article_text'] ?></a>
										</li>
									</ul>
								</li>
								<!-- <li>
									<a href="<?= base_url('registrasi') ?>"><?= $lang['registration_text'] ?></a>
								</li> -->
								<!-- <li>
									<a href="#program"><?= $lang['program_text'] ?></a>
								</li> -->
								<!-- <li>
									<a href="#artikel"><?= $lang['article_text'] ?></a>
								</li> -->
								<!-- <li>
									<a href="">Tentang Kami</a>
								</li> -->
								<li>
									<a href="<?= base_url('home/contact') ?>"><?= $lang['contact_text'] ?></a>
								</li>
								<!-- <li>
									<a href="<?= base_url('home/tentang') ?>"><?= $lang["about_text"] ?></a>
								</li> -->
								<li>
									<a href="<?= base_url('registrasi') ?>"><?= $lang['registration_text'] ?></a>
								</li>
								<li>
									<a href="<?= base_url('home/faq') ?>"><?= $lang['faq'] ?></a>
								</li>
								<li id="authButton">
									<a href="<?= $url_auth ?>"><?= $url_text ?></a>
								</li>
							</ul>
							<div class="dlab-social-icon">
								<ul>
									<li>
										<a href="https://wa.me/628176877606" target="_blank" class="site-button whatsapp hover" title="Hartono Yakub">
											<i class="fa fa-whatsapp"></i>
										</a>
									</li>
									<li>
										<a href="https://wa.me/6285714243325" target="_blank" class="site-button whatsapp hover" title="Syamsul Rofik">
											<i class="fa fa-whatsapp"></i>
										</a>
									</li>
									<li>
										<a href="https://wa.me/6281227640349" target="_blank" class="site-button whatsapp hover" title="Admin 3">
											<i class="fa fa-whatsapp"></i>
										</a>
									</li>
									<li>
										<a href="https://wa.me/628119401954" target="_blank" class="site-button whatsapp hover" title="Admin 4">
											<i class="fa fa-whatsapp"></i>
										</a>
									</li>
									<li>
										<a href="https://www.facebook.com/profile.php?id=61551065793688" class="site-button facebook hover" title="Facebook">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/lpktjokrobaktipertiwi/" class="site-button instagram hover" title="Instagram">
											<i class="fab fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/watch?v=4LqqBQxU-1Q" class="site-button youtube hover" title="Youtube">
											<i class="fab fa-youtube"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main header END -->
		</header>
		<!-- header END -->

		<!-- Content -->
		<?php if (isset($pages)) $this->load->view($pages) ?>
		<!-- Content END -->

		<!-- Footer -->
		<footer class="site-footer" id="kontak">
			<div class="footer-top" style="background-image:url(<?= base_url('assets/asset_fr/') ?>images/background/bg2.png); background-size: contain;">
				<div class="container">
					<div class="row">
						<!-- <div class="col-md-3 col-5 col-xl-2 col-lg-2 col-sm-6 footer-col-4">
							<div class="widget widget_services border-0">
								<h5 class="footer-title text-white"><?= $lang['menu_text'] ?></h5>
								<ul>
									<li>
										<a href="<?= base_url('home/tentang') ?>"><?= $lang['about_text'] ?></a>
									</li>
									<li>
										<a href="<?= base_url('article') ?>"><?= $lang['article_text'] ?></a>
									</li>
								</ul>
							</div>
						</div> -->
						<div class="col-md-3 col-5 col-xl-2 col-lg-2 col-sm-6 footer-col-4">
							<div class="widget widget_getintuch border-0">
								<h5 class="footer-title text-white"><?= $lang['social_media'] ?></h5>
								<ul>
									<li style="padding-left: 0px;">
										<a href="https://www.facebook.com/profile.php?id=61551065793688" target="_blank">
											<img src="<?= base_url('assets/images/logo/logo_facebook.png') ?>" alt="" style="width: 20px; height: 20px;">
											<span>&nbsp;LPK YTP</span>
										</a>
									</li>
									<li style="padding-left: 0px;">
										<a href="https://www.instagram.com/lpktjokrobaktipertiwi/" target="_blank">
											<img src="<?= base_url('assets/images/logo/logo_instagram.png') ?>" alt="" style="width: 20px; height: 20px;">
											<span>&nbsp;LPK YTP</span>
										</a>
									</li>
									<li style="padding-left: 0px;">
										<a href="https://www.youtube.com/watch?v=4LqqBQxU-1Q" target="_blank">
											<img src="<?= base_url('assets/images/logo/logo_youtube.png') ?>" alt="" style="width: 20px; height: 20px;">
											<span>&nbsp;LPK YTP</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="widget widget_services border-0">
								<h5 class="footer-title text-white"><?= $lang['web_traffic'] ?></h5>
								<p>
									<i class="ti-user"></i><span>&nbsp;</span>
									<?php
									$this->load->model('M_Visitor');
									$visitor_count = $this->M_Visitor->getTotalVisitors();
									?>
									<strong> <?= $visitor_count . ' ' . $lang['visitor'] ?></strong>
								</p>
							</div>
						</div>

						<div class="col-md-3 col-7 col-xl-6 col-lg-3 col-sm-6 footer-col-4">
							<div class="widget widget_services border-0">
								<h5 class="footer-title text-white"><?= $lang['maps_text'] ?></h5>
								<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.992596261016!2d106.9171448!3d-6.1978163!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bc764820fcb%3A0x4cd956d7d19d7448!2sYAYASAN%20TJOKRO%20PERSADA%20BAKTI%20PERTIWI!5e0!3m2!1sid!2sid!4v1697767053806!5m2!1sid!2sid" style="border:0;" height="250" width="500" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
								<div class="responsive-iframe">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.992596261016!2d106.9171448!3d-6.1978163!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bc764820fcb%3A0x4cd956d7d19d7448!2sYAYASAN%20TJOKRO%20PERSADA%20BAKTI%20PERTIWI!5e0!3m2!1sid!2sid!4v1697767053806!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
								</div>

							</div>
						</div>
						<div class="col-md-6 col-xl-4 col-lg-3 col-sm-6 footer-col-4">
							<div class="widget widget_getintuch">
								<h5 class="footer-title text-white "><?= $lang['contact_us_text'] ?></h5>
								<?php

								$alamat = $this->M_Setting->footer_section($language, 'alamat');
								$telepon = $this->M_Setting->footer_section($language, 'telepon');
								$email = $this->M_Setting->footer_section($language, 'email');
								?>
								<ul>
									<li>
										<i class="ti-location-pin"></i>
										<strong><?= $alamat['judul_setting'] ?></strong> <?= $alamat['content'] ?>
									</li>
									<li>
										<i class="ti-mobile"></i>
										<strong><?= $telepon['judul_setting'] ?></strong>
										<?= $telepon['content'] ?>
									<li>
										<i class="ti-email"></i>
										<strong><?= $email['judul_setting'] ?></strong> <?= $email['content'] ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer bottom part -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 text-left ">
							<span><?= $lang['copyright_text'] ?> © 2023 Fantecno Design DexignZone</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer END -->
		<button class="scroltop style2 radius" type="button">
			<i class="fas fa-arrow-up"></i>
		</button>
		<div class="whatsapp-container">
			<a href="#" class="whatsapp-icon" target="_blank" rel="noopener noreferrer">
				<i class="fa fa-whatsapp"></i>
			</a>
			<div class="additional-buttons">
				<?php
				$social = $this->M_Setting->chat();

				foreach ($social as $s) {
				?>
					<a href="<?= $s->url . $s->contact_id ?>" class="additional-icon">
						<i class="<?= $s->icon ?>"></i><span> <?= $s->contact_name ?></span>
					</a>
				<?php
				}
				?>
			</div>
		</div>
	</div>
	<!-- JAVASCRIPT FILES ========================================= -->
	<!-- JAVASCRIPT FILES ========================================= -->

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script> -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/wow/wow.js"></script><!-- WOW JS -->

	<script src="<?= base_url() ?>assets/asset_fr/plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- Lightgallery -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/scroll/scrollbar.min.js"></script><!-- scroll -->
	<script src="<?= base_url() ?>assets/asset_fr/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
	<script src="<?= base_url() ?>assets/asset_fr/js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
	<script src="<?= base_url() ?>assets/asset_fr/js/dz.ajax.js"></script><!-- CONTACT JS  -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/rangeslider/rangeslider.js"></script><!-- Rangeslider -->

	<script src="<?= base_url() ?>assets/asset_fr/js/jquery.lazy.min.js"></script>
	<!-- REVOLUTION JS FILES -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="<?= base_url() ?>assets/asset_fr/js/rev.slider.js"></script>
	<script>
		jQuery(document).ready(function() {
			'use strict';
			dz_rev_slider_14();
			$('.lazy').Lazy();
		}); /*ready*/
	</script>
	<script>
		// function toggleAdditionalButtons() {
		// 	var additionalButtons = document.getElementById('additionalButtons');
		// 	additionalButtons.style.display = (additionalButtons.style.display === 'none' || additionalButtons.style.display === '') ? 'block' : 'none';
		// }
	</script>
	<script>
		// Menampilkan atau menyembunyikan tombol-tombol tambahan saat hover
		document.querySelector('.whatsapp-container').addEventListener('mouseenter', function() {
			document.querySelector('.additional-buttons').style.display = 'flex';
		});

		document.querySelector('.whatsapp-container').addEventListener('mouseleave', function() {
			document.querySelector('.additional-buttons').style.display = 'none';
		});
	</script>
	<script>
		$(document).ready(function() {
			function detectDeviceType() {
				var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
				return screenWidth < 768 ? 'Mobile' : (screenWidth < 1024 ? 'Tablet' : 'Desktop');
			}

			function updateMenuVisibility() {
				var deviceType = detectDeviceType();
				var testingItem = $('#authButton');

				// Tampilkan elemen hanya jika perangkat dalam mode Mobile
				testingItem.css('display', deviceType === 'Mobile' ? 'block' : 'none');
			}

			// Panggil updateMenuVisibility saat halaman pertama dimuat
			updateMenuVisibility();

			// Tambahkan event listener untuk resize window
			$(window).on('resize', function() {
				// Panggil updateMenuVisibility saat ukuran layar berubah
				updateMenuVisibility();
			});
		});
	</script>
</body>

</html>