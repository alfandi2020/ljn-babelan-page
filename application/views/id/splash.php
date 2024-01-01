<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:title" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:description" content="Industry - Factory & Industrial HTML Template" />
	<meta property="og:image" content="https://industry.dexignzone.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" /> -->
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/asset_fr/images/log.png" />

	<!-- PAGE TITLE HERE -->
	<title><?= ($title == "Home") ? $lang['home_text'] : $title ?> - <?= $lang['nama_yayasan_text'] ?></title>

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
	<script src="<?= base_url() ?>assets/asset_fr/js/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/asset_fr/plugins/revolution/revolution/css/revolution.min.css">

</head>
<style>
body, html {
    height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bg {
  /* The image used */
  background-image: url(<?= base_url('assets/images/splash.jpg') ?>);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

/* h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
} */
</style>
<body>
<div class="bg">
<div class="caption">
<div class="row" style="margin-top:-200px;">
		<div class="col">
			<button class="col-xl-10 btn btn-square btn-danger btn-lg btn-comming">CUSTOMERS <i class="fa fa-angle-double-right"></i></button><br>
		</div>
		<div class="col">
		<a href="<?= base_url('home') ?>" class="col-xl-10 btn btn-square btn-primary btn-lg">PEMAGANGAN <i class="fa fa-angle-double-right"></i></a><br>

		</div>
	</div> <br>
<div class="row" style="margin-top:20;">
		<div class="col">
			<button class="col-xl-10 btn btn-square btn-danger btn-lg btn-comming">管理団体 <i class="fa fa-angle-double-right"></i></button><br>
		</div>
		<div class="col">
		<a href="<?= base_url('home') ?>" class="col-xl-10 btn btn-square btn-primary btn-lg">技能実習 <i class="fa fa-angle-double-right"></i></a><br>

		</div>
	</div>
	
	
    <!--<button class="col-xl-4 btn btn-square btn-warning btn-lg btn-comming">管理団体 <i class="fa fa-angle-double-right"></i></button><br>--> <!-- customer -->
  </div>
</div>

<script>
     $(".btn-comming").on("click", function(e) {
            e.preventDefault();
            // const form = $(this).parents("form");
            Swal.fire({
                title: "Comming Soon...!",
                text: "LPK Tjokro Persada Bakti Pertiwi Customers..!",
                icon: "info",
                showCancelButton: false,
                showSubmitButton: false,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Oke"
                })
        });
    
</script>
</body>

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
</html>