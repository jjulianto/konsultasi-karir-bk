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
                    <div class="form-group">
                        <div class="text-center">
                            <label class="text-login text-uppercase">Login Form</label>
                        </div>
                        <div class="input-icon mt-2">
                            <i class="fa fa-user icon"></i>
                            <input type="text" class="form-control" name="username" autocomplete="off" required placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon">
                            <i class="fa fa-lock icon"></i>
                            <input type="password" class="form-control" name="password" autocomplete="off" required placeholder="Password">
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block mt-4 mb-3" type="submit">Login</button>
                    <div class="text-center">
                        <small class="text-muted ">Belum punya akun ? <a href="/register">Daftar</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>