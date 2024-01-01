<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('dash/program') ?>">Program</a>
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
                        <h5>Edit program</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/program/store/' . $program['slug']) ?>">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name') ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama_program">Nama program </label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input class="form-control " id="nama_program_id" name="nama_program_id" type="text" placeholder="Enter name of program" value="<?= $program['nama_program_id'] ?>">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input class="form-control " id="nama_program_en" name="nama_program_en" type="text" placeholder="Enter name of program" value="<?= $program['nama_program_en'] ?>">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input class="form-control " id="nama_program_jp" name="nama_program_jp" type="text" placeholder="Enter name of program" value="<?= $program['nama_program_jp'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="keterangan_program">Headline</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <textarea class="form-control input-air-primary" id="keterangan_program_id" name="keterangan_program_id" rows="3" placeholder="Enter description of program"><?= $program['keterangan_id'] ?></textarea>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <textarea class="form-control input-air-primary" id="keterangan_program_en" name="keterangan_program_en" rows="3" placeholder="Enter description of program"><?= $program['keterangan_en'] ?></textarea>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <textarea class="form-control input-air-primary" id="keterangan_program_jp" name="keterangan_program_jp" rows="3" placeholder="Enter description of program"><?= $program['keterangan_jp'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="program_content">Content</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input type="hidden" class="form-control input-air-primary" id="hiddenInput_id" name="content_id" value='<?= $program['content_id'] ?>'>
                                        </div>
                                        <div id="program_content_id" style="min-height: 160px;"><?= $program['content_id'] ?></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input type="hidden" class="form-control input-air-primary" id="hiddenInput_en" name="content_en" value='<?= $program['content_en'] ?>'>
                                        </div>
                                        <div id="program_content_en" style="min-height: 160px;"><?= $program['content_en'] ?></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input type="hidden" class="form-control input-air-primary" id="hiddenInput_jp" name="content_jp" value='<?= $program['content_jp'] ?>'>
                                        </div>
                                        <div id="program_content_jp" style="min-height: 160px;"><?= $program['content_jp'] ?></div>
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
            <div class="col-sm-4">
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
            </div>
        <?php
        } else {
        ?>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Create new program</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/program/store') ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name')  ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama_program">Nama program</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input class="form-control " id="nama_program_id" name="nama_program_id" type="text" placeholder="Enter name of program">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input class="form-control " id="nama_program_en" name="nama_program_en" type="text" placeholder="Enter name of program">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input class="form-control " id="nama_program_jp" name="nama_program_jp" type="text" placeholder="Enter name of program">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="keterangan_program">Headline</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <textarea class="form-control input-air-primary" id="keterangan_program_id" name="keterangan_program_id" rows="3" placeholder="Enter description of program"></textarea>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <textarea class="form-control input-air-primary" id="keterangan_program_en" name="keterangan_program_en" rows="3" placeholder="Enter description of program"></textarea>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <textarea class="form-control input-air-primary" id="keterangan_program_jp" name="keterangan_program_jp" rows="3" placeholder="Enter description of program"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <div class="mb-3">
                                        <label class="form-label" for="program_content">Content</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input type="text" class="form-control input-air-primary" id="hiddenInput_id" name="content_id">
                                        </div>
                                        <div id="program_content_id" style="min-height: 160px;"></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input type="text" class="form-control input-air-primary" id="hiddenInput_en" name="content_en">
                                        </div>
                                        <div id="program_content_en" style="min-height: 160px;"></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input type="text" class="form-control input-air-primary" id="hiddenInput_jp" name="content_jp">
                                        </div>
                                        <div id="program_content_jp" style="min-height: 160px;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_content">Content</label>
                                        <input type="text" class="form-control input-air-primary" id="hiddenInput" name="content">
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
</div>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    // editor quill indonesian
    var quill_id = new Quill('#program_content_id', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{
                    header: [1, 2, 3, 4, 5, 6, false]
                }],
                [{
                    font: []
                }],
                ["bold", "italic"],
                ["link", "blockquote", "code-block", "image"],
                [{
                    list: "ordered"
                }, {
                    list: "bullet"
                }],
                [{
                    script: "sub"
                }, {
                    script: "super"
                }],
                [{
                    color: []
                }, {
                    background: []
                }],
            ]
        },
    });
    quill_id.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='content_id']").value = quill_id.root.innerHTML;
    });
    // editor quill english
    var quill_en = new Quill('#program_content_en', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{
                    header: [1, 2, 3, 4, 5, 6, false]
                }],
                [{
                    font: []
                }],
                ["bold", "italic"],
                ["link", "blockquote", "code-block", "image"],
                [{
                    list: "ordered"
                }, {
                    list: "bullet"
                }],
                [{
                    script: "sub"
                }, {
                    script: "super"
                }],
                [{
                    color: []
                }, {
                    background: []
                }],
            ]
        },
    });
    quill_en.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='content_en']").value = quill_en.root.innerHTML;
    });
    // editor quill japanese
    var quill_jp = new Quill('#program_content_jp', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{
                    header: [1, 2, 3, 4, 5, 6, false]
                }],
                [{
                    font: []
                }],
                ["bold", "italic"],
                ["link", "blockquote", "code-block", "image"],
                [{
                    list: "ordered"
                }, {
                    list: "bullet"
                }],
                [{
                    script: "sub"
                }, {
                    script: "super"
                }],
                [{
                    color: []
                }, {
                    background: []
                }],
            ]
        },
    });
    quill_jp.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='content_jp']").value = quill_jp.root.innerHTML;
    });
</script>

<script>
    // input indonesian
    document.getElementById('program_content_id').addEventListener('input', function() {
        var content_id = this.innerHTML;
        document.getElementById('hiddenInput_id').value = content_id;
    });

    // input english
    document.getElementById('program_content_en').addEventListener('input', function() {
        var content_en = this.innerHTML;
        document.getElementById('hiddenInput_en').value = content_en;
    });

    // input japanese
    document.getElementById('program_content_jp').addEventListener('input', function() {
        var content_jp = this.innerHTML;
        document.getElementById('hiddenInput_jp').value = content_jp;
    });
</script>