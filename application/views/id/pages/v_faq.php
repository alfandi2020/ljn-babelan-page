<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html"><?= $lang['home_text'] ?></a></li>
                        <li><?= $lang['faq'] ?></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Your Faq -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-head text-black text-left">
                    <h3><?= $lang['faq'] ?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="dlab-accordion faq-2 box-sort-in" id="accordion1">
                            <?php
                            $no = 1;
                            foreach ($faq as $f) {
                            ?>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title">
                                            <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq<?= $no ?>" class="collapsed" aria-expanded="true">
                                                <?= $f->question ?></a>
                                        </h6>
                                    </div>
                                    <div id="faq<?= $no ?>" class="acod-body collapse" data-bs-parent="#accordion1">
                                        <div class="acod-content"><?= $f->answer ?></div>
                                    </div>
                                </div>
                            <?php
                                $no++;
                            }
                            ?>
                            <!-- <div class="panel">
                                <div class="acod-head">
                                    <h6 class="acod-title">
                                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed" aria-expanded="true">
                                        Bagaimana cara pendaftaran magang ke Jepang ?</a>
                                    </h6>
                                </div>
                                <div id="faq2" class="acod-body collapse" data-bs-parent="#accordion1">
                                    <div class="acod-content"><a href="https://lpktjokrobaktipertiwi.id/registrasi"> Disini</a> Langsung Pendaftaran online ya kak, jangan lupa setelah mengisi form masuk ke GRUB WA ya kak, Link sudah ada di Formulir tinggal klik saja .</div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="acod-head">
                                    <h6 class="acod-title">
                                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed" aria-expanded="true">
                                        Ada Riwayat sakit asma apakah bisa kak ? </a>
                                    </h6>
                                </div>
                                <div id="faq3" class="acod-body collapse" data-bs-parent="#accordion1">
                                    <div class="acod-content">Maaf kak tidak bisa, bila sudah sembuh total baru bisa ya kak.</div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="acod-head">
                                    <h6 class="acod-title">
                                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed" aria-expanded="true">
                                        Document yang dibawa apa saja ya kak Ketika pendaftaran  ? </a>
                                    </h6>
                                </div>
                                <div id="faq4" class="acod-body collapse" data-bs-parent="#accordion1">
                                    <div class="acod-content">Perlengkapan yg harus dibawa: 1. Formulir Pendaftaran 2. Alat tulis 3. Masker 4. Photo background merah kemeja putih berdasi 4x6 dan 3x4 (@2lmbr) yg Uk 4 X 6 ditempel di formulir pendaftaran 7. Fc ktp,akte,kk,ijazah sd-terakhir @1 lmbr 8. Biaya 200rb</div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="acod-head">
                                    <h6 class="acod-title">
                                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed" aria-expanded="true">
                                            Bidang kerjanya apa saja ya kak ?</a>
                                    </h6>
                                </div>
                                <div id="faq5" class="acod-body collapse" data-bs-parent="#accordion1">
                                    <div class="acod-content">DAFTAR BIDANG KERJA LPK CMI Job Cowok operator mesin, pengelasan, pengepresan, pengecatan, pemipaan, buat cakar ayam, scaffolding, cor beton, cor logam dll Job Cewek garment, pengolahan makanan, pabrik kain, pabrik roti, care giver, dll.</div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- Faq Info END -->
            </div>
        </div>
        <!-- Your Faq End -->
    </div>
</div>