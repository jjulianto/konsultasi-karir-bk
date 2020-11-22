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
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="#">Visi & Misi</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="#">Guru BK</a>
                    </li>
                    <a href="/register"><button class="btn btn-register ml-2 mb-1">Sign Up</button></a>
                    <a href="/login"><button class="btn btn-login ml-2 mb-1">Sign in</button></a>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="page page-1">
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
</div>
<footer>
    <p>Konsultasi Karir BK &copy; 2020, SMKN 1 Cimahi</p>
</footer>

<!-- Logout Modal -->
<!-- <div class="modal modal-login fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
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
</div> -->

<?= $this->endSection(); ?>