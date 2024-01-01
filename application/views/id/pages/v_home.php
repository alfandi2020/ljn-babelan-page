<div class="page-content bg-white">
    <!-- Slider -->
    <div class="main-slider style-two default-banner" id="home">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="reveal-add-on36" data-source="gallery" style="background:#ffffff;padding:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.7.2 fullscreen mode -->
                    <!-- <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7.2"> -->
                    <!-- <ul>	 -->
                    <!-- SLIDE  -->
                    <!-- <li data-index="rs-100" data-transition="slideoververtical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> -->
                    <!-- MAIN IMAGE -->
                    <!-- <img src="<?= base_url() ?>assets/asset_fr/images/main-slider/dummy.png"  alt=""  data-lazyload="images/main-slider/slide9.jpg" data-bgposition="center center" data-kenburns="on" data-duration="4000" data-ease="Power3.easeInOut" data-scalestart="150" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="-100 0" data-offsetend="-100 0" data-bgparallax="4" class="rev-slidebg" data-no-retina> -->
                    <!-- LAYER NR. 1 -->

                    <!-- BACKGROUND VIDEO LAYER -->
                    <video width="100%" height="100%" loop="true" autoplay="autoplay" muted>
                        <source src="<?= base_url() ?>assets/asset_fr/video/<?= $videotron['content'] ?>" type="video/mp4" />
                    </video>


                    <!-- </li> -->
                    <!-- </ul> -->
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    <!-- </div> -->
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </div>
    </div>
    <!-- Slider END -->
    <div class="content-block">

        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title"><?= $lang['program_text'] ?></h2>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
                </div>
                <div class="row">
                    <?php
                    $duration = 2;
                    $delay = 0.3;
                    foreach ($programs as $p) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                            <img src="<?= base_url() ?>assets/images/programs/<?= $p->photo ?>" alt="" height="200px" class="" />
                            <div class="icon-bx-wraper bx-style-2 m-l40 p-a30 left bg-gray icon-bx-ho">
                                <div class="icon-bx-sm bg-primary m-b20">
                                    <span class="icon-cell">
                                        <i class="flaticon-robot-arm"></i>
                                    </span>
                                </div>
                                <div class="icon-content p-l40">
                                    <a href="<?= base_url('program/detail/') . $p->slug ?>">
                                        <h5 class="dlab-tilte"><?= $p->nama_program ?></h5>
                                    </a>
                                    <p title="<?= $p->keterangan ?>"><?= substr($p->keterangan, 0, 100) ?>...</p>
                                </div>
                                <div class="dlab-post-readmore">
                                    <a href="<?= base_url('program/detail/' . $p->slug) ?>" title="<?= $lang['detail_text'] ?>" rel="bookmark" class="site-button btnhover20"><?= $lang['detail_text'] ?>...</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest blog END -->

    <div class="content-block">
        <!-- Our Services -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title"><?= $lang['facility'] ?></h2>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
                </div>
                <div class="row">
                    <?php
                    foreach ($facilities as $f) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30 mb-5 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">

                            <img src="<?= base_url() ?>assets/asset_fr/images/<?= $f->photo ?>" alt="" />
                            <div class="icon-bx-wraper bx-style-2 m-l40 p-a30 left bg-gray icon-bx-ho">
                                <div class="icon-bx-sm bg-primary m-b20">
                                    <span class="icon-cell">
                                        <i class="<?= $f->icon ?>"></i>
                                    </span>
                                </div>
                                <div class="icon-content p-l40">
                                    <h5 class="dlab-tilte">
                                        <?= $f->$language ?>
                                    </h5>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing sed diam nibh euismod..</p> -->
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section-full dlab-we-find bg-img-fix p-t20 p-b20 bg-white wow fadeIn mt-5 mb-5" data-wow-duration="2s" data-wow-delay="0.6s">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title"><?= $lang['our_partners'] ?></h2>
                <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
            </div>
            <div class="section-content">
                <div class="client-logo-carousel mfp-gallery gallery owl-btn-center-lr owl-carousel owl-btn-3">
                    <?php
                    foreach ($partners as $p) {
                    ?>
                        <div class="item text-center">
                            <!-- <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="javascript:void(0);">
                                        </a>
                                    </div>
                                </div> -->
                            <?= $p->nama_partner ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area -->
    <div class="content-block">
        <!-- <div class="section-full content-inner const-about">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
								<div class="radius-sm m-b30 img-ho1">
									<img src="<?= base_url() ?>assets/asset_fr/images/about/pendidikan.png" alt="" />
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s">
								<div class="content-bx1">
									<div class="section-head style2">
										<h2 class="title">Pendidikan</h2>
										<p>Memberikan <?= strtolower("EDUKASI DAN TRAINING KEPADA PARA PEMUDA INDONESIA DENGAN MEMBUKA DAN MELALUI TRAINING OVERSEAS KE NEGARA JEPANG, SEHINGGA PARA PEMUDA TSB DIHARAPKAN KETIKA PULANG NANTI MAMPU MEMBERIKAN KONTRIBUSI TERBAIK NYA UNTUK NEGARA INDONESIA.(DIHARAPKAN PADA SUATU HARI NANTI, DARI HASIL EDUKASI DAN TRAINING YANG DI DAPAT, PARA PEMUDA INDONESIA TERSEBUT JUGA MAMPU MEMBUAT LEMBAGA ATAU PROGRAM PENDIDIKAN SEJENIS).") ?>
										</p>
									</div>
									<a href="portfolio-details.html" class="site-button m-r10 m-b10 btnhover20">View Portfolio</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
        <!-- Content Section End -->
        <!-- About Us -->
        <div class="section-full bg-white content-inner-2 project-slider" style="background-image:url(<?= base_url('assets/asset_fr/') ?>images/background/bg11.jpg); background-repeat:no-repeat; background-position:right bottom;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 p-lr0">
                        <div class="radius-sm m-b30 img-ho1">
                            <img src="<?= base_url() ?>assets/asset_fr/images/about/pendidikan.png" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-content wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                            <div class="section-head style2">
                                <h2 class="title"><?= $lang['training_title'] ?></h2>
                                <p> <?= $lang['training_content'] ?>
                            </div>
                            <!-- <div class="m-b30">
									<ul class="list-details">
										<li>
											<strong>Clients:</strong>
											<span>Ethan Hunt</span>
										</li>
										<li>
											<strong>Completion:</strong>
											<span>February 5th, 2017</span>
										</li>
										<li>
											<strong>Project Type:</strong>
											<span>Villa, Residence</span>
										</li>
									</ul>
								</div> -->
                            <!-- <div class="">
                                <a href="<?= base_url('home/tentang') ?>" class="site-button btnhover20"><?= $lang['detail_text'] ?></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="section-full bg-white content-inner-2" id="kegiatan">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="about-content wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                            <div class="section-head style2 container">
                                <!-- <h1 class="bold text-right wow fadeInRight"><b><?= $lang['lpk_activity_title_text'] ?></b></h1> -->
                                <h1 class="bold text-right wow fadeInRight"><b>KEGIATAN LPK</b></h1>
                                <!-- <p class="col-xl-4">Praesent pharetra orci odio, ut mattis tellus ullamcorper ornare. Suspendisse ullamcorper metus in erat viverra, vehicula pharetra dolor accumsan. In arcu ex, rutrum finibus malesuada </p> -->
                            </div>
                            <!-- <div class="m-b30">
									<ul class="list-details">
										<li>
											<strong>Clients:</strong>
											<span>Ethan Hunt</span>
										</li>
										<li>
											<strong>Completion:</strong>
											<span>February 5th, 2017</span>
										</li>
										<li>
											<strong>Project Type:</strong>
											<span>Villa, Residence</span>
										</li>
									</ul>
								</div> -->
                            <!-- <div class="">
									<a href="portfolio-details.html" class="site-button btnhover20">View Portfolio</a>
								</div> -->
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 p-lr0">
                        <div class="project-carousel-2 owl-carousel owl-btn-center-lr owl-btn-1 black  wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="2s">
                            <div class="item">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom">
                                    <img height="1200" src="<?= base_url() ?>assets/asset_fr/images/kegiatan1.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom">
                                    <img height="1200" src="<?= base_url() ?>assets/asset_fr/images/kegiatan2.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom">
                                    <img src="<?= base_url() ?>assets/asset_fr/images/kegiatan3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="section-full bg-white content-inner-1 project-area  bg-img-fix" style="background-image:url(<?= base_url('assets/asset_fr/') ?>images/background/bg9.jpg); background-size: cover;">
            <div class="container">
                <div class="section-head text-white style2 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s">
                    <h2 class="title m-b10">The Luxury Residence In Forest</h2>
                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache <br />fanny pack nostrud. Photo booth anim 8-bit hella, </p>
                    <a href="contact-1.html" class="site-button btnhover20 m-r10 m-b10">Contact Us</a>
                    <a href="portfolio-details.html" class="site-button btnhover20 m-b10">View Portfolio</a>
                </div>
                <div class="project-carousel-1 owl-carousel wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="item">
                        <div class="project-info-box">
                            <div class="project-media">
                                <img src="<?= base_url() ?>assets/asset_fr/images/our-services/construct/pic1.jpg" alt="" />
                            </div>
                            <div class="project-content">
                                <ul class="list-details">
                                    <li>
                                        <strong>Clients:</strong>
                                        <span>Ethan Hunt</span>
                                    </li>
                                    <li>
                                        <strong>Completion:</strong>
                                        <span>February 5th, 2017</span>
                                    </li>
                                    <li>
                                        <strong>Project Type:</strong>
                                        <span>Villa, Residence</span>
                                    </li>
                                    <li>
                                        <strong>Architects:</strong>
                                        <span>Logan Cee</span>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" class="site-button btnhover20 m-t10">View Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-info-box">
                            <div class="project-media">
                                <img src="<?= base_url() ?>assets/asset_fr/images/our-services/construct/pic2.jpg" alt="" />
                            </div>
                            <div class="project-content">
                                <ul class="list-details">
                                    <li>
                                        <strong>Clients:</strong>
                                        <span>Ethan Hunt</span>
                                    </li>
                                    <li>
                                        <strong>Completion:</strong>
                                        <span>February 5th, 2017</span>
                                    </li>
                                    <li>
                                        <strong>Project Type:</strong>
                                        <span>Villa, Residence</span>
                                    </li>
                                    <li>
                                        <strong>Architects:</strong>
                                        <span>Logan Cee</span>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" class="site-button btnhover20 m-t10">View Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="section-full bg-gray content-inner">
            <div class="container">
                <div class="section-head style2 text-center">
                    <h2 class="title">Our Team</h2>
                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="dlab-box m-b30 dlab-team5">
                            <div class="dlab-border-left"></div>
                            <div class="dlab-border-right"></div>
                            <div class="dlab-media">
                                <a href="javascript:;">
                                    <img width="358" height="460" alt="" src="<?= base_url() ?>assets/asset_fr/images/our-team/pic1.jpg">
                                </a>
                            </div>
                            <div class="dlab-info">
                                <h4 class="dlab-title">
                                    <a href="team-1.html">Nashid Martines</a></h4>
                                <span class="dlab-position">Director</span>
                                <ul class="dlab-social-icon">
                                    <li><a class="site-button circle-sm white fab fa-facebook-f" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-twitter" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-linkedin-in" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-pinterest-p" href="javascript:void(0);">

   
                                </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="dlab-box m-b30 dlab-team5">
                            <div class="dlab-border-left"></div>
                            <div class="dlab-border-right"></div>
                            <div class="dlab-media">
                                <a href="javascript:;">
                                    <img alt="" src="<?= base_url() ?>assets/asset_fr/images/our-team/pic2.jpg">
                                </a>
                            </div>
                            <div class="dlab-info">
                                <h4 class="dlab-title">
                                    <a href="team-1.html">Konne Backfield</a></h4>
                                <span class="dlab-position">Designer</span>
                                <ul class="dlab-social-icon">
                                    <li><a class="site-button circle-sm white fab fa-facebook-f" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-twitter" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-linkedin-in" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-pinterest-p" href="javascript:void(0);">

   
                                </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="dlab-box m-b30 dlab-team5">
                            <div class="dlab-border-left"></div>
                            <div class="dlab-border-right"></div>
                            <div class="dlab-media">
                                <a href="javascript:;">
                                    <img alt="" src="<?= base_url() ?>assets/asset_fr/images/our-team/pic3.jpg">
                                </a>
                            </div>
                            <div class="dlab-info">
                                <h4 class="dlab-title">
                                    <a href="team-1.html">Hackson Willingham</a></h4>
                                <span class="dlab-position">Developer</span>
                                <ul class="dlab-social-icon">
                                    <li><a class="site-button circle-sm white fab fa-facebook-f" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-twitter" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-linkedin-in" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-pinterest-p" href="javascript:void(0);">

   
                                </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="dlab-box m-b30 dlab-team5">
                            <div class="dlab-border-left"></div>
                            <div class="dlab-border-right"></div>
                            <div class="dlab-media">
                                <a href="javascript:;">
                                    <img alt="" src="<?= base_url() ?>assets/asset_fr/images/our-team/pic4.jpg">
                                </a>
                            </div>
                            <div class="dlab-info">
                                <h4 class="dlab-title">
                                    <a href="team-1.html">Konne Backfield</a></h4>
                                <span class="dlab-position">Manager</span>
                                <ul class="dlab-social-icon">
                                    <li><a class="site-button circle-sm white fab fa-facebook-f" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-twitter" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-linkedin-in" href="javascript:void(0);">

   
                                </a></li>
                                    <li><a class="site-button circle-sm white fab fa-pinterest-p" href="javascript:void(0);">

   
                                </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonials -->
        <!-- <div class="section-full content-inner-2 bg-white wow fadeIn" style="background-image:url(<?= base_url('assets/asset_fr/') ?>images/background/map-bg1.png)" data-wow-duration="2s" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-head style2 text-center">
                    <h2 class="title">Clients Say About Us</h2>
                    <p>19+ years’ experience</p>
                </div>
                <div class="testimonial-num-count owl-num-count owl-carousel owl-btn-center-lr owl-btn-3 owl-theme">
                    <div class="item">
                        <div class="testimonial-12 text-white">
                            <div class="testimonial-pic">
                                <img src="<?= base_url() ?>assets/asset_fr/images/our-team/pic12.jpg" alt="">
                            </div>
                            <div class="testimonial-detail">
                                <h4 class="testimonial-name m-t0 m-b5">David Matin</h4>
                                <span class="testimonial-position">Student</span>
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-12 text-white">
                            <div class="testimonial-pic">
                                <img src="<?= base_url() ?>assets/asset_fr/images/our-team/pic13.jpg" alt="">
                            </div>
                            <div class="testimonial-detail">
                                <h4 class="testimonial-name m-t0 m-b5">David Matin</h4>
                                <span class="testimonial-position">Student</span>
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-12 text-white">
                            <div class="testimonial-pic">
                                <img src="<?= base_url() ?>assets/asset_fr/images/our-team/pic14.jpg" alt="">
                            </div>
                            <div class="testimonial-detail">
                                <h4 class="testimonial-name m-t0 m-b5">David Matin</h4>
                                <span class="testimonial-position">Student</span>
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonials End -->
        <!-- Latest blog -->
        <!-- Latest blog END -->
        <!-- <div class="section-full bg-white content-inner-2" id="program">
            <div class="container">
                <div class="section-head style2 text-center">
                    <h2 class="title m-b10"><?= $lang['program_text'] ?></h2>
                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="row">
                    <?php
                    $duration = 2;
                    $delay = 0.3;
                    foreach ($programs as $p) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="<?= $duration ?>s" data-wow-delay="<?= $delay ?>s">
                            <div class="icon-bx-wraper sr-iconbox style2">
                                <div class=" m-b10">

                                    <img src="<?= base_url() ?>assets/images/programs/<?= $p->photo ?>" alt="" height="200px" class="thumbnail" />
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte">
                                        <a href=""><?= $p->nama_program ?>
                                        </a>
                                    </h4>
                                    <p><?= $p->keterangan ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                        $duration += 0.5;
                        $delay += 0.3;
                    }
                    ?>
                </div>
            </div>
        </div> -->
        <div class="section-full content-inner bg-gray wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s" id="artikel">
            <div class="container">
                <div class="section-head style2 text-center">
                    <h2 class="title"><?= $lang['article_text'] ?></h2>
                    <!-- <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
                </div>

                <div class="section-full bg-gray content-inner">
                    <div class="container">
                        <div class="row">

                            <?php
                            $duration = 2;
                            $delay = 0.3;
                            foreach ($articles as $a) {
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-6 wow bounceInUp h-100" data-wow-duration="<?= $duration ?>s" data-wow-delay="<?= $delay ?>s">
                                    <div class="blog-post blog-grid blog-rounded blog-effect1">
                                        <div class="dlab-post-media-thumbnail dlab-img-effect rotate"> <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/articles/' . $a->photo) ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="dlab-info p-a20 border-1">
                                            <div class="dlab-post-title">
                                                <h4 class="post-title">
                                                    <a href="<?= base_url('article/detail/' . $a->slug) ?>" title="<?= $a->judul ?>"><?= substr($a->judul, 0, 30) ?> ...</a>
                                                </h4>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p><?= substr($a->headline, 0, 100) ?> ...</p>
                                            </div>
                                            <div class="dlab-post-readmore">
                                                <a href="<?= base_url('article/detail/' . $a->slug) ?>" title="<?= $lang['detail_text'] ?>" rel="bookmark" class="site-button btnhover20"><?= $lang['detail_text'] ?>...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php
                                $duration += 0.5;
                                $delay += 0.3;
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-2">

                                <a href="<?= base_url('article') ?>" class="site-button btnhover20"><?= $lang['detail_text'] ?>...</a>
                            </div>
                            <div class="col-lg-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- contact area END -->
</div>