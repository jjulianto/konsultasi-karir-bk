<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Content -->
    <div class="overlay-white">
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
                                    <i class="far fa-address-card icon"></i>
                                    <input type="number" class="form-control" name="nis" autocomplete="off" required placeholder="NIS">
                                </div>
                                <div class="input-icon col-6">
                                    <i class="fas fa-address-book icon"></i>
                                    <input type="number" class="form-control" name="nisn" autocomplete="off" required placeholder="NISN">
                                </div>
                                <div class="input-icon mt-2 col-12">
                                    <i class="fa fa-user-check icon"></i>
                                    <input type="text" class="form-control" name="name" autocomplete="off" required placeholder="Nama Lengkap">
                                </div>
                                <div class="input-icon mt-3 col-12">
                                    <select name="role" class="custom-select" id="role">
                                        <option>Status</option>
                                        <option value="Guru">Guru</option>
                                        <option value="Siswa"">Siswa</option>
                                    </select>
                                </div>
                                <div class=" input-icon mt-3 col-6" style="display:none;" id="jurusan">
                                            <select name="jurusan" class="custom-select">
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
                                <div class="input-icon mt-3 col-6" style="display:none;" id="kelas">
                                    <select name="kelas" class="custom-select">
                                        <option>Kelas</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                        <option value="XIII">XIII</option>
                                    </select>
                                </div>
                                <div class="input-icon mt-3 col-12" style="display:none;" id="rombel">
                                    <select name="rombel" class="custom-select">
                                        <option>Rombel</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </div>
                                <div class="input-icon mt-2 col-6">
                                    <i class="fas fa-user icon"></i>
                                    <input type="text" class="form-control" name="username" autocomplete="off" required placeholder="Username">
                                </div>
                                <div class="input-icon mt-2 col-6">
                                    <i class="fa fa-lock icon"></i>
                                    <input type="password" class="form-control" name="password" autocomplete="off" required placeholder="Password">
                                </div>
                                <div class="input-icon mt-2 col-12">
                                    <i class="fas fa-phone icon"></i>
                                    <input type="number" class="form-control" name="phone" autocomplete="off" required placeholder="No. Telepon">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block mt-3 mb-2" type="submit">Daftar</button>
                        <div class="text-center">
                            <small class="text-muted ">Sudah punya akun ? <a href="/login/index">Login</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $('#role').on('change', function() {
            //  alert( this.value ); // or $(this).val()
            if (this.value == "Siswa") {
                document.getElementById('form-register').style.height = "540px";
                $('#jurusan').show();
                $('#kelas').show();
                $('#rombel').show();
            } else {
                document.getElementById('form-register').style.height = "450px";
                $('#jurusan').hide();
                $('#kelas').hide();
                $('#rombel').hide();
            }
        });
    </script>
</body>

</html>