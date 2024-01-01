<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>Partner</h4>
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
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('dash/partner') ?>">Partner</a>
                    </li>
                    <li class="breadcrumb-item">Create</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <?php
        if ($this->uri->segment(4) == true) {
        ?>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Edit partner</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/partner/store/' . $partner['slug']) ?>">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name') ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama_partner">Nama partner</label>
                                        <input class="form-control input-air-primary" id="nama_partner" name="nama_partner" type="text" placeholder="Enter name of partner" value="<?= $partner['nama_partner'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Update</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col-sm-4">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Program photo</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/program/update_photo' . $program['slug']) ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name') ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="program_photo">Photo</label>
                                        <input type="file" class="form-control input-air-primary" id="program_photo" name="program_photo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="">
                                        <img class="img-fluid" src="<?= base_url('assets/images/programs/' . $program['photo']) ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Update</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div> -->
        <?php
        } else {
        ?>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Create new partner</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/partner/store') ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name')  ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama_partner">Nama partner</label>
                                        <input class="form-control input-air-primary" id="nama_partner" name="nama_partner" type="text" placeholder="Enter name of program">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col">
                                    <div class="">
                                        <label class="form-label" for="program_photo">Photo</label>
                                        <input type="file" class="form-control input-air-primary" id="program_photo" name="program_photo">
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_content">Content</label>
                                        <input type="hidden" id="hiddenInput" name="content">
                                        <div id="article_content" style="min-height: 160px;"></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Submit</button>
                            <input class="btn btn-light" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>