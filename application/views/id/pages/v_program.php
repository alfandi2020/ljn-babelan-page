<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <!-- <h1 class="text-white"><?= $lang['program_text'] ?></h1> -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li>
                            <a href="<?= base_url() ?>"><?= $lang['home_text'] ?></a>
                        </li>
                        <li><?= $lang['program_text'] ?></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title"><?= $lang['program_text'] ?></h2>
                    <p><?= $lang['program_p_text'] ?></p>
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
                                        <h5 class="dlab-tilte">
                                            <?= $p->nama_program ?>
                                        </h5>
                                    </a>
                                    <p title="<?= $p->keterangan ?>"><?= substr($p->keterangan, 0, 100) ?>...</p>
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