<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr5.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry mt-5">
                <h1 class="text-white"><?= $lang['registration_text'] ?></h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html"><?= $lang['home_text'] ?></a></li>
                        <li><?= $lang['registration_text'] ?></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="section-full content-inner shop-account">
        <!-- Product -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="font-weight-700 m-t0 m-b40"><?= $lang['registration_text'] ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 m-b30">
                    <div class="p-a30 border-1  max-w800 m-auto">
                        <?= $this->session->flashdata('message_name') ?>
                        <div class="tab-content">
                            <form id="login" class="tab-pane active" method="POST" action="<?= base_url('registrasi/store') ?>" enctype="multipart/form-data">
                                <h4 class="font-weight-700"><?= $lang['registration_form_title'] ?></h4>
                                <p class="font-weight-600"><?= $lang['registration_instruction_text'] ?></p>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['full_name_text'] ?> *</label>
                                    <input name="student_name" class="form-control" placeholder="<?= $lang['full_name_text'] ?>" type="text" value="<?= $this->session->flashdata('student_name'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['age_text'] ?> *</label>
                                    <input name="student_age" class="form-control" placeholder="<?= $lang['age_text'] ?>" type="number" value="<?= $this->session->flashdata('student_age'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['email_text'] ?> *</label>
                                    <input name="student_email" class="form-control" placeholder="<?= $lang['email_text'] ?>" type="email" value="<?= $this->session->flashdata('student_email'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['phone_text'] ?> *</label>
                                    <input name="student_phone" class="form-control " placeholder="<?= $lang['phone_text'] ?>" type="text" value="<?= $this->session->flashdata('student_phone'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['select_last_edu_text'] ?> *</label>
                                    <select name="student_last_edu" id="student_last_edu" class="" onchange="handleSelectChange(this)">
                                        <option value="">-- <?= $lang['select_last_edu_text'] ?> </option>
                                        <option <?= ($this->session->flashdata('student_last_edu') == "SD") ? "selected" : "" ?> value="SD">SD</option>
                                        <option <?= ($this->session->flashdata('student_last_edu') == "SMP") ? "selected" : "" ?> value="SMP">SMP</option>
                                        <option <?= ($this->session->flashdata('student_last_edu') == "SMA") ? "selected" : "" ?> value="SMK">SMK</option>
                                        <option <?= ($this->session->flashdata('student_last_edu') == "__tambah__") ? "selected" : "" ?> value="__tambah__">Lainnya...</option>
                                    </select>
                                    <!-- Input tersembunyi untuk nilai baru -->
                                    <input type="text" class="form-control mt-3" id="newLastEdu" name="newLastEdu" style="display:  <?= ($this->session->flashdata('student_last_edu') != '__tambah__') ? 'none' : 'block'; ?>;" placeholder="<?= $lang['add_text'] ?>" value="<?= $this->session->flashdata('newLastEdu'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['gender_text'] ?> *</label>
                                    <select name="student_gender" id="student_gender" class="">
                                        <option value="">--<?= $lang['gender_text'] ?> </option>
                                        <option <?= ($this->session->flashdata('student_gender') == "Laki-laki") ? "selected" : "" ?> value="Laki-laki">Laki-laki</option>
                                        <option <?= ($this->session->flashdata('student_gender') == "Perempuan") ? "selected" : "" ?> value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['birthplace_text'] ?> *</label>
                                    <input name="student_birthplace" class="form-control " placeholder="<?= $lang['birthplace_text'] ?>" type="text" value="<?= $this->session->flashdata('student_birthplace'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['birthdate_text'] ?> *</label>
                                    <input name="student_birthdate" class="form-control " placeholder="<?= $lang['birthdate_text'] ?>" type="date" value="<?= $this->session->flashdata('student_birthdate'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['body_height_text'] ?> *</label>
                                    <input name="student_height" class="form-control" placeholder="<?= $lang['body_height_text'] ?>" type="number" value="<?= $this->session->flashdata('student_height'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['body_weight_text'] ?> *</label>
                                    <input name="student_weight" class="form-control" placeholder="<?= $lang['body_weight_text'] ?>" type="number" value="<?= $this->session->flashdata('student_weight'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['lang_skill_text'] ?> *</label>
                                    <select name="student_lang_skill" id="student_lang_skill" class="">
                                        <option value="">-- Pilih <?= $lang['lang_skill_text'] ?> </option>
                                        <option <?= ($this->session->flashdata('student_lang_skill') == "N5") ? "selected" : "" ?> value="N5">N5</option>
                                        <option <?= ($this->session->flashdata('student_lang_skill') == "N4") ? "selected" : "" ?> value="N4">N4</option>
                                        <option <?= ($this->session->flashdata('student_lang_skill') == "N3") ? "selected" : "" ?> value="N3">N3</option>
                                        <option <?= ($this->session->flashdata('student_lang_skill') == "N2") ? "selected" : "" ?> value="N2">N2</option>
                                        <option <?= ($this->session->flashdata('student_lang_skill') == "N1") ? "selected" : "" ?> value="N1">N1</option>
                                        <option <?= ($this->session->flashdata('student_lang_skill') == "Belum memiliki") ? "selected" : "" ?> value="Belum memiliki">Belum memiliki</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['work_exp_text'] ?> *</label>
                                    <input name="student_work_experience" class="form-control " placeholder="<?= $lang['work_exp_text'] ?>" type="text" value="<?= $this->session->flashdata('student_work_experience'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['years_exp_text'] ?> *</label>
                                    <input name="student_years_experience" class="form-control " placeholder="<?= $lang['years_exp_text'] ?>" type="text" value="<?= $this->session->flashdata('student_years_experience'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['skill_text'] ?> *</label>
                                    <input name="student_skill" class="form-control " placeholder="<?= $lang['skill_text'] ?>" type="text" value="<?= $this->session->flashdata('student_skill'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['hobby_text'] ?> *</label>
                                    <input name="student_hobby" class="form-control " placeholder="<?= $lang['hobby_text'] ?>" type="text" value="<?= $this->session->flashdata('student_hobby'); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['select_program_text'] ?> *</label>
                                    <select name="student_program" id="student_program" class="">
                                        <option value="">-- <?= $lang['select_program_text'] ?> </option>
                                        <?php
                                        foreach ($programs as $p) {
                                        ?>
                                            <option <?= ($this->session->flashdata('student_program') == $p->nama_program_singkat_id) ? "selected" : "" ?> value="<?= $p->nama_program_singkat_id ?>"><?= $p->nama_program_singkat_id ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700"><?= $lang['cv'] ?> *</label>
                                    <input name="student_cv" class="" placeholder="<?= $lang['cv'] ?>" type="file">
                                </div>
                                <div class="text-left m-t15">
                                    <button type="submit" class="site-button button-lg radius-no outline outline-2 btn-process"><?= $lang['register_text'] ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product END -->
    </div>
    <!-- Shop Service info -->
    <!-- <div class="section-full p-t50 p-b20 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="icon-bx-wraper left shop-service-info m-b30">
                        <div class="icon-md text-black radius">
                            <a href="javascript:void(0);" class="icon-cell text-white"><i class="fas fa-gift"></i></a>
                        </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte">Free shipping on orders $60+</h5>
                            <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="icon-bx-wraper left shop-service-info m-b30">
                        <div class="icon-md text-black radius">
                            <a href="javascript:void(0);" class="icon-cell text-white"><i class="fas fa-plane"></i></a>
                        </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte">Worldwide delivery</h5>
                            <p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="icon-bx-wraper left shop-service-info m-b30">
                        <div class="icon-md text-black radius">
                            <a href="javascript:void(0);" class="icon-cell text-white"><i class="fas fa-history"></i></a>
                        </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte">60 days money back guranty!</h5>
                            <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Shop Service info End -->
</div>
<script>
    function handleSelectChange(selectElement) {
        // Mendapatkan nilai terpilih
        var selectedValue = selectElement.value;

        // Menampilkan atau menyembunyikan input teks berdasarkan nilai terpilih
        var newLastEduInput = document.getElementById('newLastEdu');
        if (selectedValue === '__tambah__') {
            newLastEduInput.style.display = 'block';
        } else {
            newLastEduInput.style.display = 'none';
        }
    }

    // jquery tolong carikan btn-process yang ketika diklik jalankan fungsi berikut ini
    $(document).ready(function() {
        $(".btn-process").on("click", function(e) {
            e.preventDefault();
            const form = $(this).parents("form");

            Swal.fire({
                title: "<?= $lang['confirm_title_text'] ?>",
                text: "<?= $lang['confirm_text'] ?>",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "<?= $lang['cancel_text'] ?>",
                confirmButtonText: "<?= $lang['register_text'] ?>",
            }).then((result) => {
                if (result.isConfirmed) form.submit();
            });
        });
    });
</script>