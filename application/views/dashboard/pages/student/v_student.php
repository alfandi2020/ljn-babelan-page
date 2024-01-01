<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>Program</h4>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url() ?>">
                            <svg class="stroke-icon">
                                <use href="<?= base_url() ?>assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Program</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-no-border">
                    <div class="card-header-right">
                        <button class="btn btn-primary mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#modal_download">Download excel</button>
                    </div>
                </div>

                <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message_name') ?>"></div> -->
                <div class="card-body">

                    <?= $this->session->flashdata('message_name') ?>
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>Num.</th>
                                    <th>CV</th>
                                    <th>No. Urut</th>
                                    <th>Nama</th>
                                    <th>J. Kelamin</th>
                                    <th>Tgl. Daftar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($students as $s) {
                                    $file = $s->file_cv;
                                ?>
                                    <tr>
                                        <td><?= $no++ ?>.</td>
                                        <td>
                                            <a href="<?= base_url('assets/pdf/siswa/') . $s->file_cv ?>" class="btn btn-primary btn-xs" target="_blank">
                                                <i class=" fa fa-download"></i> CV
                                            </a>
                                        </td>
                                        <td><?= $s->nomor_urut ?></td>
                                        <td><?= $s->nama ?></td>
                                        <td><?= $s->jenis_kelamin ?></td>
                                        <td><?= $s->created_at ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_download" tabindex="-1" role="dialog" aria-labelledby="modal_download" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content dark-sign-up">
            <div class="modal-body social-profile text-start">
                <div class="modal-toggle-wrapper">
                    <h3>Download excel</h3>
                    <p>Pilih rentang waktu pendaftaran siswa</p>
                    <form class="row g-3" method="POST" action="<?= base_url('dash/student/download') ?>">
                        <div class="col-md-6">
                            <label class="form-label" for="inputTanggalAwal">Dari:</label>
                            <input class="form-control" name="inputTanggalAwal" type="date" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="inputTanggalAkhir">Sampai:</label>
                            <input class="form-control" name="inputTanggalAkhir" type="date" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Download </button>
                            <button class="btn btn-light" type="submit" data-dismiss="modal">Batal </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>