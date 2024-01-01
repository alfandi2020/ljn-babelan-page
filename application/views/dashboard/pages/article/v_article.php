<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

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
                    <li class="breadcrumb-item">Article</li>
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
                        <a href="<?= base_url('dash/article/create') ?>" type="button" class="btn btn-primary">Create new</a>
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
                                    <th>Judul</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($articles as $a) {
                                    $id_author = $a->author;
                                    $id_category = $a->id_category;

                                    $author = $this->M_Article->author($id_author);
                                    $category = $this->M_Setting->detail_category($id_category); ?>
                                    <tr>
                                        <td><?= $no++ ?>.</td>
                                        <td><?= substr($a->judul, 0, 50) ?></td>
                                        <td><?= $category['category_name'] ?></td>
                                        <td><?= $author['name'] ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= base_url('dash/article/edit/' . $a->slug) ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="<?= base_url('dash/article/delete/' . $a->slug) ?>" class="btn btn-danger btn-sm btn-process" id="btnHapus">Hapus</a>
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
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".btn-process").on("click", function(e) {
            e.preventDefault();
            // const form = $(this).parents("form");

            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Pastikan lagi",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Batal",
                confirmButtonText: "Hapus",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = document.getElementById('btnHapus').getAttribute('href');
                };
            });
        });
    });
</script>