<?= $this->extend('templates/login'); ?>

<?= $this->section('title'); ?>
<div class="text-center">
    <label class="text-login text-uppercase">Teacher Login Form</label>
</div>
<?= $this->endSection(); ?>

<?= $this->section('register'); ?>
<small>Belum punya akun ? <a href="/teacher-register" class="text-decoration-none font-weight-bold">Daftar</a></small>
<?= $this->endSection(); ?>

<?= $this->section('login'); ?>
<small><a href="/student-login" class="text-decoration-none text-muted">Login sebagai siswa</a></small>
<?= $this->endSection(); ?>