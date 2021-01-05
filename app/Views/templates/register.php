<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<!-- Content -->
<div class="overlay-white-register" id="overlay">
    <div class="container">
        <div class="wrapper-form-register" id="form-register">
            <div class="circle-wrapper">
                <div class="circle-image">
                    <img src="<?= base_url(); ?>/assets/images/icons/user.png" width="100">
                </div>

            </div>
            <div class="form">
                <form action="#" method="post">
                    <div class="form-group">
                        <div class="text-center">
                            <label class="text-login text-uppercase">Register Form</label>
                        </div>
                        <div class="row">
                            <div class="input-icon col-6">
                                <i class="fas fa-address-card icon"></i>
                                <input type="number" class="form-control" name="nis" placeholder="NIS/NIP">
                            </div>
                            <div class="input-icon col-6">
                                <i class="fa fa-user icon"></i>
                                <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
                            </div>
                            <div class="input-icon invalid-feedback col-6" id="status">
                                Mohon pilih status anda!
                            </div>
                            <div class="input-icon invalid-feedback col-6" id="status">
                                Mohon pilih status anda!
                            </div>
                            <div class="input-icon col-12 mt-3">
                                <select name="role" class="form-control" id="role">
                                    <option id="stat" value="">Status</option>
                                    <option id="stat" value="Guru">Guru</option>
                                    <option id="stat" value="Siswa">Siswa</option>
                                </select>
                            </div>
                            <div class="input-icon invalid-feedback col-12" id="status">
                                Mohon pilih status anda!
                            </div>
                            <div class="input-icon mt-2 col-6" style="display:none;" id="jurusan">
                                <select name="jurusan" class="form-control">
                                    <option>Jurusan</option>
                                    <option value="TEI">TEI</option>
                                    <option value="TOI">TOI</option>
                                    <option value="IOP">IOP</option>
                                    <option value="RPL">RPL</option>
                                    <option value="SIJA">SIJA</option>
                                    <option value="TPTU">TPTU</option>
                                    <option value="PFPT">PFPT</option>
                                    <option value="TEDK">TEDK</option>
                                    <option value="MEKA">MEKA</option>
                                </select>
                            </div>
                            <div class="input-icon mt-2 col-6" style="display:none;" id="kelas">
                                <select name="kelas" class="form-control">
                                    <option>Kelas</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                    <option value="XIII">XIII</option>
                                </select>
                            </div>
                            <div class="input-icon invalid-feedback col-6" id="status">
                                Mohon pilih status anda!
                            </div>
                            <div class="input-icon invalid-feedback col-6" id="status">
                                Mohon pilih status anda!
                            </div>
                            <div class="input-icon mt-2 col-12" style="display:none;" id="rombel">
                                <select name="rombel" class="form-control">
                                    <option>Rombel</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                            <div class="input-icon invalid-feedback col-12" id="status">
                                Mohon pilih status anda!
                            </div>
                            <div class="input-icon col-6 mt-1">
                                <i class="fas fa-envelope icon"></i>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="input-icon col-6 mt-1">
                                <i class="fa fa-lock icon"></i>
                                <input type="password" class="form-control" name="password" placeholder="Password" id="password-field">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="input-icon invalid-feedback col-6" id="status">
                                Mohon pilih status anda!
                            </div>
                            <div class="input-icon invalid-feedback col-6" id="status">
                                Mohon pilih status anda!
                            </div>
                            <div class="input-icon col-12 mt-2">
                                <i class="fas fa-phone icon"></i>
                                <input type="number" class="form-control" name="phone" placeholder="No. Telepon">
                            </div>
                            <div class="input-icon invalid-feedback col-12" id="status">
                                Mohon pilih status anda!
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block mt-2 mb-2" type="submit" id="submit">Daftar</button>
                    <div class="text-center">
                        <small>Sudah punya akun ? <a href="/login" class="text-decoration-none font-weight-bold">Login</a></small>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center mt-2 pb-5">
            <small><a href="/" class="text-decoration-none text-muted"><i class="fa fa-chevron-left mr-2"></i>Kembali ke homepage</a></small>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('more-js'); ?>
<script>
    $('#role').on('change', function() {
        //  alert( this.value ); // or $(this).val()
        if (this.value == "Siswa") {
            document.getElementById('form-register').style.height = "620px";
            document.getElementById('overlay').style.height = "120vh";
            $('#jurusan').show();
            $('#kelas').show();
            $('#rombel').show();
        } else {
            document.getElementById('form-register').style.height = "530px";
            document.getElementById('overlay').style.height = "107vh";
            $('#jurusan').hide();
            $('#kelas').hide();
            $('#rombel').hide();
        }
    });

    $('#submit').on('click', function() {
        if (document.getElementById('stat').value === '') {
            $('#status').show();
            //This is to ensure that the form doesn't get submitted.
            return false;
        } else if (document.getElementById('stat').value == 'Guru') {
            $('#status').hide();
            //This is to ensure that the form doesn't get submitted.
            return false;
        }
    });
</script>
<?= $this->endSection(); ?>