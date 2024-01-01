<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>FAQ</h4>
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
                        <a href="<?= base_url('dash/faq') ?>">FAQ</a>
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
                        <h5>Edit FAQ</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/faq/store/' . $faq['slug']) ?>">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name') ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="pertanyaan">Pertanyaan</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input class="form-control " id="pertanyaan_id" name="pertanyaan_id" type="text" placeholder="Masukkan pertanyaan" value="<?= $faq['question_id'] ?>">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input class="form-control " id="pertanyaan_en" name="pertanyaan_en" type="text" placeholder="Masukkan pertanyaan" value="<?= $faq['question_en'] ?>">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input class="form-control " id="pertanyaan_jp" name="pertanyaan_jp" type="text" placeholder="Masukkan pertanyaan" value="<?= $faq['question_jp'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">

                                        <label class="form-label" for="jawaban">Jawaban</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input type="hidden" id="jawaban_id" name="jawaban_id" class="form-control" value='<?= $faq['answer_id'] ?>'>
                                        </div>
                                        <div id="input_jawaban_id" style="min-height: 160px;"><?= $faq['answer_id'] ?></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input type="hidden" id="jawaban_en" name="jawaban_en" class="form-control" value='<?= $faq['answer_en'] ?>'>
                                        </div>
                                        <div id="input_jawaban_en" style="min-height: 160px;"><?= $faq['answer_en'] ?></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input type="hidden" id="jawaban_jp" name="jawaban_jp" class="form-control" value='<?= $faq['answer_jp'] ?>'>
                                        </div>
                                        <div id="input_jawaban_jp" style="min-height: 160px;"><?= $faq['answer_jp'] ?></div>
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
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Add new FAQ</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/faq/store') ?>">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name')  ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="pertanyaan">Pertanyaan</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input class="form-control " id="pertanyaan_id" name="pertanyaan_id" type="text" placeholder="Masukkan pertanyaan">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input class="form-control " id="pertanyaan_en" name="pertanyaan_en" type="text" placeholder="Masukkan pertanyaan">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input class="form-control " id="pertanyaan_jp" name="pertanyaan_jp" type="text" placeholder="Masukkan pertanyaan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">

                                        <label class="form-label" for="jawaban">Jawaban</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input type="hidden" id="jawaban_id" name="jawaban_id" class="form-control">
                                        </div>
                                        <div id="input_jawaban_id" style="min-height: 160px;"></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input type="hidden" id="jawaban_en" name="jawaban_en" class="form-control">
                                        </div>
                                        <div id="input_jawaban_en" style="min-height: 160px;"></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input type="hidden" id="jawaban_jp" name="jawaban_jp" class="form-control">
                                        </div>
                                        <div id="input_jawaban_jp" style="min-height: 160px;"></div>
                                    </div>
                                </div>
                            </div>
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
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill_jawaban_id = new Quill('#input_jawaban_id', {
        theme: 'snow',
    });
    quill_jawaban_id.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='jawaban_id']").value = quill_jawaban_id.root.innerHTML;
    });

    document.getElementById('jawaban_id').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('jawaban_id').value = content;
    });

    var quill_jawaban_en = new Quill('#input_jawaban_en', {
        theme: 'snow',
    });
    quill_jawaban_en.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='jawaban_en']").value = quill_jawaban_en.root.innerHTML;
    });

    document.getElementById('jawaban_en').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('jawaban_en').value = content;
    });

    var quill_jawaban_jp = new Quill('#input_jawaban_jp', {
        theme: 'snow',
    });
    quill_jawaban_jp.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='jawaban_jp']").value = quill_jawaban_jp.root.innerHTML;
    });

    document.getElementById('jawaban_jp').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('jawaban_jp').value = content;
    });
</script>