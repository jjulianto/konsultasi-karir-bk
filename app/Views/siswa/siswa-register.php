<?= $this->extend('templates/register'); ?>

<?= $this->section('overlay'); ?>
"overlay-white-register-siswa" style="height: 107vh;"
<?= $this->endSection(); ?>

<?= $this->section('wrapper'); ?>
"wrapper-form-register-siswa" style="height: 565px;"
<?= $this->endSection(); ?>

<?= $this->section('title'); ?>
<div class="text-center">
    <label class="text-login text-uppercase">Student Register Form</label>
</div>
<?= $this->endSection(); ?>

<?= $this->section('nisnip'); ?>
<div class="input-icon col-12">
    <i class="fas fa-address-card icon"></i>
    <input type="number" class="form-control" name="nis" placeholder="NIS">
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

<?= $this->section('error'); ?>
<div class="input-icon invalid-feedback col-6">
    Mohon pilih status anda!
</div>
<?= $this->endSection(); ?>

<?= $this->section('errorrr'); ?>
<div class="input-icon invalid-feedback col-6">
    Mohon pilih status anda!
</div>
<?= $this->endSection(); ?>

<?= $this->section('errorrrr'); ?>
<div class="input-icon invalid-feedback col-12">
    Mohon pilih status anda!
</div>
<?= $this->endSection(); ?>

<?= $this->section('jurusan'); ?>
<div class="input-icon mt-2 col-6">
    <select name="jurusan" class="form-control" id="jurusan">
        <option id="jur" value="">Jurusan</option>
        <option id="jur" value="TEI">TEI</option>
        <option id="jur" value="TOI">TOI</option>
        <option id="jur" value="IOP">IOP</option>
        <option id="jur" value="RPL">RPL</option>
        <option id="jur" value="SIJA">SIJA</option>
        <option id="jur" value="TPTU">TPTU</option>
        <option id="jur" value="PFPT">PFPT</option>
        <option id="jur" value="TEDK">TEDK</option>
        <option id="jur" value="MEKA">MEKA</option>
    </select>
</div>
<?= $this->endSection(); ?>

<?= $this->section('kelas'); ?>
<div class="input-icon mt-2 col-6" id="kelas">
    <select name="kelas" class="form-control" id="kelas">
        <option value="" selected disabled>Kelas</option>
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
        <option value="XIII">XIII</option>
    </select>
</div>
<?= $this->endSection(); ?>

<?= $this->section('rombel'); ?>
<div class="input-icon mt-2 col-12" id="rombel">
    <select name="rombel" class="form-control">
        <option value="">Rombel</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
    </select>
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
<small>Sudah punya akun ? <a href="/student-login" class="text-decoration-none font-weight-bold">Login</a></small>
<?= $this->endSection(); ?>

<?= $this->section('register'); ?>
<small><a href="/teacher-register" class="text-decoration-none text-muted">Daftar sebagai guru</a></small>
<?= $this->endSection(); ?>