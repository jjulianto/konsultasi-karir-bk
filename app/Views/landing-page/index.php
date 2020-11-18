<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                Logo
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto nav nav-pills">
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="#jumbotron">Beranda</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="#visimisi">Visi & Misi</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="#gurubk">Guru BK</a>
                    </li>
                    <button class="btn btn-register ml-2 mb-1">Sign Up</button>
                    <button class="btn btn-login ml-2 mb-1" data-toggle="modal" data-target="#loginModal">Sign in</button>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- Jumbotron -->
<div class="jumbotron bg-white" id="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 jumbotent">
                <h1 class="display-5 font-weight-bold">
                    Konsultasi Karir BK<br>SMK Negeri 1 Cimahi
                </h1>
                <p class="lead">
                    Konsultasi karir BK adalah pemberian bantuan penasehatan tentang karir kepada seorang siswa oleh guru yang memiliki pengetahuan, keterampilan, dan kualifikasi profesional yang memadai. Upaya agar siswa mendapatkan arahan dan bimbingan dalam penyelesaian karir yang diinginkan dan sesuai minat mereka.
                </p>
                <div class="d-flex flex-column flex-lg-row">
                    <a class="btn btn-primary font-weight-bold mb-3 mb-lg-0" href="#visimisi" role="button">
                        Telusuri
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="assets/images/vectors/consulting.jpg" alt="consulting-image" class="img-fluid" />
            </div>
        </div>
    </div>
</div>


<section id="visimisi" class="mb-5 visimisi">
    <div class="container-fluid visimisi bg-light pb-5">
        <div class="container">
            <h2 class="font-weight-bold text-center pt-5">Visi dan Misi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
    </div>
</section>

<section id="gurubk" class="mb-5">
    <h2 class="font-weight-bold text-center pt-5 pb-3">Daftar Guru BK</h2>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <p class="text-center pl-3 pr-3"> <img src="assets/images/icons/user.png" alt=""><br>Chintya Giana </p>
                <p class="text-center pl-3 pr-3"> <img src="assets/images/icons/user.png" alt=""><br>Chintya Giana </p>
                <p class="text-center pl-3 pr-3"> <img src="assets/images/icons/user.png" alt=""><br>Chintya Giana </p>
            </div><br>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <p class="text-center pl-3 pr-3"> <img src="assets/images/icons/user.png" alt=""><br>Chintya Giana </p>
                <p class="text-center pl-3 pr-3"> <img src="assets/images/icons/user.png" alt=""><br>Chintya Giana </p>
                <p class="text-center pl-3 pr-3"> <img src="assets/images/icons/user.png" alt=""><br>Chintya Giana </p>
            </div>
        </div>
    </div>
</section>


<!-- <div class="page page-1">
    <div class="container">
        <div class="row">
            <div class="col align-self-center text-one pb-5">
                <h1>
                    Konsultasi Karir BK
                </h1>
                <h2 class="mb-4">
                    SMKN 1 Cimahi
                </h2>
                <p class="mb-4">
                    Konsultasi karir BK adalah pemberian bantuan penasehatan tentang karir kepada seorang siswa oleh guru yang memiliki pengetahuan, keterampilan, dan kualifikasi profesional yang memadai. Upaya agar siswa mendapatkan arahan dan bimbingan dalam penyelesaian karir yang diinginkan dan sesuai minat mereka.
                </p>
                <a href="#"><button class="btn btn-started">Telusuri</button></a>
            </div>
            <div class="col vector-img">
                <img width="600" src="assets/images/vectors/consulting.jpg" alt="Consulting" />
            </div>
        </div>
    </div>
</div> -->

<!-- footer -->
<footer>
    <p>Konsultasi Karir BK &copy; 2020, SMKN 1 Cimahi</p>
</footer>

<!-- Logout Modal -->
<div class="modal modal-login fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Konsultasi Karir BK <br /> SMKN 1 Cimahi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center py-3">
                <p>Mohon pilih apakah anda adalah <br /> seorang guru atau siswa !</p>
                <a href="/login/guru"><button type="button" class="btn btn-primary"><i class="fas fa-chalkboard-teacher"></i> Saya adalah Guru</button></a>
                <a href="/login/siswa"><button type="button" class="btn btn-success"><i class="fas fa-user-graduate"></i> Saya adalah Siswa</button></a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>