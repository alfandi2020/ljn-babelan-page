<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html"><?= $lang['home_text'] ?></a></li>
                        <li><?= $lang['facility'] ?></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->

    <div class="content-block">
        <!-- Our Services -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($facilities as $f) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">

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
</div>