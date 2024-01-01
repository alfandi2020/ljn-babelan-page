<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <!-- <h1 class="text-white mt-5"><?= $lang['program_text'] ?></h1> -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html"><?= $lang['home_text'] ?></a></li>
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
        <div class="container max-w900">
            <!-- blog start -->
            <div class="blog-post blog-single mt-5">
                <div class="dlab-post-title">
                    <h4 class="post-title m-t0"><?= $program['nama_program'] ?></h4>
                </div>
                <div class="dlab-post-media dlab-img-effect">
                    <img src="<?= base_url() ?>assets/images/programs/<?= $program['photo'] ?>" alt="">
                </div>
                <div class="dlab-post-text">
                    <?= $program['keterangan'] ?>
                </div>
                <div class="dlab-post-text">

                    <?= $program['content'] ?>
                </div>
                <div class="dlab-post-tags clear">
                    <!-- <div class="post-tags"> <a href="javascript:void(0);">Child </a> <a href="javascript:void(0);">Eduction </a> <a href="javascript:void(0);">Money </a> <a href="javascript:void(0);">Resturent </a> </div> -->
                </div>
            </div>
            <!-- blog END -->
        </div>
    </div>
</div>