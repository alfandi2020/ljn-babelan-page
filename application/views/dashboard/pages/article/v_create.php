<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>Article </h4>
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
                        <a href="<?= base_url('dash/article') ?>">Article</a>
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
                        <h5>Edit article</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/article/store/' . $article['slug']) ?>">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name') ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_title">Title</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input class="form-control " id="article_title_id" name="article_title_id" type="text" placeholder="Enter name of article" value="<?= $article['judul_id'] ?>">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input class="form-control " id="article_title_en" name="article_title_en" type="text" placeholder="Enter name of article" value="<?= $article['judul_en'] ?>">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input class="form-control " id="article_title_jp" name="article_title_jp" type="text" placeholder="Enter name of article" value="<?= $article['judul_jp'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_headline">Headline</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <textarea class="form-control input-air-primary" id="article_headline_id" name="article_headline_id" rows="2" placeholder="Enter headline of article"><?= $article['headline_id'] ?></textarea>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <textarea class="form-control input-air-primary" id="article_headline_en" name="article_headline_en" rows="2" placeholder="Enter headline of article"><?= $article['headline_en'] ?></textarea>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <textarea class="form-control input-air-primary" id="article_headline_jp" name="article_headline_jp" rows="2" placeholder="Enter headline of article"><?= $article['headline_jp'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="article_category" class="form-label">Category</label>
                                        <select class="form-select input-air-primary digits" id="article_category" name="article_category" required>
                                            <option value="">--Pilih kategori</option>
                                            <?php
                                            foreach ($categories as $c) {
                                            ?>
                                                <option <?php if ($article['id_category'] == $c->Id) echo "selected"; ?> value="<?= $c->Id ?>"><?= $c->category_name ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="article_publish_date" class="form-label">Publish date</label>
                                        <input type="date" name="article_publish_date" id="article_publish_date" class="form-control input-air-primary" value="<?= $article['publish_date'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_content">Content</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input type="hidden" id="hiddenInput_id" name="content_id" value='<?= $article['content_id'] ?>' class="form-control">
                                        </div>
                                        <div id="article_content_id" style="min-height: 160px;"><?= $article['content_id'] ?></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input type="hidden" id="hiddenInput_en" name="content_en" value='<?= $article['content_en'] ?>' class="form-control">
                                        </div>
                                        <div id="article_content_en" style="min-height: 160px;"><?= $article['content_en'] ?></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input type="hidden" id="hiddenInput_jp" name="content_jp" value='<?= $article['content_jp'] ?>' class="form-control">
                                        </div>
                                        <div id="article_content_jp" style="min-height: 160px;"><?= $article['content_jp'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Update</button>
                            <a href="<?= base_url('dash/article') ?>" class="btn btn-light">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Article photo</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/article/update_photo/' . $article['slug']) ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_photo') ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_photo">Photo</label>
                                        <input type="file" class="form-control input-air-primary" id="article_photo" name="article_photo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <img class="img-fluid top-radius-blog" src="<?= base_url('assets/images/articles/' . $article['photo']) ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Update</button>
                            <a href="<?= base_url('dash/article') ?>" class="btn btn-light">Kembali</a>
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
                        <h5>Create new article</h5>
                    </div>
                    <form class="form theme-form dark-inputs" method="POST" action="<?= base_url('dash/article/store') ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <?= $this->session->flashdata('message_name') ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="article_category" class="form-label">Category</label>
                                        <select class="form-select input-air-primary digits" id="article_category" name="article_category">
                                            <option value="">--Pilih kategori</option>
                                            <?php
                                            foreach ($categories as $c) {
                                            ?>
                                                <option <?php if ($this->session->flashdata('article_category') == $c->Id) echo "selected"; ?> value="<?= $c->Id ?>"><?= $c->category_name ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="article_publish_date" class="form-label">Publish date</label>
                                        <input type="date" name="article_publish_date" id="article_publish_date" class="form-control input-air-primary" value="<?= $this->session->flashdata('article_publish_date'); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_photo">Photo</label>
                                        <input type="file" class="form-control input-air-primary" id="article_photo" name="article_photo" value="<?= $this->session->flashdata('article_photo'); ?>" onchange="previewImage(this);" required>
                                        <img id="preview" src="" alt="Image Preview" class="img-fluid mt-3">
                                        <?php echo form_error('article_photo'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_title">Title</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input class="form-control " id="article_title_id" name="article_title_id" type="text" placeholder="Enter name of article" value="<?= $this->session->flashdata('article_title_id'); ?>" required>
                                        </div>
                                        <div class=" input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input class="form-control " id="article_title_en" name="article_title_en" type="text" placeholder="Enter name of article" value="<?= $this->session->flashdata('article_title_en'); ?>">
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input class="form-control " id="article_title_jp" name="article_title_jp" type="text" placeholder="Enter name of article" value="<?= $this->session->flashdata('article_title_jp'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_headline">Headline</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <textarea class="form-control input-air-primary" id="article_headline_id" name="article_headline_id" rows="3" placeholder="Enter headline of article"><?= $this->session->flashdata('article_headline_id'); ?></textarea>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <textarea class="form-control input-air-primary" id="article_headline_en" name="article_headline_en" rows="3" placeholder="Enter headline of article"><?= $this->session->flashdata('article_headline_en'); ?></textarea>
                                        </div>
                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <textarea class="form-control input-air-primary" id="article_headline_jp" name="article_headline_jp" rows="3" placeholder="Enter headline of article"><?= $this->session->flashdata('article_headline_jp'); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="article_content">Content</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-id"></i></span>
                                            <input type="hidden" id="hiddenInput_id" name="content_id" class="form-control" value="<?= $this->session->flashdata('content_id'); ?>">
                                        </div>
                                        <div id="article_content_id" style="min-height: 160px;"><?= $this->session->flashdata('content_id'); ?></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-gb-eng"></i></span>
                                            <input type="hidden" id="hiddenInput_en" name="content_en" class="form-control" value="<?= $this->session->flashdata('content_en'); ?>">
                                        </div>
                                        <div id="article_content_en" style="min-height: 160px;"><?= $this->session->flashdata('content_en'); ?></div>

                                        <div class="input-group mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="flag-icon flag-icon-jp"></i></span>
                                            <input type="hidden" id="hiddenInput_jp" name="content_jp" class="form-control" value="<?= $this->session->flashdata('content_jp'); ?>">
                                        </div>
                                        <div id="article_content_jp" style="min-height: 160px;"><?= $this->session->flashdata('content_jp'); ?></div>
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
</div>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    // quill indonesian
    var quill_id = new Quill('#article_content_id', {
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

    // quill english
    var quill_en = new Quill('#article_content_en', {
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

    // quill japanese
    var quill_jp = new Quill('#article_content_jp', {
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
    document.getElementById('article_content_id').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('hiddenInput_id').value = content;
    });
    document.getElementById('article_content_en').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('hiddenInput_en').value = content;
    });
    document.getElementById('article_content_jp').addEventListener('input', function() {
        var content = this.innerHTML;
        document.getElementById('hiddenInput_jp').value = content;
    });
</script>

<script>
    function previewImage(input) {
        var preview = document.getElementById('preview');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>