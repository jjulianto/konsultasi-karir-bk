<?= $this->extend('templates/login'); ?>

<?= $this->section('title'); ?>
<div class="text-center">
    <label class="text-login text-uppercase">Student Login Form</label>
</div>
<?= $this->endSection(); ?>

<?= $this->section('register'); ?>
<small>Belum punya akun ? <a href="/student-register" class="text-decoration-none font-weight-bold">Daftar</a></small>
<?= $this->endSection(); ?>

<?= $this->section('login'); ?>
<small><a href="/teacher-login" class="text-decoration-none text-muted">Login sebagai guru</a></small>
<?= $this->endSection(); ?>