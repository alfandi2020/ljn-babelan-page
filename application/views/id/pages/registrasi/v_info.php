<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <!-- <h1 class="text-white"><?= $lang['reg_info'] ?></h1> -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html"><?= $lang['home_text'] ?></a></li>
                        <li><?= $lang['reg_info'] ?></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-area">
        <div class="container">
            <!-- Blog half image -->
            <?php
            if (!$informations) {
            ?>
                <h3>Content not yet available</h3>
                <?php
            } else {
                foreach ($informations as $a) {
                    $id_author = $a->author;

                    $author = $this->M_Article->author($id_author); ?>
                    <div class="blog-post blog-md clearfix">
                        <div class="dlab-post-media dlab-img-effect zoom-slow">
                            <a href="<?= base_url('article/detail/' . $a->slug) ?>">
                                <img src="<?= base_url('assets/images/articles/' . $a->photo) ?>" style="height: 200px;" alt="">
                            </a>
                        </div>
                        <div class="dlab-post-info">
                            <div class="dlab-post-meta">
                                <ul>
                                    <li class="post-date"> <strong><?= $lang['format_tanggal']($a->publish_date) ?> </strong></li>
                                    <li class="post-author"> <?= $lang['by_text'] ?> <a href="javascript:void(0);"><?= $author['name'] ?></a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title">
                                <h4 class="post-title"><a href="<?= base_url('article/detail/' . $a->slug) ?>"><?= $a->judul ?></a></h4>
                            </div>
                            <div class="dlab-post-text">
                                <p><?= $a->headline ?></p>
                            </div>
                            <div class="dlab-post-readmore">
                                <a href="<?= base_url('article/detail/' . $a->slug) ?>" title="<?= $lang['detail_text'] ?>" rel="bookmark" class="site-button"><?= $lang['detail_text'] ?>
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <!-- Blog half image END -->
            <!-- Pagination  -->
            <?= $this->pagination->create_links(); ?>
            <!-- Pagination END -->
        </div>
    </div>
</div>