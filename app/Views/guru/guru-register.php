<?= $this->extend('templates/register'); ?>

<?= $this->section('overlay'); ?>
"overlay-white-register" style="height: 100vh;"
<?= $this->endSection(); ?>

<?= $this->section('wrapper'); ?>
"wrapper-form-register" style="height: 440px;"
<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
<div class="text-center">
    <label class="text-login text-uppercase">Teacher Register Form</label>
</div>
<?= $this->endSection(); ?>

<?= $this->section('nisnip'); ?>
<div class="input-icon col-12">
    <i class="fas fa-address-card icon"></i>
    <input type="number" class="form-control" name="nip" placeholder="NIP">
</div>
<?= $this->endSection(); ?>

<?= $this->section('name'); ?>
<div class="input-icon col-6 mt-2">
    <i class="fa fa-user icon"></i>
    <input type="text" class="form-control" name="name" placeholder="Nama">
</div>
<?= $this->endSection(); ?>

<?= $this->section('telp'); ?>
<div class="input-icon col-6 mt-2">
    <i class="fas fa-phone icon"></i>
    <input type="number" class="form-control" name="phone" placeholder="No. Telepon">
</div>
<?= $this->endSection(); ?>

<?= $this->section('errorr'); ?>
<div class="input-icon invalid-feedback col-12">
    Mohon pilih status anda!
</div>
<?= $this->endSection(); ?>

<?= $this->section('email'); ?>
<div class="input-icon col-6 mt-2">
    <i class="fas fa-envelope icon"></i>
    <input type="text" class="form-control" name="email" placeholder="Email">
</div>
<?= $this->endSection(); ?>

<?= $this->section('password'); ?>
<div class="input-icon col-6 mt-2">
    <i class="fa fa-lock icon"></i>
    <input type="password" class="form-control" name="password" placeholder="Password" id="password-field">
    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<?= $this->endSection(); ?>

<?= $this->section('login'); ?>
<small>Sudah punya akun ? <a href="/teacher-login" class="text-decoration-none font-weight-bold">Login</a></small>
<?= $this->endSection(); ?>

<?= $this->section('register'); ?>
<small><a href="/student-register" class="text-decoration-none text-muted">Daftar sebagai siswa</a></small>
<?= $this->endSection(); ?>