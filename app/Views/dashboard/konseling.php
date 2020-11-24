<?= $this->extend('templates/header'); ?>


<?= $this->section('konten'); ?>

<main>
    <div class="alert alert-info text-success text-center mr-2 ml-2" role="alert">
        Total konseling kamu : 0
    </div>
    <p class="mt-5 ml-2" id="riwayat">Riwayat Konsultasi :</p>

    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12 kns-konten">
                <p class="mb-2 mt-3">Nama Guru : Kishibe Rohan <span class="badge badge-success float-right mt-3">Selesai</span></p>
                <h4 class="font-weight-bold">Bingung antara masuk kuliah atau bekerja</h4>
                <p class="mt-4 text-muted">Tanggal : 23 September 2020</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 kns-konten">
                <p class="mb-2 mt-3">Nama Guru : Caesar <span class="badge badge-danger float-right mt-3">Belum Selesai</span></p>
                <h4 class="font-weight-bold">Saya ditolak bekerja berkali-kali</h4>
                <p class="mt-4 text-muted">Tanggal : 17 Mei 2020</p>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>