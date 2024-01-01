<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>Settings </h4>
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
                    <li class="breadcrumb-item">Settings</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xxl-6">
            <div class="card height-equal">
                <div class="card-header">
                    <h4>Settings</h4>
                </div>
                <div class="card-body">

                    <?= $this->session->flashdata('message_name') ?>
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div class="nav flex-column nav-pills nav-primary" id="ver-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="visi-tab" data-bs-toggle="pill" href="#visi" role="tab" aria-controls="visi" aria-selected="true">Visi misi</a>
                                <a class="nav-link" id="videotron-tab" data-bs-toggle="pill" href="#videotron" role="tab" aria-controls="videotron" aria-selected="false">Videotron</a>
                                <a class="nav-link" id="kategori-konten-tab" data-bs-toggle="pill" href="#kategori-konten" role="tab" aria-controls="kategori-konten" aria-selected="false">Kategori konten</a>
                                <a class="nav-link" id="kontak-tab" data-bs-toggle="pill" href="#kontak" role="tab" aria-controls="kontak" aria-selected="false">Kontak</a>
                                <a class="nav-link" id="chat-tab" data-bs-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false">Chat</a>
                                <a class="nav-link" id="legalitas-tab" data-bs-toggle="pill" href="#legalitas" role="tab" aria-controls="legalitas" aria-selected="false">Legalitas</a>
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <div class="tab-content" id="ver-pills-tabContent">
                                <div class="tab-pane fade show active" id="visi" role="tabpanel" aria-labelledby="visi-tab">
                                    <form action="<?= base_url('dash/settings/update_visimisi') ?>" method="post" class="form theme-form dark-input">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="visi" class="form-label">Visi</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                                        <textarea name="visi_id" id="" cols="30" rows="3" class="form-control"><?= $visi['content_id'] ?></textarea>
                                                    </div>
                                                    <div class="input-group mt-3">
                                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                                        <textarea name="visi_en" id="" cols="30" rows="3" class="form-control"><?= $visi['content_en'] ?></textarea>
                                                    </div>
                                                    <div class="input-group mt-3">
                                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                                        <textarea name="visi_jp" id="" cols="30" rows="3" class="form-control"><?= $visi['content_jp'] ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="">
                                                    <label for="misi" class="form-label">Misi</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                                        <textarea name="misi_id" id="" cols="30" rows="4" class="form-control"><?= $misi['content_id'] ?></textarea>
                                                    </div>
                                                    <div class="input-group mt-3">
                                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                                        <textarea name="misi_en" id="" cols="30" rows="4" class="form-control"><?= $misi['content_en'] ?></textarea>
                                                    </div>
                                                    <div class="input-group mt-3">
                                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                                        <textarea name="misi_jp" id="" cols="30" rows="4" class="form-control"><?= $misi['content_jp'] ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" text-end mt-5">
                                            <button class="btn btn-primary me-3" type="submit">Update</button>
                                            <input class="btn btn-light" type="reset" value="Cancel">
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="videotron" role="tabpanel" aria-labelledby="videotron-tab">
                                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/settings/update_videotron/' . $videotron['Id']) ?>" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="input_videotron">Videotron</label>
                                                    <input type="file" class="form-control input-air-primary" id="input_videotron" name="input_videotron">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="">
                                                    <video width="100%" height="100%" loop="true" autoplay="autoplay" muted>
                                                        <source src="<?= base_url() ?>assets/asset_fr/video/<?= $videotron['content'] ?>" type="video/mp4" />
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end mt-5">
                                            <button class="btn btn-primary me-3" type="submit">Update</button>
                                            <input class="btn btn-light" type="reset" value="Cancel">
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="kategori-konten" role="tabpanel" aria-labelledby="kategori-konten-tab">
                                    <form action="<?= base_url('dash/settings/add_category') ?>" method="post" class="form theme-form dark-input">
                                        <div class="row">
                                            <div class="col">
                                                <!-- <div class=""> -->
                                                <label for="category" class="form-label">Category</label>
                                                <div class="input-group">
                                                    <input class="form-control input-air-primary" type="text" placeholder="Article category" aria-label="Article category" aria-describedby="button-addon2" name="category_name">
                                                    <button class="btn btn-primary" id="button-addon2" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col">
                                                <table class="table table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Nama</th>
                                                            <th>Act.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($categories as $c) {
                                                        ?>
                                                            <tr>
                                                                <td><?= $no++; ?>.</td>
                                                                <td><?= $c->category_name ?></td>
                                                                <td>
                                                                    <button class="btn btn-primary btn-sm">
                                                                        Edit
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="kontak" role="tabpanel" aria-labelledby="kontak-tab">
                                    <form action="<?= base_url('dash/settings/update_contact') ?>" method="post" class="form theme-form dark-input">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <textarea name="alamat" id="" cols="30" rows="5" class="form-control"><?= $alamat['content_id'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="telepon" class="form-label">Telepon</label>
                                                    <input type="hidden" id="hiddenInput" name="telepon" value='<?= $telepon['content_id'] ?>' class="form-control input-air-primary">
                                                    <div id="input_telepon" style="min-height: 160px;"><?= $telepon['content_id'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="hidden" id="hiddenInput" name="email" value='<?= $email['content_id'] ?>' class="form-control input-air-primary">
                                                    <div id="input_email" style="min-height: 160px;"><?= $email['content_id'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                        <div class="text-end mt-5">
                                            <button class="btn btn-primary me-3" type="submit">Update</button>
                                            <input class="btn btn-light" type="reset" value="Cancel">
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#tambah_sosmed">Tambah</button>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Icon</th>
                                                        <th>Nama</th>
                                                        <th>Url</th>
                                                        <th>Act.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($contact as $c) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++; ?>.</td>
                                                            <td><?= $c->name ?></td>
                                                            <td><?= $c->contact_name ?></td>
                                                            <td><?= $c->url . $c->contact_id ?></td>
                                                            <td>
                                                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#edit_sosmed<?= $c->contact_id ?>">Edit</button>

                                                                <div class="modal fade" id="edit_sosmed<?= $c->contact_id ?>" tabindex="-1" role="dialog" aria-labelledby="edit_sosmed" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="edit_sosmedLongTitle"><?= $c->contact_name ?></h5>
                                                                                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <form action="<?= base_url('dash/settings/add_contact/' . $c->slug) ?>" method="post" class="form theme-form dark-input">
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <label for="category" class="form-label">Nama kontak</label>
                                                                                            <div class="input-group">
                                                                                                <input class="form-control input-air-primary" type="text" placeholder="Misal: Admin 1" aria-label="Nama kontak" aria-describedby="button-addon2" name="contact_name" value="<?= $c->contact_name ?>" required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-3">
                                                                                        <div class="col">
                                                                                            <label for="category" class="form-label">Sosial media</label>
                                                                                            <div class="input-group">
                                                                                                <select name="sosmed_category" id="sosmed_category" class="form-control input-air-primary digits" required>
                                                                                                    <option value="">--Pilih sosmed</option>
                                                                                                    <?php
                                                                                                    foreach ($social as $s) {
                                                                                                    ?>
                                                                                                        <option <?= ($s->name == $c->name) ? "selected" : "" ?> value="<?= $s->Id ?>"><?= $s->name ?></option>
                                                                                                    <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-3">
                                                                                        <div class="col">
                                                                                            <label for="contact_id" class="form-label">Kontak ID</label>
                                                                                            <input type="text" class="form-control input-air-primary" name="contact_id" placeholder="Nomor whatsapp atau username line" value="<?= $c->contact_id ?>" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="legalitas" role="tabpanel" aria-labelledby="legalitas-tab">

                                    <form action="<?= base_url('dash/settings/update_legalitas') ?>" method="post" class="form theme-form dark-input">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="visi" class="form-label">Legalitas</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                                        <input type="hidden" id="legalitas_id" name="legalitas_id" value='<?= $legalitas['content_id'] ?>' class="form-control">
                                                    </div>
                                                    <div id="input_legalitas_id" style="min-height: 160px;"><?= $legalitas['content_id'] ?></div>

                                                    <div class="input-group mt-3">
                                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                                        <input type="hidden" id="legalitas_en" name="legalitas_en" value='<?= $legalitas['content_en'] ?>' class="form-control">
                                                    </div>
                                                    <div id="input_legalitas_en" style="min-height: 160px;"><?= $legalitas['content_en'] ?></div>

                                                    <div class="input-group mt-3">
                                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                                        <input type="hidden" id="legalitas_jp" name="legalitas_jp" value='<?= $legalitas['content_jp'] ?>' class="form-control">
                                                    </div>
                                                    <div id="input_legalitas_jp" style="min-height: 160px;"><?= $legalitas['content_jp'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" text-end mt-5">
                                            <button class="btn btn-primary me-3" type="submit">Update</button>
                                            <input class="btn btn-light" type="reset" value="Cancel">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambah_sosmed" tabindex="-1" role="dialog" aria-labelledby="tambah_sosmed" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambah_sosmedLongTitle">Tambah Contact</h5>
                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('dash/settings/add_contact') ?>" method="post" class="form theme-form dark-input">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <!-- <div class=""> -->
                            <label for="category" class="form-label">Nama kontak</label>
                            <div class="input-group">
                                <input class="form-control input-air-primary" type="text" placeholder="Misal: Admin 1" aria-label="Nama kontak" aria-describedby="button-addon2" name="contact_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <!-- <div class=""> -->
                            <label for="category" class="form-label">Sosial media</label>
                            <div class="input-group">
                                <select name="sosmed_category" id="sosmed_category" class="form-control input-air-primary digits" required>
                                    <option value="">--Pilih sosmed</option>
                                    <?php
                                    foreach ($social as $s) {
                                    ?>
                                        <option value="<?= $s->Id ?>"><?= $s->name ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="contact_id" class="form-label">Kontak ID</label>
                            <input type="text" class="form-control input-air-primary" name="contact_id" placeholder="Nomor whatsapp atau username line" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill_telepon = new Quill('#input_telepon', {
        theme: 'snow',
    });
    quill_telepon.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='telepon']").value = quill_telepon.root.innerHTML;
    });

    document.getElementById('telepon').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('hiddenInput').value = content;
    });
</script>
<script>
    var quill_email = new Quill('#input_email', {
        theme: 'snow',
    });
    quill_email.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='email']").value = quill_email.root.innerHTML;
    });

    document.getElementById('email').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('hiddenInput').value = content;
    });
</script>
<script>
    var quill_legalitas_id = new Quill('#input_legalitas_id', {
        theme: 'snow',
    });
    quill_legalitas_id.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='legalitas_id']").value = quill_legalitas_id.root.innerHTML;
    });

    document.getElementById('legalitas_id').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('legalitas_id').value = content;
    });

    var quill_legalitas_en = new Quill('#input_legalitas_en', {
        theme: 'snow',
    });
    quill_legalitas_en.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='legalitas_en']").value = quill_legalitas_en.root.innerHTML;
    });

    document.getElementById('legalitas_en').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('legalitas_en').value = content;
    });

    var quill_legalitas_jp = new Quill('#input_legalitas_jp', {
        theme: 'snow',
    });
    quill_legalitas_jp.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='legalitas_jp']").value = quill_legalitas_jp.root.innerHTML;
    });

    document.getElementById('legalitas_jp').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('legalitas_jp').value = content;
    });
</script>