<div class="page-content bg-white">
    <!-- inner page banner -->
    <?php
    if ($article) {
        $photo_url = base_url() . "assets/images/articles/" .  $article['photo'];
        $id_author = $article["author"];
    } else {
        $photo_url = "";
        $id_author = "";
    }
    ?>
    <div class="dlab-bnr-inr overlay-black-middle bg-pt">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <!-- <h1 class="text-white"><?= $lang['article_text'] ?></h1> -->
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html"><?= $lang['home_text'] ?></a></li>
                        <li><?= $lang['article_text'] ?></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <?php

    $author = $this->M_Article->author($id_author);

    if ($article) {
    ?>
        <div class="content-block">
            <div class="container max-w900">
                <!-- blog start -->
                <div class="blog-post blog-single mt-5">
                    <div class="dlab-post-meta m-b20">
                        <ul>
                            <li class="post-date"> <strong><?= $lang['format_tanggal']($article['publish_date']) ?></strong></span> </li>
                            <li class="post-author"> <?= $lang['by_text'] ?> <a href="javascript:void(0);"><?= $author['name'] ?></a> </li>
                        </ul>
                    </div>
                    <div class="dlab-post-title">
                        <h4 class="post-title m-t0"><a href="blog-single.html"><?= $article['judul'] ?></a></h4>
                    </div>
                    <div class="dlab-post-media dlab-img-effect zoom-slow" style="height: auto">
                        <a href="blog-single.html">
                            <img src="<?= base_url() ?>assets/images/articles/<?= $article['photo'] ?>" alt="">
                        </a>
                    </div>
                    <div class="dlab-post-text">
                        <?= $article['headline'] ?>
                        <?= $article['content'] ?>
                    </div>
                    <div class="dlab-post-tags clear">
                        <div class="post-tags"> <a href="javascript:void(0);">Child </a> <a href="javascript:void(0);">Eduction </a> <a href="javascript:void(0);">Money </a> <a href="javascript:void(0);">Resturent </a> </div>
                    </div>
                </div>
                <!-- blog END -->
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="content-block">
            <div class="container max-w900">
                <!-- blog start -->
                <div class="blog-post blog-single mt-5">
                    <div class="dlab-post-text">
                        <h1><?= $lang['not_found_text'] ?></h1>
                    </div>
                </div>
                <!-- blog END -->
            </div>
        </div>
    <?php
    }
    ?>
</div>