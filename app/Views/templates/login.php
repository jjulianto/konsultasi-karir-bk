<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<!-- Content -->
<div class="overlay-white">
    <div class="container">
        <div class="wrapper-form">
            <div class="circle-wrapper">
                <div class="circle-image">
                    <img src="<?= base_url(); ?>/assets/images/icons/user.png" width="100">
                </div>

            </div>
            <div class="form">
                <form action="#" method="post">
                    <?= $this->renderSection('title'); ?>
                    <div class="input-icon mt-2">
                        <i class="fa fa-user icon"></i>
                        <input type="text" class="form-control" name="email" autocomplete="off" required placeholder="Email">
                    </div>
                    <div class="input-icon invalid-feedback col-12" id="status">
                        Mohon pilih status anda!
                    </div>

                    <div class="input-icon mt-1">
                        <i class="fa fa-lock icon"></i>
                        <input type="password" class="form-control" name="password" autocomplete="off" required placeholder="Password" id="password-field">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="input-icon invalid-feedback col-12" id="status">
                        Mohon pilih status anda!
                    </div>
                    <button class="btn btn-lg btn-primary btn-block mt-3 mb-2" type="submit">Login</button>
                    <div class="text-center">
                        <?= $this->renderSection('register'); ?>
                    </div>
                    <div class="text-center mt-1">
                        <?= $this->renderSection('login'); ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center mt-2">
            <small><a href="/" class="text-decoration-none text-muted"><i class="fa fa-chevron-left mr-2"></i>Kembali ke homepage</a></small>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>