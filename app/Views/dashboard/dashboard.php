<?= $this->extend('templates/header'); ?>


<?= $this->section('konten'); ?>

<div class="container-fluid greeting">
    <div class="greet">
        <h1>Selamat Pagi, Jotaro</h1>
        <h5>mista444@gmail.com</h5>
    </div>
    <div class="prof">
        <img class="rounded-circle" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" data-holder-rendered="true">
    </div>
</div>

<main>
    <div class="alert alert-info text-success text-center mr-2 ml-2" role="alert">
        Total konseling kamu : 0
    </div>

    <div class="dsb-menu">
        <div class="row">
            <div class="column">
                <div class="card bg-light">
                    <img src="<?= base_url('assets/images/icons/riwayat.svg'); ?>" alt="riwayat-konseling">
                    <h4>Riwayat Konselingku</h4>
                </div>
            </div>

            <div class="column">
                <div class="card bg-light">
                    <img src="<?= base_url('assets/images/icons/kalender.svg'); ?>" alt="jadwal-bk">
                    <h4>Jadwal BK</h4>
                </div>
            </div>

            <div class="column">
                <div class="card bg-light">
                    <img src="<?= base_url('assets/images/icons/guru.svg'); ?>" alt="wali-kelas">
                    <h4>Wali Kelas</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 mb-5"></div>

</main>


<?= $this->endSection(); ?>