<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<!-- Content -->
<div class="overlay-white-register" <?= $this->renderSection('overlay'); ?>>
    <div class="container">
        <div class="wrapper-form-register" <?= $this->renderSection('wrapper'); ?>>
            <div class="circle-wrapper">
                <div class="circle-image">
                    <img src="<?= base_url(); ?>/assets/images/icons/user.png" width="100">
                </div>

            </div>
            <div class="form">
                <form action="#" method="post">
                    <div class="form-group">
                        <?= $this->renderSection('title'); ?>
                        <div class="row">
                            <?= $this->renderSection('nisnip'); ?>
                            <?= $this->renderSection('errorr'); ?>
                            <?= $this->renderSection('name'); ?>
                            <?= $this->renderSection('telp'); ?>
                            <div class="input-icon invalid-feedback col-6">
                                Mohon pilih status anda!
                            </div>
                            <div class="input-icon invalid-feedback col-6">
                                Mohon pilih status anda!
                            </div>
                            <?= $this->renderSection('jurusan'); ?>
                            <?= $this->renderSection('kelas'); ?>
                            <?= $this->renderSection('error'); ?>
                            <?= $this->renderSection('errorrr'); ?>
                            <?= $this->renderSection('rombel'); ?>
                            <?= $this->renderSection('errorrrr'); ?>
                            <?= $this->renderSection('email'); ?>
                            <?= $this->renderSection('password'); ?>
                            <div class="input-icon invalid-feedback col-6">
                                Mohon pilih status anda!
                            </div>
                            <div class="input-icon invalid-feedback col-6">
                                Mohon pilih status anda!
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block mt-1 mb-2" type="submit" id="submit">Daftar</button>
                    <div class="text-center">
                        <?= $this->renderSection('login'); ?>
                    </div>
                    <div class="text-center mt-1">
                        <?= $this->renderSection('register'); ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center mt-2 pb-3">
            <small><a href="/" class="text-decoration-none text-muted"><i class="fa fa-chevron-left mr-2"></i>Kembali ke homepage</a></small>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>